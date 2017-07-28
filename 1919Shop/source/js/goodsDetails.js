


$(function($)
{
	$("img.lazy").lazyload();

	$(".shoplists").css({display:"none"});

	$(".quanbu").mouseenter(function()
	{
		$(".shoplists").css({display:"block"});
	});

	$(".quanbu").mouseleave(function()
	{
		$(".shoplists").css({display:"none"});
	});

	$(".shoplists").mouseenter(function()
	{
		$(".shoplists").css({display:"block"});
	});

	$(".shoplists").mouseleave(function()
	{
		$(".shoplists").css({display:"none"});
	});

	$(".introduce").mouseenter(function()
	{
		$(".shoplists").css({display:"block"});
	});

	$(".introduce").mouseleave(function(){
		$(".shoplists").css({display:"none"});
	});

	$(".goods-tit-text h2").html( $(".goods-tit-text h2").html().substring(1, $(".goods-tit-text h2").html().length - 1) );

	//放大镜js
	(function($)
	{
		var gImgCon = $("#goods-left-img"),
			gbImg = gImgCon.children('.goods-left-bigImg'),
			gsImg = $("#goods-left-smImg"),
			gGlass = gImgCon.children('.goodsGlass'),
			gGlaCon = $("#goods-glassImg-con"),
			gGlaImg = $("#goods-glassImg");

		var bigSrc = "";

		gsImg.children().eq(0).addClass("imgCur");
		bigSrc = gsImg.children().eq(0).children("img").attr("src").replace(/smimg/,"bigimg");
		gbImg.attr({src: bigSrc});
		gGlaImg.attr({src: bigSrc});

		gsImg.mouseover(function(e)
		{
			if (e.target.nodeName.toLowerCase() == "li")
			{
				$(e.target).siblings().removeClass("imgCur");
				$(e.target).addClass("imgCur");
				bigSrc = $(e.target).children("img").attr("src").replace(/smimg/,"bigimg");
				gbImg.attr({src: bigSrc});
				gGlaImg.attr({src: bigSrc});
			}
			else if (e.target.nodeName.toLowerCase() == "img")
			{
				$(e.target.parentNode).siblings().removeClass("imgCur");
				$(e.target.parentNode).addClass("imgCur");
				bigSrc = $(e.target).attr("src").replace(/smimg/,"bigimg");
				gbImg.attr({src: bigSrc});
				gGlaImg.attr({src: bigSrc});
			}
		});

		gImgCon.mousemove(function(e)
		{
			var x = e.pageX - $(this).offset().left,
				y = e.pageY - $(this).offset().top;
			var gWidth = gGlass.width(),
				gHeight = gGlass.height();
			var gWiTimes = gGlaImg.width() / gbImg.width(),
				gHeTimes = gGlaImg.height() / gbImg.height();

			x <= gWidth / 2 ? x = gWidth / 2 : null;
			x >= gImgCon.width() - gWidth / 2 ? x = gImgCon.width() - gWidth / 2 : null;
			y <= gHeight / 2 ? y = gHeight / 2 : null;
			y >= gImgCon.height() - gHeight / 2 ? y = gImgCon.height()- gHeight / 2 : null;

			gGlass.css({left: x - gWidth / 2, top: y - gHeight / 2});
			gGlaImg.css({left: -x * gWiTimes + 40 - gWiTimes * 2 + gWidth, top: -y * gHeTimes + 40 - gHeTimes * 2 + gHeight});
		});

		gImgCon.mouseover(function()
		{
			gGlaCon.css({display: "block"});
			gGlass.css({display: "block"});
		});
		gImgCon.mouseout(function()
		{
			gGlaCon.css({display: ""});
			gGlass.css({display: ""});
		});
	})(window.jQuery);

	//数量点击
	(function($)
	{
		var gReduce = $("#goods-stock").children(".goods-reduce"),
			gIncrease = $("#goods-stock").children(".goods-increase"),
			gText = $("#goods-stock").children(".goods-text"),
			gBasketBtn = $(".goods-btn-basket");

		gText.keyup(function()
		{
			if (Number(gText.attr("value")) < 1)
			{
				gText.attr({value: 1});
			}
			else if (Number(gText.attr("value")) >= kucun)
			{
				gText.attr({value: kucun});
			}
		});

		gReduce.click(function()
		{
			var x = Number(gText.attr("value"));

			x --;
			Number(gText.attr("value")) <= 1 ? gText.attr({value: 1}) : gText.attr({value: x});
		});

		gIncrease.click(function()
		{
			var x = Number(gText.attr("value"));

			x ++;
			Number(gText.attr("value")) >= kucun ? gText.attr({value: kucun}) : gText.attr({value: x});
		});

		gBasketBtn.click(function()
		{
			var bCarNum = $(".buycar_num");

			var bCarNumVal = parseInt(bCarNum.html()),
				x = Number(gText.attr("value")),
				carGoodsList = $("#carGoods-list"),
				goodsId = $(this).attr("goods-id");

			$.get("addGoodsBasket.php", {goodsId: goodsId, number: x}, function(data)
			{
				if (!data.match(/<script>/))
				{
					var res = eval(data), num = 0, price = 0;
					carGoodsList[0].innerHTML = "";
					for (var i = 0; i < res.length; i++)
					{
						num += Number(res[i]["number"]);
						price += Number(res[i]["number"]) * Number(res[i]["price"]);;
						carGoodsList[0].innerHTML += "<li goods-id=" + res[i]['goodsId'] + "><div class='goodsImg'><a href='goodsDetails.php?goodsId=" + res[i]['goodsId'] + "'><img src='" + res[i]['goodsImg'] + "' alt='" + res[i]['title'] + "' width='50px'></a></div><div class='goodsDels'><a href='goodsDetails.php?goodsId=" + res[i]['goodsId'] + "'><h3>" + res[i]['title'] + "</h3></a><p>" + res[i]['number'] + "件</p></div><div class='goodsDel'><p>￥" + res[i]['price'] + "</p><span class='buycar-delBtn' goods-id='" + res[i]['goodsId'] + "'>刪除</span></div></li>";
					}
					bCarNum.html(num);

					$(".nu").hide();
					$(".carPull").show();
					$(".font span").html(num);
					$(".font b").html(price.toFixed(2));
				}
				else
				{
					data;
				}
			});
			
		});
	})(window.jQuery);

	(function($)
	{
		var gRcmdCon = $(".goods-recmd-list"),
			gRcmdBan = $(".goods-recmd-banner"),
			gLeftBtn = $(".leftBtn"),
			gRightBtn = $(".rightBtn");
		var x = 0;

		gLeftBtn.click(function()
		{
			x --;
			x < 0 ? x = 0 : null;
			gRcmdBan.stop(true).animate({left: -279 * x}, 1000);
		});

		gRightBtn.click(function()
		{
			x ++;
			x > 4 ? x = 4 : null;
			gRcmdBan.stop(true).animate({left: -279 * x}, 1000);
		});
	})(window.jQuery);

	$(".goods-introduce-r-tit").children().click(function()
	{
		$(this).siblings().removeClass("intro-select");
		$(this).addClass("intro-select");

		if ($(this).index() <= 1)
		{
			$(window).scrollTop($(this).offset().top);
		}
		if ($(this).index() == 2)
		{
			$(window).scrollTop($(".goods-intro-afterSale").offset().top);
		}
		if ($(this).index() == 3)
		{
			$(window).scrollTop($(".goods-intro-evaluate").offset().top);
		}
	});

	(function($)
	{
		var x = 0, allpage = 6;
		var pageNum = $("#pagenumber"),
			prePage = $("#prePage"),
			nextPage = $("#nextPage"),
			firstPage = $("#firstPage"),
			lastPage = $("#lastPage"),
			allPage = $("#allPage"),
			iptPage = $("#ipt_page"),
			sureBtn = $("#sureBtn");

		allPage.html("共有" + allpage + "页");

		for (var i = 0; i < allpage; i++)
		{
        	var lis = document.createElement('li');
        	lis.innerHTML = i + 1;
        	pageNum.append(lis);
		}

		pageNum.children().eq(0).addClass('on');

		pageNum.on("click",function(e)
		{
			var target = e.target || e.srcElement;
			if (target.nodeName.toLowerCase() == "li")
			{
				x = $(target).index();

				changeCode();

				x <= 0 ? pageNum.css({marginLeft : 0}) : pageNum.css({marginLeft : -(x - 1) * 48});
				x >= pageNum.children().length - 1 ? pageNum.css({marginLeft : -(x - 2) * 48}) : null;
			}
		});

		firstPage.click(function()
		{
			x = 0;

			changeCode();

			pageNum.css({marginLeft : 0});
		});

		lastPage.click(function()
		{
			x = pageNum.children().length - 1;

			changeCode();

			pageNum.css({marginLeft : -(x - 2) * 48});
		});

		prePage.click(function()
		{
			x --;
			x < 0 ? x = 0 : null;

			changeCode();

			x > 0 ? pageNum.css({marginLeft : -(x - 1) * 48}) : null;
		});

		nextPage.click(function()
		{
			x ++;
			x > pageNum.children().length - 1 ? x = pageNum.children().length - 1 : null;

			changeCode();

			if (x > 1 && x < pageNum.children().length - 1)
			{
				pageNum.css({marginLeft : -(x - 1) * 48});
			}
		});

		sureBtn.click(function()
        {
        	x = Number(iptPage[0].value) - 1;
        	x >= allpage ? x = allpage - 1 : null;

        	changeCode();
            if (x <= 0)
            {
                pageNum.css({marginLeft : 0});
            }
            else
            {
                pageNum.css({marginLeft : (x - 2) * -48});
            }
        });

		function changeCode()
		{
			x >= 1 ? prePage[0].className = "prePage" : prePage[0].className = "prePage noAct";
			x >= pageNum.children().length - 1 ? nextPage[0].className = "nextPage noAct" : nextPage[0].className = "nextPage";
			x <= 0 ? x = 0 : null;

			pageNum.children().removeClass('on');
			pageNum.children().eq(x).addClass('on');
		}
	})(window.jQuery);
});