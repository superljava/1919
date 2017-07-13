$(document).ready(function(){


	$(".fm_ig").eq(0).css({display:"block"});
	var x=0;
	$(".fm_ig").click(function(){
		x++;
		if(x>$(".fm_ig").index()){
			x=0;
		}
		$(".fm_ig").eq(x-1).css({display:"none"});
		$(".fm_ig").eq(x).css({display:"block"});
	})
	

	var flag=true;
	$.validator.addMethod("new_test",function(val,el){
	var patt=/^1[34578]\d{9}$/;
		return this.optional(el)||patt.test(val);
	},"用户名有误");
	$("#fm").validate({
		rules:{
			username:{
				required:true,
				new_test:true
			},
			code:{
				required:true,
				rangelength:[5,5]
			}
		},
		 messages:{
		 	username:{
                required:"用户名有误",
            },
            code:{ 
				required:"验证码不正确",
				rangelength:"验证码不正确"
			}
		 },
		errorPlacement:function(error,element){	
			if(flag){
				error.prependTo($(".sen_p"))
				flag=false;	
				}
		},
		success:function(error,el){
			flag=true;
			$(".sen_p").html("");
		}
	});




















})