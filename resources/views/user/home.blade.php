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
    <header class="container-fluid row px-1 pt-3 pb-2 my-3 mx-1">
        <div class="row justify-content-center mx-auto">
            <img src="{{ asset('assets/images/p.png') }}" alt="passive thinkers" class="first-img" />
        </div>
        <div class="row col-12 p-1 m-2 nav-class">
            <div class="col-3 icon-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" width="24px"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                </svg>
            </div>
            <div class="nav-links col-6 text-center">
                <a href="#">Home</a>
                <a href="#">Support</a>
                <a href="#">Contact</a>
            </div>
            <div class="col-3 text-end icon-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" width="24px"
                    stroke="currentColor" class="w-6 h-6 text-end">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </div>
        </div>
    </header>
    <div class="container-fluid row row-2 mx-0 my-2 px-0">
        <div class="row  text-center align-items-center">
            <div>
                <h3 class="fw-bolder text-light">PASSIVE THINKERS</h3>
                <p class="text-light">A site for passionate readers</p>
                <p class="text-light">Read and Comment our contents</p>
                <a href="{{route('user.viewblog')}}" class="btn btn-light rounded-5 px-5 py-3">
                    View Blogs
                </a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>