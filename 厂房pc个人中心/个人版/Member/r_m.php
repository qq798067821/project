<div class="y_m_r">
	<div class="m_r_c"> 
		<div class="pi">
			<p class="big" style="float: left;">发布管理</p> 
			<a href="#" class="button_s  font_lv r bor" id='del'>删除</a>
		</div>	
					<div class="m_f">
						<div  class="m_f_tr"> 
							<div class="m_f_td rm_td">
								<input type="checkbox" name="" id="" value="" class="check boos" />
								信息编号
							</div>
							<div class="m_f_td rm_td">
								标题
							</div>
							<div class="m_f_td rm_td">
								类别
							</div>		
							<div class="m_f_td rm_td"> 
								时间
							</div>	
							<div class="m_f_td rm_td">  
								操作
							</div>																											
						</div> 
						<!--循环m_f_tr-->
						<div  class="m_f_tr">
							<div class="m_f_td rm_td">
								<input type="checkbox" class="check" name="" id="" value="" />
								<span class="text_sx">3434343</span>
							</div>
							<div class="m_f_td rm_td">
								<span class="text_sx">dfdfdfdfdddddddddddddddd</span>
							</div>
							<div class="m_f_td rm_td ">
								<span class="text_sx">dfdfdfdfdddddddddddddddd</span>
							</div>							
							<div class="m_f_td rm_td">
								<span class="text_sx">dfdfdfdfdddddddddddddddd</span>
							</div>
							<div class="m_f_td rm_x rm_td rmxz">
								<a href="#" class="font_lv">查看详情</a>
							</div>															
						</div> 	<!--循环m_f_tr-->
						
						
						<!--循环m_f_tr-->
						<div  class="m_f_tr">
							<div class="m_f_td rm_td">
								<input type="checkbox" class="check" name="" id="" value="" />
								<span class="text_sx">12131</span>
							</div>
							<div class="m_f_td rm_td">
								<span class="text_sx">dfdfdfdfdddddddddddddddd</span>
							</div>
							<div class="m_f_td rm_td ">
								<span class="text_sx">dfdfdfdfdddddddddddddddd</span>
							</div>							
							<div class="m_f_td rm_td">
								<span class="text_sx">dfdfdfdfdddddddddddddddd</span>
							</div>
							<div class="m_f_td rm_x rm_td rmxz">
								<a href="#" class="font_lv">查看详情</a>
							</div>															
						</div> 	<!--循环m_f_tr-->						
										
						<div class="clear"></div>  
					</div>	
	</div>

</div>

<script type="text/javascript">
	$(function(){
		$('.rmxz span').click(function(){
			if($(this).index()==0)
			{
				alert('查看详情')
			}else{
				alert('删除')
			}
		})
		

		//全选按钮
			$('.boos').change(function(){
				if($(this).prop('checked')) 
				{
					$('input[type=checkbox] ').prop('checked',true)
				}else{
					$('input:checkbox').prop('checked',false)
				}
			})
		//点击删除获取选择中index 移除
			$('#del').click(function(){
			var mun=$('input[type=checkbox]').length;
			//alert($('input[type=checkbox]').eq(1).prop('checked'))
			for (var i=1;i<mun;i++){	
				if($('input[type=checkbox]').eq(i).prop('checked'))
				{
					$('input[type=checkbox]').eq(i).parents('.m_f_tr').remove();  
				}
			} 
			})			
			
	})
</script>