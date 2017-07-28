


$(function($)
{
	$("img.lazy").lazyload({
		failure_limit : 0
	});

	//banner开始
	new BannerAnimate(
		$(".banner-container"),
		{
			banner : {
				type : "fade",	//banner图轮播方式
				effect : "swing",	//动画格式
				slideTime : 1000,	//动画时间
				autoTime : 3000		//自动播放时间
			},
			
			bannerBtn : {
				preBtn : {
					"class": "leftBtn"
				},	//默认true，选false将不再有上一张按钮，可以传对象，对象是该按钮的属性
				nextBtn : {
					"class" : "rightBtn"	//默认是类名nextBtn
				},
				defaultCss : false	//默认true
			},

			bannerDot : {
				dotAttr : {
					"class" : "banner-dot"
				},
				dotEvent : "mouseover",	//鼠标经过小圆点的事件，默认click
				defaultCss : false,	//默认true，小点的默认样式
				isCenter : true,	//是否居中
				active : ".dActive"	//小点的激活颜色，默认京东红，可以使类名，也可以是颜色
			}
		});

	//酒列表tab
	(function($)
	{
		var drTitChi = $("#drink-list-tit").children(),
			drConTab = $("#drink-content-tab");
		
		drTitChi.eq(0).css({color:"#d40f22", fontSize:20})
		drConTab.children().eq(0).css({display:"block"});

		drTitChi.click(function()
		{
			$(this).siblings().css({color:""}).stop(true).animate({fontSize:12});
			$(this).css({color:"#d40f22"}).stop(true).animate({fontSize:20});
			drConTab.children().css({display:""});
			drConTab.children().eq($(this).index()).css({display:"block"});
		});

		var time = setTimeout(fun, 3000);
		var x = 0;

		function fun()
		{
			x ++;
			x >= drTitChi.length ? x = 0 : null;

			drTitChi.eq(x).siblings().css({color:""}).stop(true).animate({fontSize:12});
			drTitChi.eq(x).css({color:"#d40f22"}).stop(true).animate({fontSize:20});
			drConTab.children().eq(x).siblings().css({display:""});
			drConTab.children().eq(x).css({display:"block"});

			time = setTimeout(fun, 3000);
		}

		drConTab.mouseover(function()
		{
			clearTimeout(time);
		});
		drConTab.mouseout(function()
		{
			time = setTimeout(fun, 3000);
		});
	})(window.jQuery);

	//三个小banner
	for (var i = 0; i < $(".smbanner-container").length; i++)
	{
		new BannerAnimate(
		$(".smbanner-container").eq(i),
		{
			banner : {
				type : "fade",	//banner图轮播方式
				effect : "swing",	//动画格式
				slideTime : 300,	//动画时间
				autoTime : 3000		//自动播放时间
			},

			bannerDot : {
				dotAttr : {
					"class" : "smbanner-dot"
				},
				dotEvent : "mouseover",	//鼠标经过小圆点的事件，默认click
				defaultCss : false,	//默认true，小点的默认样式
				// isCenter : true,	//是否居中 默认居中
				active : ".sActive"	//小点的激活颜色，默认京东红，可以使类名，也可以是颜色
			}
		});
	};

	//楼层左边tab和商品推荐点击
	(function($)
	{
		var wlImg = $(".wine-body-left-img"),
			wlList = $(".wine-left-list");

		wlImg.children(0).css('display', 'block');

		wlList.each(function(i)
		{
			this.index = i;
		}).mouseover(function(e)
		{
			if (e.target.nodeName.toLowerCase() == "li")
			{
				$(e.target).siblings().children(".wine-left-list-bc").css('opacity', "0.6");
				$(e.target).children(0).css('opacity', 1);

				wlImg.eq(this.index).children().css('display', '');
				wlImg.eq(this.index).children().eq($(e.target).index()).css('display', 'block');
			}
			else if (e.target.parentNode.nodeName.toLowerCase() == "li")
			{
				$(e.target.parentNode).siblings().children(".wine-left-list-bc").css('opacity', "0.6");
				$(e.target.parentNode).children(0).css('opacity', 1);

				wlImg.eq(this.index).children().css('display', '');
				wlImg.eq(this.index).children().eq($(e.target.parentNode).index()).css('display', 'block');
			}
		});

		var wTitMenu = $(".wine-tit-menu"),
			wActCon = $(".wine-activity-container"),
			wActTab = $(".wine-act-tab"),
			wActTabCon = $(".wine-act-tab-container"),
			wDelBtn = $(".wine-act-delBtn");

		wTitMenu.each(function(i)
		{
			this.index = i;
			wActTab[i].index = i;
			wDelBtn[i].index = i;
		}).click(function(e)
		{
			if (e.target.nodeName.toLowerCase() == "li")
			{
				wActCon.eq(this.index).css({display: "block"});

				wActTab.eq(this.index).children().eq($(e.target).index()).siblings().removeClass("actCur");
				wActTab.eq(this.index).children().eq($(e.target).index()).addClass("actCur");

				wActTabCon.eq(this.index).children().eq($(e.target).index()).siblings().css({display: ""});
				wActTabCon.eq(this.index).children().eq($(e.target).index()).css({display: "block"});
			}
		});

		wActTab.click(function(e)
		{
			if (e.target.nodeName.toLowerCase() == "li")
			{
				$(this).children().eq($(e.target).index()).siblings().removeClass("actCur");
				$(this).children().eq($(e.target).index()).addClass("actCur");

				wActTabCon.eq(this.index).children().eq($(e.target).index()).siblings().css({display: ""});
				wActTabCon.eq(this.index).children().eq($(e.target).index()).css({display: "block"});

			}
		});

		wDelBtn.click(function()
		{
			wActCon.eq(this.index).css({display: ""});
		});	
	})(window.jQuery);

	(function($)
	{
		$.fn.extend({
			scrollTo : function(obj,type,time)
			{
				this[type](function()
				{
					var browMsg = $.fn.getBrowserMsg();
					var ele = browMsg == "cho" ? $("body") : $("html");

					ele.animate({scrollTop : obj.eq($(this).index()).offset().top},time);
				});
			},

			scrollListener : function(obj,fun)
			{
				var browMsg = $.fn.getBrowserMsg();
				var ele = browMsg == "cho" ? $("body") : $("html");

				$(document).scroll(function()
				{
					ele.scrollTop() >= 1000 ? $("#nav-floors-container").show() : $("#nav-floors-container").hide();
					obj.each(function(i)
					{
						if (obj.eq(i).offset().top - ele.scrollTop() < 200 && obj.eq(i).offset().top - ele.scrollTop() >= 0)
						{
							fun ? fun(i) : null;
						}
					});
				});
			},

			scrollAnimate : function(obj,type,time,fun)
			{
				this.scrollTo(obj,type,time);
				this.scrollListener(obj,fun);
				return this;
			},

	    	getBrowserMsg : function ()
			{
				var explorer = window.navigator.userAgent;
				//ie
				if (explorer.indexOf("MSIE") >= 0)
				{
				    return "ie";
				}
				//firefox 
				else if (explorer.indexOf("Firefox") >= 0)
				{
				    return "ff";
				}
				//Chrome
				else if(explorer.indexOf("Chrome") >= 0)
				{
				    return "cho";
				}
				//Opera
				else if(explorer.indexOf("Opera") >= 0)
				{
				    return "ope";
				}
				//Safari
				else if(explorer.indexOf("Safari") >= 0)
				{
				    return "saf";
				}
			}
		});
	})(window.jQuery);

	(function($)
	{
		var nFlrChi = $("#nav-floors-container").children(),
			wineWrap = $(".wine-wrap");

		nFlrChi.first().children("font").show();
		nFlrChi.scrollAnimate(wineWrap,"click",700,function(i)
    	{
    		nFlrChi.children("font").hide();
    		nFlrChi.eq(i).children("font").show();
    	});

    	nFlrChi.mouseover(function()
    	{
    		$(this).children("a").css({zIndex: 5, display: "block"}).stop(true).animate({width: 70});
    	}).mouseout(function()
    	{
    		$(this).children("a").stop(true).animate({width: 30},function()
    		{
    			$(this).css({zIndex: "", display: ""});
    		});
    	});

    	nFlrChi.last().unbind();
    	nFlrChi.last().click(function()
    	{
    		$("body,html").animate({scrollTop :0});
    	}).hover(function()
    	{
    		$(this).children('span').css("backgroundPositionX", -95);
    	}, function() {
    		$(this).children('span').css("backgroundPositionX", "");
    	});;
	})(window.jQuery);
});
