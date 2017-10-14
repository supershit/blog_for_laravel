<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>后台登录页</title>
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="/admins/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="/admins/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="/admins/css/amazeui.min.css" />
  <link rel="stylesheet" href="/admins/css/admin.css">
  <link rel="stylesheet" href="/admins/css/app.css">
</head>

<body data-type="login">

  <div class="am-g myapp-login">
	<div class="myapp-login-logo-block  tpl-login-max">
		<div class="myapp-login-logo-text">
			<div class="myapp-login-logo-text">
				后台<span> 登录</span> <i class="am-icon-skyatlas"></i>
				
			</div>
		</div>

		<div class="login-font">
			<i>Log In </i>
		</div>
		<div class="am-u-sm-10 login-am-center">
			<form class="am-form" action="login" method="post">
				<fieldset>
					<div class="am-form-group">
						<input type="text" name="username" class="" id="doc-ipt-email-1" placeholder="请输入用户名">
					</div>
					<div class="am-form-group">
						<input type="password" class="" name="password" id="doc-ipt-pwd-1" placeholder="请输入密码">
						{{csrf_field()}}
					</div>
					<p><button type="submit" class="am-btn am-btn-default">登录</button></p>
					@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color:red">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

 @if(session("info"))    
             <span style="color: red">{{session('info')}}</span>
            @endif  

            @section('content')
            @show()
				</fieldset>
			</form>
		</div>
	</div>
</div>

  <script src="/admins/js/jquery.min.js"></script>
  <script src="/admins/js/amazeui.min.js"></script>
  <script src="/admins/js/app.js"></script>
</body>

</html>