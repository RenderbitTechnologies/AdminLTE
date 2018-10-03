<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('page_name')</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('adminlte/plugins/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminlte/plugins/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminlte/plugins/Ionicons/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminlte/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminlte/css/skins/skin-red.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
    @include('adminlte::admin.includes.header')
    @include('adminlte::admin.includes.panel')
     <div class="content-wrapper">
         @include('adminlte::admin.includes.head')
         <section class="content container-fluid">
             @yield('content')
         </section>
     </div>
    @include('adminlte::admin.includes.footer')

</div>
</body>
<script src="{{asset('adminlte/plugins/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('adminlte/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/js/adminlte.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.18/af-2.3.0/b-1.5.2/sc-1.5.0/sl-1.2.6/datatables.min.css"/>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.18/af-2.3.0/b-1.5.2/sc-1.5.0/sl-1.2.6/datatables.min.js"></script>

@yield('dependencies')
</html>
