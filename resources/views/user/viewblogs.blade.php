<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href={{asset("assets/css/user.css")}}>
</head>

<body>
    @foreach($blogs as $blog)
    <div class="bg-secondary mt-3">
        <h2>{{$blog->title}}</h2>
        <div class="col-12">
            <div class="d-flex">
                <div class="col-3">
                    <img src="{{ asset('storage/images/' . $blog->image) }}" alt="{{ $blog->title }}" width="200px">
                </div>
                <div class="col-7">
                    <h4>{{$blog->content}}</h4>

                </div>
                <div class="col-2">
                    <a href="{{ route('user.blog', $blog->id) }}" class="btn btn-success">Go to blog</a>
                </div>
            </div>
        </div>



    </div>
    @endforeach
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>