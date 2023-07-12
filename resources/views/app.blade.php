<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Blog Post - Start Bootstrap Template</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.ico')}}" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body class="">
  @include('components.navbar')
  <!-- Page content-->
  <div class="container ">

@yield('content')


  </div>

  @include('components.footer')
  <!-- Bootstrap core JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
  <!-- Core theme JS-->
  <script src="{{asset('js/scripts.js')}}"></script>
</body>

</html>