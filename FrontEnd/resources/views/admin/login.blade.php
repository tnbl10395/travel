<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  @yield('title')
    <link href="{{ URL::asset("vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ URL::asset("vendor/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset("vendor/datatables/dataTables.bootstrap4.css") }}" rel="stylesheet">
    <link href="{{ URL::asset("css/sb-admin.css") }}" rel="stylesheet">
    <link href="{{asset('vendor/login-admin.css')}}" rel="stylesheet" type="text/css" >
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
	<div class="container">
		<div class="row">
			<div class="Absolute-Center is-Responsive">
				<div class="logo-container">
					<img src="{{asset('img/LogodulichDanang.png')}}" alt="" id="logo">
				</div>
				<div class="col-sm-12 col-md-12">
					<form action="/login" method="post" id="loginForm" role="form">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class="form-group">
							<label class="control-label" for="username" id="login-Label">Username</label>
							<input type="text" name="username" id="username" class="form-control" placeholder="Username...">
						</div>
						<div class="form-group">
							<label class="control-label" for="password" id="login-Label">Password</label>
							<input type="password" name="password" id="password" class="form-control" placeholder="Password...">
						</div>
						<div class="form-group" id="checkbox">
							<input type="checkbox" id="remember" name="remember" value=""> Remember me
						</div>
						<div class="form-group">
							<input type="submit" name="login" class="btn btn-danger btn-block" value="Login">				
						</div>
						<div class="form-group">
							 <a href="" id="forget-password">Don't forget password!</a>     	
					    </div>
                        @if($errors->has('errorLogin'))
                            <div class="alert alert-danger">
                                <strong>{{$errors->first('errorLogin')}}</strong>
                            </div>
                        @endif
					</form>			
				</div>
				
			</div>
		</div>
	</div>
	<script src="{{asset("js/jquery-1.10.2.min.js") }}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/jqueryValidate.js')}}"></script>
    <script src="{{asset("vendor/popper/popper.min.js") }}"></script>
    <script src="{{asset("vendor/bootstrap/js/bootstrap.min.js") }}"></script>
    <script src="{{asset("vendor/jquery-easing/jquery.easing.min.js") }}"></script>
    <script src="{{asset("vendor/chart.js/Chart.min.js") }}"></script>
    <script src="{{asset("vendor/datatables/jquery.dataTables.js") }}"></script>
    <script src="{{asset("vendor/datatables/dataTables.bootstrap4.js") }}"></script>
    <script src="{{asset("js/sb-admin.min.js") }}"></script>
    <script src="{{asset("js/sb-admin-datatables.min.js") }}"></script>
    <script src="{{asset("js/sb-admin-charts.min.js") }}"></script>
</body>

</html>