<!doctype html>
<html>
<head>
<meta charset="gb2312">
@section('title')
<title>tt</title>
@show
<meta name="keywords" content="个人博客,杨青个人博客,个人博客模板,杨青" />
<meta name="description" content="杨青个人博客，是一个站在web前端设计之路的女程序员个人网站，提供个人博客模板免费资源下载的个人原创网站。" />
<link href="homes/css/base.css" rel="stylesheet">
<link href="homes/css/index.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
<script src="homes/js/scrollReveal.js"></script>
</head>
<body>
@section('head')
@show
@section('content')
@show
<footer>
Design by DanceSmile <a href="/">蜀ICP备11002373号-1</a>
</footer>
<script>
	if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
		(function(){
			window.scrollReveal = new scrollReveal({reset: true});
		})();
	};
</script> 
</body>
</html>
