<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('Admin/top')
</head>

<body class="user-select">
<section class="container-fluid">
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span
                                class="sr-only">切换导航</span> <span class="icon-bar"></span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span></button>
                    <a class="navbar-brand" href="/">YlsatCMS</a></div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="">消息 <span class="badge">1</span></a></li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                aria-haspopup="true" aria-expanded="false">admin <span
                                        class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-left">
                                <li><a title="查看或修改个人信息" data-toggle="modal" data-target="#seeUserInfo">个人信息</a></li>
                                <li><a title="查看您的登录记录" data-toggle="modal" data-target="#seeUserLoginlog">登录记录</a></li>
                            </ul>
                        </li>
                        <li><a href="/Index/outLogin" onClick="if(!confirm('是否确认退出？'))return false;">退出登录</a></li>
                        <li><a data-toggle="modal" data-target="#WeChat">帮助</a></li>
                    </ul>
                    <form action="" method="post" class="navbar-form navbar-right" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" autocomplete="off" placeholder="键入关键字搜索"
                                   maxlength="15">
                            <span class="input-group-btn">
              <button class="btn btn-default" type="submit">搜索</button>
              </span></div>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <div class="row">
        <aside class="col-sm-3 col-md-2 col-lg-2 sidebar">
            <ul class="nav nav-sidebar">
                <li><a href="/admin/log">报告</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="article.html">文章</a></li>
                <li><a href="/admin/notice">公告</a></li>
                <li><a href="/admin/comment">评论</a></li>
                <li><a data-toggle="tooltip" data-placement="top" title="网站暂无留言功能">留言</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li class="active"><a href="/admin/column">栏目</a></li>
                <li><a class="dropdown-toggle" id="otherMenu" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">其他</a>
                    <ul class="dropdown-menu" aria-labelledby="otherMenu">
                        <li><a href="user-group.html">友情链接</a></li>
                        <li><a href="loginlog.html">访问记录</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a class="dropdown-toggle" id="userMenu" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">用户</a>
                    <ul class="dropdown-menu" aria-labelledby="userMenu">
                        <li><a href="user-group.html">管理用户组</a></li>
                        <li><a href="manage-user.html">管理用户</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="loginlog.html">管理登录日志</a></li>
                    </ul>
                </li>
                <li><a class="dropdown-toggle" id="settingMenu" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">设置</a>
                    <ul class="dropdown-menu" aria-labelledby="settingMenu">
                        <li><a href="setting.html">基本设置</a></li>
                        <li><a href="readset.html">用户设置</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="safety.html">安全配置</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="disabled"><a>扩展菜单</a></li>
                    </ul>
                </li>
            </ul>
        </aside>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">
            <h1 class="page-header">修改栏目</h1>
            <form action="/admin/CategoryUpdateAdd" method="post">
                <div class="form-group">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <label for="category-name">栏目名称</label>
                    <input type="hidden" name="id" value="{{$rs->id}}">
                    <input type="text" id="category-name" name="name" value="{{$rs->column}}" class="form-control"
                           placeholder="在此处输入栏目名称" required autocomplete="off">
                    <span class="prompt-text">这将是它在站点上显示的名字。</span></div>
                <div class="form-group">
                    <label for="category-alias">栏目别名</label>
                    <input type="text" id="category-alias" name="alias" value="{{$rs->column_another_name}}"
                           class="form-control" placeholder="在此处输入栏目别名" required autocomplete="off">
                    <span class="prompt-text">“别名”是在URL中使用的别称，它可以令URL更美观。通常使用小写，只能包含字母，数字和连字符（-）。</span></div>
                <div class="form-group">
                    <label for="category-fname">父节点</label>
                    <select id="category-fname" class="form-control" name="fid">
                        <option value="0" selected>无</option>
                        <option value="1">前端技术</option>
                        <option value="2">后端程序</option>
                        <option value="3">管理系统</option>
                        <option value="4">授人以渔</option>
                        <option value="5">程序人生</option>
                    </select>
                    <span class="prompt-text">栏目是有层级关系的，您可以有一个“音乐”分类目录，在这个目录下可以有叫做“流行”和“古典”的子目录。</span></div>
                <div class="form-group">
                    <label for="category-keywords">关键字</label>
                    <input type="text" id="category-keywords" name="keywords" value="{{$rs->keyword}}"
                           class="form-control" placeholder="在此处输入栏目关键字" autocomplete="off">
                    <span class="prompt-text">关键字会出现在网页的keywords属性中。</span></div>
                <div class="form-group">
                    <label for="category-describe">描述</label>
                    <textarea class="form-control" id="category-describe" name="describe" rows="4"
                              autocomplete="off">{{$rs->describe}}</textarea>
                    <span class="prompt-text">描述会出现在网页的description属性中。</span></div>
                <button class="btn btn-primary" type="submit" name="submit">更新</button>
            </form>
        </div>
    </div>
</section>
<!--个人信息模态框-->
<!--个人登录记录模态框-->
<!--微信二维码模态框-->
<!--提示模态框-->
<!--右键菜单列表-->
<div id="rightClickMenu">
    <ul class="list-group rightClickMenuList">
        <li class="list-group-item disabled">欢迎访问异清轩博客</li>
        <li class="list-group-item"><span>IP：</span>172.16.10.129</li>
        <li class="list-group-item"><span>地址：</span>河南省郑州市</li>
        <li class="list-group-item"><span>系统：</span>Windows10</li>
        <li class="list-group-item"><span>浏览器：</span>Chrome47</li>
    </ul>
</div>
<script src="{{asset('Admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('Admin/js/admin-scripts.js')}}"></script>
</body>
</html>
