/*区域竖滚动*/
scrollV();/*内容滚动*/
function scrollV(){
	var translate_y=0;
	var a_list='';
	var mySwiper = new Swiper('.swiper-container-vertical', {
		scrollbar:'.swiper-scrollbar',
	    direction: 'vertical',
	    slidesPerView: 'auto',
	    freeMode: true,
	    freeModeMomentum : false,
		roundLengths : true, //防止文字模糊 	 
		observer:true,
		observeParents:true,	
		autoHeight: true ,
		onTouchMove:function(swiper, event){
			translate_y=mySwiper.translate;
			var conHeight=$('.swiper-container-vertical').height();
			var swHeight=$('.swiper-wrapper').height(); 			
			if((conHeight+-translate_y)>swHeight+100 && $('.loding').is(':hidden')) 
			{			
				$('.loding').show();
				//请求ajax
				 a_list=$('<a href="#" class="imgTextList"><div class="imgTextList_img"><img src="img/timg.jpg" /><img src="img/lease.png" class="imgDiv_r" /></div><div class="text"><p>横沥镇妖步全新独院厂房1成交额美好的狂蜂浪蝶</p><div class="font-s Specialline"><span>地区：东莞-横沥  </span><span class="r">14m&sup2</span></div><div class="font-s Specialline"><span>更新时间：12小时前</span><div class="r"><span>面积：</span><span class="red">100m&sup2</span></div></div></div></a>');				
			}
		},
	    onTouchEnd: function(swiper, event){
	    	
	    	setTimeout(function(){
				$('.swiper-slide  .loding').before(a_list); 
				console.log($('.swiper-wrapper a').length)	    		
	    	},3000)
			
			$('.loding').hide();
		}				
	   }		
	)
	$(document).on('touchstart',function(){
		mySwiper.onResize();

	})
	/*上拉加载*/
	$('.swiper-slide').on('touchend',function(){

	})	
}