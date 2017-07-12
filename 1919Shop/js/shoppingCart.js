

$(function($)
{
	(function($)
	{
		var schLeft = $(".shop-sch-left"),
			showItem = $(".show-item"),
			sSchList = $(".shop-sch-l-list");

		schLeft.hover(function()
		{
			sSchList.show();
		}, function()
		{
			sSchList.hide();
		});

		sSchList.children().first().css('color', '#e30b20');
		showItem.html(sSchList.children().first().html());

		sSchList.click(function(e)
		{
			if (e.target.nodeName.toLowerCase() == "li")
			{
				$(e.target).siblings().css('color', '');
				$(e.target).css('color', '#e30b20');
				showItem.html($(e.target).html());
			}
		});
	})($);

	(function($)
	{
		var shopCon = $(".shopping-content"),
			shopConMid = $(".shop-con-goods-mid"),
			checkAll = shopConMid.find('.checkAll'),
			numIpt = $(".num-ipt");
		var flag = true;

		numIpt.keyup(function()
		{
			var goodsStore = $(this).attr('data-store');

			if (Number($(this).attr("value")) < 1)
			{
				$(this).attr({value: 1});
			}
			else if (Number($(this).attr("value")) >= goodsStore)
			{
				$(this).attr({value: goodsStore});
			}
		});

		shopCon.mouseover(function(e)
		{
			if (e.target.className.match(/font-color/))
			{
				$(e.target).stop(true).animate({color: "#e30b20"}, 300);
			}
		}).mouseout(function(e)
		{
			if (e.target.className.match(/font-color/))
			{
				$(e.target).stop(true).animate({color: "#666"}, 300);
			}
		}).click(function(e)
		{
			if (e.target.className.match(/operate-del/))
			{
				$.get("updateGoodsBasket.php", {request: "delete", goodsId: $(e.target).attr("goods-id")}, function(data)
				{
					var res = eval(data), num = 0, price = 0;

					$(e.target.parentNode.parentNode).remove();
					if (res.length == 0)
					{
						$(".S_down").show();
						$(".shopping-content").hide();
					}
					else
					{
						for (var i = 0; i < res.length; i++)
						{
							if (res[i]["goodsSelect"] == "1")
							{
								num += Number(res[i]["number"]);
								price += Number(res[i]["number"]) * Number(res[i]["price"]);
							}
						}
						$(".goods-num-box").children("span").html(num);
						$(".alltotal-price-box").children("span").html("￥" + price.toFixed(2));
					}
				});
			}
			else if (e.target.className.match(/operate-favorite/))
			{
				showMsg("收藏成功");
			}
			else if (e.target.className.match(/subbtn/))
			{
				var nowValue = parseInt($(e.target).next().val());

				if (nowValue <= 1)
				{
					$(e.target).next().val(1);
					showMsg("数量不能等于0");
				}
				else
				{
					$(e.target).next().val(-- nowValue);
					$.get("addGoodsBasket.php", {goodsId: $(e.target).parent().attr('goods-id'), number: - 1}, function()
					{
						countPrice();
					});
				}
			}
			else if (e.target.className.match(/addbtn/))
			{
				var nowValue = parseInt($(e.target).prev().val()),
					maxValue = parseInt($(e.target).parent().parent().attr('data-stock'));

				if (nowValue >= maxValue)
				{
					showMsg("最大库存了");
				}
				else
				{
					$(e.target).prev().val(++ nowValue);
					$.get("addGoodsBasket.php", {goodsId: $(e.target).parent().attr('goods-id'), number: 1}, function()
					{
						countPrice();
					});
				}
			}
		});

		shopConMid.click(function(e)
		{
			if (e.target.className.match(/checkAll/))
			{
				var method = 0;

				judgeChecked();
				$(e.target).prop("checked") ? method = 1 : method = 0;

				$.get("updateGoodsBasket.php", {request: "single", goodsId: $(e.target).parent().attr('data-id'), goodsSelect: method}, function()
				{
					countPrice();
				});
			}
		});

		for (var i = 0; i < checkAll.length; i++)
		{
			if (Number(checkAll.eq(i).attr("goods-select")))
			{
				checkAll.eq(i).prop("checked", true);
			}
		}

		judgeChecked();
		countPrice();

		$(".allChecked").click(function()
		{
			var method = 0;
			if (this.checked)
			{
				$(".checkAll").prop("checked", true);
				method = 1;
			}
			else
			{
				$(".checkAll").prop("checked", false);
				method = 0;
			}
			$.get("updateGoodsBasket.php", {request: "update", goodsSelect: method}, function()
			{
				countPrice();
			});
		});

		function showMsg(str)
		{
			$(".collectSuccess").html(str).show();
			if (flag)
			{
				flag = false;
				setTimeout(function()
				{
					$(".collectSuccess").fadeOut(300);
					flag = true;
				}, 3000);
			}
		}

		function countPrice()
		{
			var nCheckAll = shopConMid.find('.checkAll'),  allPiece = 0, allPrice = 0;

			for (var i = 0; i < nCheckAll.length; i++)
			{
				if (nCheckAll.eq(i).prop("checked"))
				{
					allPiece += parseInt(shopConMid.children().eq(i).find('.num-ipt').val());
					allPrice += Number(shopConMid.children().eq(i).attr("data-price")) * parseInt(shopConMid.children().eq(i).find('.num-ipt').val());
				}
			};
			$(".goods-num-box span").html(allPiece);
			$(".alltotal-price-box span").html("￥" + allPrice.toFixed(2));
		}

		function judgeChecked()
		{
			var num = 0;

			for (var i = 0; i < checkAll.length; i++)
			{
				if (checkAll.eq(i).prop("checked"))
				{
					num ++;
				}
			}

			if (num == checkAll.length)
			{
				$(".allChecked").prop("checked", true);
			}
			else if (num < checkAll.length)
			{
				$(".allChecked").prop("checked", false);
			}
		}
	})($);
});