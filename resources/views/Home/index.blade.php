<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>向洋个人</title>


    <meta name="keywords" content="关键词,关键词,关键词,关键词,5个关键词"/>
    <meta name="description" content="网站简介，不超过80个字"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   @include('Home/top')
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
    <div class="about"><i><a href="/"><img src="{{asset('Home/images/avatar.jpg')}}"></a></i>
        <p>向洋,laravel个人博客</p>
    </div>
    <div class="weixin"><img src="https://s1.ax1x.com/2018/11/27/FErUde.png">
        <p>关注我</p>
    </div>
</aside>
<main>
    <div class="main-content">
        <div class="welcome"> 您好，欢迎您访问我们的官方网站！</div>
        <div class="picbox">


            <h2 class="pictitle"><a href="/">公告</a></h2>
            <!--box begin-->
            <div class="Box_con"><span class="btnl btn" id="btnl"></span> <span class="btnr btn" id="btnr"></span>
                <div class="conbox" id="BoxUl">
                    <ul>
                        @foreach($re as $re)
                            <li class="cur"><a href="/"><img src="{{$re->picture_bad}}" alt=""/>
                                    <p>{{$re->title}}</p>
                                </a></li>
                        @endforeach


                    </ul>
                </div>
            </div>
            <!--box end-->


        </div>
        <div class="newsbox">


            @foreach($rs as $r)
                <section>
                    <div class="news">
                        <h2 class="newstitle"><span><a href="index/list/{{$r->id}}">更多</a></span><b>{{$r->column}}</b>
                        </h2>
                        <ul>
                            @foreach($ac as $a)
                                @if($r->id==$a->category)
                                    <li><a href="index/info/{{$a->id}}"><span>{{$a->updated_at}}</span>{{$a->title}}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </section>

            @endforeach


        </div>
        <div class="blank"></div>
        <div class="links">
            <h2 class="linktitle">合作伙伴</h2>
            <ul class="link-pic">
                <li><a href="/"><img src=" {{asset('Home/images/yqlj.png')}}"></a></li>
                <li><a href="/"><img src=" {{asset('Home/images/yqlj.png')}}"></a></li>
                <li><a href="/"><img src=" {{asset('Home/images/yqlj.png')}}"></a></li>
                <li><a href="/"><img src=" {{asset('Home/images/yqlj.png')}}"></a></li>
                <li><a href="/"><img src=" {{asset('Home/images/yqlj.png')}}"></a></li>
            </ul>
            <ul class="link-text">
                <li><a href="http://www.yangqq.com">向洋个人博客</a></li>
                <li><a href="http://www.yangqq.com">向洋个人博客</a></li>
                <li><a href="http://www.yangqq.com">向洋个人博客</a></li>
                <li><a href="http://www.yangqq.com">向洋个人博客</a></li>
                <li><a href="http://www.yangqq.com">向洋个人博客</a></li>
            </ul>
        </div>
        <div class="copyright">
            <p>Copyright 2018 Inc. AllRights Reserved. Design by <a href="/">向洋个人博客</a> 蜀ICP备11002373号-1</p>
        </div>
    </div>
</main>
<a href="#" class="cd-top cd-is-visible">Top</a>
</body>
</html>
