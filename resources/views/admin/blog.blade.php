<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href={{asset("assets/css/user.css")}}>
</head>

<body>
    <h2 class="text-center">Add a Blog</h2>
    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data"
        class="form-control bg-danger bg-opacity-50 w-50 mx-auto">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="body">Content</label>
            <textarea name="content" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Create</button>
    </form>
    <table class="table mt-5x`x">
        <thead>
            <tr>
                <th class="table-primary">Title</th>
                <th class="table-secondary">Content</th>
                <th class="table-info">Image</th>
                <th class="table-success" colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blog)
            <tr>
                <th class="table-success">{{ $blog->title }}</th>
                <th class="table-info">{{ $blog->content }}</th>
                <td>
                    @if($blog->image)
                    <img src="{{ asset('storage/images/' . $blog->image) }}" alt="{{ $blog->title }}" width="100">
                    @endif
                </td>
                <td class="table-warning"> <a href="{{ route('blogs.edit', $blog->id) }}"
                        class="btn btn-warning">Edit</a></td>
                <td class="table-danger">

                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $blogs->links() }}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

</body>

</html>