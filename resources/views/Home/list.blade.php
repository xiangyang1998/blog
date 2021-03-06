<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>网站标题</title>
    <meta name="keywords" content="关键词,关键词,关键词,关键词,5个关键词"/>
    <meta name="description" content="网站简介，不超过80个字"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   @include('Home/top')
</head>
<body>
<header>
    <div class="logo">个人博客</div>
    <div class="top-nav">
        <h2 id="mnavh"><span class="navicon"></span></h2>
        <ul id="nav">
            <li><a href="/">网站首页</a></li>
            <li><a href="list.html">个人博客日记</a></li>
            <li><a href="/2">个人博客模板</a></li>
            <li><a href="/3">博客网站制作</a></li>
            <li><a href="/4">网页设计心得</a></li>
            <li><a href="/5">优秀个人博客</a></li>
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
        <p>向洋</p>
    </div>
    <div class="weixin"><img src="https://s1.ax1x.com/2018/11/27/FErUde.png">
        <p>关注我</p>
    </div>
</aside>
<main>
    <div class="main-content">

        <div class="welcome">您现在的位置是：首页>个人博客模板</div>
        <div class="blogbox">
            <div class="bloglist">
                <ul>
                    @foreach($rs as $r)
                        <li>
                            <h2><a href="/index/info/{{$r->id}}">{{$r->title}}</a></h2>
                            <i><a href="/"><img src="{{$r->titlepic}}"></a></i>
                            <p class="blogtext">{{$r->describe}}</p>
                            <p class="bloginfo"><span>admin</span><span>{{$r->created_at}}</span><span><a
                                            href="/">{{$r->tags}}</a></span></p>
                        </li>
                    @endforeach


                </ul>
            </div>
            <div class="pagelist"><a title="Total record">&nbsp;<b>170</b> </a>&nbsp;&nbsp;&nbsp;<b>1</b>&nbsp;<a
                        href="/jstt/index_2.html">2</a>&nbsp;<a href="/jstt/index_3.html">3</a>&nbsp;<a
                        href="/jstt/index_4.html">4</a>&nbsp;<a href="/jstt/index_5.html">5</a>&nbsp;<a
                        href="/jstt/index_6.html">6</a>&nbsp;<a href="/jstt/index_2.html">下一页</a>&nbsp;<a
                        href="/jstt/index_15.html">尾页</a></div>
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
                <h2 class="newstitle"><b>本栏推荐</b></h2>
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
                <h2 class="newstitle"><b>栏目更新</b></h2>
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
        </div>
        <div class="copyright">
            <p>Copyright 2018 Inc. AllRights Reserved. Design by <a href="/">杨青个人博客</a> 蜀ICP备11002373号-1</p>
        </div>
    </div>
</main>
<a href="#" class="cd-top cd-is-visible">Top</a>
</body>
</html>
