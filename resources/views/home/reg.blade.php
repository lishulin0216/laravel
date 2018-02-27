<!DOCTYPE html>
<!-- saved from url=(0027)http://www.350mb.com/zhuce/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>问答注册</title>
<link rel="stylesheet" href="./home/home.zhuce_files/layout.css" type="text/css">
<script src="./home/home.zhuce_files/jquery.min.js"></script>
<script src="./home/home.zhuce_files/activate.js"></script>
<link rel="stylesheet" rev="stylesheet" href="./home/home.zhuce_files/txcstx.css" type="text/css" media="all">
<link rel="stylesheet" rev="stylesheet" href="./home/home.zhuce_files/font-awesome.min.css" type="text/css" media="all">

</head>

<body>
<script type="text/javascript">
$(document).ready(function(){
  $.init();
//$('[name="key"]').val(ajhm);
//$(".key").val(ajhm);
});
</script>
<style>body {

    margin: 0px;

    padding: 0px;

    color: #666;

    font-size: 0.875em;

    font-family: "Microsoft YaHei", Verdana, sans-serif;

    background-color: #ffffff;

    line-height: 24px;

}</style>

<script src="./home/home.zhuce_files/menu.js" type="text/javascript"></script><div class="topa"></div>


<div style="background: #F9F9F9;padding-top: 30px">

<div class="allWidth clearfix">
      <span class="memberTop"></span>
      <div class="sideBlock" style="position: relative; top: -10px; margin-top: 0">
        <div style="position: relative; top: -60px" class="register">
          <div class="regTitle">
            <span>新用户注册</span> <font style="color:#FF6F3B"></font>
          </div>
             <div id="bd" class="layout" style=" overflow:hidden; margin-left:-30px">
             
<div id="bd" class="layout">
  <div class="jh-content clear">
             
      </div>
      <div class="jh-form formPanel" data-regtype="phone">
    <form action="http://u.350.net/activate/submit" class="jh-formP">
        <input type="hidden" name="isnew" value="0">
    
    
        <div class="control-group phone-group">
          <label class="control-label">手机号：</label>
          <div class="control">
            <input class="text" type="text" placeholder="输入您的手机号" style="width: 120px; border-color: rgb(204, 204, 204);" name="phone"><a href="http://www.350mb.com/activate.html#" class="send_sms">发送验证码</a><div class="tips phoneTips"><p class="error"><span class="icon_delS"></span>请填写手机号</p></div>
            <div class="switch-reg"></div>
          </div>
        </div>
    <div class="control-group phonecode-group" style="display:none">
          <label class="control-label">短信验证码：</label>
          <div class="control">
            <input class="text" type="text" placeholder="输入短信验证码" style="width: 120px;" name="pcode">
            <div class="tips phonecodeTips"></div>
          </div>
        </div>
    <div class="control-group email-group" style="display:none">
          <label class="control-label">Email：</label>
          <div class="control">
            <ul class="emailist" style="position: absolute; margin-top: 0px; visibility: hidden; z-index: 9999;"></ul><input class="text" type="text" placeholder="输入您的电子邮箱" autocomplete="off" name="email">
            <input style="display:none">
            <div class="switch-reg">或使用<a href="http://www.350mb.com/activate.html#">手机注册</a></div>
          </div>
        </div>
    
    
        <div class="control-group jh-pwd">
          <label class="control-label">密码：</label>
          <div class="control">
            <input class="text" type="password" placeholder="输入密码" name="pwd" maxlength="20" style="border-color: rgb(204, 204, 204);"><div style="height:22px"><div class="tips pwdTips"><p class="error"><span class="icon_delS"></span>密码长度应为6~16个字符</p></div><div class="pswState pswState-poor" style="display:none"><span class="s1">弱</span> <span class="s2">中等</span> <span class="s3">强</span></div></div>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">重复密码：</label>
          <div class="control">
            <input class="text" type="password" placeholder="再次输入密码" name="pwd2" maxlength="20" style="border-color: rgb(204, 204, 204);"><div class="tips pwd2Tips"><p class="error"><span class="icon_delS"></span>请再次输入密码</p></div>
          </div>
        </div>
    
        <div class="control-group vcode-group" style="display:none">
          <label class="control-label">验证码：</label>
          <div class="control">
            <input class="text" type="text" name="vcode" style="width:60px" placeholder="验证码" maxlength="4">
            <img src="./captcha" width="100" height="40" data-url="http://u.350.net/captcha?" class="d-ib vcode"><a href="http://www.350mb.com/activate.html#" class="d-ib vcode-ce">看不清？</a> </div>
        </div>
        <div class="opt-footer" style="clear:both">
          <input type="button" value="确认提交" class="button-box btn-ok">
        </div>
    </form>
</div>
      
  </div>
</div>
<script id="J_jh_html" type="text/html">
    <form action="http://u.350.net/activate/submit" class="jh-formP">
        <input type="hidden" name="isnew" value="<%=tp%>">
        <div class="control-group">
          <label class="control-label">用户名：</label>
          <div class="control">
            <input class="text" type="text" placeholder="用户名" name="uname" maxlength="21">
      <div class="tips keyTips"></div>
          </div>
        </div>
        
    <%if(tp==0){%>
        <div class="control-group phone-group">
          <label class="control-label">手机号：</label>
          <div class="control">
            <input class="text" type="text" placeholder="输入您的手机号" style="width: 120px;" name="phone"><a href="#" class="send_sms">发送验证码</a><div class="tips phoneTips"></div>
            <div class="switch-reg"></div>
          </div>
        </div>
    <div class="control-group phonecode-group" >
          <label class="control-label">短信验证码：</label>
          <div class="control">
            <input class="text" type="text" placeholder="输入短信验证码" style="width: 120px;" name="pcode">
            <div class="tips phonecodeTips"></div>
          </div>
        </div>
    
    <%}else{%>
        
    <%}%>
    <%if(tp==0){%>
        <div class="control-group jh-pwd">
          <label class="control-label">密码：</label>
          <div class="control">
            <input class="text" type="password" placeholder="输入密码" name="pwd" maxlength="20"><div style="height:22px"><div class="tips pwdTips"><p class="notice"><span class="icon_askS"></span>6~16个字符</p></div><div class="pswState pswState-poor" style="display:none"><span class="s1">弱</span> <span class="s2">中等</span> <span class="s3">强</span></div></div>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">重复密码：</label>
          <div class="control">
            <input class="text" type="password" placeholder="再次输入密码" name="pwd2" maxlength="20"><div class="tips pwd2Tips"></div>
          </div>
        </div>
    <%}%>
        
        <div class="opt-footer" style="clear:both">
          <input type="button" value="确认提交" class="button-box btn-ok">
        </div>
    </form>
</script>




            </div>
        </div>
      </div>
</div>


<link rel="stylesheet" type="text/css" href="./home/home.zhuce_files/kefu.css">

<script type="text/javascript" src="./home/home.zhuce_files/kefu.js"></script>
</div></body></html>