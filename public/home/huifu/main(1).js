!function e(t,n,o){function r(a,s){if(!n[a]){if(!t[a]){var d="function"==typeof require&&require;if(!s&&d)return d(a,!0);if(i)return i(a,!0);var p=new Error("Cannot find module '"+a+"'");throw p.code="MODULE_NOT_FOUND",p}var c=n[a]={exports:{}};t[a][0].call(c.exports,function(e){var n=t[a][1][e];return r(n?n:e)},c,c.exports,e,t,n,o)}return n[a].exports}for(var i="function"==typeof require&&require,a=0;a<o.length;a++)r(o[a]);return r}({1:[function(e,t,n){e("./handler/entry"),e("./pubsub"),e("./handler/realName/realNameVerify"),(document.referrer&&document.referrer.indexOf("/qunapp/friends/")>-1||location.href.indexOf("share=true")>-1||location.href.indexOf("fromQun=1")>-1||location.href.indexOf("card=1")>-1||location.href.indexOf("notice=1")>-1||parent.location.href.indexOf("/qunapp/new-remind/")>-1)&&(_gtag.fromQun=!0,_gtag.sendCard=!0),window.WKRWDOMAIN=function(e){return"string"==typeof e?location.host.indexOf(".sogou.com")>-1?e.replace(".sogo.com",".sogou.com"):e.replace(".sogou.com",".sogo.com"):e},function(e){return!!e&&void(e.loadScript=function(){var t={},n={},o={},r={url:"",scriptCharset:"",success:null,error:null};return function(i){i=e.extend({},r,i);var a=i.url;if(!a)return!1;if(o[a])return"function"==typeof i.success&&i.success(),!1;if("function"==typeof i.success&&(n[a]?n[a].push(i.success):n[a]=[i.success]),!t[a]){t[a]=!0;var s=document.createElement("script"),d=document.getElementsByTagName("head")[0];i.scriptCharset&&(s.charset=i.scriptCharset),s.async=!0,s.src=a,s.onload=s.onreadystatechange=function(){if((!s.readyState||/loaded|complete/.test(s.readyState))&&(s.onload=s.onreadystatechange=null,s=null,o[a]=!0,n[a]&&n[a].length>0))for(var e=0,t=n[a].length;e<t;e++)"function"==typeof n[a][e]&&n[a][e]()},s.onerror=function(){t[a]=!1,s.onerror=null,s=null,"function"==typeof i.error&&i.error(),window.badjs.report({url:a,stack:"loadJSEx"},EX_TYPE.loadJSEx)},d.appendChild(s)}}}())}(window.jQuery||window.Zepto)},{"./handler/entry":5,"./handler/realName/realNameVerify":7,"./pubsub":8}],2:[function(e,t,n){n=t.exports={setCookie:function(e,t,n,o,r){var i="";n instanceof Date?i="; expires="+n.toGMTString():null!=n&&(i=new Date((new Date).getTime()+36e5*n),i="; expires="+i.toGMTString()),o="undefined"==typeof o?"":"; domain="+o,r="undefined"==typeof r?"":"; path="+r,document.cookie=e+"="+encodeURIComponent(t)+i+o+r},getCookie:function(e){for(var e=encodeURIComponent(e),t=document.cookie.split(";"),n=0,o=t.length;n<o;n++){var r=t[n].split("="),i=decodeURIComponent(r.shift()),a=r.join("=");if(e===i.replace(/^\s+|\s+$/g,""))try{return decodeURIComponent(a)}catch(s){return a=unescape(a),Cookie.setCookie(i,a),a}}return""},delCookie:function(e,t,n){var o="; expires=Mon, 26 Jul 1997 05:00:00 GMT";t="undefined"==typeof t?"":"; domain="+t,n="undefined"==typeof n?"":"; path="+n,document.cookie=e+"="+o+t+n}}},{}],3:[function(e,t,n){n.getDomainType=function(){var e="wenwen",t=location.hostname.toLowerCase();switch(3==t.match(/\./g).length&&(t=t.slice(t.indexOf(".")+1)),t){case"wenwen.sogou.com":case"wenwen.sogo.com":case"wenwen.m.sogou.com":e="wenwen";break;case"ld.sogo.com":case"ld.sogou.com":e="ld";break;case"zhinan.sogo.com":case"zhinan.sogou.com":e="zhinan";break;case"baike.sogo.com":case"baike.sogou.com":case"baike.m.sogou.com":e="baike";break;case"zhuanjia.sogou.com":case"zhuanjia.sogo.com":e="zhuanjia"}return e},n.getSogouOrSogo=function(){return location.host.indexOf(".sogou.com")>-1?"sogou":"sogo"}},{}],4:[function(e,t,n){function o(){var e=["qun_t0","qun_t1","qun_to","qun_tl"],t=e.length;if(t>0){var n=Math.floor(Math.random()*e.length);s=e[n],d=c.getCookie(s),d&&c.delCookie(s,"."+f+".com","/")}}function r(){s&&d&&c.setCookie(s,d,1,"."+f+".com","/")}function i(e,t){var n=document.createElement("a");n.href=e;for(var o=n.hostname,r=n.search,i=r.split("&"),a=[],s=0;s<i.length;s++){var d=i[s];d.indexOf("_=")==-1&&a.push(d)}return t?o:n.pathname+(r.indexOf("?")==-1||i[0].indexOf("_")!=-1?"?":"")+a.join("&")}function a(e,t,n){if(n(e,t),"jsonp"===t.dataType)return!1;var r=t.url,a=/^(\s+)\/.*/,s=/.*(\s+)$/;if(r.match(a)||r.match(s))throw new Error('ajax请求url非法, 不能包含空格, url: "'+t.url+'"');window._gtag&&_gtag.qunId&&(r.indexOf("?")!=-1?t.url=r+"&groupUin="+_gtag.qunId:t.url=r+"?groupUin="+_gtag.qunId);var d=t.type||"get";d=d.toLowerCase(),t.bsRepeat===!0&&(t.url+=(t.url.indexOf("?")>-1?"&rnd=":"?rnd=")+Math.random());var p=!1,c=i(t.url);return window.ajaxSingleton[c]?p=!0:("post"===d&&o(),window.ajaxSingleton[c]=!0,window.ajaxSpentTime[c]=(new Date).getTime()),p}var s,d,p="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},c=e("./../../cookie/entry"),w=e("./origin.js"),l=window.jQuery||window.Zepto,u=e("../../domain"),f=u.getSogouOrSogo();window.ajaxSingleton={},window.ajaxSpentTime={},"object"!=("undefined"==typeof console?"undefined":p(console))&&(window.console={},console.log=function(){}),l&&(l(document).on("ajaxError",function(e,t,n,o){if("string"==typeof o&&(o=o.toLowerCase(),"abort"===o||"canceled"===o))return!1;var a=n.type;a&&"post"===a.toLowerCase()&&r();var s=t.url||n.url,d=i(s);if(window.ajaxSingleton[d]=!1,window.ajaxSpentTime[d]=(new Date).getTime()-window.ajaxSpentTime[d],s.indexOf("//")===-1&&s.toLowerCase().indexOf("http:")===-1&&s.toLowerCase().indexOf("https:")===-1&&(s=location.protocol+"//"+location.host+s),s.toLowerCase().indexOf("pex.wenwen."+f+".com")>-1||s.toLowerCase().indexOf("err.wenwen."+f+".com")>-1||s.toLowerCase().indexOf("cs.wenwen."+f+".com")>-1)return!1;try{if("post"===a.toLowerCase()){var p=n.data||"No post data";window.badjs.report({type:"ajaxPOST",url:s.indexOf("?")>-1?s.split("?")[0]:s,requestData:p,responseText:{readyState:t.readyState,status:t.status,statusText:t.statusText,responseText:o},stack:"ajaxError"},EX_TYPE.ajaxEx)}else if("get"===a.toLowerCase()){var c="";s.indexOf("?")>-1&&(c=s.split("?")[1]),window.badjs.report({type:"ajaxGET",url:s.indexOf("?")>-1?s.split("?")[0]:s,requestData:c,responseText:o,stack:"ajaxError"},EX_TYPE.ajaxEx)}}catch(w){}}),l(document).on("ajaxSuccess",function(e,t,n,o){var a=n.type;a&&"post"===a.toLowerCase()&&r();var s=t.url||n.url,d=i(s);if(window.ajaxSingleton[d]=!1,window.ajaxSpentTime[d]=(new Date).getTime()-window.ajaxSpentTime[d],s.toLowerCase().indexOf("pex.wenwen."+f+".com")>-1||s.toLowerCase().indexOf("err.wenwen."+f+".com")>-1||s.toLowerCase().indexOf("cs.wenwen."+f+".com")>-1)return!1;s.indexOf("//")===-1&&s.toLowerCase().indexOf("http:")===-1&&s.toLowerCase().indexOf("https:")===-1&&(s=location.protocol+"//"+location.host+s);try{if("post"===a.toLowerCase()&&"object"===("undefined"==typeof o?"undefined":p(o))&&("number"==typeof o.retCode||"number"==typeof o.code||"object"===p(o.result)&&"number"==typeof o.result.errno)){var c=o.retCode||o.code||o.result.errno;if(c===-1){var w=n.data||"No post data";window.badjs.report({type:"ajaxPOST",url:s.indexOf("?")>-1?s.split("?")[0]:s,requestData:w,responseText:JSON.stringify(o),stack:"ajaxSuccess"},EX_TYPE.ajaxSucEx)}}}catch(l){}}),l.ajaxSetup?l.ajaxSetup({cache:!1,beforeSend:function(e,t){var n=a(e,t,w.addCommonData);if(n)return!1},dataFilter:function(e,t){var n={};try{n=JSON.parse(e)}catch(o){}return!n||"boolean"!=typeof n.bindPhone||n.bindPhone||t.notAjaxVerify||window.RNV&&window.RNV(null,null,!1).verify(),e}}):(l.ajaxSettings.cache=!1,l.ajaxSettings.beforeSend=function(e,t){var n=a(e,t,w.addCommonData);if(n)return!1},l.ajaxSettings.dataFilter=function(e,t){var n={};try{n=JSON.parse(e)}catch(o){}return n&&"boolean"==typeof n.bindPhone&&!n.bindPhone&&window.RNV&&window.RNV(null,null,!1).verify(),e}))},{"../../domain":3,"./../../cookie/entry":2,"./origin.js":6}],5:[function(e,t,n){e("./ajax")},{"./ajax":4}],6:[function(e,t,n){function o(e,t){var n=/android|iphone/gi,o=window.navigator.userAgent,i=n.test(o);if((location.hostname.indexOf("ld."+a+".com")>-1||location.href.indexOf("wenwen."+a+".com/mobile")>-1)&&i){var s=location.hostname.indexOf("ld."+a+".com")>-1?4:1,d=i?254:253,p=t.data,c=t.type,w=t.contentType;if("post"==c.toLowerCase()){if(w&&w.toLowerCase().indexOf("application/json")>-1&&p){try{p=JSON.parse(p)}catch(l){}"object"==("undefined"==typeof p?"undefined":r(p))&&void 0==p.origin&&(p.origin=s),"object"==("undefined"==typeof p?"undefined":r(p))&&void 0==p.orig&&(p.orig=d),p=JSON.stringify(p),t.data=p}else if(!w||w.toLowerCase().indexOf("application/x-www-form-urlencoded")>-1){var u=t.url;p||u.indexOf("origin=")!=-1?"string"==typeof p&&p.indexOf("origin=")==-1&&(p+="&origin="+s):(u+=u.indexOf("?")>-1?"&origin="+s:"?origin="+s,t.url=u),p||u.indexOf("orig=")!=-1?"string"==typeof p&&p.indexOf("orig=")==-1&&(p+="&orig="+d):(u+=u.indexOf("?")>-1?"&orig="+d:"?orig="+d,t.url=u),p&&(t.data=p)}}else{var u=t.url;u.indexOf("orig=")==-1&&(u+=u.indexOf("?")==-1?"?orig=254":"&orig=254"),u.indexOf("origin=")==-1&&(u+="&origin="+s),t.url=u}}}var r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},i=e("../../domain"),a=i.getSogouOrSogo();n.addCommonData=o},{"../../domain":3}],7:[function(e,t,n){var o=e("../../../domain"),r=o.getSogouOrSogo(),i=/android|iphone/gi,a=window.navigator.userAgent,s=i.test(a),d=/android/gi.test(a),p=window.jQuery||window.Zepto,c=function(e,t,n,r,i,a){this.app=o.getDomainType(),this.loginFunc=e,this.verifiedCallback=t,this.excuteVerifiedCallback=n,this.closeCallback=r,this.sync=i,this.report=a};c.prototype.verify=function(){var e=this,t="zhinan"==this.app?"/guide/bind/check-bind":"/login/check-bind",n={url:t,dataType:"json",success:function(t){t&&0===t.code&&(t.login?t.bind?"function"==typeof e.verifiedCallback&&e.verifiedCallback():(document.activeElement.blur(),setTimeout(function(){d&&p(".ww-video video").hide(),e.showPrompt()},250)):"function"==typeof e.loginFunc?e.loginFunc():"function"==typeof e.verifiedCallback&&e.verifiedCallback())}};e.sync&&(n.async=!1),p.ajax(n)},c.prototype.bindPhoneNum=function(e,t){var n=this,o="zhinan"===this.app?"/guide/bind/bind-phone":"/login/bind-phone",r=p("#rnvPhoneWrap"),i=p(".rnvCodeWrap"),a=function(){"wenwen"===n.app?s?window.DT&&DT.reportCLK("ww.wap.smrz.error"):window.DT&&DT.reportCLK("ww.smrz.error"):"baike"===n.app?s?(window.stget&&stget("bk.wap.smrz.error"),window.DT&&DT.reportCLK("bk.wap.smrz.error")):(window.stget&&stget("bk.smrz.error"),window.DT&&DT.reportCLK("bk.smrz.error")):"zhinan"===n.app?s?(window.stget&&stget("zn.wap.smrz.error"),window.DT&&DT.reportCLK("zn.wap.smrz.error")):(window.stget&&stget("zn.smrz.error"),window.DT&&DT.reportCLK("zn.smrz.error")):"ld"===n.app&&(s?window.DT&&DT.reportCLK("ld.wap.smrz.error"):(window.stget&&stget("ld.smrz.error"),window.DT&&DT.reportCLK("ld.smrz.error")))};p.ajax({url:o,data:{phone:e,sms_code:t},type:"post",dataType:"json",success:function(t){t&&(0===t.code?("wenwen"===n.app?p.ajax({url:"/submit/ms/bind/take-prize",data:JSON.stringify({orig:_gtag.orig||orig,clbUid:_gtag.clbUid||"",userId:_gtag.userId||""}),type:"post",dataType:"json",success:function(t){0===t.code?n.getSuccessPopup(e,!0):n.getSuccessPopup(e,!1)},error:function(){n.getSuccessPopup(e,!1)}}):n.getSuccessPopup(e),n.verified=!0,"wenwen"===n.app?s?(window.stget&&stget("ww.wap.smrz.success"),window.DT&&DT.reportCLK("ww.wap.smrz.success")):(window.stget&&stget("ww.smrz.success"),window.DT&&DT.reportCLK("ww.smrz.success")):"baike"===n.app?s?window.DT&&DT.reportCLK("bk.wap.smrz.success"):window.DT&&DT.reportCLK("bk.smrz.success"):"zhinan"===n.app?s?window.DT&&DT.reportCLK("zn.wap.smrz.success"):window.DT&&DT.reportCLK("zn.smrz.success"):"ld"===n.app&&(s?window.DT&&DT.reportCLK("ld.wap.smrz.success"):window.DT&&DT.reportCLK("ld.smrz.success")),this.report&&window.DT&&window.DT.reportCLK(this.report)):t.code===-2?(r.find(".rnverrtip").html("当前手机号已绑定其他用户"),r.addClass("err")):t.code===-4?(r.find(".rnverrtip").html("当前用户已绑定手机号，不能重复绑定"),r.addClass("err")):t.code===-5?(i.find(".rnverrtip").html("请输入正确的验证码"),i.addClass("err")):t.code===-3?(r.find(".rnverrtip").html("当前用户不存在，请刷新页面试试~"),r.addClass("err")):t.code===-1&&(r.find(".rnverrtip").html("绑定失败~"),r.addClass("err")),0!==t.code&&a())},error:function(){a()}})},c.prototype.showToast=function(e){p(".real-name-tips").length?(p(".real-name-tips").find("span").html(e).parent().hide(),setTimeout(function(){p(".real-name-tips").show()},0)):p("body").prepend('<div class="real-name-tips"><span>'+e+"</span></div>")},c.prototype.sendVerifitionCode=function(e){var t=this,n="zhinan"===this.app?"/guide/bind/send-sms":"/login/send-sms",o=(p(".rnvCodeWrap"),p("#rnvGetCode")),r=p("#rnvPhoneWrap");p.ajax({url:n,type:"post",data:{phone:e},dataType:"json",success:function(e){if(e&&0===e.code){r.removeClass("err");var n=120;o.html("重新发送("+n+"s)").addClass("done");var i=setInterval(function(){n-=1,n>0?o.html("重新发送("+n+"s)"):0===n&&(o.html("获取验证码").removeClass("done"),clearInterval(i))},1e3)}else if(e&&e.code===-2)if(s)t.showToast("今日次数已达上限，请明日再试~");else{var a=p(".rnvGetCodeWrap");o.addClass("done"),a.addClass("empty")}else e&&e.code===-3&&(r.find(".rnverrtip").html("此手机号已经绑定，请更换"),r.addClass("err"))}})},c.prototype.bindEvent=function(){var e=this;p(".rnvPopWrap, .attestation-mask").on("touchstart touchmove touchend",function(e){e.stopPropagation()}),s&&p(".rnvPopWrap, .attestation-mask").on("touchmove",function(e){e.preventDefault()});var t=p("#rnvGetCode"),n=p(".rnvProtocolCheck"),o=p("#rnvConfirm"),r=/^1[3456789]\d{9}$/,i=p("#rnvPhoneNum"),a=p("#rnvPhoneWrap"),d=p(".rnvCodeWrap"),c=p("#rnvVertifyCode"),w=/^\d{4}$/;s&&setTimeout(function(){p(".rnvPopWrap").css("height",window.innerHeight)},0);var l=p(".rnvProtocolWrap");n.on("click",function(e){e.stopPropagation(),l.hasClass("checked")?l.removeClass("checked"):l.addClass("checked")}),t.on("click",function(t){t.stopPropagation();var n=p(this);if(!n.hasClass("done")){var o=i.val();if(!o)return a.find(".rnverrtip").html("请输入手机号"),void a.addClass("err");if(!r.test(o))return a.find(".rnverrtip").html(e.getphontErrText()),void a.addClass("err");e.sendVerifitionCode(o),"zhinan"===e.app?(window.stget&&stget("zn.smrz.sendmsg"),window.DT&&DT.reportCLK("zn.smrz.sendmsg")):"wenwen"===e.app?s?(window.stget&&stget("ww.wap.smrz.send"),window.DT&&DT.reportCLK("ww.wap.smrz.send")):(window.stget&&stget("ww.smrz.send"),window.DT&&DT.reportCLK("ww.smrz.send")):"ld"===e.app?s?(window.stget&&stget("ld.smrz.sendmsg.wap"),window.DT&&DT.reportCLK("ld.smrz.sendmsg.wap")):(window.stget&&stget("ld.smrz.sendmsg.pc"),window.DT&&DT.reportCLK("ld.smrz.sendmsg.pc")):"baike"===e.app&&(window.stget&&stget("bk.smrz.sendmsg"),window.DT&&DT.reportCLK("bk.smrz.sendmsg"))}}),i.on("input",function(e){e.stopPropagation(),a.removeClass("err")}),i.on("blur",function(t){var n=t.target.value;p.trim(n)?r.test(n)||(a.find(".rnverrtip").html(e.getphontErrText()),a.addClass("err")):(a.find(".rnverrtip").html("请输入手机号"),a.addClass("err"))}),o.on("click",function(t){t.stopPropagation();var n=i.val(),o=c.val();return"zhinan"===e.app?(window.stget&&window.stget("zn.smrz.confirm"),window.DT&&window.DT.reportCLK("zn.smrz.confirm")):"wenwen"===e.app?s?(window.stget&&window.stget("ww.wap.smrz.confirm"),window.DT&&window.DT.reportCLK("ww.wap.smrz.confirm")):(window.stget&&window.stget("ww.smrz.confirm"),window.DT&&window.DT.reportCLK("ww.smrz.confirm")):"ld"===e.app?s?(window.stget&&window.stget("ld.smrz.confirm.wap"),window.DT&&window.DT.reportCLK("ld.smrz.confirm.wap")):(window.stget&&window.stget("ld.smrz.confirm.pc"),window.DT&&window.DT.reportCLK("ld.smrz.confirm.pc")):"baike"===e.app&&(window.stget&&window.stget("bk.smrz.confirm"),window.DT&&window.DT.reportCLK("bk.smrz.confirm")),n?r.test(n)?o?w.test(o)?void(l.hasClass("checked")&&e.bindPhoneNum(n,o)):(d.find(".rnverrtip").html("请输入正确的验证码"),void d.addClass("err")):(d.find(".rnverrtip").html("请输入验证码"),void d.addClass("err")):(a.find(".rnverrtip").html(e.getphontErrText()),void a.addClass("err")):(a.find(".rnverrtip").html("请输入手机号"),void a.addClass("err"))}),c.on("input",function(){d.removeClass("err")}),c.on("blur",function(e){var t=e.target.value;p.trim(t)?w.test(t)||(d.find(".rnverrtip").html("请输入正确的验证码"),d.addClass("err")):(d.find(".rnverrtip").html("请输入验证码"),d.addClass("err"))});var u=p(".rnPopClose"),f=p(".rnvPopWrap");u.on("click",function(t){t.stopPropagation(),f.remove(),p(".attestation-mask").remove(),p("body").css("overflow","auto"),p(".ww-video video").show(),$("body").removeClass("iosBugFixCaret"),"function"==typeof e.closeCallback&&e.closeCallback(),e.verified?"zhinan"===e.app?(window.stget&&window.stget("zn.smrz.done"),window.DT&&window.DT.reportCLK("zn.smrz.done")):"ld"===e.app?s?(window.stget&&window.stget("ld.smrz.close2.wap"),window.DT&&window.DT.reportCLK("ld.smrz.close2.wap")):(window.stget&&window.stget("ld.smrz.close2.pc"),window.DT&&window.DT.reportCLK("ld.smrz.close2.pc")):"baike"===e.app&&(window.stget&&window.stget("bk.smrz.done"),window.DT&&window.DT.reportCLK("bk.smrz.done")):"zhinan"===e.app?(window.stget&&window.stget("zn.smrz.close"),window.DT&&window.DT.reportCLK("zn.smrz.close")):"wenwen"===e.app?s?(window.stget&&window.stget("ww.wap.smrz.close"),window.DT&&window.DT.reportCLK("ww.wap.smrz.close")):(window.stget&&window.stget("ww.smrz.close"),window.DT&&window.DT.reportCLK("ww.smrz.close")):"ld"===e.app?s?(window.stget&&window.stget("ld.smrz.close1.wap"),window.DT&&window.DT.reportCLK("ld.smrz.close1.wap")):(window.stget&&window.stget("ld.smrz.close1.pc"),window.DT&&window.DT.reportCLK("ld.smrz.close1.pc")):"baike"===e.app&&(window.stget&&window.stget("bk.smrz.close"),window.DT&&window.DT.reportCLK("bk.smrz.close"))})},c.prototype.getphontErrText=function(){var e="";return e="ld"===this.app?"格式有误，请输入正确的中国大陆手机号码":s?'格式有误，海外用户请办理<a href="//zhinan.'+r+'.com/guide/detail/?id=316512367561">国内手机实名</a>':'格式有误，海外用户请办理<a href="//zhinan.'+r+'.com/guide/detail/?id=316512367561" target="_blank">国内手机实名</a>'},c.prototype.getAppName=function(){var e="";return"ld"==o.getDomainType()?e="略懂":"zhinan"==o.getDomainType()?e="指南":"baike"==o.getDomainType()?e="百科":"wenwen"==o.getDomainType()&&(e="问问"),e},c.prototype.getSuccessPopup=function(e,t){var n,o=this,r=p(".rnvContentWrap"),i=t?'<div class="real-prize-tip">恭喜您获得奖励<em>20</em></div>':"";s?(n='<div class="real-name-ok"><h4><p>验证成功</p></h4>'+i+"<h5>您认证的手机号是"+e+'</h5><div class="real-name-btn done rnvbindComplete">完成</div></div>',r.html(n)):(i=t?',恭喜您获得<span class="beans"><em></em>20</span>':"",n='<div class="attestation-cue"><p class="attestation-affirm"><i></i>验证成功'+i+'</p><p class="attestation-num">您的认证手机号是<span>'+e+'</span></p></div><div class="attestation-btn"><a href="javascript:;" class="attestation-complete rnvbindComplete">完成</a></div>',r.html(n).closest(".rnvPopWrap").addClass("attestation-success")),p(".rnvbindComplete").on("click",function(e){e.stopPropagation();var t=p(".rnvPopWrap");t.remove(),p(".attestation-mask").remove(),p("body").css("overflow","auto"),p(".ww-video video").show(),o.excuteVerifiedCallback&&"function"==typeof o.verifiedCallback&&o.verifiedCallback(),$("body").removeClass("iosBugFixCaret"),"zhinan"===o.app?(window.stget&&window.stget("zn.smrz.done"),window.DT&&window.DT.reportCLK("zn.smrz.done")):"ld"===o.app?s?(window.stget&&window.stget("ld.smrz.done.wap"),window.DT&&window.DT.reportCLK("ld.smrz.done.wap")):(window.stget&&window.stget("ld.smrz.done.pc"),window.DT&&window.DT.reportCLK("ld.smrz.done.pc")):"baike"===o.app&&(window.stget&&window.stget("bk.smrz.done"),window.DT&&window.DT.reportCLK("bk.smrz.done"))})},c.prototype.getUserProtocolURL=function(){var e="";switch(this.app){case"ld":e="//luedong."+r+".com/service";break;case"zhinan":e="//zhinan."+r+".com/guide/rule/index";break;case"wenwen":e="/cate/agreement";break;case"baike":e="//baike."+r+".com/help/#user_protocol"}return e},c.prototype.showPrompt=function(){var e,t="wenwen"===this.app?"，还有神秘奖励，赶紧认证吧！":"。",n="wenwen"===this.app?'<div class="real-prize">完成认证可获得奖励<em>20</em></div>':"",o=this.getAppName(),i=this.getUserProtocolURL();if(s){e='<div class="real-name-wrap rnvPopWrap"><div class="real-name-tit"><a href="javascript:;" class="close rnPopClose"></a><span>手机认证</span></div><div style="height:45px;"></div><div class="rnvContentWrap"><div class="real-name-law">根据国家《中华人民共和国网络安全法》规定，2017年6月1日起使用互联网服务需进行账号身份信息认证，还请您完成手机号码验证。<span>验证后才能继续使用发布、评论等相关功能'+t+'</span>感谢您的理解和支持！</div><div class="real-name-box">'+n+'<div id="rnvPhoneWrap" class="real-name-phone"><div class="rm-ipt"><input id="rnvPhoneNum" type="tel" placeholder="请输入手机号"></div><div class="real-name-err rnverrtip">格式有误，海外用户请办理 <a href="javascript:;">国内手机实名</a></div></div><div class="real-name-mes rnvCodeWrap"><div id="rnvGetCode" class="rm-btn">获取验证码</div><div class="rm-ipt"><input id="rnvVertifyCode" type="tel" placeholder="请输入验证码"></div><div class="real-name-err rnverrtip">请输入正确的验证码</div></div><div class="real-name-protocol checked rnvProtocolWrap"><div class="con"><span class="rnvProtocolCheck"></span>阅读并接受<a href="'+i+'">'+o+'用户协议</a><a href="http://corp.'+r+'.com/private.html" target="_blank">隐私政策</a></div><span class="rnp-err rnverrtip">请接受服务条款</span></div><div id="rnvConfirm" class="real-name-btn">确定</div></div></div></div>',p("body").append(e),p(".rnvPopWrap").css("min-height",window.innerHeight+"px"),this.bindEvent();var a=navigator.userAgent,d=/iPad|iPhone|iPod/i.test(a),c=/OS 11_\d(_\d)?/.test(a);d&&c&&$("body").addClass("iosBugFixCaret")}else e='<div class="attestation-pop rnvPopWrap"><div class="attestation-title"><a href="javascript:;" class="attestation-close rnPopClose">关闭</a>验证手机</div><div class="attestation-content rnvContentWrap"><p class="attestation-para">根据国家《中华人民共和国网络安全法》规定，2017年6月1日起使用互联网服务需进行账号身份信息认证，还请您完成手机号码验证。<span>验证后才能继续使用发布、评论等相关功能'+t+'</span>感谢您的理解和支持！</p><div class="attestation-box"><div id="rnvPhoneWrap" class="attestation-phone"><input id="rnvPhoneNum" type="text" class="attestation-input" placeholder="请输入手机号码"><span class="attestation-error rnverrtip">格式有误，海外用户请办理<a href="javascript:;">国内手机实名</a></span></div><div class="attestation-code rnvCodeWrap"><div class="attestation-validate rnvGetCodeWrap"><a id="rnvGetCode" href="javascript:;" class="attestation-get">获取验证码</a><div class="attestation-msg"><i class="attestation-triangle"></i> 今日发送次数已达上限，请明日再试</div></div><input id="rnvVertifyCode" type="text" class="attestation-input" placeholder="请输入验证码"><span class="attestation-error rnverrtip">请输入正确的验证码</span></div><div class="attestation-select rnvProtocolWrap checked"><a href="javascript:;" class="attestation-icon rnvProtocolCheck"></a><span>阅读并接受<a href="'+i+'" target="_blank">'+o+'用户协议</a><a href="http://corp.'+r+'.com/private.html" target="_blank">隐私政策</a></span><span class="attestation-error rnverrtip" style="display: block;">请接受服务条款</span></div></div><div class="attestation-btn"><a id="rnvConfirm" href="javascript:;" class="attestation-confirm">确定</a></div> </div></div>',p("body").prepend('<div class="attestation-mask"></div>'),p("body").append(e).css("overflow","hidden"),this.bindEvent();"zhinan"===this.app?(window.stget&&window.stget("zn.smrz.popup.bg"),window.DT&&window.DT.reportCLK("zn.smrz.popup.bg")):"wenwen"===this.app?s?(window.stget&&window.stget("ww.wap.smrz.show"),window.DT&&window.DT.reportCLK("ww.wap.smrz.show")):(window.stget&&window.stget("ww.smrz.show"),window.DT&&window.DT.reportCLK("ww.smrz.show")):"ld"===this.app&&(s?(window.stget&&window.stget("ld.smrz.windowshow.wap"),window.DT&&window.DT.reportCLK("ld.smrz.windowshow.wap")):(window.stget&&window.stget("ld.smrz.windowshow.pc"),window.DT&&window.DT.reportCLK("ld.smrz.windowshow.pc")))};var w=document.createElement("link");w.href="//cache.soso.com/deploy/js/lib/wenke/shiming_dea6066.css",w.rel="stylesheet",w.type="text/css";var l=document.createElement("link");l.href="//cache.soso.com/deploy/js/lib/wenke/attestation_99450a9.css",l.rel="stylesheet",w.type="text/css";var u=document.getElementsByTagName("head")[0];s?u.insertBefore(w,u.lastChild):u.insertBefore(l,u.lastChild);var f=function(){return function(e,t,n,o,r,i){var a=new c(e,t,n,o,r,i);return a}}();window.RNV=f},{"../../../domain":3}],8:[function(e,t,n){var o="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e};!function(e,t){"use strict";"function"==typeof define&&define.amd?define(["exports"],t):"object"===("undefined"==typeof n?"undefined":o(n))&&t(n);var r={};e.PubSub=r,t(r)}("object"===("undefined"==typeof window?"undefined":o(window))&&window||this,function(e){"use strict";function t(e){var t;for(t in e)if(e.hasOwnProperty(t))return!0;return!1}function n(e){return function(){throw e}}function o(e,t,o){try{e(t,o)}catch(r){setTimeout(n(r),0)}}function r(e,t,n){e(t,n)}function i(e,t,n,i){var a,s=p[t],d=i?r:o;if(p.hasOwnProperty(t))for(a in s)s.hasOwnProperty(a)&&d(s[a],e,n)}function a(e,t,n){return function(){var o=String(e),r=o.lastIndexOf(".");for(i(e,e,t,n);r!==-1;)o=o.substr(0,r),r=o.lastIndexOf("."),i(e,o,t,n)}}function s(e){for(var n=String(e),o=Boolean(p.hasOwnProperty(n)&&t(p[n])),r=n.lastIndexOf(".");!o&&r!==-1;)n=n.substr(0,r),r=n.lastIndexOf("."),o=Boolean(p.hasOwnProperty(n)&&t(p[n]));return o}function d(e,t,n,o){var r=a(e,t,o),i=s(e);return!!i&&(n===!0?r():setTimeout(r,0),!0)}var p={},c=-1;e.publish=function(t,n){return d(t,n,!1,e.immediateExceptions)},e.publishSync=function(t,n){return d(t,n,!0,e.immediateExceptions)},e.subscribe=function(e,t){if("function"!=typeof t)return!1;p.hasOwnProperty(e)||(p[e]={});var n="uid_"+String(++c);return p[e][n]=t,n},e.clearAllSubscriptions=function(){p={}},e.clearSubscriptions=function(e){var t;for(t in p)p.hasOwnProperty(t)&&0===t.indexOf(e)&&delete p[t]},e.unsubscribe=function(e){var t,n,o,r="string"==typeof e&&p.hasOwnProperty(e),i=!r&&"string"==typeof e,a="function"==typeof e,s=!1;if(r)return void delete p[e];for(t in p)if(p.hasOwnProperty(t)){if(n=p[t],i&&n[e]){delete n[e],s=e;break}if(a)for(o in n)n.hasOwnProperty(o)&&n[o]===e&&(delete n[o],s=!0)}return s}})},{}]},{},[1]);