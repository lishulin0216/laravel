$(function(){
  var menuwidth  = 180; // 边栏宽度
  var menuspeed  = 400; // 边栏滑出耗费时间
  
  var $bdy       = $('body');
  var $container = $('#pgcontainer');

  var negwidth   = "-"+menuwidth+"px";
  var poswidth   = menuwidth+"px";
  
  $('.menubtn').on('click',function(e){
    if($bdy.hasClass('openmenu')) {
      jsAnimateMenu('close');
    } else {
      jsAnimateMenu('open');
    }
  });
  
  $('.overlay').on('click', function(e){
    if($bdy.hasClass('openmenu')) {
      jsAnimateMenu('close');
    }
  });
  
  function jsAnimateMenu(tog) {
    if(tog == 'open') {
      $bdy.addClass('openmenu');
      
      $container.animate({marginRight: negwidth, marginLeft: poswidth}, menuspeed);
      $burger.animate({width: poswidth}, menuspeed);
      $('.overlay').animate({left: poswidth}, menuspeed);
    }
    
    if(tog == 'close') {
      $bdy.removeClass('openmenu');
      
      $container.animate({marginRight: "0", marginLeft: "0"}, menuspeed);
      $burger.animate({width: "0"}, menuspeed);
      $('.overlay').animate({left: "0"}, menuspeed);
    }
  }
});






$(document).ready(function() { 
var tags_a = $(".tags a"); 
tags_a.each(function(){ 
var x = 9; 
var y = 0; 
var rand = parseInt(Math.random() * (x - y + 1) + y); 
$(this).addClass("tags"+rand); 
}); 
})  


$(function(){
	$('.gmtc').click(function(){
		$('.gmtch').show(0);
		$('.content_mark').show(0);
	});
	$('.content_mark').click(function(){
		$('.gmtch').hide(0);
		$('.content_mark').hide(0);
	});
});

$(function(){
	$('.gmtc1').click(function(){
		$('.gmtch1').show(0);
		$('.content_mark1').show(0);
	});
	$('.content_mark1').click(function(){
		$('.gmtch1').hide(0);
		$('.content_mark1').hide(0);
	});
});

$(function(){
	$('.gmtc2').click(function(){
		$('.gmtch2').show(0);
		$('.content_mark2').show(0);
	});
	$('.content_mark2').click(function(){
		$('.gmtch2').hide(0);
		$('.content_mark2').hide(0);
	});
});

function b(){
	h = $(window).height();
	t = $(document).scrollTop();
	if(t > h){
		$('#gotop').show();
	}else{
		$('#gotop').hide();
	}
}
$(document).ready(function(e) {
	b();
	$('#gotop').click(function(){
		$(document).scrollTop(0);	
	})
});

$(window).scroll(function(e){
	b();		
})



function baidu()
{
window.open("http://zhannei.baidu.com/cse/search?s=1849457021752692468&q="+document.myform.mytext.value+"");
}
function zhannei()
{
window.open("http://www.txcstx.cn/search.php?q="+document.myform.mytext.value+"");
}