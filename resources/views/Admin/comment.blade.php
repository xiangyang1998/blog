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
                <li><a href="/admin/ar">文章</a></li>
                <li><a href="/admin/notice">公告</a></li>
                <li class="active"><a href="/admin/comment">评论</a></li>
                <li><a data-toggle="tooltip" data-placement="top" title="网站暂无留言功能">留言</a></li>
            </ul>
            l
            <ul class="nav nav-sidebar">
                <li><a href="/admin/column">栏目</a></li>
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
            <form action="/Comment/checkAll" method="post">
                <h1 class="page-header">管理 <span class="badge">{{$shujutiaoshu}}</span></h1>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th><span class="glyphicon glyphicon-th-large"></span> <span class="visible-lg">选择</span>
                            </th>
                            <th><span class="glyphicon glyphicon-file"></span> <span class="visible-lg">摘要</span></th>
                            <th><span class="glyphicon glyphicon-time"></span> <span class="visible-lg">日期</span></th>
                            <th><span class="glyphicon glyphicon-pencil"></span> <span class="visible-lg">操作</span></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($rs as $rs)
                            <tr>
                                <td><input type="checkbox" class="input-control" name="checkbox[]" value=""/></td>
                                <td class="article-title">文章ID:{{$rs->article}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;评论：{{$rs->comment_content}}</td>
                                <td>{{$rs->created_at}}</td>
                                <td>
                                    {{--<a rel="1" name="see">查看</a>--}}
                                    <a rel="{{$rs->id}}" name="delete">删除</a>
                                </td>
                            </tr>

                        @endforeach

                        {{----}}
                        {{--<tr>--}}
                        {{--<td><input type="checkbox" class="input-control" name="checkbox[]" value="" /></td>--}}
                        {{--<td class="article-title">这是测试评论摘要这是测试评论摘要这是测试评论摘要这是测试评论摘要...</td>--}}
                        {{--<td>2015-12-03</td>--}}
                        {{--<td><a rel="2" name="see">查看</a> <a rel="2" name="delete">删除</a></td>--}}
                        {{--</tr>--}}
                        {{----}}
                        {{--<tr>--}}
                        {{--<td><input type="checkbox" class="input-control" name="checkbox[]" value="" /></td>--}}
                        {{--<td class="article-title">这是测试评论摘要这是测试评论摘要这是测试评论摘要这是测试评论摘要...</td>--}}
                        {{--<td>2015-12-03</td>--}}
                        {{--<td><a rel="3" name="see">查看</a> <a rel="3" name="delete">删除</a></td>--}}
                        {{--</tr>--}}
                        {{----}}
                        {{--<tr>--}}
                        {{--<td><input type="checkbox" class="input-control" name="checkbox[]" value="" /></td>--}}
                        {{--<td class="article-title">这是测试评论摘要这是测试评论摘要这是测试评论摘要这是测试评论摘要...</td>--}}
                        {{--<td>2015-12-03</td>--}}
                        {{--<td><a rel="4" name="see">查看</a> <a rel="4" name="delete">删除</a></td>--}}
                        {{--</tr>--}}

                        </tbody>
                    </table>
                </div>
                <footer class="message_footer">
                    <nav>
                        <div class="btn-toolbar operation" role="toolbar">
                            <div class="btn-group" role="group"><a class="btn btn-default" onClick="select()">全选</a> <a
                                        class="btn btn-default" onClick="reverse()">反选</a> <a class="btn btn-default"
                                                                                              onClick="noselect()">不选</a>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="submit" class="btn btn-default" data-toggle="tooltip"
                                        data-placement="bottom" title="删除全部选中" name="checkbox_delete">删除
                                </button>
                            </div>
                        </div>
                        <ul class="pagination pagenav">
                            <li class="disabled"><a aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a>
                            </li>
                            <li class="active"><a>1</a></li>
                            <li class="disabled"><a aria-label="Next"> <span aria-hidden="true">&raquo;</span> </a></li>
                        </ul>
                    </nav>
                </footer>
            </form>
        </div>
    </div>
</section>
<!--查看评论模态框-->
<div class="modal fade" id="seeComment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">查看评论</h4>
            </div>
            <div class="modal-body">
                <table class="table" style="margin-bottom:0px;">
                    <thead>
                    <tr></tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td wdith="20%">评论ID:</td>
                        <td width="80%" class="see-comment-id"></td>
                    </tr>
                    <tr>
                        <td wdith="20%">评论页面:</td>
                        <td width="80%" class="see-comment-page"></td>
                    </tr>
                    <tr>
                        <td wdith="20%">评论内容:</td>
                        <td width="80%" class="see-comment-content"></td>
                    </tr>
                    <tr>
                        <td wdith="20%">IP:</td>
                        <td width="80%" class="see-comment-ip"></td>
                    </tr>
                    <tr>
                        <td wdith="20%">所在地:</td>
                        <td width="80%" class="see-comment-address"></td>
                    </tr>
                    <tr>
                        <td wdith="20%">系统:</td>
                        <td width="80%" class="see-comment-system"></td>
                    </tr>
                    <tr>
                        <td wdith="20%">浏览器:</td>
                        <td width="80%" class="see-comment-browser"></td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr></tr>
                    </tfoot>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">朕已阅</button>
            </div>
        </div>
    </div>
</div>
<!--个人信息模态框-->
<!--个人登录记录模态框-->
<!--微信二维码模态框-->
{{--<!--提示模态框-->--}}
{{--<div class="modal fade user-select" id="areDeveloping" tabindex="-1" role="dialog" aria-labelledby="areDevelopingModalLabel">--}}
{{--<div class="modal-dialog" role="document">--}}
{{--<div class="modal-content">--}}
{{--<div class="modal-header">--}}
{{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
{{--<h4 class="modal-title" id="areDevelopingModalLabel" style="cursor:default;">该功能正在日以继夜的开发中…</h4>--}}
{{--</div>--}}
{{--<div class="modal-body"> <img src="images/baoman/baoman_01.gif" alt="深思熟虑" />--}}
{{--<p style="padding:15px 15px 15px 100px; position:absolute; top:15px; cursor:default;">很抱歉，程序猿正在日以继夜的开发此功能，本程序将会在以后的版本中持续完善！</p>--}}
{{--</div>--}}
{{--<div class="modal-footer">--}}
{{--<button type="button" class="btn btn-primary" data-dismiss="modal">朕已阅</button>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
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
<script>
    $(function () {
        $("#main table tbody tr td a").click(function () {
            var name = $(this);
            var id = name.attr("rel"); //对应id
            if (name.attr("name") === "see") {
                $.ajax({
                    type: "POST",
                    url: "/Comment/see",
                    data: "id=" + id,
                    cache: false, //不缓存此页面
                    success: function (data) {
                        var data = JSON.parse(data);
                        $('.see-comment-id').html(data.id);
                        $('.see-comment-page').html(data.page);
                        $('.see-comment-content').html(data.content);
                        $('.see-comment-ip').html(data.ip);
                        $('.see-comment-address').html(data.address);
                        $('.see-comment-system').html(data.system);
                        $('.see-comment-browser').html(data.browser);
                        $('#seeComment').modal('show');
                    }
                });
            } else if (name.attr("name") === "delete") {
                if (window.confirm("此操作不可逆，是否确认？")) {
                    $.ajax({
                        type: "POST",
                        url: "commentdelete",
                        data: {"_token": "{{ csrf_token() }}", "id": id},
                        cache: false, //不缓存此页面
                        success: function (data) {
                            window.location.reload();
                        }
                    });
                }
                ;
            }
            ;
            return false;
        });
    });
</script>
</body>
</html>
