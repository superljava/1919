for (var i =0; i <49; i++) {
	    	$(".pageList").append("<li>"+(i+1)+"</li>");
	   };
$(".pageList li:first").css({backgroundColor:"#e30b20",color:"#fff"});
$(".first2").css({backgroundColor:"#e30b20",color:"#fff"});
var pageCon=9;
var pageAll=49;
var x=0;
var y=0;
var res=Math.floor(pageCon/2);
$(".next").click(function(){
	$(".first2").css({backgroundColor:"#fff",color:"#666"});
	x++;
	if (x>res&&x<pageAll-res) {
		y++;
		if (y>0) {
			$(".first").css({display:"block"});
		};
		if(y>=40) {
			$(".last").css({display:"none"});
		};
		$(".pageList").css({marginLeft:-y*42});
		
	}else if (x>pageAll-1) {

	}
	   $(".pageList li").css({backgroundColor:"#fff",color:"#666"});
	   $(".pageList li").eq(x).css({backgroundColor:"#e30b20",color:"#fff"});

});

$(".pro").click(function(){
	$(".first2").css({backgroundColor:"#fff",color:"#666"});
	$(".last2").css({backgroundColor:"#fff",color:"#666"});
	x--;
	if (x<4) {
		$(".first").css({display:"none"});
		$(".first2").css({display:"none"});
	};
	if (x>=res&&x<pageAll-res-1) {
		y--;

		if (y<=0) {
			$(".first").css({display:"none"});
			$(".first2").css({display:"none"});
		}
		if (y<40) {
			$(".last").css({display:"block"});
		}
		$(".pageList").css({marginLeft:-y*42});
	}else if (x<0) {
		x=0;

	}
	 $(".pageList li").css({backgroundColor:"#fff",color:"#666"});
	 $(".pageList li").eq(x).css({backgroundColor:"#e30b20",color:"#fff"});

});

$(".pageList li").click(function(){
	$(".first2").css({backgroundColor:"#fff",color:"#666"});
	$(".last2").css({backgroundColor:"#fff",color:"#666"});
	var index=$(this).index();
	x=index;
	if (x>=res&&x<pageAll-res) {
		y=index-res;
		if (y>0) {
			console.log(y);
			$(".first").css({display:"block"});
			$(".first2").css({display:"block"});
		}
		 if (y<=0&x<4) {
			$(".first").css({display:"none"});
			$(".first2").css({display:"none"});
		}
		$(".pageList").css({marginLeft:-y*42});
	}else if (x<res) {
		y=0;
		$(".pageList").css({marginLeft:0});
	}else{
		y=11;
		$(".pageList").css({marginLeft:-11*42});
	}

	$(".pageList li").css({backgroundColor:"#fff",color:"#666"});
	$(".pageList li").eq(x).css({backgroundColor:"#e30b20",color:"#fff"});

});

$(".first2").click(function(){
	$(".last2").css({backgroundColor:"#fff",color:"#666"});
	x=0;
	y=0;
	$(".pageList li").css({backgroundColor:"#fff",color:"#666"});
	$(this).css({backgroundColor:"#e30b20",color:"#fff"});
	$(".pageList").css({marginLeft:0});
	$(".first").css({display:"none"});
});
$(".last2").click(function(){
	$(".first2").css({backgroundColor:"#fff",color:"#666"});
	x=48;
	y=40;
	$(this).css({backgroundColor:"#e30b20",color:"#fff"});
	$(".pageList").css({marginLeft:-1680});
	$(".last").css({display:"none"});
	$(".first").css({display:"block"});
})

var z=0;
$(".more").click(function(){
	z++;
	$(".price1").css({height:191});
	$("label").html("收起");
	if (z>1) {
		z=0;
		$(".price1").css({height:67});
	    $("label").html("更多");
	}
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
});

(function($)
{
	var price = $(".price"),
	sort = $(".sort");

	price.click(function(e)
	{
		var newDiv = document.createElement("div");
		newDiv.className = "list-item";
		newDiv.index = $(this).parent("li").index();

		if (e.target.nodeName.toLowerCase() == "a")
		{
			newDiv.innerHTML = "<em>" + $(e.target).parents().prev("span").html() + ":" + e.target.innerHTML + "</em><span></span>";
			sort.append(newDiv);
			$(this).parent("li").hide();
		}
	});

	sort.click(function(e)
	{
		if (e.target.nodeName.toLowerCase() == "span" && e.target.parentNode.className == "list-item")
		{
			price.eq(e.target.parentNode.index).parent("li").show();
			console.log(this)
			$(e.target.parentNode).remove();
		}
	});
})(window.jQuery);

