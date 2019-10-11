<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
<link href="{!! asset('bootstrap/dist/css/bootstrap.min.css')!!}" rel="stylesheet" type="text/css">

  <!-- Font Awesome -->
  <link href="{!! asset('font-awesome/css/font-awesome.min.css')!!}" rel="stylesheet" type="text/css">
  <!-- Ionicons -->
   <link href="{!! asset('Ionicons/css/ionicons.min.css')!!}" rel="stylesheet" type="text/css">
  <!-- Theme style -->
   <link href="{!! asset('dist/css/AdminLTE.min.css')!!}" rel="stylesheet" type="text/css">
  
 <link href="{!! asset('dist/css/skins/_all-skins.min.css')!!}" rel="stylesheet" type="text/css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,600,700,300italic,400italic,600italic">
   

</head>
<title> E-Wallet- @yield('title')</title>

<body class="hold-transition skin-blue sidebar-mini">
@section('sidebar')

<div class="wrapper">

            <!-- Navigation -->

    <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->

      <span class="logo-mini"><b>E-</b>W</span>
      <!-- logo for regular state and mobile devices -->

      <span class="logo-lg"><b>E-</b>Wallet</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              <img src="user.png"  class="user-image" alt="User Image" />
              <span class="hidden-xs">{{Session::get('user')->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="user.png" class="img-circle" alt="User Image">

                <p>
                 {{Session::get('user')->name}}
                  
                </p>
              </li>
             
              <!-- Menu Footer-->
              <li class="user-footer">
                
                <center>
                  <a href="{{route('users.logout')}}" class="btn btn-default btn-flat">Sign out</a>
                </center>
              </li>
            </ul>
          </li>
       
          
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
         <img src="user.png" class="user-image" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Session::get('user')->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
         
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><center>MAIN MENU</center></li>
       
         
        <li class="active">
          <a href="">
            <i class="fa fa-home"></i> <span>Home</span>
            
          </a>
        </li>
       
        <li class="treeview ">
          <a href="#">
            <i class="fa fa-arrows"></i> <span>Transaction</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-exchange"></i>Transfer</a></li>
            <li><a href="#"><i class="fa fa-money"></i> Withdraw</a></li>
             <li><a href="#"><i class="fa fa-credit-card"></i> Payment</a></li>
              <li><a href="#"><i class="fa fa-bank"></i> Topup</a></li>            
          </ul>
        </li>
       
       
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<!-- ./wrapper -->
@show
<div class="content-wrapper">
    
     <!-- Content-->
    @yield('content')
</div>

<!--Wrapper site -->
</div>
<!-- jQuery 3 -->
<!-- jQuery 3 -->
<script type="text/javascript" src="{!! asset('jquery/dist/jquery.min.js')!!}"> </script>

<!-- Bootstrap 3.3.7 -->
<script type="text/javascript" src="{!! asset('bootstrap/dist/js/bootstrap.min.js')!!}"> </script>
<!-- SlimScroll -->
<script type="text/javascript" src="{!! asset('jquery-slimscroll/jquery.slimscroll.min.js')!!}"> </script>

<!-- FastClick -->
<script type="text/javascript" src="{!! asset('fastclick/lib/fastclick.js')!!}"> </script>
<!-- AdminLTE App -->
<script type="text/javascript" src="{!! asset('dist/js/adminlte.min.js')!!}"> </script>

<script>
  /** add active class and stay opened when selected */
var url = window.location;

// for sidebar menu entirely but not cover treeview
$('ul.sidebar-menu a').filter(function() {
   return this.href == url;
}).parent().addClass('active');

// for treeview
$('ul.treeview-menu a').filter(function() {
   return this.href == url;
}).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');
</script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })

</script>
</body>
</html>
