/*导航初始化*/
$(".navList .detail_item .rt_part").each(function(i){
	$(this).height($(".navList .detail_item .item").eq(i).height());
});

$(".navList .detail_item .item").each(function(i){
	$(this).css({top:65*i})
})

$(".navList .lt_list li").on("mouseenter mouseleave",function(e){
	var e=e||window.event;
	if(e.type=="mouseenter"){
		$(".navList .lt_list li").css({zIndex:0,border:"2px solid #fff"});
		$(this).css({zIndex:2,border:"2px solid #c1a25f",borderRight:"2px solid #FFF",width:194});
		$(".navList .detail_item .item").eq($(this).index()).css({display:"block"});
	}else{
		$(this).css({zIndex:2,border:"2px solid #fff",width:192});
		$(".navList .detail_item .item").eq($(this).index()).css({display:"none"});
	}
});


$(".navList .detail_item .item").on("mouseenter mouseleave",function(e){
	var e=e||window.event;
	if(e.type=="mouseenter"){
		$(this).css({display:"block"});
		$(".navList .lt_list li").eq($(this).index()).css({border:"2px solid #c1a25f",borderRight:"2px solid #FFF"});
	}else{
		$(this).css({display:"none"});
		$(".navList .lt_list li").eq($(this).index()).css({border:"2px solid #fff"});
	}
});


/*banner图部分*/
$(".navList .banner img").each(function(i){
	$("#dots").append("<li></li>");
})
$(".navList #dots li").css({borderRadius:10});
$(".navList #dots li").eq(0).addClass('active').width(30);
$(".navList #dots").width($(".navList #dots li").length*25+25).css({marginLeft:-$(".navList #dots").width()/2});
$(".navList .banner a").eq(0).css({display:"block"});
// 鼠标进入
(function(){
	var x=0,flag=true,y,time;
	$(".navList #dots li").mouseenter(function(e){
		var e=e||window.event;
		clearTimeout(time);
		y=x;
		if(x!=$(this).index()){
			if(flag){
				flag=false;
				x=$(this).index();
				$(".navList #dots li").removeClass('active').css({width:15}).eq(x).addClass('active').animate({width:30});
				$(".navList .banner a").eq(y).animate({left:-1920},1000);
				$(".navList .banner a").eq(x).css({left:1920,display:"block"}).animate({left:0},1000,function(){
					flag=true;
					time=setTimeout(move,2000);
				});
			}
		}
	});

// 计时器
	if(flag){
		function move(){
			y=x;
			flag=false
			x++;
			if(x>$(".navList #dots li").length-1){
				x=0;
			}
			$(".navList #dots li").removeClass('active').animate({width:15}).eq(x).addClass('active').animate({width:30});
			$(".navList .banner a").eq(y).animate({left:-1920},1000);
			$(".navList .banner a").eq(x).css({left:1920,display:"block"}).animate({left:0},1000,function(){
				flag=true;
				time=setTimeout(move,2000);
			});
		}
		time=setTimeout(move,2000)
	}
})()

