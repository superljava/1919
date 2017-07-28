$(".top_nav_list").mouseenter(function() {
		$(".t_r_sm").eq($(this).index()).css({display:"block"})
		// console.log($(this).index());
 });
$(".top_nav_list").mouseleave(function() {
		$(".t_r_sm").eq($(this).index()).css({display:"none"})
 });

(function ($) {
	var province = $(".province"),
		city = $(".city"),
		district = $(".district"),
		proName, p, cityName, c, disName, address;

	for (var i in area) {
		province[0].innerHTML += "<li><a>" + i + "</a></li>";
	}

	proName = province.children().eq(0).children().html(), p = proName;
	province.children().eq(0).children().addClass('aColor');

	cityRank(proName);
	cityName = city.children().eq(0).children().html(), c = cityName;
	city.children().eq(0).children().addClass('aColor');

	districtRank(proName, cityName);
	disName = district.children().eq(0).children().html();
	district.children().eq(0).children().addClass('aColor');

	function cityRank(pro) {
		$(".city")[0].innerHTML = "";
		for (var i in area[pro][0]) {
			$(".city")[0].innerHTML += "<li><a>" + i + "</a></li>";
		};
	}

	function districtRank(pro, city) {
		$(".district")[0].innerHTML = "";
		for (var i in area[pro][0][city]) {
			for (var j in area[pro][0][city][i]) {
				$(".district")[0].innerHTML += "<li><a>" + j + "</a></li>";
			};
		};
	}

	var switchCity = $(".switchCity"),
		cWindCon = $("#cityWindow_container"),
		closeBtn = $(".closeBtn"),
		sBtnCon = $(".sureBtn_container");

	province.click(function (e) {
		if (e.target.nodeName == "A") {
			proName = e.target.innerHTML;
			if (proName != p) {
				p = proName;
				$(e.target).parent().siblings().children().removeClass('aColor');
				$(e.target).addClass('aColor');
				cityRank(proName);
				districtRank(proName, city.children().eq(0).children().html());
				city.children().eq(0).children().addClass('aColor');
				district.children().eq(0).children().addClass('aColor');
			}
		}
		else if (e.target.nodeName == "LI") {
			proName = e.target.children[0].innerHTML;
			if (proName != p) {
				p = proName;
				$(e.target).siblings().children().removeClass('aColor');
				$(e.target).children().addClass('aColor');
				cityRank(proName);
				districtRank(proName, city.children().eq(0).children().html());
				city.children().eq(0).children().addClass('aColor');
				district.children().eq(0).children().addClass('aColor');
			}
		}
	});

	city.click(function (e) {
		if (e.target.nodeName == "A") {
			cityName = e.target.innerHTML;
			if (cityName != c) {
				c = cityName;
				$(e.target).parent().siblings().children().removeClass('aColor');
				$(e.target).addClass('aColor');
				districtRank(proName, cityName);
				district.children().eq(0).children().addClass('aColor');
			}
		}
		else if (e.target.nodeName == "LI") {
			cityName = e.target.children[0].innerHTML;
			if (cityName != c) {
				c = cityName;
				$(e.target).siblings().children().removeClass('aColor');
				$(e.target).children().addClass('aColor');
				districtRank(proName, cityName);
				district.children().eq(0).children().addClass('aColor');
			}
		}
	});

	district.click(function (e) {
		if (e.target.nodeName == "A") {
			disName = e.target.innerHTML;
			$(e.target).parents().siblings().children().removeClass('aColor');
			$(e.target).addClass('aColor');
		}
		else if (e.target.nodeName == "LI") {
			disName = e.target.children[0].innerHTML;
			$(e.target).siblings().children().removeClass('aColor');
			$(e.target).children().addClass('aColor');
		}
	});

	switchCity.click(function () {
		cWindCon.slideDown();
	});

	sBtnCon.click(function (e) {
		if (e.target.className.match(/sureBtn/)) {
			proName = province.find(".aColor").html();
			cityName = city.find(".aColor").html();
			disName = district.find(".aColor").html();
			address = area[proName][0][cityName][district.find(".aColor").parent().index()][disName].split("、")[0];
			$(".list-container").hide();
			switchCity.html(disName);
			
			cWindCon.hide();
		}
		else if (e.target.className.match(/cancelBtn/)) {
			cWindCon.slideUp();
		}
	});

	closeBtn.click(function () {
		cWindCon.slideUp();
	});
})($);