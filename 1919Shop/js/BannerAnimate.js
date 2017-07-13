


function bannerAnimate(banCon,obj)
{
	return new bannerAnimate.fn(banCon,obj);
}

bannerAnimate.fn = function(banCon,obj)
{
	this.banCon = banCon;
	this.banner = banCon.children().eq(0);
	this.banLen = this.banner.children().length;
	this.banWid = this.banner.children().eq(0).outerWidth();
	obj ? this.callback = obj["callback"] : null;
	this.flag = true;
	this.x = 0;

	if (obj)
	{
		if (obj["banner"])
		{
			obj["banner"]["type"] ? this.banType = obj["banner"]["type"] : this.banType = "fade";

			switch (this.banType)
			{
				case "seamless" :
					this.banner.children().css({
						position : "absolute",
						top : 0,
						left : 0,
						display : "none"
					});
					this.banner.children().first().show();
					break;

				case "fade" :
					this.banner.children().css({
						position : "absolute",
						top : 0,
						left : 0,
						display : "none"
					});
					this.banner.children().first().show();
					break;
			}

			obj["banner"]["effect"] ? this.effect = obj["banner"]["effect"] : null;

			obj["banner"]["slideTime"] ? this.slideTime = obj["banner"]["slideTime"] : this.slideTime = 1000;

			if (obj["banner"]["autoTime"])
			{
				this.autoTime = obj["banner"]["autoTime"];
				this.autoPlayFunction();
			}
		}
		else
		{
			this.banType = "fade";
			this.slideTime = 1000;
			this.banner.children().css({
				position : "absolute",
				top : 0,
				left : 0,
				display : "none"
			});
			this.banner.children().first().show();
			this.autoTime = 3000;
			this.autoPlayFunction();
		}

		if (obj["bannerBtn"])
		{
			if (obj["bannerBtn"]["preBtn"])
			{
				var preBtn = document.createElement('div');

				if (this.objectLength(obj["bannerBtn"]["preBtn"]) > 0)
				{
					$(preBtn).attr(obj["bannerBtn"]["preBtn"]);
					obj["bannerBtn"]["preBtn"] = false;
				}
				else
				{
					$(preBtn).attr({"class" : "preBtn"});
				}

				this.preBtn = $(preBtn);
				this.banCon.append(preBtn);
				this.preEvent();
			}

			if (obj["bannerBtn"]["nextBtn"])
			{
				var nextBtn = document.createElement('div');

				if (this.objectLength(obj["bannerBtn"]["nextBtn"]) > 0)
				{
					$(nextBtn).attr(obj["bannerBtn"]["nextBtn"]);
					obj["bannerBtn"]["nextBtn"] = false;
				}
				else
				{
					$(nextBtn).attr({"class" : "nextBtn"});
				}

				this.nextBtn = $(nextBtn);
				this.banCon.append(nextBtn);
				this.nextEvent();
			}

			if (obj["bannerBtn"]["defaultCss"] || obj["bannerBtn"]["defaultCss"] === undefined)
			{
				if (obj["bannerBtn"]["preBtn"])
				{
					this.preBtn.css({
						width : "3%",
						height : "20%",
						backgroundColor : "#000",
						opacity : 0.3,
						cursor : "pointer",
						position : "absolute",
						top : "50%",
						marginTop : -this.banCon.innerHeight() * 0.1
					}).hover(function()
					{
						$(this).fadeTo(200, 0.7);
					}, function()
					{
						$(this).fadeTo(200, 0.3);
					});
					this.preBtn.css({left : obj["bannerBtn"]["distance"] ? obj["bannerBtn"]["distance"] : 0});
				}

				if (obj["bannerBtn"]["nextBtn"])
				{
					this.nextBtn.css({
						width : "3%",
						height : "20%",
						backgroundColor : "#000",
						opacity : 0.3,
						cursor : "pointer",
						position : "absolute",
						top : "50%",
						marginTop : -this.banCon.innerHeight() * 0.1
					}).hover(function()
					{
						$(this).fadeTo(200, 0.7);
					}, function()
					{
						$(this).fadeTo(200, 0.3);
					});
					this.nextBtn.css({right : obj["bannerBtn"]["distance"] ? obj["bannerBtn"]["distance"] : 0});
				}
			}
		}
		else
		{
			var preBtn = document.createElement('div');

			$(preBtn).attr({"class" : "preBtn"});

			this.preBtn = $(preBtn);
			this.banCon.append(preBtn);
			this.preEvent();

			var nextBtn = document.createElement('div');

			$(nextBtn).attr({"class" : "nextBtn"});

			this.nextBtn = $(nextBtn);
			this.banCon.append(nextBtn);
			this.nextEvent();

			this.preBtn.css({
				width : "3%",
				height : "20%",
				backgroundColor : "#000",
				opacity : 0.3,
				cursor : "pointer",
				position : "absolute",
				top : "50%",
				marginTop : -this.banCon.innerHeight() * 0.1
			}).hover(function()
			{
				$(this).fadeTo(200, 0.7);
			}, function()
			{
				$(this).fadeTo(200, 0.3);
			});
			this.preBtn.css({left : 0});

			this.nextBtn.css({
				width : "3%",
				height : "20%",
				backgroundColor : "#000",
				opacity : 0.3,
				cursor : "pointer",
				position : "absolute",
				top : "50%",
				marginTop : -this.banCon.innerHeight() * 0.1
			}).hover(function()
			{
				$(this).fadeTo(200, 0.7);
			}, function()
			{
				$(this).fadeTo(200, 0.3);
			});
			this.nextBtn.css({right : 0});
		}

		if (obj["bannerDot"])
		{
			var bannerDot = document.createElement("ul");

			for (var i = 0; i < this.banLen; i++)
			{
				$(bannerDot).append("<li></li>");
			}

			if (this.objectLength(obj["bannerDot"]["dotAttr"]) > 0)
			{
				$(bannerDot).attr(obj["bannerDot"]["dotAttr"]);
				obj["bannerDot"]["defaultCss"] ? null : obj["bannerDot"]["defaultCss"] = false;
			}
			else
			{
				$(bannerDot).attr({"class" : "bannerDot"});
			}

			obj["bannerDot"]["dotEvent"] ? this.bDotEvent = obj["bannerDot"]["dotEvent"] : this.bDotEvent = "click";

			this.bannerDot = $(bannerDot);

			if (obj["bannerDot"]["defaultCss"] || obj["bannerDot"]["defaultCss"] === undefined)
			{
				this.bannerDot.css({
					padding : "4px 8px",
					borderRadius : 12,
					backgroundColor : "hsla(0,0%,100%,0.3)"
				});

				this.bannerDot.children().css({
					float : "left",
					width : 12,
					height : 12,
					marginLeft : 10,
					borderRadius : "100%",
					backgroundColor : "#fff",
					cursor : "pointer"
				});
			}

			if (obj["bannerDot"]["isCenter"] || obj["bannerDot"]["isCenter"] === undefined)
			{
				this.bannerDot.children().first().css({marginLeft : 0});
				this.bannerDot.children().last().css({marginRight : 0});
				var bannerDotW = 0;
				setTimeout(function()
				{
					for (var i = 0; i < $(bannerDot).children().length; i++)
					{
						bannerDotW += $(bannerDot).children().eq(i).outerWidth(true);
					};

					$(bannerDot).width(bannerDotW);
					$(bannerDot).css({
						position : "absolute",
						left : "50%",
						marginLeft : -$(bannerDot).outerWidth() / 2,
						bottom : obj["bannerDot"]["bottom"] ? obj["bannerDot"]["bottom"] : "10%"
					});
				}, 0);
			}

			if (obj["bannerDot"]["active"])
			{
				obj["bannerDot"]["active"].indexOf(".") == 0 ? this.nClass = obj["bannerDot"]["active"].substring(1, obj["bannerDot"]["active"].length) : this.dColor = obj["bannerDot"]["active"];
			}
			else
			{
				this.dColor = "#db192a";
			}

			this.nClass ? this.bannerDot.children().eq(0).addClass(this.nClass) : this.bannerDot.children().eq(0).css({backgroundColor : this.dColor});

			this.banCon.append(bannerDot);
			this.bannerDotFunction();
		}
		else
		{
			var bannerDot = document.createElement("ul");

			this.bannerDot = $(bannerDot);

			for (var i = 0; i < this.banLen; i++)
			{
				$(bannerDot).append("<li></li>");
			}

			$(bannerDot).attr({"class" : "bannerDot"});
			this.bDotEvent = "click";
			
			this.bannerDot.css({
				padding : "4px 8px",
				borderRadius : 12,
				backgroundColor : "hsla(0,0%,100%,0.3)"
			});

			this.bannerDot.children().css({
				float : "left",
				width : 12,
				height : 12,
				marginLeft : 10,
				borderRadius : "100%",
				backgroundColor : "#fff",
				cursor : "pointer"
			});

			this.bannerDot.children().first().css({marginLeft : 0});
			this.bannerDot.children().last().css({marginRight : 0});
			this.bannerDot.width((this.bannerDot.children().eq(1).outerWidth(true)) * this.banLen - 10)
			this.bannerDot.css({
				position : "absolute",
				left : "50%",
				marginLeft : -this.bannerDot.outerWidth() / 2,
				bottom : "10%"
			});
			this.dColor = "#db192a";
			this.bannerDot.children().eq(0).css({backgroundColor : this.dColor});
			this.banCon.append(bannerDot);
			this.bannerDotFunction();
		}
	}
	else
	{
		this.banType = "fade";
		this.slideTime = 1000;
		this.banner.children().css({
			position : "absolute",
			top : 0,
			left : 0,
			display : "none"
		});
		this.banner.children().first().show();
		this.autoTime = 3000;
		this.autoPlayFunction();

		var preBtn = document.createElement('div');

		$(preBtn).attr({"class" : "preBtn"});

		this.preBtn = $(preBtn);
		this.banCon.append(preBtn);
		this.preEvent();

		var nextBtn = document.createElement('div');

		$(nextBtn).attr({"class" : "nextBtn"});

		this.nextBtn = $(nextBtn);
		this.banCon.append(nextBtn);
		this.nextEvent();

		this.preBtn.css({
			width : "3%",
			height : "20%",
			backgroundColor : "#000",
			opacity : 0.3,
			cursor : "pointer",
			position : "absolute",
			top : "50%",
			marginTop : -this.banCon.innerHeight() * 0.1
		}).hover(function()
		{
			$(this).fadeTo(200, 0.7);
		}, function()
		{
			$(this).fadeTo(200, 0.3);
		});
		this.preBtn.css({left : 0});

		this.nextBtn.css({
			width : "3%",
			height : "20%",
			backgroundColor : "#000",
			opacity : 0.3,
			cursor : "pointer",
			position : "absolute",
			top : "50%",
			marginTop : -this.banCon.innerHeight() * 0.1
		}).hover(function()
		{
			$(this).fadeTo(200, 0.7);
		}, function()
		{
			$(this).fadeTo(200, 0.3);
		});
		this.nextBtn.css({right : 0});

		var bannerDot = document.createElement("ul");

		this.bannerDot = $(bannerDot);

		for (var i = 0; i < this.banLen; i++)
		{
			$(bannerDot).append("<li></li>");
		}

		$(bannerDot).attr({"class" : "bannerDot"});
		this.bDotEvent = "click";
		
		this.bannerDot.css({
			padding : "4px 8px",
			borderRadius : 12,
			backgroundColor : "hsla(0,0%,100%,0.3)"
		});

		this.bannerDot.children().css({
			float : "left",
			width : 12,
			height : 12,
			marginLeft : 10,
			borderRadius : "100%",
			backgroundColor : "#fff",
			cursor : "pointer"
		});

		this.bannerDot.children().first().css({marginLeft : 0});
		this.bannerDot.children().last().css({marginRight : 0});
		this.bannerDot.width((this.bannerDot.children().eq(1).outerWidth(true)) * this.banLen - 10)
		this.bannerDot.css({
			position : "absolute",
			left : "50%",
			marginLeft : -this.bannerDot.outerWidth() / 2,
			bottom : "10%"
		});
		this.dColor = "#db192a";
		this.bannerDot.children().eq(0).css({backgroundColor : this.dColor});
		this.banCon.append(bannerDot);
		this.bannerDotFunction();
	}

	this.banCon[0].onselectstart = this.banCon[0].ondrag = function()
    {
        return false;
    }
    bannerAnimate.fn.prototype.constructor = bannerAnimate.fun;
}

bannerAnimate.fn.prototype = {
	bannerTypeFunction : function(which, nowIndex)
	{
		switch (this.banType)
		{
			case "roll" :
				var aThis = this;

				switch (which)
				{
					case "pre" :
						this.x --;
						this.x < 0 ? this.x = this.banLen - 1 : null;
						this.clearStyle(this.x);
						this.banner.animate({left : -this.banWid * this.x}, this.slideTime, this.effect, function()
						{
							aThis.flag = true;
							aThis.callback;
						});
						break;

					case "next" :
						this.x ++;
						this.x >= this.banLen ? this.x = 0 : null;
						this.clearStyle(this.x);
						this.banner.animate({left : -this.banWid * this.x}, this.slideTime, this.effect, function()
						{
							aThis.flag = true;
							aThis.callback;
						});
						break;

					case "dot" :
						this.banner.animate({left : -this.banWid * this.x}, this.slideTime, this.effect,  function()
						{
							aThis.flag = true;
							aThis.callback;
						});
						break;
				}
				break;

			case "seamless" :
				var y = 0,
					aThis = this;

				switch (which)
				{
					case "pre" :
						y = this.x;
						this.x --;
						this.x < 0 ? this.x = this.banLen - 1 : null;
						this.clearStyle(this.x);
						this.banner.children().eq(this.x).css({left : this.banWid}).show().animate({left : 0}, this.slideTime, this.effect, this.callback);
						this.banner.children().eq(y).animate({left : -this.banWid}, this.slideTime, this.effect, function()
						{
							aThis.flag = true;
							aThis.callback;
						});
						break;

					case "next" :
						y = this.x;
						this.x ++;
						this.x >= this.banLen ? this.x = 0 : null;
						this.clearStyle(this.x);
						this.banner.children().eq(this.x).css({left : this.banWid}).show().animate({left : 0}, this.slideTime, this.effect, this.callback);
						this.banner.children().eq(y).animate({left : -this.banWid}, this.slideTime, this.effect, function()
						{
							aThis.flag = true;
							aThis.callback;
						});
						break;

					case "dot" :
						this.banner.children().eq(this.x).css({left : this.banWid}).show().animate({left : 0}, this.slideTime, this.effect, this.callback);
						this.banner.children().eq(nowIndex).animate({left : -this.banWid}, this.slideTime, this.effect, function()
						{
							aThis.flag = true;
							aThis.callback;
						});
						break;
				}
				break;

			case "fade" :
				var y = 0,
					aThis = this;

				switch (which)
				{
					case "pre" :
						y = this.x;
						this.x --;
						this.x < 0 ? this.x = this.banLen - 1 : null;
						this.clearStyle(this.x);
						this.banner.children().eq(y).fadeOut(this.slideTime, this.effect, this.callback);
						this.banner.children().eq(this.x).fadeIn(this.slideTime, this.effect, function()
						{
							aThis.flag = true;
							aThis.callback;
						});
						break;

					case "next" :
						y = this.x;
						this.x ++;
						this.x >= this.banLen ? this.x = 0 : null;
						this.clearStyle(this.x);
						this.banner.children().eq(y).fadeOut(this.slideTime, this.effect, this.callback);
						this.banner.children().eq(this.x).fadeIn(this.slideTime, this.effect, function()
						{
							aThis.flag = true;
							aThis.callback;
						});
						break;

					case "dot" :
						this.banner.children().eq(nowIndex).fadeOut(this.slideTime, this.effect, this.callback);
						this.banner.children().eq(this.x).fadeIn(this.slideTime, this.effect, function()
						{
							aThis.flag = true;
							aThis.callback;
						});
						break;
				}
				break;
		}
	},

	preEvent : function()
	{
		var aThis = this;

		this.preBtn.click(function()
		{
			if (aThis.flag)
			{
				aThis.flag = false;
				aThis.bannerTypeFunction("pre");
			}
		});
	},

	nextEvent : function()
	{
		var aThis = this;

		this.nextBtn.click(function()
		{
			if (aThis.flag)
			{
				aThis.flag = false;
				aThis.bannerTypeFunction("next");
			}
		});
	},

	bannerDotFunction : function()
	{
		var aThis = this;

		this.bDotChiBgc = this.bannerDot.children().eq(1).css("backgroundColor");

		if (this.bDotEvent == "click")
		{
			this.bannerDot.click(function(e)
			{
				executive(e);
			});
		}
		else if (this.bDotEvent == "mouseover")
		{
			this.bannerDot.mouseover(function(e)
			{
				executive(e);
				aThis.bannerDot.click(function(e)
				{
					executive(e);
				});
			});
		}

		function executive(e)
		{
			if (e.target.nodeName.toLowerCase() == "li")
			{
				if (aThis.flag)
				{
					aThis.flag = false;
					for (var i = 0; i < aThis.banLen; i++)
					{
						if (aThis.nClass)
						{
							if (aThis.bannerDot.children().eq(i)[0].className == aThis.nClass)
							{
								var nowIndex = aThis.bannerDot.children().eq(i).index();
							}
							aThis.bannerDot.children().eq(i).removeClass(aThis.nClass);
						}
						else
						{
							if (aThis.bannerDot.children().eq(i).css("backgroundColor") == aThis.colorSwitch(aThis.dColor))
							{
								var nowIndex = aThis.bannerDot.children().eq(i).index();
							}
							aThis.bannerDot.children().eq(i).css({backgroundColor : aThis.bDotChiBgc});
						}
					}

					aThis.nClass ? $(e.target).addClass(aThis.nClass) : $(e.target).css({backgroundColor : aThis.dColor});

					if (aThis.x != $(e.target).index())
					{
						aThis.x = $(e.target).index();
						aThis.bannerTypeFunction("dot", nowIndex);
					}
					else
					{
						aThis.flag = true;
					}
				}
			}
		}
	},

	autoPlayFunction : function()
	{
		var aThis = this,
			time = setTimeout(autoPlay, this.autoTime);

		function autoPlay()
		{
			aThis.nextBtn.click();
			time = setTimeout(autoPlay, aThis.autoTime);
		}

		this.banCon.mouseover(function()
		{
			clearTimeout(time);
		});

		this.banCon.mouseout(function()
		{
			time = setTimeout(autoPlay, aThis.autoTime);
		});
	},

	clearStyle : function(index)
	{
		if (this.nClass)
		{
			this.bannerDot.children().removeClass(this.nClass);
			this.bannerDot.children().eq(index).addClass(this.nClass);
		}
		else
		{
			this.bannerDot.children().css({backgroundColor : this.bDotChiBgc});
			this.bannerDot.children().eq(index).css({backgroundColor : this.dColor});
		}
	},

	colorSwitch : function(color)
	{
		var newNode = document.createElement('div');

		newNode.style.color = color;

		return $(newNode).css("color");
	},

	objectLength : function(obj)
	{
		var n = 0;

		for(var i in obj)
		{
			n ++;
		}
		return n;
	}
}