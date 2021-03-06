<!doctype html>
<html lang="en">


<!-- Mirrored from www.wrraptheme.com/templates/hexabit/html/light/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Feb 2020 07:22:40 GMT -->
<head>
<title>:: VGL :: Login</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="HexaBit Bootstrap 4x Admin Template">
<meta name="author" content="WrapTheme, www.thememakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="http://www.wrraptheme.com/templates/hexabit/html/assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="http://www.wrraptheme.com/templates/hexabit/html/assets/vendor/font-awesome/css/font-awesome.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{ url('public/admin_assets/css/main.css')}}">
<link rel="stylesheet" href="{{ url('public/admin_assets/css/color_skins.css')}}">


<style>

.theme-orange .auth-main:before {
    background: transparent;
}

</style>


</head>

<body class="theme-orange">
    <!-- WRAPPER -->
    <div id="wrapper" class="auth-main">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="header">
                             @if(Session()->has('failed'))
                            <p class="alert alert-danger">{{ Session()->get('failed')}}</p>
                            @endif
                            <p class="lead">Login to your account</p>
                           
                        </div>
                        <div class="body">
                            <form class="form-auth-small" action="{{ url('admin/login')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Email</label>
                                    <input type="email" class="form-control" id="signin-email" value="" placeholder="Email" name="email" value="{{ old('email')}}">
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input type="password" class="form-control" id="signin-password"  placeholder="Password" name="password">
                                </div>
                                <div class="form-group clearfix">
                                    <label class="fancy-checkbox element-left">
                                        <input type="checkbox">
                                        <span>Remember me</span>
                                    </label>								
                                </div>
                                <!-- <a href="index.html"> -->
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                                <!-- </a> -->
                                <div class="bottom">
                                    <span class="helper-text m-b-10"><i class="fa fa-lock"></i><a href="{{ url('admin/forget-password')}}">Forgot password?</a></span>
                                    <!-- <span>Don't have an account? <a href="page-register.html">Register</a></span> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
  
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>
</body>

<!-- Mirrored from www.wrraptheme.com/templates/hexabit/html/light/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Feb 2020 07:22:40 GMT -->
</html>
