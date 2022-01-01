@extends('layouts.main')
<html>
<head>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="about">elderly home database</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="btn btn-outline-dark btn-lg" href="h"> Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>
<br>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card col-12">
                <div class="card-body">
                    <h5 class="card-title">List of residents
                        <br>
                        <br>
                        <a name="create" id="create" class="btn btn-dark"
                           href="wel" role="button">database

                        </a>
                        <br>
                        <br>

                        <a class=" btn btn-dark" name="create" id="create" class="btn btn-success float-lg-right"
                           href="insert" role="button">Insert New resident
                            <br>

                        </a>
                    </h5>
                    <br>

                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('success')}}
                        </div>
                    @endif
                                        <form method="POST" action="{{route('off.store')}}">
                                            @csrf
                                        <input class="form-control" type="text" name="name" placeholder="resident full name: ">
                                            @error('name')
                                            <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        <input class="form-control" type="text" name="email" placeholder="resident email: ">
                                            @error('email')
                                            <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                            <input class="form-control" type="text" name="address" placeholder="resident address: ">
                                            @error('address')
                                            <small class="form-text text-danger">{{$message}}</small>
                                            @enderror

                                            <input type="submit"  class="btn btn-dark" role="button" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy;yousif-abd-ali 2022</div></footer>
<script src="/bootstrap/jquery.js"></script>
<script src="/bootstrap/bootstrap.min.js"></script>
</body>
</html>

