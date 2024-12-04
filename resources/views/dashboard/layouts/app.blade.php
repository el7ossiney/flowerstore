<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- start linking  -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('dashboard/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('dashboard/css/app.css')}}">
  <!-- icon -->
  <link rel="icon" href="{{asset('dashboard/img/log.png')}}">
  <!-- end linking -->
  <title>NutFlix - admin</title>
</head>
<body>
<!-- start admin -->
<section id="admin">
  <!-- start sidebar -->
@include("dashboard.layouts.partials.sidebar")
  <!-- end sidebar -->
  <!-- start content -->
  <div class="content">
    <!-- start content head -->
@include('dashboard.layouts.partials.head')
    <!-- end content head -->
    <!-- start with the real content -->
@yield('content')
    <!-- end the real content -->
  </div>
  <!-- end content -->
</section>
<!-- end admin -->
<!-- start screpting -->
<script src="{{asset('dashboard/js/jquery.min.js')}}"></script>
<script src="{{asset('dashboard/js/tether.min.js')}}"></script>
<script src="{{asset('dashboard/js/bootstrap.min.js')}}"></script>
<script src="{{asset('dashboard/js/highcharts.js')}}"></script>
<script src="{{asset('dashboard/js/chart.js')}}"></script>
<script src="{{asset('dashboard/js/app.js')}}"></script>
<!-- end screpting -->
</body>
</html>
