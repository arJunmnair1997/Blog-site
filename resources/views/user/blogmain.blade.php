<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href={{asset("assets/css/user.css")}}>
</head>

<body>
    <h1>{{ $blog->title }}</h1>
    <h2><u>Content</u></h2>
    <div class="d-flex">
        <div>
            <img src="{{ asset('storage/images/' . $blog->image) }}" alt="{{ $blog->title }}" width="400px">
        </div>
        <div class="bl">
            <h4 class="">
                {{$blog->content}} </h4>
        </div>
    </div>


    <br><br>
    <h3>Comments</h3>
    @if ($cmts && !$cmts->isEmpty())
    @foreach ($cmts as $cmt)
    <div class="bg-secondary">
        <h5>{{ $cmt->name }}</h3>
            <p>{{ $cmt->content }}</p>
            <hr>
            @foreach ($cmt->replies ?? [] as $reply)
            <div class="ms-5">
                <h6>{{ $reply->name }}
                    </h4>
                    <p>{{ $reply->content }}</p>
            </div>
            @endforeach
            <form action="{{ route('user.reply') }}" method="POST" class="form-control w-25 ms-5 bg-success mb-3">
                @csrf
                <input type="hidden" name="cmt_id" value="{{$cmt->id}}" />
                <label for="reply">Reply</label>
                <textarea name="reply" class="form-control" required></textarea>
                <br>
                <label for="name">Your name</label>
                <input type="text" name="name" class="form-control" required>
                <br>
                <button type="submit" class="btn btn-primary">Reply</button>
            </form>



    </div>
    @endforeach
    @endif
    <h3>Add a Comment</h3>
    <form action="{{ route('user.cmt')}}" method="POST" class="form-control mt-5 bg-danger">
        @csrf
        <input type="hidden" name="blog_id" value="{{$blog->id}}" />
        <label for="comment">Type here
        </label>
        <textarea name="comment" class="form-control" required></textarea> <br>
        <label for="name">Your name</label>
        <input type="text" name="name" class="form-control" required> <br>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>