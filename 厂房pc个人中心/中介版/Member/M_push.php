 <div class="y_m_r">
	<div class="m_r_c"> 
		<div class="m_id_t">
			<a href="">需求推送</a>
			<a href="">供应推送</a>
		</div>
	</div>
	<div class="m_id_tab">
	<!--需求推送-->
	<div class="">
	<div class="m_r_c"> 
					<div class="m_f">
						<div  class="m_f_tr"> 
							<div class="m_f_td rm_td">
								<input type="checkbox" name="" id="" value="" class="check boos"  />
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
								<span class="font_lv m_push_xq">查看详情</span>
							</div>															
						</div> 	<!--循环m_f_tr-->
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
								<span class="font_lv m_push_xq">查看详情</span>
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
<!--需求推送-->

<!--供应推送-->
	<div class="">
	<div class="m_r_c"> 
					<div class="m_f">
						<div  class="m_f_tr"> 
							<div class="m_f_td rm_td">
								<input type="checkbox" name="" id="" value="" class="check boos"  />
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
								<span class="font_lv m_push_gy">查看详情</span>
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
<!--供应推送--> 
	</div>
</div>


<script type="text/javascript">
	$(function(){
		//头部index
		var mun=0;
		$('.m_id_t a').eq(0).css({'border-bottom': '2px solid #4285F4',"color":'#394043'});
		$('.m_id_t  a').click(function(e){
			var m_id_mun=$(this).index();
			mun=$(this).index(); 
			$(this).css({'border-bottom': '2px solid #4285F4',"color":'#394043'}).siblings().css({'border-bottom': 'none',"color":'#666'});
			$('.m_id_tab > div').eq(m_id_mun).css({'display':"block"}).siblings().css({'display':"none"}); 
			selAll();
			return false; 
		})
		
		//全选按钮
		selAll();
		function selAll(){
			$('.m_id_tab > div').eq(mun).find('.boos').change(function(){
				if($(this).prop('checked'))  
				{
					$('.m_id_tab > div').eq(mun).find('input[type=checkbox] ').prop('checked',true)
				}else{
					$('.m_id_tab > div').eq(mun).find('input[type=checkbox] ').prop('checked',false)
				}
			})			
		}
		var h=$('body').outerHeight();	
		$('.m_push_mt').css({'height':h+'px'});
		/*弹出模态框*/
		$('.m_push_xq').click(function(){
			$('.m_push_mt_xq').show(100);	
			var t=$(this).offset().top;
			$('.m_push_mt_from').css({'top':t-200+'px'})			
			return false;
		})
		/*点击供应*/
		$('.m_push_gy').click(function(){

			$('.m_push_mt_gy').show(100);	
			return false; 
			 
		})		
		
		$('.cancel').click(function(){
			$('.m_push_mt').hide(100); 
			return false;			
		})	
	
	})
</script> 