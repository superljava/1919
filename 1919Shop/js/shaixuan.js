$(".cle_conf").css({display:"none"});
$(".pri_shuru input").click(function(event) {
	event.stopPropagation();
	$(".cle_conf span").eq(1).css({color:"#000"});
	$(".cle_conf").css({display:"block"});
});
$(document).click(function(event) {
	if($(".cle_conf").css("display")=="block"){
		$(".cle_conf").css({display:"none"});
	}
});
$(".price a").click(function(event) {
	$(".price li").css({backgroundColor:"#fff",color:"#666"});
	$(".price a").css({backgroundColor:"#fff",color:"#666"});
	$(this).css({backgroundColor:"#C1a460",color:"#fff"});
});

$(".shangpin_sel a").click(function(event) {
	event.stopPropagation();
	$(this).parent().siblings('.buxian').css({color:"#666",backgroundColor:"#fff"});
	$(this).css({color:"#fff"});
	var index =$(this).index();
	// console.log(index);
	// console.log($(".shaixuan_a a").length);

	$(this).css({backgroundColor:"#C1a460",color:"#fff"});
	$(this).children('i').css({color:"#fff"});

	var a_first =$(this).parent().parent().children().eq(0);
	// console.log(a_first);




 	

	$(".sel_xianshi i").css({color:"red"});
	
	
	var arr =$(".sel_xianshi").children("a");
	
	
	var name3 =$(this).clone().html();
	name3 =name3.split("<");
	name3 =name3[0];

	var flag =true;

	//console.log($(".sel_xianshi").children("a").length);
	for(var i=0;i<$(".sel_xianshi").children("a").length;i++){
		var name2 =$(".sel_xianshi").children("a").eq(i).html();
		name2 =name2.split("<");
		name2 =name2[0];
		//console.log(name2);
		if(name2==name3){
			flag=false;
			//console.log(222);
		}
	}

	if(flag){
		$(this).clone().insertAfter($(".sel"));
		console.log($(this).parent().siblings().eq(0).html());
		a_first.clone().insertAfter($(".sel"));
		$(".sel_xianshi a").css({color:"red"});
		$(".sel_xianshi i").css({color:"red"});
		//console.log($(".sel_xianshi").children('.fn1'));
		

		 
	}





	for(var i=0;i<$(".sel_xianshi").children().length;i++){	 		
		 if($(".sel_xianshi").children(".fn1").length>1){
		 	$(".sel_xianshi").children(".fn1").eq(1).remove();
		 }
		 if($(".sel_xianshi").children(".fn2").length>1){
		 	$(".sel_xianshi").children(".fn2").eq(1).remove();
		 }
		 if($(".sel_xianshi").children(".fn3").length>1){
		 	$(".sel_xianshi").children(".fn3").eq(1).remove();
		 }
		 if($(".sel_xianshi").children(".fn4").length>1){
		 	$(".sel_xianshi").children(".fn4").eq(1).remove();
		 }
		 if($(".sel_xianshi").children(".fn5").length>1){
		 	$(".sel_xianshi").children(".fn5").eq(1).remove();
		 }
		 if($(".sel_xianshi").children(".fn6").length>1){
		 	$(".sel_xianshi").children(".fn6").eq(1).remove();
		 }
		 if($(".sel_xianshi").children(".fn7").length>1){
		 	$(".sel_xianshi").children(".fn7").eq(1).remove();
		 }
	}
	 



	$(".sel_xianshi i").click(function(event) {
		event.stopPropagation();
		$(this).parent().css({display:"none"});
		$(this).parent().parent().children().eq(1).css({display:"none"});
		//console.log($(this).parent().siblings(".fn2").siblings().eq(0));

		
	});

});






$(".buxian").click(function(event) {
	$(".shaixuan_a a").css({color:"#666",backgroundColor:"#fff"});
	$(this).css({backgroundColor:"#c1a460",color:"#fff"});
});


$(".shaixuan_a i").click(function(event) {
	event.stopPropagation();
	$(this).css({color:"#fff"});
	$(this).parent().css({backgroundColor:"#fff",color:"#666"});
});

$(".price_fw a").click(function(event) {
	var pri=$(this).html();
	pri =pri.split("-");
	$(".txt1").val(pri[0]);
	$(".txt2").val(pri[1]);
});

$(".reset").click(function(event) {
	$(".shaixuan_a a").css({backgroundColor:"#fff",color:"#666"});
	$(".buxian").css({backgroundColor:"#c1a460",color:"#fff"});
	$(".sel_xianshi").children().each(function(i) {
		$(".sel_xianshi").children().eq(i+1).css({display:"none"});
	});

});




// (function($)
// {
// 	var price = $(".price"),
// 	sort = $(".sort");

// 	price.click(function(e)
// 	{
// 		var newDiv = document.createElement("div");
// 		newDiv.className = "list-item";
// 		newDiv.index = $(this).parent("li").index();

// 		if (e.target.nodeName.toLowerCase() == "a")
// 		{
// 			newDiv.innerHTML = "<em>" + $(e.target).parents().prev("span").html() + ":" + e.target.innerHTML + "</em><span></span>";
// 			sort.append(newDiv);
// 			$(this).parent("li").hide();
// 		}
// 	});

// 	sort.click(function(e)
// 	{
// 		if (e.target.nodeName.toLowerCase() == "span" && e.target.parentNode.className == "list-item")
// 		{
// 			price.eq(e.target.parentNode.index).parent("li").show();
// 			console.log(this)
// 			$(e.target.parentNode).remove();
// 		}
// 	});
// })(window.jQuery);




