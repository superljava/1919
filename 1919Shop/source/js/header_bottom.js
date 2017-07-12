$(".S_search1").html("美酒");

$(".S_search_container").mouseover(function() {
    $(".S_search2").css({display:"block"});
});

$(".S_search_container").mouseout(function() {
    $(".S_search2").css({display:"none"});
});

$(".S_search2 p").eq(0).click(function(){
    $(".S_search1").html("美酒");
});

$(".S_search2 p").eq(1).click(function(){
    $(".S_search1").html("店铺");
});

$(".buycar").mouseenter(function(){
	$(".buycar_list").show();
});
$(".buycar").mouseleave(function(){
	$(".buycar_list").hide();
});

(function($)
{
	var carGoods = $("#carGoods"),
		nu = $(".nu"),
		carPull = $(".carPull"),
		font = $(".font"),
		buyCarNum = $(".buycar_num");

	carGoods.click(function(e)
	{
		if (e.target.className == "buycar-delBtn")
		{
			$.get("updateGoodsBasket.php", {request: "delete", goodsId: $(e.target).attr("goods-id")}, function(data)
			{
				var res = eval(data), num = 0, price = 0;

				$(e.target).parent().parent().remove();
				if (res.length == 0)
				{
					nu.show();
					carPull.hide();
					buyCarNum.html(0);
				}
				else
				{
					for (var i = 0; i < res.length; i++)
					{
						num += Number(res[i]["number"]);
						price += Number(res[i]["number"]) * Number(res[i]["price"])
					}
					font.children("span").html(num);
					buyCarNum.html(num);
					font.children("b").html(price.toFixed(2));
				}
				
			});
		}
	});
})(window.jQuery);