
// 		new BannerAnimate(
// 		$("#ban_container"),
// 		{
// 			banner : {
// 				type : "fade",	//banner图轮播方式   roll 向左滚动轮播  seamless 无缝轮播 fade 淡入淡出轮播
// 				effect : "swing",	//动画格式
// 				slideTime : 1000,	//动画时间
// 				autoTime : 3000		//自动播放时间
// 			},
			
// 			bannerBtn : {
// 				preBtn : true,	//默认true，选false将不再有上一张按钮，可以传对象，对象是该按钮的属性
// 				nextBtn : {
// 					"class" : "arrow_sp_r"	//默认是类名nextBtn
// 				},
// 				//defaultCss : false,	//默认true
// 				distance : 0 //默认0，左右按钮距离两边的距离
// 			},

// 			bannerDot : {
// 				dotAttr : {
// 					"id" : "banDot"
// 				},
// 				dotEvent : "mouseover",	//鼠标经过小圆点的事件，默认click
// 				defaultCss : true,	//默认true，小点的默认样式
// 				isCenter : true,	//默认居中 是否居中
// 				bottom : 20,	//居中后距离底部的距离
// 				active : "green"	//小点的激活颜色，默认京东红，可以使类名，也可以是颜色
// 			},
// 			callback: function (dom) {
// 			
// 			}
// 		});

(function(root, factory) {
	if (typeof define === "function" && define.amd) {
		define([ root, "jquery" ], factory(root, root.jQuery ));
	}
	else if (typeof exports === "object") {
		module.exports = factory(root, require( "jquery" ));
	}
	else {
		factory(root, root.jQuery);
	};
})(this, function (window, $) {

function BannerAnimate (banCon, obj) {
	this.banCon = banCon;
	this.banner = banCon.children().eq(0);
	this.banner.children().css("float", "left");
	this.banLen = this.banner.children().length;
	this.banWid = this.banner.children().eq(0).outerWidth(true);
	obj ? this.callback = obj.callback : null;
	this.flag = true;
	this.x = 0;

	this.banCon.css({
		overflow: "hidden",
		position: "relative"
	});
	this.banner.css({
		width: this.banWid,
		height: this.banCon.height(),
		position: "absolute",
		top: 0,
		left: 0,
		marginLeft: this.banCon.innerWidth() / 2 - this.banWid / 2,
	});

	if (obj) {
		if (obj.banner) {
			this.effect = obj.banner.effect ? obj.banner.effect : null;
			obj.banner.type ? this.banType = obj.banner.type : this.banType = "fade";
			this.slideTime = obj.banner.slideTime ? obj.banner.slideTime : 1000;
			this.objBanner(this.banType,
				this.slideTime,
				obj.banner.autoTime ? obj.banner.autoTime : 3000);
		}
		else {
			this.banType = "fade";
			this.slideTime = 1000;
			this.objBanner(this.banType, this.slideTime, 3000);
		}

		if (obj.bannerBtn) {
			var btnObj = {};
			if (obj.bannerBtn.preBtn) btnObj.preBtn = obj.bannerBtn.preBtn;
			if (obj.bannerBtn.nextBtn) btnObj.nextBtn = obj.bannerBtn.nextBtn;

			for (var x in btnObj) {
				if (obj.bannerBtn.preBtn) this.objBannerBtn(x,
					btnObj[x],
					obj.bannerBtn.defaultCss || obj.bannerBtn.defaultCss === undefined ? true : false,
					obj.bannerBtn.distance ? obj.bannerBtn.distance : 0);
			};
		}

		if (obj["bannerDot"]) {
			if (!obj.bannerDot.dotAttr) obj.bannerDot.dotAttr = null;
			if (!obj.bannerDot.defaultCss === false) obj.bannerDot.defaultCss = true;
			if (!obj.bannerDot.isCenter === false) obj.bannerDot.isCenter = true;
			obj.bannerDot.active ? obj.bannerDot.active.indexOf(".") == 0 ? this.nClass = obj.bannerDot.active.match(/\.(.*)/)[1] : this.dColor = obj.bannerDot.active : this.dColor = "#db192a";

			this.objBannerDot(obj.bannerDot.dotAttr,
				obj.bannerDot.dotEvent ? obj.bannerDot.dotEvent : "click",
				obj.bannerDot.defaultCss,
				obj.bannerDot.isCenter,
				obj.bannerDot.bottom ? obj.bannerDot.bottom : "10%");
		}
		else {
			this.dColor = "#db192a";
			this.objBannerDot({"class" : "bannerDot"}, "click", true, true, "10%");
		}
	}
	else {
		this.banType = "fade";
		this.slideTime = 1000;
		this.objBanner(this.banType, this.slideTime, 3000);

		this.objBannerBtn("preBtn", {"class" : "preBtn"}, true, 0);
		this.objBannerBtn("nextBtn", {"class" : "nextBtn"}, true, 0);

		this.dColor = "#db192a";
		this.objBannerDot({"class" : "bannerDot"}, "click", true, true, "10%");
	}

	this.banCon[0].onselectstart = this.banCon[0].ondrag = function () {
        return false;
    }
    BannerAnimate.prototype.constructor = BannerAnimate.prototype;
}

BannerAnimate.prototype = {
	objBanner: function (type, slideTime, autoTime) {
		switch (type) {
			case "roll" :
				this.banner.css({
					width: this.banLen * this.banWid
				});
				this.banner.children().first().show();
				break;

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

		if (autoTime) this.autoPlayFunction(autoTime);
	},

	objBannerBtn: function (btnType, btnAttr, defaultCss, distance) {
		var newBtn = $('<div></div>');

		if (this.objectLength(btnAttr) > 0) {
			newBtn.attr(btnAttr);
			btnAttr = false;
		}
		else {
			btnType == "preBtn" ? newBtn.attr({"class" : btnType}) : newBtn.attr({"class" : btnType});
		};

		this.banCon.append(newBtn);
		btnType == "preBtn" ? this.preEvent(newBtn) : this.nextEvent(newBtn);

		if (defaultCss) {
			newBtn.css({
				width : "3%",
				height : "20%",
				backgroundColor : "#000",
				opacity : 0.3,
				cursor : "pointer",
				position : "absolute",
				top : "50%",
				marginTop : -this.banCon.innerHeight() * 0.1
			}).hover(function () {
				$(this).fadeTo(200, 0.7);
			}, function () {
				$(this).fadeTo(200, 0.3);
			});

			btnType == "preBtn" ? newBtn.css({left : distance}) : newBtn.css({right : distance});

			var newImg = document.createElement('img'),
				aThis = this;

			newBtn.append(newImg);
			if (btnType == "preBtn") {
				newImg.src = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHgAAADICAMAAAAUcNWVAAAAQlBMVEUAAAD////v7+/n5+fq6urn5+fm5ubn5+fn5+fl5eXm5ubl5eXm5ubm5ubm5ubm5ubl5eXl5eXm5ubl5eXm5ubm5ub/90GGAAAAFXRSTlMAABAgMEBQYH+AkJ+gsL/Az9Df7/Bmsp44AAADA0lEQVR42u3c2W7bMBAFUC123PYh+f+/LII2qW0tdRMUtSmRnOXe6QvnhSII6ICgRFHAYPq++z8xdA1ucIMb3GBhHO47K0W4EdN0u+jzMIP9dvrTnN+mZGDkfp0OL8fP9nRd+sA1Prz8vf/wHDnjf+5NnuewGd+7XfcU9jo9uqk0RLlhG8jGvcbA2/meQ+Ct+3OOgLfu+1vEGu+4PyIeLonLgEUuAZa5eFjowmGpi4bFLhiWu1hY4UJhjYuEVS4Q1rk4WOnCYK2LgtUuCNa7GNjgQmCLi4BNLgC2uX7Y6Lphq+uFza4Ttrs+2OG6YI/rgV2uA/a5dtjpmmGva4XdrhH2uzYY4JpghGuBIa4Bxrh6GOSqYZSrhWGuEsa5OhjoqmCkq4GhrgLGunIY7IphtCuF4a4QxrsymOCKYIYrgSmuAOa4dZjkVmGWW4NpbgXmuWWY6BZhpluCqW4B5rp5mOxmYbabg+luBua7+3CAuwtHuHtwiLsDx7hbOMjdwFFuCoe5CTyEuQl8CnMT+GuYm8BjmFs8gTDd8tFniIIT6Pg8BMHLGic/pkeuSSrheLzg0mL7Arw8DTy5BK/Tl54ml+BuufDkIsyUyzBRrsA8uQbT5CrMkuswSRbAHFkCU2QRzJBlMEEWwnhZCsNlMYyW5TBYVsBYWQNDZRWMlHUwUFbCOFkLw2Q1jJL1MEg2wBjZAkNkE4yQbTBANsJ+2Qq7ZTPsle2wU3bAPtkDu2QX7JF9sEN2wnbZC5tlN2yV/bBRBsA2GQGbZAhskTGwQQbBehkFq2UYrJVxsFIGwjoZCatkKKyRsbBCBsNyGQ2LZTgslfGwUCbAMpkBi2QKLJE5sEAmwXWZBVdlGlyTeXBFJsJlmQkXZSpckrlwQSbDeZkNZ2U6nJP5cEYOgPfk7hoB78jH6xIB78jzFALvyI91snh5U9P34m86MVUskZcwOJEvcfCDPJ0D4Tt5fU2GyLUUl1/9RzHF99cl2TL7+y6lbOU4jvNHOcMCHBmtJmqDG9zgBovjNxVq/yvCsoqIAAAAAElFTkSuQmCC";
			}
			else{
				newImg.src = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHgAAADICAMAAAAUcNWVAAAATlBMVEXl5eXm5ubn5+fq6urv7+/////v7+/n5+fq6urn5+fm5ubn5+fn5+fl5eXm5ubl5eXm5ubm5ubm5ubm5ubl5eXl5eXm5ubl5eXm5ubm5uZa7aLiAAAAGXRSTlMAAAAAAAAQIDBAUGB/gJCfoLC/wM/Q3+/wWm8YFQAAAs5JREFUeNrt3MtS3FAMBNDxIx4DAxkg4Ln//6MpyCpg69ktNrd/4JQW0krVp18/lFOHO9zhDnc4BI/jPJzvH+/PwzyhM88ivFzbR65LMXy+tX+5rbXwW2ssWYQfWqPJIvzceLIIvzae7ICxsgg/NZ4swneNJ8vr9Jsni/C8/KHJMkyUFZgnazBNVmGWrMMk2QBzZAtMkU0wQ7bBBNkI42UrDJfNMFq2w2DZAWNlDwyVXTBS9sFA2QnjZC8Mk90wSvbDIDkAY+QIDJFDMEKOwQA5COflKJyWw3BWjsNJOQHn5AycklNwRs7BCTkJx+UsHJbTcFTOw0EZAMdkBBySIXBExsABGQT7ZRTslmGwV8bBThkI+2Qk7JKhsEfGwg4ZDNtlNGyW4bBVxsNGmQDbZAZskimwRebABpkE6zILVmUarMk8WJGJsCwzYVGmwpLMhQWZDB/LbPhQpsNHMh8+kAvgfbkC3pVL4B35bSmBd+THUwn8Xb7VTLwjL0XwN7lq4nm+/g8P0lvVAMwXtwz+6r4XwVfXOo08dxMPyMhz5ZM58typAt5zK+BdtwDed/nwgUuHj1w2fOiS4WOXCwsuFZZcJiy6RFh2ebDi0mDNZcGqS4J1lwMbXApscRmwySXANhcPG104bHXRsNkFw3YXCztcKOxxkbDLBcI+Fwc7XRjsdVGw2wXBfhcDB1wIHHERcMgFwDE3DwfdNBx1s3DYTcJxNwcn3BSccTNwyk3AOTcOJ90wnHWjcNoNwnk3BgPcEIxwIzDEDcAY1w+DXDeMcr0wzHXCONcHA10XjHQ9MNR1wFjXDoNdM4x2rTDcNcJ41wYTXBPMcC0wxTXAHFeHSa4Ks1wNprkK/ERzZfjMc301WVtVTdYrz/XAW10V2jPPtdfdbZV1d+M7zZXhad1YrgJP68un+wJ3NXga1svlsg5TLfxjRZ0d7nCHO9xhKX8BRIBNDxEXSScAAAAASUVORK5CYII=";
			}
			
			$(newImg).css({
				width: "80%",
				display: "block",
				margin: "0 auto",
				marginTop: newBtn.innerHeight() / 2 - newBtn.innerWidth() * 2 / 3
			});
		};
	},

	objBannerDot: function (dotAttr, dotEvent, defaultCss, isCenter, bottom) {
		var bannerDot = document.createElement("ul");

		this.banCon.append(bannerDot);
		this.bannerDot = $(bannerDot);

		for (var i = 0; i < this.banLen; i++) {
			this.bannerDot.append("<li></li>");
		}

		this.objectLength(dotAttr) > 0 ? this.bannerDot.attr(dotAttr) : this.bannerDot.attr({"class" : "bannerDot"});

		if (defaultCss) {
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

		if (isCenter) {
			this.bannerDot.children().first().css({marginLeft : 0});
			this.bannerDot.children().last().css({marginRight : 0});
			var bannerDotW = 0;
			for (var i = 0; i < this.bannerDot.children().length; i++) {
				bannerDotW += this.bannerDot.children().eq(i).outerWidth(true);
			};

			this.bannerDot.width(bannerDotW);
			this.bannerDot.css({
				position : "absolute",
				left : "50%",
				marginLeft : -this.bannerDot.outerWidth() / 2,
				bottom : bottom
			});
		}

		this.nClass ? this.bannerDot.children().eq(0).addClass(this.nClass) : this.bannerDot.children().eq(0).css({backgroundColor : this.dColor});
		this.bannerDotFunction(dotEvent);
	},

	bannerTypeFunction : function (which, nowIndex) {
		var aThis = this;
		switch (this.banType) {
			case "roll" :
				switch (which) {
					case "pre" :
						this.x --;
						this.x < 0 ? this.x = this.banLen - 1 : null;
						this.clearStyle(this.x);
						this.banner.animate({left : -this.banWid * this.x}, this.slideTime, this.effect,  function () {
							aThis.flag = true;
							if (aThis.callback) aThis.callback(this);
						});
						break;

					case "next" :
						this.x ++;
						this.x >= this.banLen ? this.x = 0 : null;
						this.clearStyle(this.x);
						this.banner.animate({left : -this.banWid * this.x}, this.slideTime, this.effect,  function () {
							aThis.flag = true;
							if (aThis.callback) aThis.callback(this);
						});
						break;

					case "dot" :
						this.banner.animate({left : -this.banWid * this.x}, this.slideTime, this.effect,  function () {
							aThis.flag = true;
							if (aThis.callback) aThis.callback(this);
						});
						break;
				}
				break;

			case "seamless" :
				var y = 0;
				switch (which) {
					case "pre" :
						y = this.x;
						this.x --;
						this.x < 0 ? this.x = this.banLen - 1 : null;
						this.clearStyle(this.x);
						this.banner.children().eq(this.x).css({left : this.banWid}).show().animate({left : 0}, this.slideTime, this.effect, function () {
							if (aThis.callback) aThis.callback(this);
						});
						this.banner.children().eq(y).animate({left : -this.banWid}, this.slideTime, this.effect, function () {
							aThis.flag = true;
							$(this).hide();
						});
						break;

					case "next" :
						y = this.x;
						this.x ++;
						this.x >= this.banLen ? this.x = 0 : null;
						this.clearStyle(this.x);
						this.banner.children().eq(this.x).css({left : this.banWid}).show().animate({left : 0}, this.slideTime, this.effect, function () {
							if (aThis.callback) aThis.callback(this);
						});
						this.banner.children().eq(y).animate({left : -this.banWid}, this.slideTime, this.effect, function () {
							aThis.flag = true;
							$(this).hide();
						});
						break;

					case "dot" :
						if (this.x > nowIndex) {
							seamlessDirection(this.banWid);
						}
						else if (this.x < nowIndex) {
							seamlessDirection(-this.banWid);
						};

						function seamlessDirection(banWid) {
							aThis.banner.children().eq(aThis.x).css({left : banWid}).show().animate({left : 0}, aThis.slideTime, aThis.effect, function () {
								if (aThis.callback) aThis.callback(this);
							});
							aThis.banner.children().eq(nowIndex).animate({left : -banWid}, aThis.slideTime, aThis.effect, function () {
								aThis.flag = true;
								$(this).hide();
							});
						};
						break;
				}
				break;

			case "fade" :
				var y = 0;
				switch (which) {
					case "pre" :
						y = this.x;
						this.x --;
						this.x < 0 ? this.x = this.banLen - 1 : null;
						this.clearStyle(this.x);
						this.banner.children().eq(y).fadeOut(this.slideTime, this.effect, function () {
							aThis.flag = true;
							if (aThis.callback) aThis.callback(this);
						});
						this.banner.children().eq(this.x).fadeIn(this.slideTime, this.effect);
						break;

					case "next" :
						y = this.x;
						this.x ++;
						this.x >= this.banLen ? this.x = 0 : null;
						this.clearStyle(this.x);
						this.banner.children().eq(y).fadeOut(this.slideTime, this.effect, function () {
							aThis.flag = true;
							if (aThis.callback) aThis.callback(this);
						});
						this.banner.children().eq(this.x).fadeIn(this.slideTime, this.effect);
						break;

					case "dot" :
						this.banner.children().eq(nowIndex).fadeOut(this.slideTime, this.effect, function () {
							aThis.flag = true;
							if (aThis.callback) aThis.callback(this);
						});
						this.banner.children().eq(this.x).fadeIn(this.slideTime, this.effect);
						break;
				};
				break;
		};
	},

	preEvent : function (preBtn) {
		var aThis = this;
		preBtn.click(function () {
			if (aThis.flag) {
				aThis.flag = false;
				aThis.bannerTypeFunction("pre");
			};
		});
	},

	nextEvent : function (nextBtn) {
		var aThis = this;
		nextBtn.click(function () {
			if (aThis.flag) {
				aThis.flag = false;
				aThis.bannerTypeFunction("next");
			};
		});
	},

	bannerDotFunction : function (dotEvent) {
		var aThis = this;
		this.bDotChiBgc = this.bannerDot.children().eq(1).css("backgroundColor");

		if (dotEvent == "click") {
			this.bannerDot.click(function (e) {
				executive(e);
			});
		}
		else if (dotEvent == "mouseover") {
			this.bannerDot.mouseover(function (e) {
				executive(e);
				aThis.bannerDot.click(function (e) {
					executive(e);
				});
			});
		}

		function executive (e) {
			if (e.target.nodeName.toLowerCase() == "li") {
				if (aThis.flag) {
					aThis.flag = false;
					for (var i = 0; i < aThis.banLen; i++) {
						if (aThis.nClass) {
							if (aThis.bannerDot.children().eq(i)[0].className == aThis.nClass) {
								var nowIndex = aThis.bannerDot.children().eq(i).index();
							}
							aThis.bannerDot.children().eq(i).removeClass(aThis.nClass);
						}
						else {
							if (aThis.bannerDot.children().eq(i).css("backgroundColor") == aThis.colorSwitch(aThis.dColor)) {
								var nowIndex = aThis.bannerDot.children().eq(i).index();
							}
							aThis.bannerDot.children().eq(i).css({backgroundColor : aThis.bDotChiBgc});
						}
					}

					aThis.nClass ? $(e.target).addClass(aThis.nClass) : $(e.target).css({backgroundColor : aThis.dColor});

					if (aThis.x != $(e.target).index()) {
						aThis.x = $(e.target).index();
						aThis.bannerTypeFunction("dot", nowIndex);
					}
					else {
						aThis.flag = true;
					}
				}
			}
		}
	},

	autoPlayFunction : function (autoTime) {
		var aThis = this,
			time = setTimeout(autoPlay, autoTime);

		function autoPlay () {
			if (aThis.flag) {
				aThis.flag = false;
				aThis.bannerTypeFunction("next");
				time = setTimeout(autoPlay, autoTime);
			};
		};

		this.banCon.mouseover(function () {
			clearTimeout(time);
		});

		this.banCon.mouseout(function () {
			time = setTimeout(autoPlay, autoTime);
		});
	},

	clearStyle : function (index) {
		if (this.nClass) {
			this.bannerDot.children().removeClass(this.nClass);
			this.bannerDot.children().eq(index).addClass(this.nClass);
		}
		else {
			this.bannerDot.children().css({backgroundColor : this.bDotChiBgc});
			this.bannerDot.children().eq(index).css({backgroundColor : this.dColor});
		}
	},

	colorSwitch : function (color) {
		var newNode = document.createElement('div');
		newNode.style.color = color;
		color = $(newNode).css("color");
		newNode = null;
		return color;
	},

	objectLength : function (obj) {
		var n = 0;
		for(var i in obj) {
			n ++;
		}
		return n;
	}
};

window.BannerAnimate = BannerAnimate;
});