<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
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
    <script src="/admins/js/echarts.min.js"></script>
</head>

<body data-type="index">


    <header class="am-topbar am-topbar-inverse admin-header">
        <div class="am-topbar-brand">
            <a href="javascript:;" class="tpl-logo">
                <span style="color: blue;size: 35px">the blog's logo</span>
            </a>
        </div>
 <!--        <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right">

        </div> -->

        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

        <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

            <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">


                <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                    <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                        <span class="tpl-header-list-user-nick">{{session('username')}}</span><span class="tpl-header-list-user-ico"> <img src="/admins/img/user01.png"></span>
                    </a>
                    <ul class="am-dropdown-content">
<!--                         <li><a href="#"><span class="am-icon-bell-o"></span> 资料</a></li>
                        <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li> -->
                        <li><a href="/logout"><span class="am-icon-power-off"></span> 退出</a></li>
                    </ul>
                </li>
<!--                 <li><a href="###" class="tpl-header-list-link"><span class="am-icon-sign-out tpl-header-list-ico-out-size"></span></a></li> -->
            </ul>
        </div>
    </header>







    <div class="tpl-page-container tpl-page-header-fixed">


        <div class="tpl-left-nav tpl-left-nav-hover">
            <div class="tpl-left-nav-title">
                后台管理
            </div>
            <div class="tpl-left-nav-list">
                <ul class="tpl-left-nav-menu">


                    <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-wpforms"></i>
                            <span>文章分类管理</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu" style="display: block;">
                            <li>
                                <a href="/categorylist">
                                    <i class="am-icon-angle-right"></i>
                                    <span>分类列表</span>
                                    
                                </a>

                                <a href="/categoryadd">
                                    <i class="am-icon-angle-right"></i>
                                    <span>分类添加</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-wpforms"></i>
                            <span>博客文章管理</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu" style="display: block;">
                            <li>
                                <a href="/postlist">
                                    <i class="am-icon-angle-right"></i>
                                    <span>文章列表</span>
                                    
                                </a>

                                <a href="/postadd">
                                    <i class="am-icon-angle-right"></i>
                                    <span>文章添加</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                

                </ul>
            </div>
        </div>





        <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
               <h1>@yield('menu')</h1>
            </div>
            @if(session("info"))    
             <span style="color: red">{{session('info')}}</span>
            @endif  

            @section('content')
            @show()

            


    <script src="/admins/js/jquery.min.js"></script>
    <script src="/admins/js/amazeui.min.js"></script>
    <script src="/admins/js/iscroll.js"></script>
    <script src="/admins/js/app.js"></script>
</body>

</html>