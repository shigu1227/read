<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><!-- 360安全游览器使用webkit极速核 -->
    <meta name="renderer" content="webkit"/><!-- IE使用它支持的最高模式 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta property="wb:webmaster" content="bde65bab61e33f62"/>
    <meta name="description" content="精彩小说尽在腾讯文学,腾讯文学提供玄幻小说,武侠小说,原创小说,网游小说,都市小说,言情小说,青春小说,历史小说,军事小说,网游小说,科幻小说,恐怖小说,首发小说最新章节免费小说阅读小说下载txt,精彩尽在腾讯文学!2013年热门小说:无敌唤灵,无红色权力,无限曙光,余罪,兵临天下,盛唐风月,武帝,大官人,勇闯天涯,机甲天王"/>
    <meta name="keywords" content="腾讯文学,小说,小说网,言情小说,青春小说,玄幻小说,武侠小说,都市小说,历史小说,网络小说,小说下载,小说txt,小说全文阅读,原创网络文学,畅销图书,精品图书,传统出版,电子书"/><meta property="qc:admins" content="151626767763051673016375"/>
    <meta name="baidu-site-verification" content="zgBU5TfI8l" />
    <title>QQ阅读</title>
    <link rel="shortcut icon" type="image/x-icon" href="http://img1.chuangshi.qq.com/book/p1/ico/bookqq.ico"/>
    <link rel="Bookmark" type="image/x-icon" href="http://img1.chuangshi.qq.com/book/p1/ico/bookqq.ico"/>
    <link rel="stylesheet" type="text/css" href="/indexs/static/css/base.css" /><!-- prevent dom xss -->
    <script type="text/javascript" src="/indexs/static/js/aq_common.js">

    </script><script type="text/javascript">        var userLang = "";
    </script><script type="text/javascript" src="/indexs/static/js/base.js">

    </script><script type="text/javascript">
        var addToBookshelfAjaxUrl = "/public/addToBookshelf.html";
        $(function(){
            //书架
            CS.bookshelf.init(addToBookshelfAjaxUrl);
            //页面特定链接/按钮点击分析
            $.getScript("http://pingjs.qq.com/tcss.ping.js");
        });
    </script>
    <script type="text/javascript">
        var webSite = "book";
        var getLoginStatusAjaxUrl = "http://book.qq.com/ywlogin/getStatus.html",
            sendYWLoginStatusAjaxUrl = "http://book.qq.com/ywlogin/logined.html",
            logoutYWSsoAjaxUrl = "http://book.qq.com/public/logout.html",
            checkTokenAjaxUrl = "/api/checkTokenYw.html";
        $(function(){
            //未登录时，更新登录状态
            CS.ssoLogin.init(getLoginStatusAjaxUrl, sendYWLoginStatusAjaxUrl,logoutYWSsoAjaxUrl, checkTokenAjaxUrl, webSite);
            CS.ssoLogin.getLoginStatus();
        });
    </script><!--[if lt IE 7]>
    <script src="/indexs/static/js/dd_belatedpng.js" mce_src="DD_belatedPNG.js"></script>
    <script type="text/javascript">        DD_belatedPNG.fix('.prev, .next, .dotted, .fantasy, .edit_ctrl span, .edit_ctrl a, .line2, .box2_left em, .help, a.aleft, a.aright, .QQ, .bottom_tool a, .msgup, .msgdown, .juanbox li a, .p_searchbtn, #sword, .QQ_ICO, .QQ_icon, .cm_writer, #PLoginImg img');
    </script>
    <![endif]-->
</head>
<body>
<link rel="stylesheet" type="text/css" href="/indexs/static/css/index.css" />
<!-- 顶部导航 -->
<div id="topNav" class="topNav">
   <a href="{{url('index/login')}}" style="margin-left:70%">登录</a>/<a href="{{url('login/reg')}}">注册</a>
</div>
<!-- 顶部导航的模板 -->
<script type="text/javascript">    var getUserInfoAjaxUrl = "/public/showhead.html", //获取用户信息
        getUserNewMsgUrl = "http://account.book.qq.com/usermessage/getMessageNew.html",
        webSite = "book";
    
    var addToBookshelfAjaxUrl = "/public/addToBookshelf.html";

    $(function(){
        //书架
        CS.bookshelf.init(addToBookshelfAjaxUrl);
        //顶部导航条
        CS.topNav.init(getUserInfoAjaxUrl, getUserNewMsgUrl);
    });
</script>
<div class="pageCenter">
    <div class="bookheader cf">
        <div class="logo fl">
            <a href="http://book.qq.com"><img alt="腾讯文学，文字之美，感动心灵！" src="/indexs/static/picture/txwxlogo.jpg"></a>
        </div>
            <span></span>
            <form action="{{url('books/suo')}}" method="get">
                <div class="titleSearch fl cf">
                    <div class="searchClass" id="searchClass">
                        <select name="books_cate" >
                             <option value="">全部</option>
                             <option value="4">武侠</option>
                             <option value="5">玄幻</option>
                             <option value="6">奇幻</option>
                         </select>

                    </div>
            <input type="text" class="clearInput" name="books_name"/>
            <input  type="submit" class="searchBtn">
            </form>
            <div class="hotWords">热词：
                @foreach ($data as $v)
                    <a href="http://yunqi.qq.com/bk/gdyq/26835006.html" target="_blank">{{$v->books_name}}</a>
                @endforeach
            </div>
        </div>
        <div id="headQrCode" class="headQrCode fr">
            <p>下载QQ阅读</p>
            <img width="80" height="80" src="/indexs/static/picture/code03.png">
            <a href="javascript:" class="close"></a>
        </div>
    </div>
    <script type="text/javascript" src="/indexs/static/js/subnav.js"></script>
    <script type="text/javascript">
        var searchResultUrl = "/search/index/type/p1/wd/p2.html";
    $(function () {
        CS.page.subNav.init(searchResultUrl);
    });
</script>
    <!-- 主体 start--><!--焦点图-->
    <div class="focusWrap">
        <div id="focusBox" class="slider"><div class="conbox">
                <div>
                    <a target="_blank"  href="http://yunqi.qq.com/bk/ns/19818084.html">
                        <img width="1000" height="360" src="/indexs/static/picture/758e5004aa42f91d22f191122b6ae5ec.jpg">
                    </a>
                </div>
                <div>
                    <a target="_blank"  href="http://yunqi.qq.com/bk/ns/25857070.html">
                        <img width="1000" height="360" src="/indexs/static/picture/b3a3520112e70678e4a638a0257c0ea4.jpg">
                    </a>
                </div>
                <div>
                    <a target="_blank"  href="https://mall.jd.com/index-1000220931.html">
                        <img width="1000" height="360" src="/indexs/static/picture/862f865fa574e0bc492332ea145e869d.jpg">
                    </a>
                </div>
                <div>
                    <a target="_blank"  href="https://activity.qidian.com/noah/857010561/index">
                        <img width="1000" height="360" src="/indexs/static/picture/2f1225fa88289f748ce248f01005483f.jpg">
                    </a>
                </div>
                <div>
                    <a target="_blank"  href="http://yunqi.qq.com/bk/ns/25697936.html">
                        <img width="1000" height="360" src="/indexs/static/picture/ce88ef9edce3dd2a9a90effeaf4b3f75.jpg">
                    </a>
                </div>
                <div>
                    <a target="_blank"  href="http://yunqi.qq.com/bk/ns/26615980.html">
                        <img width="1000" height="360" src="/indexs/static/picture/64238cc586f845f28438a0810cfefe12.jpg">
                    </a>
                </div>
            </div>
            <div class="switcher">
                <a target="_blank"  href="http://yunqi.qq.com/bk/ns/19818084.html" class="cur"></a>
                <a target="_blank"  href="http://yunqi.qq.com/bk/ns/25857070.html" ></a>
                <a target="_blank"  href="https://mall.jd.com/index-1000220931.html" ></a>
                <a target="_blank"  href="https://activity.qidian.com/noah/857010561/index" ></a>
                <a target="_blank"  href="http://yunqi.qq.com/bk/ns/25697936.html" ></a>
                <a target="_blank"  href="http://yunqi.qq.com/bk/ns/26615980.html" ></a>
            </div>
        </div>
        <!--悬浮窗-->
        <div class="focusInfo">
            <div class="focusInfoBox">
                <h3 class="newNotice">最新资讯</h3>
                <ul>
                    <li>【<a href="http://chuangshi.qq.com/news/47338442.html" target="_blank">公告</a>】
                        <a href="http://chuangshi.qq.com/news/47338442.html" target="_blank">有福利 |随手举报参与有奖</a>
                    </li>
                </ul>
                <h3 class="rSite">阅文集团旗下网站</h3><p class="readSite">
                    <a class="site_cs" href="http://chuangshi.qq.com" target="_blank">创世中文</a>
                    <a class="site_yq" href="http://yunqi.qq.com" target="_blank">云起书院</a>
                    <a class="site_cx" href="http://dushu.qq.com" target="_blank">QQ阅读</a>
                </p>
            </div>
        </div>
    </div>
    <!--频道推荐版块-->
    <div class="channelWrap  mb20 cf">
        <div class="leftBox fl">
            <div class="channelTitle cf">
                <div class="recLink fr" style="max-width: 410px;max-height: 35px;overflow: hidden;">

                    {{--@foreach ($cate as $v)--}}
                        {{--<a    href="http://chuangshi.qq.com/bk/xx/20327039.html" target="_blank">{{$v->cate_name}}</a>--}}
                    {{--@endforeach--}}
                </div>
                <h3>前三分类排行</h3>
            </div>
            <div class="recBookWrap cf">
                <div class="bigBook fl">
                    <a href="http://chuangshi.qq.com/bk/qh/24180485.html" target="_blank">
                        <img src="/indexs/static/picture/t5_24180485.jpg" width="204" height="255" target="_blank">
                    </a>
                    <h4>
                        《<a href="http://chuangshi.qq.com/bk/qh/24180485.html" target="_blank">天启预报</a>》
                    <a href="http://account.book.qq.com/bk/author/AD1QOgdqWWtcNQtqV2JTYwA3WzlQMwNg" target="_blank">风月</a>
                    </h4>
                    <p>“我想要挨一顿毒打……”</p>
                </div>
                <div class="otherBook fl">
                    <ul>
                        <li><a href="http://chuangshi.qq.com/bk/ds/23451787.html" target="_blank">
                                <img src="/indexs/static/picture/t5_23451787.jpg" width="62" height="78"></a>
                            <div class="otherBookInfo fl">
                                <h4>《<a href="http://chuangshi.qq.com/bk/ds/23451787.html" target="_blank">学霸的黑科技时代</a>》</h4>
                                <p>作者：<a href="http://account.book.qq.com/bk/author/AD1QPwdqWWpcNgtqV2hTZQA8WzNQPwNg" target="_blank">咬文嚼纸</a></p>
                                <p class="intro">从国产操作系统到反重力技术，学霸无所不能</p>
                            </div>
                        </li>
                        <li>
                            <a href="http://chuangshi.qq.com/bk/ls/21526746.html" target="_blank">
                                <img src="/indexs/static/picture/t5_21526746.jpg" width="62" height="78"></a>
                            <div class="otherBookInfo fl">
                                <h4>《<a href="http://chuangshi.qq.com/bk/ls/21526746.html" target="_blank">覆汉</a>》</h4>
                                <p>作者：<a href="http://account.book.qq.com/bk/author/AD1QOgdqWWhcNgtqV2ZTZQA9WzVQNANh" target="_blank">榴弹怕水</a></p>
                                <p class="intro">从苟全性命于乱世，到夺取汉室天下！</p>
                            </div>
                        </li>
                        <li>
                            <a href="http://chuangshi.qq.com/bk/xh/421661.html" target="_blank">
                                <img src="/indexs/static/picture/t5_421661.jpg" width="62" height="78"></a>
                            <div class="otherBookInfo fl">
                                <h4>《<a href="http://chuangshi.qq.com/bk/xh/421661.html" target="_blank">武道霸主</a>》</h4>
                                <p>作者：<a href="http://account.book.qq.com/bk/author/ADdQOwduWW1cMgtiV2NTYwA7WzY%25253D" target="_blank">蜀狂人</a></p>
                                <p class="intro">武道霸主</p>
                            </div>
                        </li>
                    </ul>
                    <dl>
                        <dd class="fl">
                            <p>
                                <a href="http://chuangshi.qq.com/bk/xh/xx20003gx3/" target="_blank">异世大陆</a>
                                <em>丨</em>
                                <a href="http://chuangshi.qq.com/bk/xh/614782.html" target="_blank" class="blue">全职法师</a
                            </p>
                            <p>主修一系，怎如全系全通</p>
                        </dd>
                        <dd class="fl">
                            <p>
                                <a href="http://chuangshi.qq.com/bk/xx/xx20018gx3/" target="_blank">神话修真</a>
                                <em>丨</em>
                                <a href="http://chuangshi.qq.com/bk/xx/20566688.html" target="_blank" class="blue">苍穹之上</a>
                            </p>
                            <p>千年苦修，只为立于苍穹上！</p>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="rightBox fr">
            <div class="threeTabBox tabSwitch">
                <p>创世排行榜</p>
                <div class="choiceBox">
                    <span class="tabCur">人气榜<cite></cite></span>
                    <span>月票榜</span>
                </div>
            </div>
            <!--男频榜-->
            <div class="rankListWrap">
                <!--创世人气-->
                <ul class="rankList rankHover numList tabList">
                    @php
                        $i=1;
                    @endphp
                    @foreach ($datas as $v)
                        <li class="firstList">
                            <div class="hoverHide">
                                <em>{{$v->books_incr}}</em>
                                <span class="num3">
                                     @php
                                         echo $i;
                                     @endphp
                                </span>
                                <a target="_blank" href="http://chuangshi.qq.com/bk/wx/23240412.html">{{$v->books_name}}</a>
                            </div>
                            <div class="detailWrap">
                                <span class="num3"> @php
                                        echo $i;
                                    @endphp</span>
                                <a target="_blank" href="http://chuangshi.qq.com/bk/wx/23240412.html">
                                    <img src="{{$v->books_img}}" width="55" height="74"  alt="鸿渐于磐"/></a>
                                <div class="detailInfo"><h4><a target="_blank" href="http://chuangshi.qq.com/bk/wx/23240412.html">{{$v->books_name}}</a></h4>
                                    <p>作者：{{$v->books_man}}</p>
                                    <p>分类：<a target="_blank" href="http://chuangshi.qq.com/bk/wx/xx20011/">小说</a></p>
                                </div>
                            </div>
                        </li>
                        @php
                            $i++;
                        @endphp
                    @endforeach

                </ul>
                <!--新书月票-->
                <ul class="rankList rankHover tabList numList hidden">
                    @php
                        $i=1;
                    @endphp
                    @foreach ($yue as $v)
                    <li class="firstList">
                        <div class="hoverHide">
                            <em>{{$v->books_yue}}</em>
                            <span class="num3">@php
                                    echo $i;
                                @endphp</span>
                            <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEPF1gVjUAPVRsATUBZg">{{$v->books_name}}</a>
                        </div>
                        <div class="detailWrap">
                            <span class="num3">@php
                                    echo $i;
                                @endphp</span>
                            <a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEPF1gVjUAPVRsATUBZg">
                                <img src="{{$v->books_img}}" width="55" height="74"  alt="万族之劫"/></a>
                            <div class="detailInfo">
                                <h4><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEPF1gVjUAPVRsATUBZg">{{$v->books_name}}</a></h4>
                                <p>作者：{{$v->books_man}}</p>
                                <p>分类：{{$v->books_cate}}</p>
                            </div>
                        </div>
                    </li>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!--原创女频-->
    <div class="channelWrap mb20 cf">
        <div class="leftBox fl">
            <div class="channelTitle cf"><div class="recLink fr" style="max-width: 410px;max-height: 35px;overflow: hidden;"><a    href="http://yunqi.qq.com/bk/gdyq/27182063.html" target="_blank">农门福宝小媳妇</a><a    href="http://yunqi.qq.com/bk/xdyq/28073969.html" target="_blank">被最想拥抱的男人威胁了</a><a    href="http://yunqi.qq.com/bk/khkj/27325720.html" target="_blank">天道美人黑化警告</a><a  class="nobr"  href="http://yunqi.qq.com/bk/xdyq/27404429.html" target="_blank">偏执秦爷被我的美貌征服了</a></div><h3>原创女生<span><a href="http://yunqi.qq.com" target="_blank">yunqi.qq.com</a></span></h3></div><div class="recBookWrap cf"><div class="bigBook fl"><a href="http://yunqi.qq.com/bk/gdyq/27182194.html" target="_blank"><img src="/indexs/static/picture/t5_27182194.jpg" width="204" height="255" target="_blank"></a><h4>《<a href="http://yunqi.qq.com/bk/gdyq/27182194.html" target="_blank">养崽崽后本宫躺赢了</a>》
                        <a href="http://account.book.qq.com/bk/author/ADRQPAdoWWJcPwtjV2RTYgA5WzE%25253D" target="_blank">梁妃儿</a></h4><p>穿书后我成了人生赢家，三个反派大佬都是我的崽</p></div><div class="otherBook fl"><ul><li><a href="http://yunqi.qq.com/bk/xdyq/26878703.html" target="_blank"><img src="/indexs/static/picture/t5_26878703.jpg" width="62" height="78"></a><div class="otherBookInfo fl"><h4>《<a href="http://yunqi.qq.com/bk/xdyq/26878703.html" target="_blank">觉醒后我征服了全世界</a>》</h4><p>作者：<a href="http://account.book.qq.com/bk/author/ADZQOAdoWWtcMwtqV2dTYgA%25252FWzY%25253D" target="_blank">孤木双</a></p><p class="intro">宋先生，你印堂发黑命中缺我</p></div></li><li><a href="http://yunqi.qq.com/bk/xdyq/27416876.html" target="_blank"><img src="/indexs/static/picture/t5_27416876.jpg" width="62" height="78"></a><div class="otherBookInfo fl"><h4>《<a href="http://yunqi.qq.com/bk/xdyq/27416876.html" target="_blank">夫人她成了大佬们的团宠</a>》</h4><p>作者：<a href="http://account.book.qq.com/bk/author/ADdQOQdrWW1cMQtqV2NTbAA8Wzg%25253D" target="_blank">神奇小小</a></p><p class="intro">多了五个大佬儿子怎么办</p></div></li><li><a href="http://yunqi.qq.com/bk/xdyq/27512049.html" target="_blank"><img src="/indexs/static/picture/t5_27512049.jpg" width="62" height="78"></a><div class="otherBookInfo fl"><h4>《<a href="http://yunqi.qq.com/bk/xdyq/27512049.html" target="_blank">豪门权少又黑化了</a>》</h4><p>作者：<a href="http://account.book.qq.com/bk/author/ADZQOAdrWWtcMQtoV2FTZgA%25252FWzg%25253D" target="_blank">凤元糖果</a></p><p class="intro">权少，被你宠上心尖的白莲花又黑化了</p></div></li></ul><dl><dd class="fl"><p><a href="http://yunqi.qq.com/bk/xdyq/xx30022so2/" target="_blank">婚恋情缘</a><em>丨</em><a href="http://yunqi.qq.com/bk/xdyq/26926196.html" target="_blank" class="blue">和首富老公离婚后我爆红了</a></p><p>霸总前夫又在扒我马甲</p></dd><dd class="fl"><p><a href="http://yunqi.qq.com/bk/khkj/xx30044so2/" target="_blank">时空穿梭</a><em>丨</em><a href="http://yunqi.qq.com/bk/khkj/27398848.html" target="_blank" class="blue">快穿宿主她又软又甜</a></p><p>宿主她想享尽世间清福</p></dd></dl></div></div></div><div class="rightBox fr"><div class="threeTabBox tabSwitch"><p>云起排行榜</p><div class="choiceBox"><span class="tabCur">人气榜<cite></cite></span><span>月票榜</span></div></div><!--女频榜--><div class="rankListWrap"><!--云起人气--><ul class="rankList rankHover numList tabList"><li class="firstList"><div class="hoverHide"><em>7822109</em><span class="num3">1</span><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/185422.html">邪王追妻</a></div><div class="detailWrap"><span class="num3">1</span><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/185422.html"><img src="/indexs/static/picture/s_185422.jpg" width="55" height="74"  alt="邪王追妻"/></a><div class="detailInfo"><h4><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/185422.html">邪王追妻</a></h4><p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADRQOgdsWWhcNQtoV2lTYgA6WzQ%25253D">苏小暖</a></p><p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/gdyq/xx30017/">穿越奇情</a></p></div></div></li><li ><div class="hoverHide"><em>2792132</em><span class="num3">2</span><a target="_blank" href="http://yunqi.qq.com/bk/xhyq/607991.html">神医弃女</a></div><div class="detailWrap"><span class="num3">2</span><a target="_blank" href="http://yunqi.qq.com/bk/xhyq/607991.html"><img src="/indexs/static/picture/s_607991.jpg" width="55" height="74"  alt="神医弃女"/></a><div class="detailInfo"><h4><a target="_blank" href="http://yunqi.qq.com/bk/xhyq/607991.html">神医弃女</a></h4><p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADRQPAdsWWhcNwtqV2ZTZwA2Wzk%25253D">MS芙子</a></p><p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/xhyq/xx30002/">东方玄幻</a></p></div></div></li><li ><div class="hoverHide"><em>1046493</em><span class="num3">3</span><a target="_blank" href="http://yunqi.qq.com/bk/khkj/22727621.html">这个大佬画风不对</a></div><div class="detailWrap"><span class="num3">3</span><a target="_blank" href="http://yunqi.qq.com/bk/khkj/22727621.html"><img src="/indexs/static/picture/s_22727621.jpg" width="55" height="74"  alt="这个大佬画风不对"/></a><div class="detailInfo"><h4><a target="_blank" href="http://yunqi.qq.com/bk/khkj/22727621.html">这个大佬画风不对</a></h4><p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADZQPwdtWW1cMgtsV2FTZgA6">墨泠</a></p><p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/khkj/xx30044/">时空穿梭</a></p></div></div></li><li ><div class="hoverHide"><em>985305</em><span >4</span><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/19818084.html">神医凰后</a></div><div class="detailWrap"><span >4</span><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/19818084.html"><img src="/indexs/static/picture/s_19818084.jpg" width="55" height="74"  alt="神医凰后"/></a><div class="detailInfo"><h4><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/19818084.html">神医凰后</a></h4><p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADRQOgdsWWhcNQtoV2lTYgA6WzQ%25253D">苏小暖</a></p><p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/gdyq/xx30017/">穿越奇情</a></p></div></div></li><li ><div class="hoverHide"><em>700965</em><span >5</span><a target="_blank" href="http://yunqi.qq.com/bk/xdyq/21212492.html">电竞大神暗恋我</a></div><div class="detailWrap"><span >5</span><a target="_blank" href="http://yunqi.qq.com/bk/xdyq/21212492.html"><img src="/indexs/static/picture/s_21212492.jpg" width="55" height="74"  alt="电竞大神暗恋我"/></a><div class="detailInfo"><h4><a target="_blank" href="http://yunqi.qq.com/bk/xdyq/21212492.html">电竞大神暗恋我</a></h4><p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADRQOgdsWW9cPgtuV2dTYAA5WzA%25253D">战七少</a></p><p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/xdyq/xx30022/">婚恋情缘</a></p></div></div></li><li ><div class="hoverHide"><em>648021</em><span >6</span><a target="_blank" href="http://yunqi.qq.com/bk/xhyq/13714263.html">云家小九超皮哒</a></div><div class="detailWrap"><span >6</span><a target="_blank" href="http://yunqi.qq.com/bk/xhyq/13714263.html"><img src="/indexs/static/picture/s_13714263.jpg" width="55" height="74"  alt="云家小九超皮哒"/></a><div class="detailInfo"><h4><a target="_blank" href="http://yunqi.qq.com/bk/xhyq/13714263.html">云家小九超皮哒</a></h4><p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADdQPwdrWW5cNgtiV2JTbQ%25253D%25253D">水清竹</a></p><p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/xhyq/xx30002/">东方玄幻</a></p></div></div></li><li ><div class="hoverHide"><em>579009</em><span >7</span><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/749376.html">锦绣农女种田忙</a></div><div class="detailWrap"><span >7</span><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/749376.html"><img src="/indexs/static/picture/s_749376.jpg" width="55" height="74"  alt="锦绣农女种田忙"/></a><div class="detailInfo"><h4><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/749376.html">锦绣农女种田忙</a></h4><p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADdQOwdqWWJcMwtsV2RTZAA9WzM%25253D">巅峰小雨</a></p><p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/gdyq/xx30019/">经商种田</a></p></div></div></li><li ><div class="hoverHide"><em>577177</em><span >8</span><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/704039.html">医妃惊世</a></div><div class="detailWrap"><span >8</span><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/704039.html"><img src="/indexs/static/picture/s_704039.jpg" width="55" height="74"  alt="医妃惊世"/></a><div class="detailInfo"><h4><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/704039.html">医妃惊世</a></h4><p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADdQMwdvWW5cMQttV2ZTbQA3WzQ%25253D">顾染锦</a></p><p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/gdyq/xx30017/">穿越奇情</a></p></div></div></li><li ><div class="hoverHide"><em>530923</em><span >9</span><a target="_blank" href="http://yunqi.qq.com/bk/xdyq/753423.html">娱乐圈之女王在上</a></div><div class="detailWrap"><span >9</span><a target="_blank" href="http://yunqi.qq.com/bk/xdyq/753423.html"><img src="/indexs/static/picture/s_753423.jpg" width="55" height="74"  alt="娱乐圈之女王在上"/></a><div class="detailInfo"><h4><a target="_blank" href="http://yunqi.qq.com/bk/xdyq/753423.html">娱乐圈之女王在上</a></h4><p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/AD1QPQdtWW9cNwtvV2FTYgA4">迷路的龙</a></p><p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/xdyq/xx30023/">娱乐明星</a></p></div></div></li><li ><div class="hoverHide"><em>440416</em><span >10</span><a target="_blank" href="http://yunqi.qq.com/bk/xhyq/19454424.html">至尊瞳术师</a></div><div class="detailWrap"><span >10</span><a target="_blank" href="http://yunqi.qq.com/bk/xhyq/19454424.html"><img src="/indexs/static/picture/s_19454424.jpg" width="55" height="74"  alt="至尊瞳术师"/></a><div class="detailInfo"><h4><a target="_blank" href="http://yunqi.qq.com/bk/xhyq/19454424.html">至尊瞳术师</a></h4><p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADBQOwdtWW1cMgtsV2VTYgA5">陌烟</a></p><p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/xhyq/xx30002/">东方玄幻</a></p></div></div></li></ul><!--月票pk榜--><ul class="rankList rankHover tabList numList hidden"><li class="firstList"><div class="hoverHide"><em>21304</em><span class="num3">1</span><a target="_blank" href="http://yunqi.qq.com/bk/xdyq/25697936.html">我的房分你一半</a></div><div class="detailWrap"><span class="num3">1</span><a target="_blank" href="http://yunqi.qq.com/bk/xdyq/25697936.html"><img src="/indexs/static/picture/s_25697936.jpg" width="55" height="74"  alt="我的房分你一半"/></a><div class="detailInfo"><h4><a target="_blank" href="http://yunqi.qq.com/bk/xdyq/25697936.html">我的房分你一半</a></h4><p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADZQOgdvWWxcMAtpV2hTZgA3">叶非夜</a></p><p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/xdyq/xx30028/">豪门世家</a></p></div></div></li><li ><div class="hoverHide"><em>12576</em><span class="num3">2</span><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMF1gVjYAPVRtATMBYA">夫人你马甲又掉了</a></div><div class="detailWrap"><span class="num3">2</span><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMF1gVjYAPVRtATMBYA"><img src="/indexs/static/picture/s_24017924.jpg" width="55" height="74"  alt="夫人你马甲又掉了"/></a><div class="detailInfo"><h4><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMF1gVjYAPVRtATMBYA">夫人你马甲又掉了</a></h4><p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/AD1QPwduWWpcNwtqV2ZTZQA8WzRQPwNm">一路烦花</a></p><p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/xdyq/xx30028/">豪门世家</a></p></div></div></li><li ><div class="hoverHide"><em>8405</em><span class="num3">3</span><a target="_blank" href="http://yunqi.qq.com/bk/khkj/22727621.html">这个大佬画风不对</a></div><div class="detailWrap"><span class="num3">3</span><a target="_blank" href="http://yunqi.qq.com/bk/khkj/22727621.html"><img src="/indexs/static/picture/s_22727621.jpg" width="55" height="74"  alt="这个大佬画风不对"/></a><div class="detailInfo"><h4><a target="_blank" href="http://yunqi.qq.com/bk/khkj/22727621.html">这个大佬画风不对</a></h4><p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADZQPwdtWW1cMgtsV2FTZgA6">墨泠</a></p><p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/khkj/xx30044/">时空穿梭</a></p></div></div></li><li ><div class="hoverHide"><em>5010</em><span >4</span><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/19818084.html">神医凰后</a></div><div class="detailWrap"><span >4</span><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/19818084.html"><img src="/indexs/static/picture/s_19818084.jpg" width="55" height="74"  alt="神医凰后"/></a><div class="detailInfo"><h4><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/19818084.html">神医凰后</a></h4><p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADRQOgdsWWhcNQtoV2lTYgA6WzQ%25253D">苏小暖</a></p><p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/gdyq/xx30017/">穿越奇情</a></p></div></div></li><li ><div class="hoverHide"><em>4865</em><span >5</span><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEM11gVjUAPVRiATIBYQ">人间富贵花的日常</a></div><div class="detailWrap"><span >5</span><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEM11gVjUAPVRiATIBYQ"><img src="/indexs/static/picture/s_27027635.jpg" width="55" height="74"  alt="人间富贵花的日常"/></a><div class="detailInfo"><h4><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEM11gVjUAPVRiATIBYQ">人间富贵花的日常</a></h4><p>作者：西母娘娘</p><p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/xdyq/xx30028/">豪门世家</a></p></div></div></li><li ><div class="hoverHide"><em>4569</em><span >6</span><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/27092009.html">重生后我成了权臣的掌中娇</a></div><div class="detailWrap"><span >6</span><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/27092009.html"><img src="/indexs/static/picture/s_27092009.jpg" width="55" height="74"  alt="重生后我成了权臣的掌中娇"/></a><div class="detailInfo"><h4><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/27092009.html">重生后我成了权臣的掌中娇</a></h4><p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADRQPgdpWW9cMQtjV2NTbQA%25252FWzM%25253D">风吹小白菜</a></p><p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/gdyq/xx30018/">宫闱宅斗</a></p></div></div></li><li ><div class="hoverHide"><em>4555</em><span >7</span><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/24230535.html">农家小福女</a></div><div class="detailWrap"><span >7</span><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/24230535.html"><img src="/indexs/static/picture/s_24230535.jpg" width="55" height="74"  alt="农家小福女"/></a><div class="detailInfo"><h4><a target="_blank" href="http://yunqi.qq.com/bk/gdyq/24230535.html">农家小福女</a></h4><p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADRQPQdjWW9cNQttV2RTbAA9WzI%25253D">郁雨竹</a></p><p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/gdyq/xx30019/">经商种田</a></p></div></div></li><li ><div class="hoverHide"><em>4535</em><span >8</span><a target="_blank" href="http://yunqi.qq.com/bk/xdyq/26878703.html">觉醒后我征服了全世界</a></div><div class="detailWrap"><span >8</span><a target="_blank" href="http://yunqi.qq.com/bk/xdyq/26878703.html"><img src="/indexs/static/picture/s_26878703.jpg" width="55" height="74"  alt="觉醒后我征服了全世界"/></a><div class="detailInfo"><h4><a target="_blank" href="http://yunqi.qq.com/bk/xdyq/26878703.html">觉醒后我征服了全世界</a></h4><p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/ADZQOAdoWWtcMwtqV2dTYgA%25252FWzY%25253D">孤木双</a></p><p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/xdyq/xx30027/">都市异能</a></p></div></div></li><li ><div class="hoverHide"><em>4328</em><span >9</span><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1hVj8AOVRtATUBYg">我全家都是穿来的</a></div><div class="detailWrap"><span >9</span><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1hVj8AOVRtATUBYg"><img src="/indexs/static/picture/s_25183946.jpg" width="55" height="74"  alt="我全家都是穿来的"/></a><div class="detailInfo"><h4><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMV1hVj8AOVRtATUBYg">我全家都是穿来的</a></h4><p>作者：<a target="_blank" href="http://account.book.qq.com/bk/author/AD1QOgdqWWhcNgtrV2RTYgA6WzlQPgNg">YTT桃桃</a></p><p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/gdyq/xx30019/">经商种田</a></p></div></div></li><li ><div class="hoverHide"><em>3767</em><span >10</span><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMF1mVjYAOVRiATgBZQ">山河盛宴</a></div><div class="detailWrap"><span >10</span><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMF1mVjYAOVRiATgBZQ"><img src="/indexs/static/picture/s_24613691.jpg" width="55" height="74"  alt="山河盛宴"/></a><div class="detailInfo"><h4><a target="_blank" href="http://book.qq.com/intro.html?bid=AGoEMF1mVjYAOVRiATgBZQ">山河盛宴</a></h4><p>作者：天下归元</p><p>分类：<a target="_blank" href="http://yunqi.qq.com/bk/gdyq/xx30017/">穿越奇情</a></p></div></div></li></ul></div></div></div><!--畅销图书--><div class="channelWrap mb20 cf"><div class="leftBox fl"><div class="channelTitle cf"><div class="recLink fr" style="max-width: 410px;max-height: 35px;overflow: hidden;"><a    href="http://dushu.qq.com/Intro.html?bid=733521" target="_blank">与神对话.1</a><a    href="http://dushu.qq.com/Intro.html?bid=673180" target="_blank">内在的从容</a><a    href="http://dushu.qq.com/Intro.html?bid=734236" target="_blank">法医异闻录</a><a  class="nobr"  href="http://dushu.qq.com/Intro.html?bid=735232" target="_blank">疲惫生活中的英雄梦想</a></div><h3>QQ阅读<span><a href="http://dushu.qq.com" target="_blank">dushu.qq.com</a></span></h3></div><div class="recBookWrap cf"><div class="bigBook fl"><a href="http://dushu.qq.com/Intro.html?bid=147318" target="_blank"><img src="/indexs/static/picture/t5_147318.jpg" width="204" height="255" target="_blank"></a><h4>《<a href="http://dushu.qq.com/Intro.html?bid=147318" target="_blank">橙红年代（陈伟霆、马思纯主演）</a>》
                        <a href="http://account.book.qq.com/bk/author/ADU%25253D" target="_blank">骁骑校</a></h4><p>橙红年代</p></div><div class="otherBook fl"><ul><li><a href="http://dushu.qq.com/Intro.html?bid=752521" target="_blank"><img src="/indexs/static/picture/t5_752521.jpg" width="62" height="78"></a><div class="otherBookInfo fl"><h4>《<a href="http://dushu.qq.com/Intro.html?bid=752521" target="_blank">麻衣神算子</a>》</h4><p>作者：<a href="http://account.book.qq.com/bk/author/ADU%25253D" target="_blank">骑马钓鱼</a></p><p class="intro">麻衣神算子</p></div></li><li><a href="http://dushu.qq.com/Intro.html?bid=593655" target="_blank"><img src="/indexs/static/picture/t5_593655.jpg" width="62" height="78"></a><div class="otherBookInfo fl"><h4>《<a href="http://dushu.qq.com/Intro.html?bid=593655" target="_blank">爸爸去哪儿：父亲的力量</a>》</h4><p>作者：<a href="http://account.book.qq.com/bk/author/ADU%25253D" target="_blank">郭涛</a></p><p class="intro">父亲的力量</p></div></li><li><a href="http://dushu.qq.com/Intro.html?bid=567325" target="_blank"><img src="/indexs/static/picture/t5_567325.jpg" width="62" height="78"></a><div class="otherBookInfo fl"><h4>《<a href="http://dushu.qq.com/Intro.html?bid=567325" target="_blank">时光会记得</a>》</h4><p>作者：<a href="http://account.book.qq.com/bk/author/ADU%25253D" target="_blank">独木舟</a></p><p class="intro">时光会记得</p></div></li></ul><dl><dd class="fl"><p><a href="http://dushu.qq.com/store/index/cat2/14000/sortkey/2/ps/30/p/1.html" target="_blank">心理学</a><em>丨</em><a href="http://dushu.qq.com/Intro.html?bid=725430" target="_blank" class="blue">怪咖心理学</a></p><p>让你迅速找到身边的怪咖</p></dd><dd class="fl"><p><a href="http://dushu.qq.com/store/index/cat2/14100/sortkey/2/ps/30/p/1.html" target="_blank">文学</a><em>丨</em><a href="http://dushu.qq.com/Intro.html?bid=725411" target="_blank" class="blue">牛棚杂忆（图文典藏版）</a></p><p>季羡林先生以幽默甚至是调侃</p></dd></dl></div></div></div><div class="rightBox fr"><div class="threeTabBox tabSwitch"><p>畅销书周榜</p><div class="choiceBox"><span class="tabCur">畅销人气<cite></cite></span><span>免费人气</span><!-- <span>VIP人气</span> --></div></div><!--畅销人气榜--><div class="rankListWrap"><!--畅销人气--><ul class="rankList rankHover tabList numList"><li class="firstList"><div class="hoverHide"><em>2158</em><span class="num3">1</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=27019403">麻衣相师</a></div><div class="detailWrap"><span class="num3">1</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=27019403"><img src="/indexs/static/picture/s_27019403.jpg" width="55" height="74"  alt="麻衣相师"/></a><div class="detailInfo"><h4><a target="_blank" href="http://dushu.qq.com/intro.html?bid=27019403">麻衣相师</a></h4><p>作者：桃花渡</p><p>分类：<a target="_blank" href="http://dushu.qq.com/store.html?cat2=13100&cat3=13107">侦探/悬疑/推理</a></p></div></div></li><li ><div class="hoverHide"><em>2150</em><span class="num3">2</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=27291411">就是要宠坏你</a></div><div class="detailWrap"><span class="num3">2</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=27291411"><img src="/indexs/static/picture/s_27291411.jpg" width="55" height="74"  alt="就是要宠坏你"/></a><div class="detailInfo"><h4><a target="_blank" href="http://dushu.qq.com/intro.html?bid=27291411">就是要宠坏你</a></h4><p>作者：端木摇</p><p>分类：<a target="_blank" href="http://dushu.qq.com/store.html?cat2=14300&cat3=14302">爱情/情感</a></p></div></div></li><li ><div class="hoverHide"><em>2095</em><span class="num3">3</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=27587920">不乖娇娘</a></div><div class="detailWrap"><span class="num3">3</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=27587920"><img src="/indexs/static/picture/s_27587920.jpg" width="55" height="74"  alt="不乖娇娘"/></a><div class="detailInfo"><h4><a target="_blank" href="http://dushu.qq.com/intro.html?bid=27587920">不乖娇娘</a></h4><p>作者：苏静初</p><p>分类：<a target="_blank" href="http://dushu.qq.com/store.html?cat2=14300&cat3=14314">古代言情</a></p></div></div></li><li ><div class="hoverHide"><em>2094</em><span >4</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=25822787">掌中之物</a></div><div class="detailWrap"><span >4</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=25822787"><img src="/indexs/static/picture/s_25822787.jpg" width="55" height="74"  alt="掌中之物"/></a><div class="detailInfo"><h4><a target="_blank" href="http://dushu.qq.com/intro.html?bid=25822787">掌中之物</a></h4><p>作者：贝昕</p><p>分类：<a target="_blank" href="http://dushu.qq.com/store.html?cat2=14300&cat3=14302">爱情/情感</a></p></div></div></li><li ><div class="hoverHide"><em>1813</em><span >5</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=29404087">喂，那个笨蛋我爱你</a></div><div class="detailWrap"><span >5</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=29404087"><img src="/indexs/static/picture/s_29404087.jpg" width="55" height="74"  alt="喂，那个笨蛋我爱你"/></a><div class="detailInfo"><h4><a target="_blank" href="http://dushu.qq.com/intro.html?bid=29404087">喂，那个笨蛋我爱你</a></h4><p>作者：酒小七</p><p>分类：<a target="_blank" href="http://dushu.qq.com/store.html?cat2=14300&cat3=14302">爱情/情感</a></p></div></div></li><li ><div class="hoverHide"><em>104</em><span >6</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=25878008">你是我的荣耀</a></div><div class="detailWrap"><span >6</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=25878008"><img src="/indexs/static/picture/s_25878008.jpg" width="55" height="74"  alt="你是我的荣耀"/></a><div class="detailInfo"><h4><a target="_blank" href="http://dushu.qq.com/intro.html?bid=25878008">你是我的荣耀</a></h4><p>作者：顾漫</p><p>分类：<a target="_blank" href="http://dushu.qq.com/store.html?cat2=14300&cat3=14302">爱情/情感</a></p></div></div></li><li ><div class="hoverHide"><em>86</em><span >7</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=26955736">你好，周先生</a></div><div class="detailWrap"><span >7</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=26955736"><img src="/indexs/static/picture/s_26955736.jpg" width="55" height="74"  alt="你好，周先生"/></a><div class="detailInfo"><h4><a target="_blank" href="http://dushu.qq.com/intro.html?bid=26955736">你好，周先生</a></h4><p>作者：夜蔓</p><p>分类：<a target="_blank" href="http://dushu.qq.com/store.html?cat2=14300&cat3=14302">爱情/情感</a></p></div></div></li><li ><div class="hoverHide"><em>82</em><span >8</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=25792479">旧春归（全集）</a></div><div class="detailWrap"><span >8</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=25792479"><img src="/indexs/static/picture/s_25792479.jpg" width="55" height="74"  alt="旧春归（全集）"/></a><div class="detailInfo"><h4><a target="_blank" href="http://dushu.qq.com/intro.html?bid=25792479">旧春归（全集）</a></h4><p>作者：尤四姐</p><p>分类：<a target="_blank" href="http://dushu.qq.com/store.html?cat2=14300&cat3=14302">爱情/情感</a></p></div></div></li><li ><div class="hoverHide"><em>78</em><span >9</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=29501424">又想骗我谈恋爱</a></div><div class="detailWrap"><span >9</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=29501424"><img src="/indexs/static/picture/s_29501424.jpg" width="55" height="74"  alt="又想骗我谈恋爱"/></a><div class="detailInfo"><h4><a target="_blank" href="http://dushu.qq.com/intro.html?bid=29501424">又想骗我谈恋爱</a></h4><p>作者：鹿尧</p><p>分类：<a target="_blank" href="http://dushu.qq.com/store.html?cat2=14300&cat3=14302">爱情/情感</a></p></div></div></li><li ><div class="hoverHide"><em>76</em><span >10</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=25491842">天霜河白（上）</a></div><div class="detailWrap"><span >10</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=25491842"><img src="/indexs/static/picture/s_25491842.jpg" width="55" height="74"  alt="天霜河白（上）"/></a><div class="detailInfo"><h4><a target="_blank" href="http://dushu.qq.com/intro.html?bid=25491842">天霜河白（上）</a></h4><p>作者：倾泠月</p><p>分类：<a target="_blank" href="http://dushu.qq.com/store.html?cat2=14300&cat3=14314">古代言情</a></p></div></div></li></ul><!--免费人气--><ul class="rankList rankHover numList tabList hidden"><li class="firstList"><div class="hoverHide"><em>0</em><span class="num3">1</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=795768">养生导引法</a></div><div class="detailWrap"><span class="num3">1</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=795768"><img src="/indexs/static/picture/s_795768.jpg" width="55" height="74"  alt="养生导引法"/></a><div class="detailInfo"><h4><a target="_blank" href="http://dushu.qq.com/intro.html?bid=795768">养生导引法</a></h4><p>作者：胡文焕</p><p>分类：<a target="_blank" href="http://dushu.qq.com/store.html?cat2=19100&cat3=19101">经史子集</a></p></div></div></li><li ><div class="hoverHide"><em>0</em><span class="num3">2</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=26268212">社交恐惧与人性的成长（鲜读版）</a></div><div class="detailWrap"><span class="num3">2</span><a target="_blank" href="http://dushu.qq.com/intro.html?bid=26268212"><img src="/indexs/static/picture/s_26268212.jpg" width="55" height="74"  alt="社交恐惧与人性的成长（鲜读版）"/></a><div class="detailInfo"><h4><a target="_blank" href="http://dushu.qq.com/intro.html?bid=26268212">社交恐惧与人性的成长（鲜读版）</a></h4><p>作者：王宇</p><p>分类：<a target="_blank" href="http://dushu.qq.com/store.html?cat2=&cat3="></a></p></div></div></li></ul></div></div></div>
    <style>
        .footer_main{
     height: 170px;
   }
   .footer_main li{
     height: 180px;
   }
 </style>
    <script type="text/javascript">	var requestStatLogUrl = "http://account.book.qq.com/statlog/index.html",
		requestStatLogData = {
			'site' : "bk",
			'url' : "ACs",
			'bid' : '',
			'uuid' : '',
			'encrypt' : 1
		};

	// var refreshKeyUrl = "http://book.qq.com/ywlogin/refreshkey.html";

	$(function(){
		function _requestStatLog(){
			var params = [],
				url = '';

			$.each(requestStatLogData, function(name, val){
				params.push(name +'='+ encodeURIComponent(val));
			});
			url = requestStatLogUrl +'?'+ params.join('&');

			if(document.referrer){
	            url += '&ref='+ encodeURIComponent(document.referrer);
	        }
			
			new Image().src = url;
		}
		_requestStatLog();

		// function _refreshKey(){
		// 	new Image().src = refreshKeyUrl;
		// }
		// setInterval(_refreshKey, 1800000); //每30分钟刷新一次key

		//public
		$.getScript("http://tajs.qq.com/stats?sId=34321758");
		//book.qq.com
		$.getScript("http://tajs.qq.com/stats?sId=34321514", function() {
			//点击流
			$.getScript("http://pingjs.qq.com/ping_tcss_ied.js", function() {
				if (typeof(pgvMain) === 'function') {
					pgvMain();
				}
			});
		});
	});
</script><script type="text/javascript" src="/indexs/static/js/index.js"></script>
<script type="text/javascript">    $(function(){
        CS.page.index.main.init();
    });
</script>
</body>
</html>