<!doctype html>
<html>
<head>
    
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta http-equiv="x-dns-prefetch-control" content="on">
<title>问盍社区</title>
<link rel="Shortcut Icon" href="//www.sogou.com/images/logo2014/new/favicon.ico"/>
<link rel="Bookmark" href="//www.sogou.com/images/logo2014/new/favicon.ico"/>
<link rel="search" type="application/opensearchdescription+xml" href="//wenwen.sogou.com/wenwenSearch.xml" title="问问搜索"/>
    <link rel="stylesheet" type="text/css" href="/shouye/css/c428714.css" />
    <link rel="stylesheet" type="text/css" href="/shouye/css/41508f8.css" />

    <script>
        var _gtag = _gtag || {};

        _gtag = {
            static_files_prefix:'/sf',
            qId: '',
            cateId: '',
            userId: '10',
            uid: '-1',
            userName: '%20',
            orig: 253,
            userHead: '',
            que_title: '',
            siteBaseUrl: '/',
            loginStateUrl: '/login/loginState',
            popLoginUrl: '/login/popLogin',
            loginOutUrl: '/login/logout',
            isLogin : false,
            search_url : '/s/?w=',
            ask_url : '/z/AskQuestionConfirm.e?sp=0&sp=S',
            ajax: {
                smartbox: 'http://sugg.search.wenwen.sogou.com/service-search/ajax/smartbox'
            },
            phase: '${wenwenPage.phase}'
        };

    </script>
</head>

<body>
<div id="wrap">
    
<div id="header">
        <!-- <div class="login" data-score="0">
            <a href="javascript:;" class="btn-login" id="s_login">登录</a>
    </div> -->

    <div class="header">
        <div class="searchbox">
            <form name="flpage" class="searchform" method="get" action="/s/">
                <div class="querybox"><input class="query" type="text" element="input" value="" id="sb" name="w" maxlength="50" autocomplete="off" /></div>
                <div class="sbtn1"><input class="search_bt" type="submit" name="search" value="搜索答案" id="searchBtn"></div>
            </form>
            <a href="/question/ask" class="btnask" target="_blank">我要提问</a>
        </div>
    </div>

    <div class="mnavbox">
        <ul class="mnav">
            <li><a href="/?ch=ww.dh.sy">首页</a></li>
            <li><a href="/cate/tag/?ch=ww.dh.fly">问题分类</a></li>
            <!-- <li><a>特色<i></i></a>
                <ul class="mnav-menu">
                    <li><a href="" target="_blank">问盍指南</a></li>
                    <li><a href="" target="_blank">问盍略懂</a></li>
                </ul>
            </li>
            <li><a href="">问问医生<i></i></a>
                <ul class="mnav-menu">
                    <li><a href="">问问医生</a></li>
                    <li><a href="">名医问答</a></li>
                    <li><a href="">我的问诊</a></li>
                    <li><a href="">我要咨询</a></li>
                </ul>
            </li>
            <li><a href="">问问律师<i></i></a>
                <ul class="mnav-menu">
                    <li><a href="">问问律师</a></li>
                    <li><a href="">律师回答</a></li>
                    <li><a href="">我的咨询</a></li>
                    <li><a href="">我要咨询</a></li>
                </ul>
            </li> -->
            <li class="mnav-rgt"><a href="{{url('/zhuye')}}">个人中心</a></li>
        </ul>
    </div>

<!-- //=========================================================================================== -->

@yield('content')

<!-- ===================================================================================== -->
<div id="footer">
    <div class="ft-container">
        <div class="ft-box">
            <div class="ft-lft">
                <p class="ft-lft-txt">你想知道的这里都有</p>
                <p class="ft-lft-txt2">已解决问题:<em>262,023,054</em></p>
            </div>
            <ul class="ft-rgt">
                <li class="ft-rgt-section">
                    <div class="ft-rgt-tit">新手帮助</div>
                    <ul>
                        <li><a href="" class="ft-rgt-tab" target="_blank">如何提问</a></li>
                        <li><a href="" class="ft-rgt-tab" target="_blank">如何回答</a></li>
                    </ul>
                </li>
                <li class="ft-rgt-section">
                    <div class="ft-rgt-tit">投诉建议</div>
                    <ul>
                        <li><a href="" class="ft-rgt-tab" target="_blank">举报不良信息</a></li>
                        <li><a href="" class="ft-rgt-tab" target="_blank">意见反馈及投诉</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="ft-box2">
            <div class="ft-link"><a href="" target="_blank">企业推广</a>&nbsp;&nbsp;&ndash;&nbsp;&nbsp;<a href="" target="_blank">输入法</a>&nbsp;&nbsp;&ndash;&nbsp;&nbsp;<a href="" target="_blank">浏览器</a>&nbsp;&nbsp;&ndash;&nbsp;&nbsp;<a href="" target="_blank">隐私政策</a>&nbsp;&nbsp;&ndash;&nbsp;&nbsp;<a href="" target="_blank">免责声明</a>&nbsp;&nbsp;&ndash;&nbsp;&nbsp;<a href="" target="_blank">用户协议</a>&nbsp;&nbsp;&ndash;&nbsp;&nbsp;<a href="" target="_blank">帮助</a></div>
            <p class="ft-box2-lft">© 2018 Sogou Inc. 京ICP证050897号</p>
        </div>
    </div>
</div>        <div id="popup_wrap" style="z-index:2;"></div>
    <script crossorigin="anonymous" src="/shouye/js/idata.js"></script>
<script crossorigin="anonymous" src="/shouye/js/main.js"></script></div>
</body>

</html>