<div class="y_m_r">
	<div class="m_r_c"> 
		<div class="pi">
			<p class="big" style="float: left;">企业选址</p> 
			<p style="line-height: 30px;padding:0 20px ;background:#725BDE ;float: right;color: #fff;cursor: pointer;">发布地址</p>
		</div>	
					<div class="m_f">
						<div  class="m_f_tr"> 
							<div class="m_f_td rm_td">
								新址意向
							</div>
							<div class="m_f_td rm_td">
								类别
							</div>
							<div class="m_f_td rm_td">
								意向
							</div>		
							<div class="m_f_td rm_td"> 
								发布时间
							</div>	
							<div class="m_f_td rm_td"> 
								功能
							</div>																											
						</div> 
						<!--循环m_f_tr-->
						<div  class="m_f_tr">
							<div class="m_f_td rm_td">
								东莞-南城
							</div>
							<div class="m_f_td rm_td">
								厂房
							</div>
							<div class="m_f_td rm_td ">
								办公
							</div>							
							<div class="m_f_td rm_td">
								1922-1-1 
							</div>
							<div class="m_f_td rm_x rm_td">
								<span class="font_lv">查看详情</span>
							</div>															
						</div> 	<!--循环m_f_tr-->
										
						<div class="clear"></div>  
					</div>	
	</div>

</div>
<script type="text/javascript">
	$(function(){
		$('.rm_td span').click(function(){
			if($(this).index()==0)
			{
				alert('查看详情')
			}else{
				alert('删除')
			}
		})
	})
</script>