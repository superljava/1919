$(".baijiu1").mouseover(function(){
	$(".introduce").css({display:"none"});
	$(".introduce1").css({display:"block"});
});
$(".putaojiu1").mouseover(function(){
	$(".introduce").css({display:"none"});
	$(".introduce2").css({display:"block"});
});
$(".yangjiu1").mouseover(function(){
	$(".introduce").css({display:"none"});
	$(".introduce3").css({display:"block"});
});
$(".pijiu1").mouseover(function(){
	$(".introduce").css({display:"none"});
	$(".introduce4").css({display:"block"});
});
$(".huangjiu1").mouseover(function(){
	$(".introduce").css({display:"none"});
	$(".introduce5").css({display:"block"});
});
$(".yijianxuanjiu1").mouseover(function(){
	$(".introduce").css({display:"none"});
	$(".introduce6").css({display:"block"});
});
$(".shoplists,.baijiu1,.putaojiu1,.yangjiu1,.pijiu1,.huangjiu1,.yijianxuanjiu1").mouseout(function(){
	$(".introduce").css({display:"none"});
});