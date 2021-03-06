
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>@yield('title') - {{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body>
    
    @include('frontend.partials._header')

<main>

  {{-- we can use session() method instead of Session:: --}}
  @if (Session::has('message'))
    <p class="alert alert-{{ Session::get('alert') }}">{{ Session::get('message') }}</p>
  @endif

  @yield('main')

</main>

    @include('frontend.partials._footer')


    <script src="{{ asset('assets/frontend/js/bootstrap.bundle.min.js') }}"></script>

      
  </body>
</html>
