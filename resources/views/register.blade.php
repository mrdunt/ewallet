<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Register Page</title>
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
  

  
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Registration</b>Page</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">E-Wallet Registration Page</p>

    <form action="{{route('users.store')}}" method="POST">
      @csrf
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" required="required" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" required="required" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
       <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Name" required="required" name="name">
       
         
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script type="text/javascript" src="{!! asset('jquery/dist/jquery.min.js')!!}"> </script>

<!-- Bootstrap 3.3.7 -->
<script type="text/javascript" src="{!! asset('bootstrap/dist/js/bootstrap.min.js')!!}"> </script>



</body>
</html>
