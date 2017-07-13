var flag=true;
var a=0;
$(".agree i").toggle(
	function(){
	$(this).addClass('i_active');	
	},
	function(){
	$(this).removeClass('i_active');
	}
);
$(".agree i").click(function(){
	a++;
});

$.validator.addMethod("new_test",function(val,el){
		var patt=/^1[34578]\d{9}$/;
		return this.optional(el)||patt.test(val);
	},"手机号码有误，请重填");
$("#regis_myform").validate({
	submitHandler:function(form){
			if(a%2==1){
				form.submit();
				$(".r_error2").css({display:"none"});
			}else{
				$(".r_error2").css({display:"block"})
				var time=setTimeout(
					function(){
						$(".r_error2").css({display:"none"})
					}, 
					4000);
			}; 
       	 }, 
	rules:{
		tel:{
			required:true,
			new_test:true
		},
		pwd:{
			required:true,
			rangelength:[6,12]
		},
		confirm_pwd:{
			required:true,
			rangelength:[6,12],
			equalTo: "#pwd"
		}
	},
	messages:{
		tel:{
			required:"手机号码有误,请重填"
		},
		pwd:{
			required:"请输入包含字母、数字、符合的6-16位密码 ",
			rangelength:"请输入包含字母、数字、符合的6-16位密码 "
		},
		confirm_pwd:{
			required:"请输入包含字母、数字、符合的6-16位密码 ",
			rangelength:"请输入包含字母、数字、符合的6-16位密码",
			equalTo: "两次密码输入不一致"
		}
	},
	errorPlacement:function(error,element){				
			if(flag){
				error.prependTo($(".r_error"));
				$(".r_error").css({display:"block"});	
				console.log("1232")			
				element.parent().addClass('p_reminder')
				flag=false;							
			}
			var time=setTimeout(
			function(){
				$(".r_error").css({display:"none"})
			}, 
			4000)
		},

	success:function(error,el){
		flag=true;
		$(".r_error").css({display:"none"})
		$(el).parent().removeClass('p_reminder')
	}
});
$(".regis_btn").click(function(){
	var time=setTimeout(
		function(){
			$(".r_error").css({display:"none"})
			$("label").css({display:"none"})
		}, 
		4000)
});

// placeholder 兼容
function placeholderSupport() {
	return 'placeholder' in document.createElement('input');
}
$(function(){
	if(!placeholderSupport()){   // 判断浏览器是否支持 placeholder
	    $(document).ready(function(){
	         //默认遍历循环添加placeholder
	        $('[placeholder]').each(function(){
	            $(this).parent().append("<span class='placeholder'>"+$(this).attr('placeholder')+"</span>");
	            $(this).addClass("opa");
	            $(".placeholder").eq(3).css({left:15});
	            $(".placeholder").eq(4).css({left:15});
	        })
	        $('input').focus(function(){
	        	 $(this).parent().find('span.placeholder').hide();
	        	 $(this).removeClass('opa')
	        })
	        $('[placeholder]').blur(function(){
	        	if($(this).val()!=""){
	        		$(this).parent().find('span.placeholder').hide();
	        	}else{
	        		$(this).addClass("opa");
	        		$(this).parent().find('span.placeholder').show();
	        	}
	        })
	    });
	}
});   


