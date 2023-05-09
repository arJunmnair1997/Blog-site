@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif

                    <h1 class="text-center"> Welcome Admin</h1>

                    <a class="bt nav-link text-center" href="{{ route('admin.blog') }}">Add Blogs/Edit Blogs/Delete
                        Blogs</a>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection