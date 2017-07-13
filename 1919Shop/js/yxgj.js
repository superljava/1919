/*part_01部分*/
$(".part_01 .top_list li").mouseenter(function(){
	$(".part_01 .top_list li").css({color:"#666",lineHeight:"32px",border:"1px solid #ddd",borderLeft:0});
	$(this).css({color:"#c1a25f",lineHeight:"30px",borderTop:"3px solid #c1a25f",borderBottom:"1px solid #fff"});
	$(".part_01 .bot_list li").fadeOut().eq($(this).index()).fadeIn();
});


$(".part_01 .top_tit li").eq(0).css({color:"#c1a25f",lineHeight:"30px",borderTop:"3px solid #c1a25f",borderBottom:"1px solid #fff",background:"fff"});
$(".part_01 .top_tit li").click(function(){
	$(".part_01 .top_tit li").css({color:"#666",lineHeight:"32px",border:"1px solid #ddd",borderLeft:0,background:"#f9f9f9"});
	$(this).css({color:"#c1a25f",lineHeight:"30px",borderTop:"3px solid #c1a25f",borderBottom:"1px solid #fff",background:"fff"});
	$(".part_01 .bot_info").fadeOut().eq($(this).index()).fadeIn();
});

// smbanner
(function(){
	$("#sm_banner .pics a").eq(0).css({display:"block"});
	var x=0,y,time,flag=true;
	$("#sm_banner .rt_arrow").click(function(){
		clearTimeout(time);
		if(flag){
			flag=false;
			y=x;
			x++;
			if(x==$("#sm_banner .pics a").length){
				x=0;
			}
			$("#sm_banner .pics a").eq(y).animate({left:-268},800);
			$("#sm_banner .pics a").eq(x).css({left:268,display:"block"}).animate({left:0},800,function(){
				flag=true;
				time=setTimeout(move,2000);
			});
		}
	});
	$("#sm_banner .lt_arrow").click(function(){
		clearTimeout(time);
		if(flag){
			flag=false;
			y=x;
			x--;
			if(x<0){
				x=$("#sm_banner .pics a").length-1;
			}
			$("#sm_banner .pics a").eq(y).animate({left:268},1000);
			$("#sm_banner .pics a").eq(x).css({left:-268,display:"block"}).animate({left:0},800,function(){
				flag=true;
				time=setTimeout(move,2000);
			});
		}
	});

	function move(){
		if(flag){
			flag=false;
			y=x;
			x++;
			if(x==$("#sm_banner .pics a").length){
				x=0;
			}
			$("#sm_banner .pics a").eq(y).animate({left:-268},800);
			$("#sm_banner .pics a").eq(x).css({left:268,display:"block"}).animate({left:0},800,function(){
				time=setTimeout(move,2000);
				flag=true;
			});
		}
	}
	time=setTimeout(move,2000);
})();

/*part_02部分*/

$(".part_02 .top_tit li").mouseenter(function(){
	$(".part_02 .top_tit li").removeClass('active').eq($(this).index()).addClass('active');
	$(".part_02 .top_tit li").children('span').css({display:"none"});
	$(this).children('span').css({display:"block"});
	$(".part_02 .bot_list li").fadeOut("slow").eq($(this).index()).fadeIn("slow");
});

$(".part_02 .bot_list .box").css({opacity:0.7});
function slide(obj){
	obj.children('a').mouseenter(function(){
		obj.find(".view").stop(true).slideUp().eq($(this).index()).slideDown();
	});
	obj.children('a').mouseleave(function(){
		obj.find(".view").stop(true).slideUp();;
	});
};
$(".part_02 .bot_list li").each(function(i){
	slide($(".part_02 .bot_list li").eq(i));
});
// $(".part_02 .bot_list li a").mouseenter(function(){
// 	$(".part_02 .bot_list li .view").slideUp().eq($(this).index()).slideDown();
// });



/*part03部分*/
// 左边tab部分
(function(){
	var x=0,time;
	function move(){
		x++;
		if(x>1){
			x=0;
		}
		$(".part_03 .lt_tab").eq(0).children('.pics').animate({marginLeft:-260*x},1000,function(){
			$(".part_03 .lt_tab").eq(1).children('.pics').animate({marginLeft:-260*x},1000,function(){
				$(".part_03 .lt_tab").eq(2).children('.pics').animate({marginLeft:-260*x},1000,function(){
					$(".part_03 .lt_tab").eq(3).children('.pics').animate({marginLeft:-260*x},1000);
					$(".part_03 .lt_tab").eq(3).find("li").removeClass('active').eq(x).addClass('active');
				});
				$(".part_03 .lt_tab").eq(2).find("li").removeClass('active').eq(x).addClass('active');
			});
			$(".part_03 .lt_tab").eq(1).find("li").removeClass('active').eq(x).addClass('active');
		});
		$(".part_03 .lt_tab").eq(0).find("li").removeClass('active').eq(x).addClass('active');
	}
	time=setInterval(move,3000)
})()
	
// 右侧tab切换
function noRepeaT(obj){
	obj.find('h5').mouseenter(function(){
		obj.find("h5").css({display:"block"});
		$(this).css({display:"none"});
		obj.find("div").css({display:"none"});
		$(this).siblings('div').css({display:"block"});
	});
	obj.find('div').mouseleave(function(){
		obj.find("h5").css({display:"block"});
		obj.find("div").css({display:"none"});
	});
}
$(".part_03 .rt_hotItem").each(function(i){
	noRepeaT($(".part_03 .rt_hotItem").eq(i));
})
