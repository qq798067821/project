<div class="y_m_r">
	<div class="m_r_c"> 
		<div class="m_id_t">
			<a href="">身份认证</a>
			<a href="">完善个人资料</a> 
		</div>
	</div>
	<div class="m_id_tab">
	<!--身份认证-->
	<div class="m_id_sf">
	<div class="pi">
		<div class="tr">
			<div class="td">
				<span class="tsp">身份认证：</span>
				<a href="" class="button_sm l mar"><input type="file"  id="pickfiles" class="file"/>选择文件</a> 
			</div>
			<div class="td">
				<span class="tsp">&nbsp;</span>
				<span class="h">身份证正面事例</span>
			</div>
		</div>
		<div class="tr">
			<div class="td"> 
				<span class="tsp">
				<center>(正面)</center>	
				</span>
				<img class="m_id_img" src="" /> 
			</div>
			<div class="td">
				 <span class="tsp">&nbsp;</span>
				<img src="../../../img/idz.png" class="m_id_imgtest"/>
			</div>
		</div>
	</div>
	
	
	<div class="pi born">
		<div class="tr">
			<div class="td">
				<span class="tsp">身份认证：</span>
				<a href="" class="button_sm l mar"><input type="file"  id="pickfiles1" class="file"/>选择文件</a> 
			</div>
			<div class="td">
				<span class="tsp">&nbsp;</span>
				<span class="h">身份证正面事例</span>
			</div>
		</div>
		<div class="tr">
			<div class="td"> 
				<span class="tsp">
				<center>(反面)</center>	
				</span>
				<img class="m_id_img" src="" id='m_id_img_f'/> 
				
			</div>
			<div class="td">
				 <span class="tsp">&nbsp;</span>
				<img src="../../../img/idf.png" class="m_id_imgtest"/>
			</div>
		</div>
		<div class="tr">
			<div class="td">
				<span class="tsp">&nbsp;</span>
				<input type="button" class="button_sm fff themeBackground m_id_tj curpo" id='up_load' value="确认提交">
				   <input type="hidden" id="domain" value="http://7xl4c6.com1.z0.glb.clouddn.com/">
				   <div id="container" ></div>   
				</input>
			</div>			
		</div>
	</div>			
	</div>
<!--身份认证-->


<!--完善个人资料-->
<div class="m_id_ws">
	<div class="pi">
		<div class="tr">
			<div class="td">
				<span class="tsp">身份认证：</span>
				<a href="" class="button_sm l mar"><input type="file" name="" id="head" value="" class="file"/>选择文件</a>
			</div>
		</div>
		<div class="tr">
			<div class="td"> 
				<span class="tsp">
					&nbsp;
				</span>
				<img class="m_id_img Headp_big" id="m_id_img_h" src=""/> 
				
			</div>
		</div>
		
		<div class="tr">
			<div class="tda">
				<span class="tsp">公司名称：</span>
				<input type="text" id="gsname" class="inptext_big l mar" value="" />
				<span class="red ts">* 公司名不能为空</span>
			</div> 
		</div>
		<div class="tr">
			<div class="td">
				<span class="tsp">性别：</span>
				<label for="man" class="mar"><input type="radio" name="sex" id="man" value="" checked="checked"/>男</label>
				<label for="woman"><input type="radio" name="sex" id="woman" value="" />女</label>
			</div>
		</div>
		<div class="tr">
			<div class="tda">
				<span class="tsp">地区：</span>
				<select name="" class="selector">
					<option value="">请选择</option>
					<option value="岑溪">东莞 </option>
				</select>
				<select name="" class="selector">
					<option value="">请选择</option>
					<option value="1">日本</option>
				</select>
				<select name="" class="selector">
					<option value="">请选择</option>
					<option value="1">富士康</option>
				</select>	
				<span class="red ts">* 请选择地址</span>							
			</div>
			
		</div>
		<div class="tr">
			<div class="tda">
				<span class="tsp">电话：</span>
				<input type="text" id="tel" class="inptext_big l mar" value=""  />
				<span class="red ts">* 电话不能为空并且不能少于11位</span>	
			</div> 
		</div>
		<div class="tr">
			<div class="tda">
				<span class="tsp">姓名：</span>
				<input type="text" id="name" class="inptext_big l mar" value="" />
				<span class="red ts">* 姓名不能为空</span>	
			</div> 
		</div>
		<div class="tr">
			<div class="tda">
				<span class="tsp">简介：</span>
				<textarea name="" rows="10" cols="70"></textarea>	 			
			</div>
		</div>				
		<div class="tr">
			<div class="tda">
				<span class="tsp">&nbsp;</span>
				<a href="#" class="button_sm themeBackground fff m_id_tj" id="tj">确认提交</a> 
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
		$('.m_id_t a').eq(0).css({'border-bottom': '2px solid #4285F4 ',"color":'#394043'});
		$('.m_id_t  a').click(function(e){
			var m_id_mun=$(this).index();
			$(this).css({'border-bottom': '2px solid #4285F4 ',"color":'#394043'}).siblings().css({'border-bottom': 'none',"color":'#666'});
			$('.m_id_tab > div').eq(m_id_mun).css({'display':"block"}).siblings().css({'display':"none"}); 
			return false; 
		})
		//触发file事件
		$('input:file').change(function(){
    	if(!/\.(gif|jpg|jpeg|png|GIF|JPG|PNG)$/.test($(this).val()))
    	{
    		alert('图片格式不对')
    	}else{
			var urls=getObjectURL(this.files[0]);
			$(this).parents('.tr').next().find('.m_id_img').attr('src',urls)     		
    	}			

		})		
		
		/*验证*/
		$('.m_id_tab > div').eq(0).find('.m_id_tj').click(function(){
			var p= $('.m_id_tab > div').eq(0);
			var mun=p.find('.m_id_img').length;
			for(var i=0;i<mun;i++)
			{
				if(p.find('.m_id_img').eq(i).attr('src')=='')
				{
					alert('照片不能为空');
					
				}				
			}
		})
		
		//验证电话公司名是否为空
		$('.m_id_tab > div').eq(1).find('.m_id_tj').click(function(){
			
			var kes=true;
			var p=$('.m_id_tab > div').eq(1);
			if(p.find('#tel').val()=='')
			{
				p.find('#tel').parent().find('.ts').css({'display':'block'})
				kes=false;
			}else{
				p.find('#tel').parent().find('.ts').css({'display':'none'})
			}
			if(p.find('#gsname').val()=='')
			{
				p.find('#gsname').parent().find('.ts').css({'display':'block'})
				kes=false;
			}else{
				p.find('#gsname').parent().find('.ts').css({'display':'none'})
			}
			if(p.find('#name').val()=='')
			{
				kes=false;
				p.find('#name').parent().find('.ts').css({'display':'block'})
			}else{
				p.find('#name').parent().find('.ts').css({'display':'none'})
			}
			
			/*检查地址是否为空*/
			var opt='';
			var optmun=p.find('select').length;
			for(var i=0;i<optmun;i++)
			{
				if(p.find('select').eq(i).find('option:selected').val()=='')
				{
					kes=false;
					p.find('select').parent().find('.ts').css({'display':'block'})
				}else{
					p.find('select').parent().find('.ts').css({'display':'none'})  
				}				
			}
			if(kes){
				//ajax上传写这里
			}
		})	 	
		
		
		
	})
</script>