//防触碰
function preventtouch(obj,fn){
	window.ismove=true
	$(obj).on('touchmove',function(){
		window.ismove=false;
			
	})
	$(obj).on('touchend',function(){ 
		if(window.ismove)
		{
			var t=$(this);
			fn(t) 
		}
		window.ismove=true;     
	})	
}





$(window).resize(function(){
	res();
})

function res(){
	var headHeight=$('#head').height();
	var windowHeight=$(window).height();
	var Bottommenu=$('.bottom').height();
	$('.swiper-container-vertical').height(windowHeight-headHeight-Bottommenu)	
}

/*区域竖滚动*/
scrollV();/*内容滚动*/
function scrollV(){
	res()
	var mySwiper = new Swiper('.swiper-container-vertical', {
	    scrollbar: '.swiper-scrollbar', 
	    direction: 'vertical',
	    slidesPerView: 'auto',
	    mousewheelControl: true,
	    freeMode: true,
	    freeModeMomentum : true,
		roundLengths : true, //防止文字模糊 	 
		observer:true,
		observeParents:true,	
		autoHeight: true   
	})
	$(document).on('touchstart',function(){
		mySwiper.onResize();
	})		 
}

/*水平滚动区域*/ 
function scrollH(obj,tab)
{
	var mySwiper = new Swiper(tab,{
	direction : 'horizontal', 
	autoHeight: true  ,
	onTransitionEnd: function(swiper){				
	     var ind=mySwiper.activeIndex;
		$(obj).eq(ind).addClass('border-bottom-ptc').siblings().removeClass('border-bottom-ptc')
	    }				
	})
	$(obj).on('touchstart',function(){
		mySwiper.slideTo($(this).index(), 500, false); 
	})
	$(obj).on('touchstart', function() {
		$(this).addClass('border-bottom-ptc').siblings().removeClass('border-bottom-ptc')
	})				
} 



/*#dropdown下拉*/
var kes=false;
$('#down').on('click',function(){
	if(!kes){
		$('#dropdown').find('a').show();
		$('#dropdown').find('center').text('收起-');
	}else{
		$('#dropdown').find('a:gt(10)').hide();
		$('#dropdown').find('center').text('查看更多+')
	}
	kes=!kes;		
})

/*图文*/
$('.imgList a').each(function(){ 
		if($(this).index()%3==1)
		{
			$(this).css({'margin':'0 .3rem'}) 
		}
		if($(this).index()>2)
		{
			$(this).css({'margin-top':'.3rem'}) 
		}
}) 


/*模态选项卡*/
function Modality(obj){
	$('.select').on('click',function(){
		$(obj).show(); 
	}) 
	$(obj).on('click',function(){
		$(this).hide();
		return false; 
	})	
 	$('.select').on('click',function(){
 		var tab=$(this).attr('href');
 		$(obj+'> div').each(function(){
 			if($(this).attr('id')==tab)
 			{
 				$(this).show(300); 
 			}else{
 				$(this).hide(300);
 			}
 		})
 	})
 	$(obj+' li').on('click',function(){
		$(this).addClass('font_ptc').siblings().removeClass('font_ptc'); 
	})	 
}

/*选项卡*/
function tabs(obj){
 	$('.select').on('touchstart',function(){
 		var tab=$(this).attr('href');
 		$(obj+'> div').each(function(){
 			if($(this).attr('id')==tab)
 			{
 				$(this).show(300); 
 			}else{
 				$(this).hide(300);
 			}
 		})
 	})	 
}


 


/*双击 事件*/
function dbstatr(obj,fn){
var m=0;
var t=0;	
$(obj).on('touchstart',function(){
	if(m==0)
	{
		t=new Date().getTime(); 
	}
	if(m<=1)
	{
		m++;
		if(new Date().getTime()-t>500)   
		{
		 	m=0
		}					
	}			
	if(m>1){ 
		if(new Date().getTime()-t<500)   
		{		
			fn($(this)) ; 
			m=0;
		}	
	}
})			
}




