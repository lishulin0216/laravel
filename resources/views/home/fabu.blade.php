

<!doctype html>
<html>
<head>
    
<meta charset="utf-8"/>
<title>问盍社区</title>
    <link rel="stylesheet" type="text/css" href="./home/css/tiwen.css" />
            <link rel="stylesheet" type="text/css" href="./home/css/tiwen2.css" />
    </head>

<body style="overflow-y: scroll">
    <div id="wrap">
        
<div id="header">
        <div class="login" data-score="0">
            <div id="userNotice" class="user-notice"></div>
        <span class="login-line"></span>
        <div class="user-option">
            <a href="/user/center" class="btn-user-option">
                <div class="user-thumb"><img src="http://thirdqq.qlogo.cn/g?b=sdk&k=TcRZXDK9NpYaIjhkOv7mjA&s=140&t=1510704539" width="100%" height="100%" alt="头像"></div>
                <div class="user-name-box"><div class="user-name">当空烈日久骄阳</div></div>
                <i class="arr-user"></i>
            </a>
            <ul class="popup-lst">
                <li><a href="/user/center?type=question&ch=newsy.id.ask">我的提问</a></li>
                <li><a href="/user/center?type=answer&ch=newsy.id.answer">我的回答</a></li>
                <li><a href="javascript:;" id="s_logout" >退出</a></li>
            </ul>
        </div>
    </div>
    <div class="searchnav">
        <ul class="topnav">
            <li><a href="http://news.sogou.com/news?ie=utf8&p=70330300" id="s_bar_news" ch="newsy.cpdh">新闻</a></li>
<li><a href="http://www.sogou.com/web?p=70330100" id="s_bar_search" ch="newsy.cpdh">网页</a></li>
<li><a href="http://weixin.sogou.com/weixin?p=75351202" id="s_bar_weixin" ch="newsy.cpdh">微信</a></li>
<li><a href="http://zhihu.sogou.com/?p=77351200" id="s_bar_zhihu" ch="newsy.cpdh">知乎</a></li>
<li><a href="http://pic.sogou.com/pics?p=77030500" id="s_bar_pic" ch="newsy.cpdh">图片</a></li>
<li><a href="http://v.sogou.com/v?p=77030600" id="s_bar_video" ch="newsy.cpdh">视频</a></li>
<li><a href="http://mingyi.sogou.com/mingyi" id="s_bar_mingyi" ch="newsy.cpdh">明医</a></li>
<li><a href="http://english.sogou.com" id="s_bar_english" ch="newsy.cpdh">英文</a></li>
<li class="cur"><span href="http://wenwen.sogou.com/" id="s_bar_wenwen">问问</span></li>
    <li><a href="http://www.sogou.com/docs/more.htm?p=70331800" id="s_bar_sogou_more" ch="newsy.cpdh">更多<span class="topraquo">&raquo;</span></a></li>
        </ul>
    </div>

    <div class="header">
        <div class="searchbox">
            <a href="/" title="到搜狗问问首页"><img src="//cache.soso.com/wenwen/images/wenwen_logo_ic@1x.png" alt="搜狗问问" srcset="//cache.soso.com/wenwen/images/wenwen_logo_ic@2x.png 2x" class="logo"></a>
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
            <li><a>特色<i></i></a>
                <ul class="mnav-menu">
                    <li><a href="//zhinan.sogou.com/?ch=ww.dh.zn" target="_blank">搜狗指南</a></li>
                    <li><a href="http://ld.sogou.com/?ch=ww.dh.lds" target="_blank">搜狗略懂</a></li>
                </ul>
            </li>
            <li><a href="http://yisheng.wenwen.sogou.com?ch=ww.dh.ys">问问医生<i></i></a>
                <ul class="mnav-menu">
                    <li><a href="//zhuanjia.sogou.com/yisheng">问问医生</a></li>
                    <li><a href="//zhuanjia.sogou.com/yisheng/category/main">名医问答</a></li>
                    <li><a href="//zhuanjia.sogou.com/yisheng/user/my-home">我的问诊</a></li>
                    <li><a href="//zhuanjia.sogou.com/yisheng/question/ask">我要咨询</a></li>
                </ul>
            </li>
            <li><a href="//zhuanjia.sogou.com/lvshi?ch=ww.dh.ls">问问律师<i></i></a>
                <ul class="mnav-menu">
                    <li><a href="//zhuanjia.sogou.com/lvshi/">问问律师</a></li>
                    <li><a href="//zhuanjia.sogou.com/lvshi/cate/main">律师回答</a></li>
                    <li><a href="//zhuanjia.sogou.com/lvshi/user/my-home">我的咨询</a></li>
                    <li><a href="//zhuanjia.sogou.com/lvshi/question/ask">我要咨询</a></li>
                </ul>
            </li>
            <li><a href="/cate/mall?ch=ww.mall.enter">问豆商城</a></li>
            <li class="mnav-rgt"><a href="/user/center/?ch=ww.dh.grzx">个人中心</a></li>
        </ul>
    </div>

</div>
        

<div id="container">
    <div class="content">
        <div class="aside">
            <!-- 精彩回答 -->
            <div class="aside-section">
                <div class="aside-ask">
                    <h3 class="aside-ask-tit">提问的正确姿势</h3>
                    <ol class="aside-ask-lst">
                        <li><span>①</span> 问题要具体、语句通顺，不寻求模糊空洞的答案。广告等违反社区规则的提问将被删除并给予处罚。</li>
                        <li><span>②</span> 句式、标点符号使用严谨，问题尽量不含有与问题本身无关的词语（如：跪求大神，急急急）。</li>
                        <li><span>③</span> 打上正确的标签、添加悬赏将有助于更快地获得满意回答。</li>
                    </ol>
                </div>
            </div>
            <!-- //精彩回答 -->
        </div>

        <div class="main">
            <div class="ask-wrap">
                                                    <h1 class="ask-tit">描述您的问题</h1>
                                <div class="popup-tit">问题描述<span class="popup-tit-required">（必填）<i>*</i></span></div>
                <!-- 默认态：ipt-default;
                     输入状态：ipt-cur;
                     输入有误状态：ipt-err;-->
                <!-- 标题-激活 -->
                <div class="ipt-box ipt-cur">
                    <input type="text" id="ask_title" placeholder="一句话描述您的问题" class="popup-txtarea textarea" data-maxlength="40">
                    <div class="ipt-limit wordsLimit">可以输入<em>40</em>个字</div>
                    <div class="prompt-box err_tips hide"></div>
                    <!-- 答案列表 -->
                    <div class="ipt-lst-question same_question_box hide">
                        <div class="ipt-tit-question"><a href="javascript:;" class="btn-ipt-tit-question close_same_question">关闭</a>您的问题可能已经有了答案：</div>
                        <ul class="popup-lst-question same_question_list"></ul>
                    </div>
                    <!-- //答案列表 -->
                </div>
                <!-- //标题-激活 -->
                <div class="desc_ask">
                    <div class="ipt-bar"><span class="ipt-bar-txt">问题补充说明：</span></div>
                    <div class="ipt-box">
                        <textarea id="ask_content" cols="30" rows="3" placeholder="在这里继续补充您的问题细节" class="popup-txtarea popup-txtarea-h4 textarea" data-maxlength="200"></textarea>
                        <div class="ipt-limit wordsLimit">可以输入<em>200</em>个字</div>
                    </div>
                </div>
                <div class="ipt-bar ask_opera">
                    <a href="javascript:;" class="ipt-add-thumb add_pic" style="position: relative;"><i></i>添加图片
                        <form style="position: absolute;left:0;top:0;filter:alpha(opacity=0);opacity:0;" id="uploadImgForm" enctype="multipart/form-data" target="uploadImgIfr" name="uploadImg" method="post" action="/submit/qun/upload-pic-ie8">
                            <div style="display:none;"><input type="hidden" name="formids" value="If_1,pic"><input type="hidden" name="submitmode" value="submit"><input type="hidden" name="submitname" value=""><input type="hidden" name="If_1" value="F"></div>
                            <input accept="image/*" type="file" name="pic" id="pic" style="width:82px;height:19px;overflow: hidden;cursor:pointer;" multiple>
                        </form>
                        <iframe id="uploadImgIfr" name="uploadImgIfr" src="javascript:void((function(){document.open();document.domain='sogou.com';document.close()})());" style="display: none;"></iframe>
                    </a>
                </div>
                <!-- 图片 -->
                <div id="picShowWrap" class="hide">
                    <div class="pic-area">
                        <div class="picWrap"></div>
                        <div class="pic-section add_ask_image"><a href="javascript:;" class="pic-tab-more"><i></i>还可添加<em id="ask_uploadImage_num">5</em>张</a></div>
                    </div>
                    <div class="pic-area-txt">上传说明: 每张图片大小不超过5M，格式为jpg、bmp、png</div>
                </div>
                <!-- //图片 -->
                <div class="popup-tit">问题标签<span class="ipt-rgt-txt">正确的标签能够获得更专业的回答</span></div>
                <div class="ipt-box ipt-default select_tags">
                    <div class="ipt-srch-box tag_search_wrap">
                        <i class="ipt-srch-icon">搜索</i>
                        <input type="text" placeholder="搜索标签" class="ipt-popup-srch placeholder-txt tag_search_inp">
                        <ul class="popup-lst tag_search_box"></ul>
                    </div>
                </div>
                <div class="popup-tit">问题悬赏</div>
                <!-- 问题悬赏 -->
                <div class="popup-reward score_list  dim ">
                    <a href="javascript:;" class="btn-popup-reward select_score">
                        <i class="arr-popup-reward"></i>
                        <i class="ico-popup-reward"></i>
                        <em class="score_val" data-oldscore="0"> 0 </em>
                    </a>
                    <ul class="popup-reward-lst">
                        <li><a href="javascript:;" class="score_sel"><i class="ico-popup-reward"></i>0</a></li>
                        <li><a href="javascript:;" class="score_sel"><i class="ico-popup-reward"></i>5</a></li>
                        <li><a href="javascript:;" class="score_sel"><i class="ico-popup-reward"></i>10</a></li>
                        <li><a href="javascript:;" class="score_sel"><i class="ico-popup-reward"></i>20</a></li>
                        <li><a href="javascript:;" class="score_sel"><i class="ico-popup-reward"></i>30</a></li>
                        <li><a href="javascript:;" class="score_sel"><i class="ico-popup-reward"></i>50</a></li>
                    </ul>
                                            <div class="popup-reward-txt">您目前问豆为: <em class="emphasis-clr2">0</em><br>不足以支付赏金哦~</div>
                                    </div>
                <!-- //问题悬赏 -->
                <div id="validCodeWrap"></div>
                <!-- ft-bar -->
                <div class="ft-bar">
                    <div class="ft-btn-box">
                        <a href="javascript:;" id="submit_question" class="btn-reply-submit">提&nbsp;&nbsp;&nbsp;&nbsp;交</a>
                    </div>
                    <!-- 短信验证 -->
                    <div class="btn-anonymous" id="smsVerify">
                    </div>
                    <div class="btn-anonymous">
                        <input type="checkbox" id="ask_anonymous">
                        <label for="ask_anonymous">匿名</label>
                    </div>
                </div>
                <!-- //ft-bar -->
            </div>
        </div>
    </div>
</div>



<script>
    var _gtag = _gtag || {};

    _gtag = {
        static_files_prefix: '/sf',
        userId: '1106846993',
        uid: '44489891',
        orig: 253,
        userName: '%E5%BD%93%E7%A9%BA%E7%83%88%E6%97%A5%E4%B9%85%E9%AA%84%E9%98%B3',
        traceId: '23b1b2a05d6db8676cf187dd3f8223c4',
        isLogin : true,
        bindPhone:'',
        userMoney: '0',
        search_url : '/s/?w=',
        ajax: {
            smartbox: 'http://sugg.search.wenwen.sogou.com/service-search/ajax/smartbox'
        },
        captcha: false,
        helperSelf: 'false' === 'true'
    };

</script>

<script crossorigin="anonymous" src="./home/js/jquery-1.11.1.min.js"></script>
<script crossorigin="anonymous" src="./home/js/preact.min.js"></script>
<script crossorigin="anonymous" src="./home/js/polyfill.min.js"></script>
<script crossorigin="anonymous" src="./home/js/monitor.main.js"></script>
<script crossorigin="anonymous" src="./home/js/wenke.main.js"></script>
<script crossorigin="anonymous" src="./home/js/pc.main.js"></script>
<script crossorigin="anonymous" src="./home/js/63ed866.js"></script>
<script crossorigin="anonymous" src="./home/js/4e5e2cd.js"></script>





        <div id="footer">
    <div class="ft-container">
        <div class="ft-box">
            <div class="ft-lft">
                <div class="ft-sogou-logo"></div>
                <p class="ft-lft-txt">你想知道的这里都有</p>
                <p class="ft-lft-txt2">已解决问题:<em>262,007,030</em></p>
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
        <div id="imagePreview_wrap"></div>
    </div>
    <script crossorigin="anonymous" src="./home/js/idata.js"></script>
<script crossorigin="anonymous" src="./home/js/dt.main.js"></script></body>

</html>