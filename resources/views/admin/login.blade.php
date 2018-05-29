<!DOCTYPE html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{asset('ad/css/bootstrap.min.css')}}" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{asset('ad/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('ad/css/style-responsive.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('ad/css/font.css')}}" type="text/css"/>
<link href="{{asset('ad/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="{{asset('ad/js/jquery2.0.3.min.js')}}"></script>
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
    <h2>Login Admin</h2>
        <form action="{{ url('/admin/login') }}" method="POST" >
            {{ csrf_field() }}
            <input type="text" class="ggg" name="name"  value="{{ old('name') }}" placeholder="Name" required="">
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
            <input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
            @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
            <div class="clearfix"></div>
            <input type="submit" value="Login" name="login">
        </form>
        <!-- <p>Don't Have an Account ?<a href="registration.html">Create an account</a></p> -->
</div>
</div>
<script src="{{asset('ad/js/bootstrap.js')}}"></script>
<script src="{{asset('ad/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('ad/js/scripts.js')}}"></script>
<script src="{{asset('ad/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('ad/js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="{{asset('ad/js/flot-chart/excanvas.min.js')}}"></script><![endif]-->
<script src="{{asset('ad/js/jquery.scrollTo.js')}}"></script>
</body>
</html>
