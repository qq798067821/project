<div class="y_m_r">
	<div class="m_r_c"> 
		<div class="pi">
			<p class="big" style="float: left;">转介信息</p> 
			<p style="line-height: 30px;padding:0 20px ;background:#725BDE;float: right;color: #fff;cursor: pointer;">发布转介</p>
		</div>	
					<div class="m_f">
						<div  class="m_f_tr"> 
							<div class="m_f_td rm_td">
								<input type="checkbox" name="" id="" value="" class="check boos"/>  
								信息编号
							</div>
							<div class="m_f_td rm_td">
								标题  
							</div>
							<div class="m_f_td rm_td">
								意向
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
								<input type="checkbox" name="" id="" value="" class="check" />
								<span class="text_sx">东莞-万江</span>
								
							</div>
							<div class="m_f_td rm_td">
								<span class="text_sx">大幅度可激发科技放得开</span> 
							</div>
							<div class="m_f_td rm_td ">
								办公
							</div>							
							<div class="m_f_td rm_td">
								<span class="text_x">1922-12-1 12:24</span>
								
							</div>
							<div class="m_f_td rm_x rm_td">
								<span class="font_lv">查看详情</span>
							</div>															
						</div> 	<!--循环m_f_tr-->
										
						<div class="clear"></div>  
					</div>	
				<div class="tr">
					<div class="td">
						<a href="#" class="button_s  font_lv l bor">删除</a>
					</div>
				</div>				
	</div>

</div>
<script type="text/javascript">
	$(function(){
		$('.rm_x span').click(function(){
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
	})
</script>