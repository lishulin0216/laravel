<!doctype html>
<html>
<head>
    
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta http-equiv="x-dns-prefetch-control" content="on">


<meta name="keywords" content="问答系统 提问 回答 知识搜索 问问 搜狗"/>
<meta name="description" content="搜狗旗下的互动问答社区，用户可以提出问题、解决问题、或者搜索其他用户沉淀的精彩内容；在这里可以感受到最热烈的互助气氛，浏览到最精彩的问答内容。"/>
<title>问答</title>
<link rel="Shortcut Icon" href="//www.sogou.com/images/logo2014/new/favicon.ico"/>
<link rel="Bookmark" href="//www.sogou.com/images/logo2014/new/favicon.ico"/>
<link rel="search" type="application/opensearchdescription+xml" href="//wenwen.sogou.com/wenwenSearch.xml" title="问问搜索"/>
    <link rel="stylesheet" type="text/css" href="/home/css/111.css" />
    <link rel="stylesheet" type="text/css" href="/home/css/222.css" />
<link rel="stylesheet" type="text/css" href="/home/css/333.css" />

    <script>
        var _gtag = _gtag || {};

        _gtag = {
            static_files_prefix:'/sf',
            qId: '',
            cateId: '',
            userId: '2358925665',
            uid: '44479348',
            userName: '%E6%B8%A9%E5%AD%98%20%20%5E',
            orig: 253,
            userHead: 'http://thirdqq.qlogo.cn/g?b=sdk&k=A5kq77qlBmUt33icicKrEo6A&s=140&t=1496023247',
            que_title: '',
            siteBaseUrl: '/',
            loginStateUrl: '/login/loginState',
            popLoginUrl: '/login/popLogin',
            loginOutUrl: '/login/logout',
            isLogin : true,
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
    <!-- header -->

<div id="header" class="usercenter">
    <div class="uc-header-bg"></div>
    <div class="uc-searchbox">
                <div class="login" data-score="0">
            <div id="userNotice" class="user-notice"></div>
        <span class="login-line"></span>
        <div class="user-option">
            <a href="/user/center" class="btn-user-option">
                <div class="user-thumb"><img src="/home/images/1.jpg" width="100%" height="100%" alt="头像"></div>
                <div class="user-name-box"><div class="user-name">温存  ^</div></div>
                <i class="arr-user"></i>
            </a>
            <ul class="popup-lst">
                <li><a href="/user/center?type=question&ch=newsy.id.ask">我的提问</a></li>
                <li><a href="/user/center?type=answer&ch=newsy.id.answer">我的回答</a></li>
                <li><a href="javascript:;" id="s_logout"  s_url="/" >退出</a></li>
            </ul>
        </div>
    </div>

        <a href=""><span class="uc-logo"><img src="/home/images/1.png" width="30" height="30" alt=""></span></a>
        <form name="flpage" method="get" action="/s/" class="uc-searchform">
            <div class="uc-querybox">
                <input class="uc-query" type="text" element="input" value="" id="sb" name="w" maxlength="50" autocomplete="off">
            </div>
            <div class="uc-sbtn1">
                <input type="submit" name="search" value="搜索答案" id="searchBtn">
            </div>
        </form>
        <a href="/question/ask" class="uc-btnask" target="_blank">我要提问</a>
    </div>
    <div class="uc-top">
        <div class="uc-top-lft">
            <div class="uc-top-lft-box">
                                
                                                <div class="user-thumb ">
                    <img src="/home/images/1.jpg" width="100%" height="100%" alt="头像">
                </div>
                            </div>
        </div>
        <div class="mycard-name-box">
                            <div class="mycard-name">温存  ^</div>
                                        <span class="user-level-tag">0级</span>
                                </div>
        </ul>
    </div>
</div>
<script>
    var _gtag = _gtag || {};
    _gtag.host =  true ;
    _gtag.traceId = '7d1d3eebe585cf7c7c5bcd26b88e7431';
    _gtag.isExpert =  false ;
    _gtag.tagId = '';
    _gtag.tagName = '';
    _gtag.isTalent =  false ;
    _gtag.money = '0';

</script>

<!-- //header -->
<div id="container">
    <div class="content">
        <div class=" uc-content " id="workSpaceContainer">
                        <!-- //专家达人右侧栏 -->
                            <div class="uc-content">
                    <div class="uc-lft">
                        <ul class="uc-nav user_nav">
                                                                                            
                                <li data-type=recommend data-tp="0" data-tid="0"><a href="{{ url ('fenye/')}}" class="uc-tab"><i></i>个人资料</a></li>
                                
                <li data-type="question" data-tp="10"><a href="{{url ('tiwen/')}}" class="uc-tab"><i></i>我的提问</a></li>
                                <li data-type="answer" data-tp="20" data-tid=""><a href="{{url ('huida/')}}" class="uc-tab"><i></i>我的回答</a></li>
                                <li data-type="grow"><a href="{{url ('jifen/')}}" class="uc-tab"><i></i>我的积分</a></li>
                                <li data-type="activity" id="activityBtn"><a href="{{url ('liulan/')}}" class="uc-tab"><i></i>浏览记录</a></li>
                                <li data-type="order"><a href="{{url ('xitong/')}}" class="uc-tab"><i></i>系统消息</a></li>
                                                    </ul>
                    </div>
        <div class="uc-rgt user_recommend_list" style="min-height:500px;">
                               



        </div>
    <div class="uc-rgt user_question_list hide">
<div class="uc-top-bar">
    <div class="sort-nav">
        <a href="javascript:;" class="sort-nav-tab user_nav_child cur" data-type="question" data-tp="10">全部</a><span class="sort-nav-bar"></span>
        <a href="javascript:;" class="sort-nav-tab user_nav_child" data-type="question" data-tp="11">待解答</a><span class="sort-nav-bar"></span>
        <a href="javascript:;" class="sort-nav-tab user_nav_child" data-type="question" data-tp="12">未采纳</a><span class="sort-nav-bar"></span>
        <a href="javascript:;" class="sort-nav-tab user_nav_child" data-type="question" data-tp="13">已采纳</a><span class="sort-nav-bar"></span>
        <a href="javascript:;" class="sort-nav-tab user_nav_child" data-type="question" data-tp="19">旧版提问</a>
    </div>
</div>

<div id="question_list">
    <!-- 我的提问 -->
    <div id="userList_question" class="uc-lst question_list"></div>
</div>
                        </div>

                        <div id="userList_active" class="uc-rgt user_active_list hide">
                            <div id="activityList">
</div>                        </div>

                        <div id="userList_mall_order" class="uc-rgt user_order_list  hide">
                        </div>
                    
                    <div class="uc-rgt user_answer_list  hide ">
                        
<div class="uc-top-bar">
            <div class="sort-nav">
            <a href="javascript:;" class="sort-nav-tab user_nav_child cur" data-type="answer" data-tp="20">全部</a><span class="sort-nav-bar"></span>
            <a href="javascript:;" class="sort-nav-tab user_nav_child" data-type="answer" data-tp="21">被采纳</a><span class="sort-nav-bar"></span>
            <a href="javascript:;" class="sort-nav-tab user_nav_child" data-type="answer" data-tp="29">旧版回答</a>
        </div>
    </div>

<div id="answer_list">
    <!-- 我的回答 -->
    <div id="userList_answer" class="uc-lst"></div>
</div>                    </div>

                    <div id="userList_grow" class="uc-rgt user_grow_list hide">
                        
<div class="uc-growup">
    <div class="uc-growup-tit"><a href="/question/?qid=6287141289087930302&ch=ww.grzx.wdtwques" target="_blank" class="btn-uc-rgt">晋级规则<i></i></a>我的等级</div>
    <div class="uc-grade-box">
        <div class="uc-grade">
            <!-- 50% ~ 100% 添加 uc-grade-prompt-v1 -->
                                    <div class="uc-grade-prompt " style=" left:0%;">
                <div class="user-level">当前等级：<span> 0  级</span>
                </div>
                <div class="progress-bar-box">
                    <div class="progress-bar">
                        <span class="progress-tit">经验值</span>
                        <div class="progress-info"><div class="progress-info-inside progress-info-clr" style="width:0%"></div></div>
                                                    <span class="progress-tit">0/2</span>
                                            </div>
                    <div class="progress-bar">
                        <span class="progress-tit">采纳数</span>
                        <div class="progress-info"><div class="progress-info-inside progress-info-clr2" style="width:%"></div></div>
                                                    <span class="progress-tit">0/0</span>
                                            </div>
                </div>
            </div>
            <div class="uc-grade-inside" style="width:0%;"></div>
            <ul class="uc-grade-mark">
                <li class="mark">0级</li>
                <li class="mark2">7级</li>
                <li class="mark3">14级</li>
                <li class="mark4">21级</li>
                <li class="mark5">28级</li>
            </ul>
        </div>
    </div>
</div>
<div id="medal_container"></div>                    </div>
                </div>
                    </div>
        
        <div class="ad-activity-wrap" style="display: none">
            <a href="#" class="ad-activity-thumb">你的每个回答都是帮助，马上参与</a>
            <a href="#" class="btn-ad-activity">关闭</a>
        </div>
    </div>
</div>

<a href="/question/?qid=6287141289087930302" target="_blank" class="btn-help">帮助</a>
<a href="javascript:;" class="btn-gotop go_to_top hide"><i>置顶</i></a>

<!-- <<<<<<< HEAD
<script crossorigin="anonymous" src="./home/js/jquery-1.11.1.min.js"></script>
<script crossorigin="anonymous" src="./home/js/preact.min.js"></script>
<script crossorigin="anonymous" src="./home/js/polyfill.min.js"></script>
<script crossorigin="anonymous" src="./home/js/monitor.main.js"></script>
<script crossorigin="anonymous" src="./home/js/wenke/main.js"></script>
<script crossorigin="anonymous" src="./home/js/pc.main.js"></script>
<script crossorigin="anonymous" src="./home/js/df750fc.js"></script>
<script crossorigin="anonymous" src="./home/js/3f83f0e.js"></script>
======= -->
<script crossorigin="anonymous" src="/home/js/jquery-1.11.1.min.js"></script>
<script crossorigin="anonymous" src="/home/js/preact.min.js"></script>
<script crossorigin="anonymous" src="/home/js/polyfill.min.js"></script>
<script crossorigin="anonymous" src="/home/js/monitor.main.js"></script>
<script crossorigin="anonymous" src="/home/js/wenke/main.js"></script>
<script crossorigin="anonymous" src="/home/js/pc.main.js"></script>
<script crossorigin="anonymous" src="/home/js/df750fc.js"></script>
<script crossorigin="anonymous" src="/home/js/3f83f0e.js"></script>


            <div id="footer">
    <div class="ft-container">
        <div class="ft-box">
            <div class="ft-lft">
                <div class="ft-sogou-logo"><img src="/home/images/1.png" width="30" height="30" alt=""></div>
                <p class="ft-lft-txt">你想知道的这里都有</p>
                <p class="ft-lft-txt2">已解决问题:<em>262,016,584</em></p>
            </div>
            <ul class="ft-rgt">
                <li class="ft-rgt-section">
                    <div class="ft-rgt-tit">新手帮助</div>
                    <ul>
                        <li><a href="//wenwen.sogou.com/question/?qid=6257031425502416154&ch=ww.sy.wwdt1" class="ft-rgt-tab" target="_blank">如何提问</a></li>
                        <li><a href="//wenwen.sogou.com/question/?qid=6257031425502416154&ch=ww.sy.wwdt1" class="ft-rgt-tab" target="_blank">如何回答</a></li>
                    </ul>
                </li>
                <li class="ft-rgt-section">
                    <div class="ft-rgt-tit">投诉建议</div>
                    <ul>
                        <li><a href="http://ce.sogou.com/support/edit/wenwen?ch=newsy.bottom.support" class="ft-rgt-tab" target="_blank">举报不良信息</a></li>
                        <li><a href="http://ce.sogou.com/support/edit/wenwen?ch=newsy.bottom.support" class="ft-rgt-tab" target="_blank">意见反馈及投诉</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="ft-box2">
            <div class="ft-link"><a href="http://fuwu.sogou.com/" target="_blank">企业推广</a>&nbsp;&nbsp;&ndash;&nbsp;&nbsp;<a href="//pinyin.sogou.com/" target="_blank">输入法</a>&nbsp;&nbsp;&ndash;&nbsp;&nbsp;<a href="//ie.sogou.com/" target="_blank">浏览器</a>&nbsp;&nbsp;&ndash;&nbsp;&nbsp;<a href="//corp.sogou.com/private.html" target="_blank">隐私政策</a>&nbsp;&nbsp;&ndash;&nbsp;&nbsp;<a href="//www.sogou.com/docs/terms.htm" target="_blank">免责声明</a>&nbsp;&nbsp;&ndash;&nbsp;&nbsp;<a href="/cate/agreement" target="_blank">用户协议</a>&nbsp;&nbsp;&ndash;&nbsp;&nbsp;<a href="/question/?qid=6257031425502416154" target="_blank">帮助</a></div>
            <p class="ft-box2-lft">© 2018 Sogou Inc. 京ICP证050897号</p>
        </div>
    </div>
</div>        <div id="popup_wrap" style="z-index:2;"></div>
    <script crossorigin="anonymous" src="/home/js/idata.js"></script>
<script crossorigin="anonymous" src="/home/js/dt.main.js"></script></div>
</body>

</html>