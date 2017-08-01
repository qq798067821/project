<div class="y_m_r">
	<div class="m_r_c">
		<!--照片位置-->
		<div class="pi">
			<div class="pt">
				<img src="../../img/aec379310a55b3199a363d0d43a98226cefc17fe.jpg"/>
			</div>
			<!--账户信息-->
			<div class="ac">
				
				<div class="m_tr">
					<div class="m_td imp">手机：18378232344</div>
					<div class="m_td imp">称谓：毛先生</div>
					<div class="clear"></div><!--清除浮动-->
				</div>
				<div class="m_tr"> 
					<div class="m_td "><img src="../img/yonghu.png" class="v_m"/>身份认证&nbsp;<a href="./identityAuthentication(身份认证).php" class="red curpo text_de m_id">(马上认证)</a></div>
					<div class="m_td "><img src="../img/renzheng.png" class="v_m"/>企业认证&nbsp;<a href="./identityAuthentication(身份认证).php" class="red curpo text_de m_qy">(马上认证)</a></div>
					<div class="clear"></div><!--清除浮动-->
				</div>
				<div class="m_tr">
					<div class="m_td"><img src="../img/gerenziliao.png" class="v_m"/>完善个人资料&nbsp;<span class="h">(待完善)</span></div>  
					<div class="clear"></div><!--清除浮动-->
				</div>													
			</div>
		</div>
		<!--账户信息end-->
		
		
			<!--发布数据-->
			<div class="pi born">  
				<div style="background: rgb(250,250,250); text-indent: 1rem;" class="mag">
					<img src="../img/tishi.png" class="v_m"/>上次登录时间：<span>xxxxxxx</span>  
				</div>
			</div>
			<!--发布数据end-->	
			
			<!--最近发布-->
			<div class="pi born">
				<div class="t">
					<p class="big">最近发布(<span class="red">20</span>)</p>
				</div>
				<div class="m_tit">
					<div>
						<p class="l">发布买卖</p><p class="l">悬赏任务</p>
					</div>

					</div>
					
					<!--列表-->
					<div id="tab">
						<div>
						<div class="m_f">
							<div  class="m_f_tr">
								<div class="m_f_td">
									信息编号
								</div>							
								<div class="m_f_td">
									标题
								</div>
								<div class="m_f_td">
									类别
								</div>
								<div class="m_f_td">
									时间
								</div>		
								<div class="m_f_td"> 
									浏览次数
								</div>																				
							</div> 
							<!--循环m_f_tr-->
							<div  class="m_f_tr">
								<div class="m_f_td">
									<span class="text_sx">我是玉皇大帝如来佛祖派去娶西经的</span>
								</div>
								<div class="m_f_td">
									<span class="text_sx">我是玉皇大帝如来佛祖派去娶西经的</span>
								</div>
								<div class="m_f_td">
									<span class="text_sx">我是玉皇大帝如来佛祖派去娶西经的</span>
								</div>
								<div class="m_f_td">
									2017-06-06 20:00
								</div>								
								<div class="m_f_td">
									<span class="red">100</span>
								</div>															
							</div> 
							<!--循环m_f_tr-->								
						</div>
					</div>
					<!--第二选项卡-->
						<div>
						<div class="m_f">
							<div  class="m_f_tr">
								<div class="m_f_td rt_td"> 
									信息编号
								</div>							
								<div class="m_f_td rt_td">  
									标题
								</div>
								<div class="m_f_td rt_td">
									类别
								</div>
								<div class="m_f_td rt_td">
									时间
								</div>
								<div class="m_f_td rt_td">
									金额
								</div>										
								<div class="m_f_td rt_td"> 
									浏览次数
								</div>																				
							</div> 
							<!--循环m_f_tr-->
							<div  class="m_f_tr">
								<div class="m_f_td rt_td">
									<span class="text_sx" >我是玉皇大帝如来佛祖派去娶西经的</span>
								</div>
								<div class="m_f_td rt_td">
									<span class="text_sx">我是玉皇大帝如来佛祖派去娶西经的</span>
								</div>
								<div class="m_f_td rt_td">
									<span class="text_sx">我是玉皇大帝如来佛祖派去娶西经的</span>
								</div>
								<div class="m_f_td rt_td">
									2017-06-06 20:00
								</div>								
								<div class="m_f_td rt_td"> 
									<span  class="red">100w</span>
								</div>
								<div class="m_f_td rt_td"> 
									<span  class="red">100</span>
								</div>																								
							</div> 
							<!--循环m_f_tr-->								
						</div>
					</div>					
					<!--第二个选项卡-->
											
						<div class="clear"></div>  
					</div>	
					<!--列表end-->						
			</div>				
		</div>


	</div>

<script type="text/javascript">
	$(function(){
		$('.m_tit  div  p').eq(0).css({'border-bottom':'2px solid #725BDE '});  
		$('.m_tit  div  p').click(function(){
			$('#tab > div').eq($(this).index()).show().siblings().hide();
			$(this).css({'border-bottom':'2px solid #725BDE '}).siblings().css({'border-bottom':'none'})   
		})			
	})

</script>