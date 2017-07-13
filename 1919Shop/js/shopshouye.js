$(".dianpu_navs_link li").eq(0).addClass('act');
$(".dianpu_navs_link li").click(function(event) {
	$(".dianpu_navs_link li").removeClass('act').eq($(this).index()).addClass('act');
});
$(".dianpu_shangpin_nav li").eq(0).css({color:"red"});
$(".dianpu_shangpin_nav li").click(function(event) {
	$(".dianpu_shangpin_nav li").css({color:"#666"});
	$(".dianpu_shangpin_nav li").eq($(this).index()).css({color:"red"});
});
$(".fenye_list li").eq(0).css({background:"red",color:"#fff"});
$(".fenye_list li").click(function(event) {
	$(".fenye_list li").css({background:"#fff",color:"#000"});
	$(".fenye_list li").eq($(this).index()).css({background:"red",color:"#fff"});
});

// console.log($(".dianpu_shangpin_news").length);
var pageCon =3;
//var pageAll =$(".dianpu_shangpin_news").length/16;
var pageAll =3;
pageCon=pageCon<=pageAll?pageCon:pageAll;
$(".fenye_view").width(42*pageCon);
$(".fenye_list").width(42*pageAll);
for(var i=0;i<pageAll;i++){
	$(".fenye_list").append("<li>"+(i+1)+"</li>");
}
$(".fenye_list li:first").addClass('con');
resCon =Math.floor(pageCon/2);
var x=0;
$(".down").click(function(event){
	x++;
	if(x>resCon&&x<pageAll-resCon){
		y++;
		$(".fenye_list").css({marginLeft:-42*y});
	}else if(x>pageAll-1){
		//alert("已经是最后一页了");
		x=pageAll-1;
	}
	$(".fenye_list  li").removeClass('con').eq(x).addClass('con');
	
});
$(".up").click(function(event) {
	
	 
	x--;
	if(x>=resCon&&x<pageAll-resCon-1){
		y--;
		$(".fenye_list ").css({marginLeft:-42*y});
	}else if(x<0){
		x=0;
		//alert("已经是第一页了");
	}
	 
	$(".fenye_list  li").removeClass('con').eq(x).addClass('con');
});
$(".fenye_list li").click(function(event) {
	var index =$(this).index();
	x =index;
	if(x>=resCon&&x<pageAll-resCon){
		y=index-resCon;
		$(".fenye_list").css({marginLeft:-y*52});
	}else if(x<resCon){
		$("#list").css({marginLeft:0});
	}else{
		y=pageAll-pageCon;
		$(".fenye_list").css({marginLeft:-52*(pageAll-pageCon)});
	}
	 
	$(".fenye_list li").removeClass('con').eq(index).addClass('con');
	 
});

$("img").each(function(i){
	 $("img").eq(i).attr({"data-original":$("img").eq(i).attr("src")});	
	 // $("img").eq(i).attr({"src":""});
});
$("img.lazy").lazyload({
	threshold:200,
	event:"click",
	effect:"fadIn"
});

// console.log($("img").eq(0).attr("data-original"));
//console.log($("img").eq(0).attr("src"));

// var scroll =$("html").scrollTop();
//console.log(scroll);
$(".all_sp").click(function(event) {
	 $("html").scrollTop($(".dianpu_shangpin").offset().top);
	 $("body").scrollTop($(".dianpu_shangpin").offset().top);
});

(function(){
	var img = [];
	var item = document.getElementById("item");
	var list = document.getElementById("list");

	
	function getRandom(a,b){
		return Math.floor(Math.random()*(b-a+1))+a;
	}

	Array.prototype.noRepeat =function(){
		for(var i=0;i<this.length;i++){
			for(var j=i+1;j<this.length;j++){
				if(this[i]==this[j]){
					this.splice(i,1);
					i--;
				}

			}
		}
		
	}
	

	var img_x=[];
	$.ajax({
		type:"GET",
		url:("randshop.php"),
		success:function(msg){

			
			

			msg = msg.split("*");
			msg1 = msg[0];
			msg2 = msg[1];
			msg1 = eval("("+msg1+")");
			msg2 = eval("("+msg2+")");
			
			for(var i =0;i<10;i++){
				var t = getRandom(0,msg1.length);
				img_x.push(t);
			}
			
			img_x.noRepeat();


			for(var i=0;i<msg1.length;i++){
				for(var j=0;j<4;j++){
					if(msg1[i][0]==msg2[img_x[j]]["Id"]){
						var node = document.createElement("li");
						node.innerHTML = "<img src='"+msg1[i][2]+"'><div class='m_shangpin_like_des'><a class='m_shangpin_like_cp' href='goodsDetails.php?goodsId="+msg1[i][1]+"'>"+msg2[img_x[j]]["title"]+"</a><a class='m_shangpin_like_shop' href='goodsDetails.php?goodsId="+msg1[i][1]+"'>"+msg2[img_x[j]]["dianpu"]+"</a><br/><p cplass='m_shangpin_like_font'><span class='now_pri'><span class='rmb'>￥</span><i>"+msg2[img_x[j]]["oriPrice"]+"</i></span><span class='yuan_pri'><span class='rmb'>￥</span><i>"+msg2[img_x[j]]["nowPrice"]+"</i></span></p></div>";
						list.appendChild(node);
					}
				}
			}
			
		}
	});
})();









