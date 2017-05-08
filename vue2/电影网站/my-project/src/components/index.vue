<template>
<div>
<div id="com">		
    <div class="col-lg-3 hidden-xs" id="com_r">
		<hot></hot>
    </div>
      <!-- banner-->    
		<div class="col-lg-9 ">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			    <!-- 轮播（Carousel）指标 -->
			    <ol class="carousel-indicators">
					<li data-target="#myCarousel"  v-for="(k,index) in imgpath" :data-slide-to="index" :class="[[{'active':index==0}]]"></li>

			    </ol>   
			    <!-- 轮播（Carousel）项目 -->
			    <div class="carousel-inner">
			        <div v-for="(v,index) in imgpath" :class="[{ 'active': index<1 }, 'item']">
			            <img :src="v" class="img-responsive" > 
			            <div class="carousel-caption">标题 1</div>
			        </div>
			    </div>
				<!-- 轮播（Carousel）导航 -->
			    <a class="carousel-control left" href="#myCarousel" 
			        data-slide="prev">&lsaquo;
			    </a>
			    <a class="carousel-control right" href="#myCarousel"  
			        data-slide="next">&rsaquo;
			    </a>
			</div>
		</div>	
</div>	
	<focus></focus>	
	<foot></foot>
</div>
	
</template>
<script>
import hot from "@/components/hot/hot.vue"
import focus from "@/components/focus_today/focus.vue"
import foot from "@/components/foot/foot.vue"
//var hot =require("@/components/hot/hot.vue")
export default {
  data(){
    return{
    	imgpath:[require("@/assets/img/1.jpg"),require("@/assets/img/2.jpg"),require("@/assets/img/3.jpg")]
    }
  },
  components:{
    	hot,
    	focus,
    	foot
    }
}
</script>
<style  scoped>
	#com{overflow: hidden;}
	#myCarousel img{max-height: 450px;min-height: 100px;width: 100%}
</style>



