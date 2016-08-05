jQuery(document).ready(function($){
	var $form_modal = $('.cd-user-modal'),
		$form_login = $form_modal.find('#cd-login'),
		$form_signup = $form_modal.find('#cd-signup'),
		$form_modal_tab = $('.cd-switcher'),
		$tab_login = $form_modal_tab.children('li').eq(0).children('a'),
		$tab_signup = $form_modal_tab.children('li').eq(1).children('a'),
		$main_nav = $('.but111');

	//弹出窗口
	$main_nav.on('click', function(event){

		if( $(event.target).is($main_nav) ) {
			// on mobile open the submenu
			$(this).children('ul').toggleClass('is-visible');
		} else {
			// on mobile close submenu
			$main_nav.children('ul').removeClass('is-visible');
			//show modal layer
			$form_modal.addClass('is-visible');	
			//show the selected form
			( $(event.target).is('.cd-signup') ) ? signup_selected() : login_selected();
		}

	});

	//关闭弹出窗口
	$('.cd-user-modal').on('click', function(event){
		if( $(event.target).is($form_modal) || $(event.target).is('.cd-close-form') ) {
			$form_modal.removeClass('is-visible');
		}	
	});
	//使用Esc键关闭弹出窗口
	$(document).keyup(function(event){
    	if(event.which=='27'){
    		$form_modal.removeClass('is-visible');
	    }
    });

	//切换表单
	$form_modal_tab.on('click', function(event) {
		event.preventDefault();
		( $(event.target).is( $tab_login ) ) ? login_selected() : signup_selected();
	});

	function login_selected(){
		$form_login.addClass('is-selected');
		$form_signup.removeClass('is-selected');
		$form_forgot_password.removeClass('is-selected');
		$tab_login.addClass('selected');
		$tab_signup.removeClass('selected');
	}

	function signup_selected(){
		$form_login.removeClass('is-selected');
		$form_signup.addClass('is-selected');
		$form_forgot_password.removeClass('is-selected');
		$tab_login.removeClass('selected');
		$tab_signup.addClass('selected');
	}

});

/////////////////////////////////////////////////////
		window.onload=function(){
			var container=document.getElementById('container');
			var list=document.getElementById('list');
			var buttons=document.getElementById('buttons').getElementsByTagName('span');
			var prev=document.getElementById('prev');
			var next=document.getElementById('next');
			var index=1;
			var timer;
			
			
			function showButton()
			{
				for(var i=0;i<buttons.length;i++){
					if(buttons[i].className =='on'){
						buttons[i].className ='';
						break;
					}
				}
				buttons[index-1].className ='on';
			}
			function animate(offset){
				var newleft=parseInt(list.style.left) + offset;
				list.style.left=newleft + 'px';
				if(newleft > -1364){
					list.style.left = -4092 +'px';
				}
				if(newleft < -4092){
					list.style.left = -1364 +'px';
				       }
				 }
            function play(){
            	timer=setInterval(function(){
            		next.onclick();
            	},2000);
            }
            function stop(){
            	clearInterval(timer);
            }
			next.onclick = function(){
				if(index==3){
					index=1;
				}
				else{
					index+=1;
				}
				showButton();
				animate(-1364);
			}
			prev.onclick = function(){
				if(index==1){
					index=3;
				}
				else{
					index-=1;
				}
				showButton();
				animate(1364);
			}
			for(var i=0;i<buttons.length;i++){
				buttons[i].onclick=function(){
					if(this.className=='on'){
						return;
					}
					var myindex=parseInt(this.getAttribute('index'));
					var offset=-1364*(myindex-index);
					animate(offset);
					index=myindex;
					showButton();
				}
			}
			container.onmouseover = stop;
			container.onmouseout = play;
			play();
		}
		//登录的完备的填写
		/*function finlishsunmit()
		{
			var username=document.getElementById("signin-username");
			var passwords=document.getElementById("signin-password");
			if(username.value.length==0)
			{
				alert("你的用户名没填写");
			}
			if(passwords.value.length==0)
			{
				alert("你的密码没有填写");
			}
			else {
				alert("登录成功");
			}
		}*/
		function user()
		{
			var username=document.getElementById("signin-username");
			if(username.value.length==0)
			{
				alert("你的用户名没填写");
			}
		}
		function password()
		{
			var passwords=document.getElementById("signin-password");
			if(passwords.value.length==0)
			{
				alert("你的密码没有填写");
			}
		}
		//注册的完备的填写
		/*function finlishform()
		{
			var inusername=document.getElementById("signup-username");
			var inpasswords=document.getElementById("signup-password");
			var email=document.getElementById("signup-email")
			if(email.value.length!=0&&inpasswords.value.length!=0&&inusername.value.length!=0)
		    {
				alert("注册成功");
			}
		}*/
		function password_same()
		{
			var password1=document.getElementById("signup-password").value;
			var password2=document.getElementById("signup-password2").value;
			if (password1==password2) {
				
			} else{
				alert("您输入的密码不一致");
				
			}

		}
		//医疗分类的下拉的效果
			function fenlei()
			{
				document.getElementById("yilaofenlei").style.display="block";
			}
			function fenlei2()
			{
				document.getElementById("yilaofenlei").style.display="none";
			}
			function changeColor(num){
	for(var i=1;i<=2;i++){
		var str = document.getElementById('sub_'+i);
		if(i==num){
			str.style.backgroundColor="white";
		}else{
			str.style.backgroundColor="#d2d8d8";
		}
	}
}
