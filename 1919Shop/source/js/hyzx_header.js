/*头部导航*/

$(".header .Qtalk").click(function(){
	$(".header .talk_style").css({display:"block",zIndex:1})
});
$(".header .talk_style .close").click(function(){
	$(".header .talk_style").css({display:"none"})
});

/*搜索广告*/
$(".navbar .nav_ad span").click(function(){
	$(".navbar .nav_ad").css({display:"none"})
});
$(".navbar ul li:last").css({border:"none"})