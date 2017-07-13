$(document).ready(function(){ 

	$(".lt_jj").eq(0).css({display:"block"});
	$(".dxgx_hd").eq(0).css({display:"block"});
	$(".bd_ul li").eq(0).css({background:"#d41524"});
	$(".bd_ul li").mouseenter(function(event) {
		$(".bd_ul li").css({backgroundColor:"#cacaca"});
		$(this).css({backgroundColor:"#d41524"});
		$(".ct_l").css({display:"none"});
		$(".ct_l").eq($(this).index()).css({display:"block"});
		$(".lt_jj").css({display:"none"});
		$(".lt_jj").eq($(this).index()).css({display:"block"});
		$(".dxgx_hd").css({display:"none"});
		$(".dxgx_hd").eq($(this).index()).css({display:"block"});
		});

	function ban_guide(nema,num,a){
		var x=0;
		nema.eq(0).css({display:"block"});
		$(".ban_next").eq(a).click(function(){
			x++;
			if(x>num){
				x=num;
				nema.eq(x).css({display:"block"});
			};	
			nema.eq(x).css({display:"block"});
			nema.eq(x-1).css({display:"none"});	
		});
		$(".ban_pre").eq(a).click(function(){
			x--;
			if(x<0){
				x=0;
				nema.eq(x).css({display:"block"});
			};	
			nema.eq(x).css({display:"block"});
			nema.eq(x+1).css({display:"none"});	
		})
	}

	ban_guide($(".dl_ban1 li"),4,0);
	ban_guide($(".dl_ban2 li"),2,1);
	ban_guide($(".dl_ban3 li"),1,2);
	ban_guide($(".dl_ban4 li"),4,3);
	ban_guide($(".dl_ban5 li"),2,4);




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


});










