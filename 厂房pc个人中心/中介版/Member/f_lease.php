
<style type="text/css">
	.img i{position: relative;float: left;display: block;height: 180px;width: 160px;border: 1px solid #000;margin-right:10px ;overflow: hidden;text-align: center;line-height: 180px;font-size: 80px !important;}
	.img i:nth-child(n+4){margin-top: 5px;}
	.img i > input{display: block;position: absolute;padding: 1000px;left: -10px;top: -10px;cursor: pointer;}
	.img i > img{position: absolute;height: 100%;width: 100%;left: 0;top: 0;}	
	.custom-div{display: none;}
</style>

<div class="y_m_r">
	<div class="m_r_c"> 
		<div class="pi">
			<p class="big">厂房出租</p>
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
				<span class="tsp">类别：</span>
				<label for="f" class="mar"><input type="radio" name="x" id="f" value="" checked="checked"/>厂房出租</label>
				<label for="t"><input type="radio" name="x" id="t" value="" />厂房出租</label>
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
				<span class="tsp">建筑结构：</span>
				<select name="" class="selector">
					<option value=""></option>
				</select>
			</div>
			<div class="td">
				<span class="tsp">厂房面积：</span>
				<input type="text" id="" value="" class="inptext"/>
				<p class="t_p">m<sup>2</sup></p>
			</div>
		</div>
		
		<div class="tr">
			<div class="td">
				<span class="tsp">跨度：</span>
				<input type="text" id="" value="" class="inptext"/>
				<p class="t_p">米</p>
			</div>
			<div class="td">
				<span class="tsp">办公面积：</span>
				<input type="text" id="" value="" class="inptext"/>
				<p class="t_p">m<sup>2</sup></p>
			</div>
		</div>		
		
		<div class="tr">
			<div class="td">
				<span class="tsp">独院：</span>
				<label for="y" class="mar"><input type="radio" name="y" id="y" value="" checked="checked"/>有</label>
				<label for="w"><input type="radio" name="y" id="w" value="" />无</label>
			</div>
			<div class="td">
				<span class="tsp">宿舍面积：</span>
				<input type="text" id="" value="" class="inptext"/>
				<p class="t_p">m<sup>2</sup></p>
			</div>			
		</div>	
		
		<div class="tr">
			<div class="td"> 
				<span class="tsp">行车：</span>
				<label for="xcy" class="mar"><input type="radio" name="xc" id="xcy" value="" checked="checked"/>有</label>
				<label for="xcw"><input type="radio" name="xc" id="xcw" value="" />无</label>
			</div>
			<div class="td">
				<span class="tsp">占地面积：</span>
				<input type="text" id="" value="" class="inptext"/>
				<p class="t_p">m<sup>2</sup></p>
			</div>			
		</div>
		
		<div class="tr">
			<div class="td">
				<span class="tsp">电梯：</span>
				<label for="dy" class="mar"><input type="radio" name="d" id="dy" value="" checked="checked"/>有</label>
				<label for="dw"><input type="radio" name="d" id="dw" value="" />无</label>
			</div>
			<div class="td">
				<span class="tsp">空地面积：</span>
				<input type="text" id="" value="" class="inptext"/>
				<p class="t_p">m<sup>2</sup></p>
			</div>			
		</div>								
		</div><!--基本信息-->

<!--建筑参数-->
		<div class="pi born">
				<div  class="f_l_t">
					建筑参数
				</div>
				
		
		<div class="tr">
			<div class="td">
				<span class="tsp">层高：</span>
				<input type="text" id="" value="" class="inptext"/>
				<p class="t_p">米</p>
			</div>
			<div class="td">
				<span class="tsp">配电：</span>
				<input type="text" id="" value="" class="inptext"/>
				<p class="t_p">Kva</p>
			</div>
		</div>	

		<div class="tr">
			<div class="td">
				<span class="tsp">层数：</span>
				<input type="text" id="" value="" class="inptext"/>
				<p class="t_p">层</p>
			</div>
			<div class="td">
				<span class="tsp">可配电：</span>
				<input type="text" id="" value="" class="inptext"/>
				<p class="t_p">Kva(如200~300)</p>
			</div>
		</div>			
		
		<div class="tr">
			<div class="td">
				<span class="tsp">新旧程度：</span>
				<select name="" class="selector">
					<option value=""></option>
				</select>
			</div>
			<div class="td">
				<span class="tsp">消防：</span>
				<label for="xfy" class="mar"><input type="radio" name="xf" id="xfy" value="" checked="checked"/>有</label>
				<label for="xfw"><input type="radio" name="xf" id="xfw" value="" />无</label>
			</div>
		</div>
		
		<div class="tr">
			<div class="td">
				<span class="tsp">最短租期：</span>
				<select name="" class="selector">
					<option value=""></option>
				</select>
			</div>
			<div class="td">
				<span class="tsp">适合行业：</span>
				<input type="text" id="" value="" class="inptext"/>
				<p class="t_p">m<sup>2</sup></p>
			</div>
		</div>		
		
		<div class="tr">
			<div class="td">
				<span class="tsp">分租：</span>
				<label for="fzy" class="mar"><input type="radio" name="fz" id="fzy" value="" checked="checked"/>可</label>
				<label for="fzw"><input type="radio" name="fz" id="fzw" value="" />不可</label>
			</div>		
		</div>	
		
		<div class="tr"> 
			<div class="td">
				<span class="tsp">产权：</span>
				<label for="cqy" class="mar"><input type="radio" name="cq" id="cqy" value="" checked="checked"/>有</label>
				<label for="cqw"><input type="radio" name="cq" id="cqw" value="" />无</label>
			</div>		
		</div>
		
								
		</div><!--描述详情-->

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
				<span class="tsp">点击上传图片：</span>
				<div>
				<div class="img">
					<i class="iconfont" >
						&#xe64b;	
						<input type="file" name="" id="" value=""  />
					</i>	
					<i class="iconfont" >
						&#xe64b;	
						<input type="file" name="" id="" value=""  /> 
					</i>	
					<i class="iconfont" >
						&#xe64b;	
						<input type="file" name="" id="" value=""  /> 
					</i>
					<i class="iconfont" >
						&#xe64b;	
						<input type="file" name="" id="" value=""  /> 
					</i>	
					<i class="iconfont" >
						&#xe64b;	
						<input type="file" name="" id="" value=""  /> 
					</i>
					<i class="iconfont" >
						&#xe64b;	
						<input type="file" name="" id="" value=""  /> 
					</i>	
					<i class="iconfont" >
						&#xe64b;	
						<input type="file" name="" id="" value=""  /> 
					</i>	
					<i class="iconfont" >
						&#xe64b;	
						<input type="file" name="" id="" value=""  /> 
					</i>	
					<i class="iconfont" >
						&#xe64b;	
						<input type="file" name="" id="" value=""  /> 
					</i>																										
				</div>					
				</div>				
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
		


		<!--标签选择-->	
		<div class="pi born">
				<div  class="f_l_t">
					标签选择
				</div> 		
		<div class="tr">
			<span class="tsp">&nbsp;</span>
			<div class="l td-m" id='more-select-label'> 
				<span  class="select-a">大面积 <img src="../../../img/3jiao.png" alt="" /></span>
				<span  class="select-a">小面积<img src="../../../img/3jiao.png" alt="" /></span>
				<span  class="select-a">层数度<img src="../../../img/3jiao.png" alt="" /></span>
				<span class="select-a">独栋<img src="../../../img/3jiao.png" alt="" /></span>
				<span class="select-a">环境好<img src="../../../img/3jiao.png" alt="" /></span>
				<span class="select-a">带装修<img src="../../../img/3jiao.png" alt="" /></span>
				<span class="select-a">性价高<img src="../../../img/3jiao.png" alt="" /></span>
				<span class="select-a">有宿舍<img src="../../../img/3jiao.png" alt="" /></span>
				<span class="select-a custom">自定义<img src="../../../img/3jiao.png" /></span>				
			</div>
			<div class="custom-div">
				<div class="tr"> 
					<span class="tsp">&nbsp;</span>
					<span class="font_lh">* 字符不能超过5个字，如果为“自定义”等于没添加标签</span>
				</div>
				<div class="tr custom-a-list">
					<span class="tsp">&nbsp;</span> 
					<div class="custom-a" onclick="foutin(this)" >自定义</div>				
				</div> 					
			</div>
				
		</div> 
	
								
		</div><!--标签选择-->			
	</div>

</div>

<script type="text/javascript">
		$('#tj').click(function(){
			var keys=true;
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
		
		
		
		
		
		/*多选*/
		var msl_mun=0;
		var msl_text=[];
		//$('.custom').addClass('bor').css({'color':'#00AE66'}).find('img').show();
		$('#more-select-label span').click(function(){
			if($(this).hasClass('bor')){
				$(this).removeClass('bor').css({'color':'#191919'});
				$(this).find('img').hide()
				msl_mun--;
			}else{
				if(!(msl_mun>2))
				{
					$(this).addClass('bor').css({'color':'#00AE66'});
					$(this).find('img').show();
					msl_text.push($(this).text())
					msl_mun++;						
				}
			}
			if($(this).hasClass('custom') && $(this).hasClass('bor'))
			{	
				$('.custom-div').show()
			}
			if($(this).hasClass('custom') && !$(this).hasClass('bor'))
			{
				$('.custom-div').hide();
				var len=$('.custom-a-list > div').length;
				msl_mun=msl_mun-len+1;
				$('.custom-a-list > div').remove();
				var div=$('<div class="custom-a" onclick="foutin(this)" >自定义</div>'); 
				$('.custom-a-list').append(div)					
			}

		
		
		
			//加在传送ajax里面
			if(msl_text=='')
			{
				msl_text.push('自定义');
			}
			console.log(msl_text)
		
	})	
	
	
	//自定义标签         //添加的
	function foutin(obj){
		$(obj).replaceWith('<input type="text" id="custom" value="" class="custom-a"  onblur="foutout(this)" onkeydown="kd(this)"/>');
		$('#custom').focus()
	}
	

	function kd(obj){
		if($(obj).val().length>5)
		{
			alert('字符数不能大于5')
		}
	}
		
	function foutout(obj){
		var html=$(obj).val();
		html=$.trim(html);
	    if(html!="" && html.length<=5 && html.length!=0)
	    {
	    	if($('.custom-a-list').find('.custom-a').length<=3-msl_mun)
	    	{
	    		msl_mun++;
				var div=$('<div class="custom-a" onclick="foutin(this)" >自定义</div>'); 
				$('.custom-a-list').append(div)		    		
	    	}		
	    }else{
	    	html='自定义'
	    }
		$(obj).replaceWith('<div class="custom-a" onclick="foutin(this)" >'+html+'</div>');	
	}
	
	//点击提交时候获取
	var costomArry=[];
	$('.custom-a-list .custom-a').each(function(){
	  	costomArry.push($(this).text());
	})		
	
</script>
