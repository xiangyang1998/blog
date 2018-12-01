<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>个人博客</title>
    <meta name="keywords" content="关键词,关键词,关键词,关键词,5个关键词"/>
    <meta name="description" content="网站简介，不超过80个字"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fingerprintjs2/1.8.6/fingerprint2.min.js"></script>
  @include('Home/top')
    <script type="text/javascript">
        var at;

        new Fingerprint2().get(function (result) {
            //var id = name.attr("rel");
            // console.log(result); //a hash, representingyour device fingerprint
            // at=result;
            var a = ches.value;
            //console.log(at);
            //   console.log(components); // an array of FPcomponents
            $.ajax({
                type: "post",
                url: "../che",
                {{--data: {"_token":"{{ csrf_token() }}","id=":id},--}}
                data: {"_token": "{{ csrf_token() }}", "result": result, "id": a},
                cache: false, //不缓存此页面
                success: function (data) {
                    // window.location.reload();
                    //csonsole.log(at);
                    //window.location.reload();
                },
            });


        });
        {{--$(function () {--}}
        {{--$.ajax({--}}
        {{--type: "post",--}}
        {{--url: "../che",--}}
        {{--data: {"_token":"{{ csrf_token() }}","id=":id},--}}
        {{--data: {"_token":"{{ csrf_token() }}","re":at},--}}
        {{--cache: false, //不缓存此页面--}}
        {{--success: function (data) {--}}
        {{--// window.location.reload();--}}
        {{--//csonsole.log(at);--}}
        {{--//window.location.reload();--}}
        {{--},--}}
        {{--});--}}
        {{--})--}}
    </script>
</head>
<body>
<header>
    <div class="logo">向洋个人博客</div>
    <div class="top-nav">
        <h2 id="mnavh"><span class="navicon"></span></h2>
        <ul id="nav">
            <li><a href="/">网站首页</a></li>
            <li><a href="/5">关于我</a></li>
            <li><a href="/5">留言</a></li>
        </ul>
    </div>
    <div class="search">
        <form action="/e/search/index.php" method="post" name="searchform" id="searchform">
            <input name="keyboard" id="keyboard" class="input_text" value="搜索你喜欢的" style="color: rgb(153, 153, 153);"
                   onfocus="if(value=='搜索你喜欢的'){this.style.color='#000';value=''}"
                   onblur="if(value==''){this.style.color='#999';value='搜索你喜欢的'}" type="text">
            <input name="show" value="title" type="hidden">
            <input name="tempid" value="1" type="hidden">
            <input name="tbname" value="news" type="hidden">
            <input name="Submit" class="input_submit" value="" type="submit">
        </form>
    </div>
</header>
<aside class="side">
    <div class="about"><i><a href="/"><img src=" {{asset('Home/images/avatar.jpg')}}"></a></i>
        <p>向洋，一个关于Laravel的博客项目。</p>
    </div>
    <div class="weixin"><img src="https://s1.ax1x.com/2018/11/27/FErUde.png">
        <p>关注我 </p>
    </div>
</aside>
<main>
    <div class="main-content">

        <div class="welcome">您现在的位置是：首页>个人博客模板</div>
        <div class="blogbox">
            <div class="contentbox">
                <h5 style="color: #1BA1E2">当前浏览量:{{$shujutiaoshu}}</h5>
                @foreach($re as $re)
                    <input type="hidden" id="ches" name="ches" value="{{$re->id}}">
                    <h2 class="contitle">{{$re->title}}</h2>
                    <p class="bloginfo"><span>admin</span><span>{{$re->created_at}}</span><span><a
                                    href="/">{{$re->tags}}</a></span></p>
                    <p class="jianjie"><b>简介</b>{{$re->describe}}</p>
                    <div class="entry">
                        {{$re->article}}
                        @endforeach


                    </div>

                    <div class="share"> 分享</div>
                    {{--<div class="nextinfo">--}}
                    {{--<p>上一篇：<a href="/download/f/881.html">纯文字个人博客模板《时尚黑》</a></p>--}}
                    {{--<p>下一篇：<a href="/download/f/886.html">html5 个人博客模板《蓝色畅想》</a></p>--}}
                    {{--</div>--}}
            </div>
            <div class="viewbox">
                <h2 class="newstitle"><b>随便看看</b></h2>
                <ul>
                    @foreach($ac as $ac)
                        <li><a href="/index/info/{{$ac->id}}"><i><img src="{{$ac->titlepic}}"></i>
                                <p>{{$ac->title}}</p>
                                <span>{{$ac->created_at}}</span></a></li>

                    @endforeach

                </ul>
            </div>

            <div class="pinlun">
                <h2 class="newstitle"><b>评论</b></h2>

                <div class="gbok">
                    @foreach($co as $co)
                        <h5>{{$co->name}}:</h5>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; {{$co->comment_content}}</p>
                    @endforeach
                    <form action="/index/comment" method="post">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <input type="hidden" name="id" value="{{$id}}">
                        <p><input type="text" name="tir"></p>
                        <p><input type="submit" value="提交"></p>
                    </form>

                </div>
            </div>

        </div>
        <div class="rside">
            <div class="news">
                <h2 class="newstitle"><b>文章排行</b></h2>
                <ul>
                    <li><a href="/"><span>08-30</span>如何快速建立自己的个人博客网站</a></li>
                    <li><a href="/"><span>08-30</span>个人博客，属于我的小世界！</a></li>
                    <li><a href="/"><span>08-30</span>网易博客关闭，何不从此开始潇洒行走江湖！</a></li>
                    <li><a href="/"><span>08-30</span>个人网站做好了，百度不收录怎么办？来，看看他们怎么做的。</a></li>
                    <li><a href="/"><span>08-30</span>帝国cms 循环调用子栏目信息以及头条图片</a></li>
                    <li><a href="/"><span>08-30</span>我是怎么评价自己的？</a></li>
                    <li><a href="/"><span>08-30</span>html5 个人博客模板《蓝色畅想》</a></li>
                    <li><a href="/"><span>08-30</span>【匆匆那些年】总结个人博客经历的这四年</a></li>
                </ul>
            </div>
            <div class="news">
                <h2 class="newstitle"><b>推荐</b></h2>
                <ul>
                    @foreach($rs as $rs)
                        <li><a href="/index/info/{{$ac->id}}"><span>08-30</span>{{$rs->title}}</a></li>
                    @endforeach

                    {{--<li><a href="/"><span>08-30</span>个人博客，属于我的小世界！</a></li>--}}
                    {{--<li><a href="/"><span>08-30</span>网易博客关闭，何不从此开始潇洒行走江湖！</a></li>--}}
                    {{--<li><a href="/"><span>08-30</span>个人网站做好了，百度不收录怎么办？来，看看他们怎么做的。</a></li>--}}
                    {{--<li><a href="/"><span>08-30</span>帝国cms 循环调用子栏目信息以及头条图片</a></li>--}}
                    {{--<li><a href="/"><span>08-30</span>我是怎么评价自己的？</a></li>--}}
                    {{--<li><a href="/"><span>08-30</span>html5 个人博客模板《蓝色畅想》</a></li>--}}
                    {{--<li><a href="/"><span>08-30</span>【匆匆那些年】总结个人博客经历的这四年</a></li>--}}
                </ul>
            </div>

        </div>
        <div class="copyright">
            <p>Copyright 2018 Inc. AllRights Reserved. Design by <a href="/">向洋个人博客</a> 蜀ICP备11002373号-1</p>
        </div>
    </div>
</main>
<a href="#" class="cd-top cd-is-visible">Top</a>
</body>
</html>
