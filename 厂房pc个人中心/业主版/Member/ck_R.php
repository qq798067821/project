
<div class="y_m_r">
	<div class="m_r_c"> 
		<div class="pi" id='tab'>
			<a href="./factoryreward(厂房悬赏).php" class="l  big h">厂房悬赏</a>
			<a href="#" class="l  big h">仓库悬赏</a>
			<a href="./TdReward(土地悬赏).php" class="l  big h">土地悬赏</a>
		</div>
		<div class="pi born">
			<div class="tr">
				<span class="tsp red">悬赏金额：</span><input type="text" id="money" class="inptext_sm mar" value="" /><span class="font_lh">元</span>
				<span class="font_lh ts red">* 悬赏金额没填</span>
			</div>			
		</div>		
		<!--基本信息-->	
		<div class="pi born">
				<div  class="f_l_t">
					基本信息
				</div>
				
		<div class="tr">
			<div class="tda" id="address">
				<span class="tsp">城市：</span>
				<select name="" class="selector">
					<option value="1">岑溪</option> 
				</select>
				<select name="" class="selector">
					<option value="1">等等</option>
				</select>
				<select name="" class="selector">
					<option value="1">第三方第三方</option>
				</select>
				<span class="red l font_lh ts">*请选择地址</span>								
			</div>
		</div>
		
		
		<div class="tr">
			<div class="tda">
				<span class='tsp' >价格：</span>
				<input type="text" id="price" value="" class="inptext" />
				<select name="" class="selector_s">
					<option value="">元/平方</option> 
				</select>
				<span class="red l font_lh ts">*请填写价格地址</span>
			</div>
		</div>
		
		<div class="tr">
			<div class="td">
				<span class="tsp">面积：</span>
				<input type="text" id="" value="" class="inptext"/>
				<p class="t_p">m<sup>2</sup></p>
			</div>
		</div>
		
		<div class="tr">
			<div class="td">
				<span class="tsp">层高：</span>
				<input type="text" id="" value="" class="inptext"/>
				<p class="t_p">米</p>
			</div>
		</div>		
		
		<div class="tr">
			<div class="td">
				<span class="tsp">层数：</span>
				<input type="text" id="" value="" class="inptext"/>
				<p class="t_p">层</p>
			</div>		
		</div>								
		</div>
		<!--基本信息-->

								
		<!--描述详情-->

		<div class="pi born">
				<div  class="f_l_t">
					描述详情
				</div>
				
		
		<div class="tr">
			<div class="tda" id="region">
				<span class="tsp">请选择区域：</span>
				<select name="" class="selector">
					<option value="1">请选择</option>
				</select>
				<select name="" class="selector">
					<option value="1">双方都</option>
				</select>
				<span class="red l font_lh ts">*请选择区域</span>							
			</div>
		</div>

		<div class="tr">
			<div class="tda">
				<span class="tsp">具体位置：</span>
				<input type="text" id="position" value="" class="inptext_big l mar"/> 
				<span class="red l font_lh ts">*请选择地址</span>
			</div>
		</div>			
		
		<div class="tr">
			<div class="tda">
				<span class="tsp">信息标题：</span>
				<input type="text" id="title" class="inptext_big l mar" value="" />
				<span class="red l font_lh ts">*请选择地址</span>
			</div>
		</div>
		
		<div class="tr">
			<div class="tda">
				<span class="tsp">详细信息：</span>
				<textarea name="" rows="15" cols="70"></textarea>
			</div>
		</div>		
								
		</div><!--建筑参数-->
		
		<div class="tr">
			<div class="tda">
				<span class="tsp">上传图片：</span>
				<a href="" class="abut" style="background: rgb(0,174,102);">上传照片</a>	
			</div>
		</div>		
		<div class="tr">
			<div class="tda">
				<span class="tsp">标注位置：</span>
				<a href="" class="abut" style="background: rgb(66,133,244);">标注位置</a>	
			</div>
		</div>	
		
		
		<div class="pi born">
				<div  class="f_l_t">
					联系信息
				</div> 
				
		

		
		<div class="tr">
			<div class="tda">
				<span class="tsp">联系人：</span>
				<input type="text" id="contacts" class="inptext_sm mar" value="" />
				<span class="red l font_lh ts">*请填写联系人</span>
			</div>
		</div>
		<div class="tr">
			<div class="tda">
				<span class="tsp">联系电话：</span>
				<input type="text" id="tel" class="inptext_sm mar" value="" />
				<span class="red l font_lh ts">*请填写联系电话</span>
			</div>
		</div>			
								
		</div><!--建筑参数-->
			
		<div class="tr">
			<div class="tda">
				<span class="tsp">&nbsp;</span>
				<a href="#" class="button_sm themeBackground fff l " id="tj" >确认提交</a> 
				<img src="../../../img/lod.gif" class="lod"/>	 
			</div>
		</div>		
	</div>

</div>

<script type="text/javascript">
	$(function(){
		$('#tj').click(function(){
			var keys=true;
			//悬赏没填
			if($('#money').val()=='')
			{
				keys=false
				$('#money').parent().find('.ts').css({'display':'inline-block'})				
			}else{
				$('#money').parent().find('.ts').css({'display':'none'}); 					
			}			
			//地址没选
			var selelen=$('#address select').length//select数量 
			for(var i=0;i<selelen;i++)
			{
				if($('#address select').eq(i).find('option:selected').val()=='')
				{
					keys=false;
					$('#address select').parent().find('.ts').css({'display':'block'});
				}else{
					$('#address select').parent().find('.ts').css({'display':'none'}); 
					
				}
			}
			
			//区域
			var selelen=$('#region select').length//select数量
			for(var i=0;i<selelen;i++)
			{
				if($('#region select').eq(i).find('option:selected').val()=='')
				{
					keys=false;
					$('#region select').parent().find('.ts').css({'display':'block'});
					
				}else{
					$('#region select').parent().find('.ts').css({'display':'none'}); 
				}
			}
			
			//价格
			if($('#price').val()=='')
			{
				keys=false
				$('#price').parent().find('.ts').css({'display':'inline-block'})				
			}else{
				$('#price').parent().find('.ts').css({'display':'none'}); 			
			}						
	
			//具体位置
			if($('#position').val()=='')
			{
				keys=false
				$('#position').next().css({'display':'inline-block'})				
			}else{
				$('#position').next().css({'display':'none'}); 
							
			}
			
			
			//标题没写
			if($('#title').val()=='')
			{
				keys=false
				$('#title').next().css({'display':'inline-block'})
			}else{
				$('#title').next().css({'display':'none'});
				
			}
			//联系人没填
			if($('#contacts').val()=='')
			{
				keys=false
				$('#contacts').next().css({'display':'inline-block'})
			}else{
				$('#contacts').next().css({'display':'none'});
				
			}
			
			//电话没填
			if($('#tel').val()=='')
			{
				keys=false
				$('#tel').next().css({'display':'inline-block'})
			}else{
				$('#tel').next().css({'display':'none'}) 
			}
			
			
			
			if(keys)
			{
				var h=$(document).height(); 
				$('#mt').css({'min-height':h});
				$('#mt').show();//模态框
				$('.lod').show();//等待图标
			}else{
				//ajax提交在里面写
			}
		})
	})	
</script>
