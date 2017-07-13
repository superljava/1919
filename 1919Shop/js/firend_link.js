$(function($){
	$("ul").click(function(){
		$(".friend_link_left ul").children("li").css({display:"none"})
		$(this).children("li").css({display:"block"})
		$(".friend_link_top").children("span").text($(this).children("span").html())
	})
	$(".help_yes").click(function(){ 
		$(".friend_link_top .help_no").css({display:"none"});
		$(".friend_link_top .help_yes").css({display:"block"});
		setTimeout(function(){
			$(".friend_link_top .help_yes").css({display:"none"});
		}, 2000)
	})
	$(".help_no").click(function(){ 
		$(".friend_link_top .help_yes").css({display:"none"});
		$(".friend_link_top .help_no").css({display:"block"});
		setTimeout(function(){
			$(".friend_link_top .help_no").css({display:"none"});
		}, 2000)
	})
	$(".friend_link_left ul li").click(function(){
		$(".friend_link_left ul li").children("a").css({color:"#333"})
		$(".friend_link_left ul li").removeClass('friend_active');
		$(".friend_link_left ul li").css({border:"1px solid #CACACA"})
		$(this).addClass('friend_active').css({border:0})
		$(this).children("a").css({color:"#fff"})
	})
	// tab切换隐藏所有的不显示的子元素
	for(var i=1;i<$(".friend_link_right").children().length;i++){
		$(".friend_link_right").children().eq(i).hide();
	}

	//  jQuery对象转化为DOM对象          $(this)[0]等价于$(this).get(0)
		function GetUrlPath(){  
	　　　　var url = document.location.toString();               
	　　　　return url;  
	　　}  
	//获取路径，根据id跳转不同tab切换
		$(".left_li").each(function(i){
			$(".friend_link_right").children().eq(i).css({display:"none"});
		});
		var block_id=GetUrlPath().split("?")[1].split("=")[1];
		$(".friend_link_right").children().eq(block_id).css({display:"block"});



	$(".left_li").each(function(i){
		$(this).get(0).index=i;
		$(this).click(function(){
			$(".friend_link_right").children().css({display:"none"});
			$(".friend_link_right").children().eq($(this)[0].index).css({display:"block"});
			console.log($(this).get(0).index);
		})
	});


	$(".quanbu").mouseenter(function(){
$(".shoplists").css({display:"block"});
})
$(".quanbu").mouseleave(function(){
	$(".shoplists").css({display:"none"});
})
$(".shoplists").mouseenter(function(){
	$(".shoplists").css({display:"block"});
})
$(".shoplists").mouseleave(function(){
	$(".shoplists").css({display:"none"});
})
$(".introduce").mouseenter(function(){
	$(".shoplists").css({display:"block"});
})
$(".introduce").mouseleave(function(){
	$(".shoplists").css({display:"none"});
})


})


