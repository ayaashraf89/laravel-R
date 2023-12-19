<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('includes.nav')
<div class="container">
  <h2>Posts list</h2>          
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Post Title</th>
        <th>Description</th>
        <th>Published</th>
        <th>Author</th>
        <th>Created_at</th>
        <th>Delete</th>
        <th>Restore</th>

      </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
      <tr>
        <td>{{ $post->posttitle }}</td>
        <td>{{ $post->description }}</td>
        <td>
        @if($post->published)
            Yes
            @else
            NO 
            @endif
        </td>
        <td>{{ $post->author }}</td>
        <td>{{ $post->created_at }}</td>
        <td><a href="deletePost/{{ $post->id }}"onclick="return confirm('Are You Sure you want to delete?')">Delete</a></td>
        <td><a href="restorePost/{{ $post->id }}">Restore</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
