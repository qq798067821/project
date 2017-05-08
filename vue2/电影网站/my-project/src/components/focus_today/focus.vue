<template>
	<div id="hot">
		<div class="page-header">
			<h2>今日热点</h2>
		</div>
		<div class="col-lg-3 col-xs-6" v-for="k in img">
			<div class="thumbnail">
				<img src="./img3/1.jpg" alt="通用的占位符缩略图">
				<div class="caption">
					<h3>杨幂</h3>
					<p>她在干神马</p>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
	export default{
		data(){
			return{
				img:[1,2,3,4]
			}
			
		}
	}
</script>
<style>
#hot{overflow: hidden;}
div h2{color: red;}
</style>