<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    private $columns = ['posttitle', 'description', 'published', 'author'];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::get();
        return view ('posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addPost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $posts = new Post();
        // $posts->posttitle = $request->posttitle;
        // $posts->description = $request->description;
        // $posts->author = $request->author;
        // if(isset($request->published)){
        //     $posts->published = 1;
        // }else{
        //     $posts->published = 0;
        // }
        // $posts->save();
        // return 'data added successfully';
    
        //$data = $request->only($this->columns);
        $data = $request->validate([
            'posttitle'=>'required|string|max:50',
            'description'=>'required|string',
            'author'=>'required|string|max:50',
        ]);
        $data['published'] = isset($request->published);
        Post::create($data);
        return redirect('posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $posts = Post::findOrFail($id);
        return view ('updatePost', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->only($this->columns);
        $data['published'] = isset($request->published);
        Post::where('id', $id)->update($data);
        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::where('id', $id)->delete();
        return redirect('posts');
    }

    /**
     * trashed posts
     */
    public function trashedPost()
    {
        $posts = Post::onlyTrashed()->get();
        return view ('trashedPost', compact('posts'));
    }

       /**
     * Posts Trashed List.
     */
    public function forceDelete(string $id)
    {
        Post::where('id', $id)->forceDelete();
        return redirect('posts');
    }

    public function restore(string $id)
    {
        Post::where('id', $id)->restore();
        return redirect('posts');
    }
}
