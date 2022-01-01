
@include('layouts.main')
<html>
<head>
    <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
</head>
<body>
<br>
<br>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="btn btn-dark" href="/"> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="btn btn-dark" href="insert"> New <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
<br>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card col-12">
                <div class="card-body">
                    <h5 class="card-title"><h2>List of residents</h2>
                        <br>
                        <a name="create" id="create" class="btn btn-dark"
                           href="insert" role="button">Insert New resident
                        </a>
                    </h5>
                    <br>
                    <br>
                    <table class="table table-striped table-dark">
                        <tr>
                            <th>Resident ID</th>
                            <th>Resident Name</th>
                            <th>Resident Email</th>
                            <th>Resident Address</th>
                            <th>Actions</th>
                        </tr>
                        @foreach(\App\Student::all() as $student)
                            <tr>
                                <td>{{$student->id}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->address}}</td>
                                <td>
                                    <br>
                                    <form action="students/{{$student->id}}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <input type="submit"  class="btn btn-light" role="button" value="Delete">
                                    </form>



                                </td>
                            </tr>



                        @endforeach
                    </table>
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


