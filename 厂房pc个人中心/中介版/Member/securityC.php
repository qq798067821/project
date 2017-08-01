<div class="y_m_r">
	<div class="m_r_c"> 
		<div class="m_id_t">
			<a href="">密码更改</a>
			<a href="">更改手机号</a>
			<a href="">邮箱绑定</a> 
		</div>
	</div>
	<div class="m_id_tab">
	<!--更改密码-->
	<div class="">
	<div class="pi born">
		<div class="tr">
			<div class="tda">
				<span class="tsp">账号：</span>
				<span class="font_lh">18378320597</span>
			</div>
		</div>
		<div class="tr">
			<div class="tda"> 
				<span class="tsp">原密码：</span>
				<input type="password" id="" class="inptext_sm" value="" />
				<a href="#" class="tsp font_lv" >忘记密码?</a>
			</div>
		</div>
		<div class="tr">
			<div class="tda"> 
				<span class="tsp">新密码：</span>
				<input type="password" id="" class="inptext_sm" value="" />
			</div>
		</div>		
		<div class="tr">
			<div class="tda"> 
				<span class="tsp">重复密码：</span>
				<input type="password" id="" class="inptext_sm" value="" />
			</div>
		</div>			
		<div class="tr">
			<div class="td"> 
				<span class="tsp">&nbsp;</span>
				<a href="#" class="button_sm fff themeBackground">确认提交</a>
			</div>			
		</div>
	</div>			
	</div>
<!--更改密码-->

<!--更改手机号-->
	<div class="">
	<div class="pi born">
		<div class="tr">
			<div class="tda">
				<span class="tsp">账号：</span>
				<span class="font_lh">18378320597</span>
			</div>
		</div>
		<div class="tr">
			<div class="tda"> 
				<span class="tsp">新手机号：</span>
				<input type="password" id="" class="inptext_sm" value="" />
			</div> 
		</div>	
		<div class="tr">
			<div class="tda"> 
				<span class="tsp">短信认证码：</span>
				<input type="password" id="" class="inptext_sm mar" value="" /> 
				<a href="#" class="button_sm lv fff">发送短信认证码</a>
			</div>
		</div>			
		<div class="tr">
			<div class="td"> 
				<span class="tsp">&nbsp;</span>
				<a href="#" class="button_sm fff themeBackground">确认提交</a>
			</div>			
		</div>
	</div>			
	</div>
<!--更改手机号-->
<!--邮箱绑定-->
	<div class="">
	<div class="pi born">

		<div class="tr">
			<div class="tda"> 
				<span class="tsp">绑定邮箱：</span>
				<input type="email" id="" class="inptext_sm" value="" />
			</div>
		</div>			
		<div class="tr">
			<div class="td"> 
				<span class="tsp">&nbsp;</span>
				<a href="#" class="button_sm fff themeBackground">确认提交</a>
			</div>			
		</div>
	</div>			
	</div>
</div>
<!--完善个人资料-->		
	</div>

</div>

<script type="text/javascript">
	$(function(){
		$('.m_id_t a').eq(0).css({'border-bottom': '2px solid #4285F4',"color":'#394043'});
		$('.m_id_t  a').click(function(e){
			var m_id_mun=$(this).index();
			$(this).css({'border-bottom': '2px solid #4285F4',"color":'#394043'}).siblings().css({'border-bottom': 'none',"color":'#666'});
			$('.m_id_tab > div').eq(m_id_mun).css({'display':"block"}).siblings().css({'display':"none"}); 
			return false; 
		})
	})
</script> 