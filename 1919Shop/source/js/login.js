$(".hy_login").addClass('act');
$(".login_hy_qy span").click(function(event) {
	$(".login_hy_qy span").removeClass('act');
	$(".login_hy_qy span").eq($(this).index()).addClass('act');
});
$(".duigou").css({display:"block"});
$(".duigou2").css({display:"block"});
$(".hy_zd i").click(function(event) {
	if($(".duigou").css("display")=="none"){
		$(".duigou").css({display:"block"});
	}else{
		$(".duigou").css({display:"none"});
	}
});
$(".login_accet .selec").click(function(event) {
	if($(".duigou2").css("display")=="none"){
		$(".duigou2").css({display:"block"});
	}else{
		$(".duigou2").css({display:"none"});
	}

});




if($(".duigou2").css("display")=="block"){
	
}
$(".hy_login_btn").click(function(event) {
	if($(".duigou2").css("display")=="none"){
		alert("请阅读1919用户协议");
	}
});

$.validator.addMethod("phone",function(val,el){
	var patt=/^1[34578]\d{9}$/;
	return this.optional(el)||patt.test(val);
},"请输入正确手机号");

$(".error-container")[0].style.display = "none";

$("#my_form").validate({
	rules:{
		user:{
			required:true,
			phone:true
		},
		pwd:{
			required:true,
			rangelength:[6,12]
		}
	},
	messages:{
		 
		user:{
			required:"请输入正确用户名"
		}

	},
	errorPlacement:function(error,element){
		if ($(".error-container")[0].style.display == "none")
		{
			if (error.html() != "")
			{
				$(".error-container").show().html( error.html() );
				setTimeout(function()
				{
					$(".error-container").hide().html("");
				}, 2000)
			}
		}
		else
		{
			return false;
		}
		
	}
})



