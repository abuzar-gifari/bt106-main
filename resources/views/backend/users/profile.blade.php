{{--@extends('layouts.backend')--}}

{{--@section('main')--}}

{{--    <div class="row mt-5">--}}
{{--        <div class="col-md-3"></div>--}}
{{--        <div class="col-md-6">--}}
{{--            <div class="card" style="width: 18rem;">--}}
{{--                <div class="card-body" style="font-family: Arial">--}}
{{--                    <h5 class="card-title">{{ auth()->user()->name }}</h5>--}}
{{--                    <p class="card-text"><strong>Email : </strong>{{ auth()->user()->email }}</p>--}}
{{--                    <p class="card-text"><strong>Address : </strong>{{ auth()->user()->address }}</p>--}}
{{--                    <p class="card-text"><strong>Phone no : </strong>{{ auth()->user()->phone }}</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--@endsection--}}

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Page</title>
    <link rel="stylesheet" href="{{asset('assets/css/materialIcon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/profile.css')}}">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

</head>
<body>

<div class="page-content page-container" id="page-content" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-6 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> <img src="{{asset('image/Gifari.jpg')}}" style="height: 80px" class="img-radius" alt="User-Profile-Image"> </div>
                                <h6 class="f-w-600">{{ auth()->user()->name }}</h6>
                                <p>Web Developer</p>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ route('admin.dashboard') }}" class="btn btn-success">Back</a></h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400">{{ auth()->user()->email }}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Phone</p>
                                        <h6 class="text-muted f-w-400">{{ auth()->user()->phone }}</h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Present Address</p>
                                        <h6 class="text-muted f-w-400">Mirpur-13,Dhaka</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Per. Address</p>
                                        <h6 class="text-muted f-w-400">Baradi, Meherpur</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{asset('assets/js/jquerycdn.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha"
        crossorigin="anonymous"></script>
</body>
</html>
