$(document).ready(function(){ 

	
	$(".icon").each(function(i){
		$(".icon").eq(i).mouseenter(function(){
		 	$(this).prop({
		 		src: "images/service-ico"+(i+1)+"_hover.png"
		 	})
		 })
		$(".icon").eq(i).mouseleave(function(){
			$(this).prop({
		 		src: "images/service-ico"+(i+1)+".png"
		 	})
		})
	});


	$("#wx").mouseenter(function(){
		$("#wx_c").css({display:"block"});
	})
	$("#wx").mouseleave(function(){
		$("#wx_c").css({display:"none"});
	})
	$("#wb").mouseenter(function(){
		$("#wb_c").css({display:"block"});
	})
	$("#wb").mouseleave(function(){
		$("#wb_c").css({display:"none"});
	})


	$(".l_tad_ul li").eq(0).css({backgroundColor:"#68c7db"});
	$(".tad_jj").eq(0).css({display:"block"});

	$(".l_tad_ul li").mouseenter(function(){
		$(".l_tad_ul li").css({backgroundColor:"#cacaca"});
		$(this).css({backgroundColor:"#68c7db"});

		$(".l_tlist_co").css({display:"none"});
		$(".l_tlist_co").eq($(this).index()).css({display:"block"});

		$(".tad_jj").css({display:"none"});
		$(".tad_jj").eq($(this).index()).css({display:"block"});
	})

	


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































