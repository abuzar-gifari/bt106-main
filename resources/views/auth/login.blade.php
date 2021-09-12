<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inconsolata:wght@600&display=swap');
    </style>
</head>
<body>

<div class="container">
    <div class="row align-items-center mt-5">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="{{route('login')}}" method="post" class="" style="padding: 40px; border-radius: 2%; background-color: whitesmoke ">
                @csrf
                <h3 class="text-center h2" style="font-family: 'Inconsolata', monospace;">Login Form</h3>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="mb-3">
                    <label for="exampleInputEmail1" style="font-family: 'Inconsolata', monospace;" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" style="font-family: 'Inconsolata', monospace;" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                </div>
                <button type="submit" style="font-family: 'Inconsolata', monospace;" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>


<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha"
        crossorigin="anonymous"></script>
</body>
</html>
