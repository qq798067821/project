<template>
	<div>
		<div id="nav_ad" class="hidden-xs">
			<div id='nav'>
				<div><img src="./img/11.jpg"/></div>
				<div><img src="./img/22.jpg"/></div>
				<div><img src="./img/33.jpg"/></div>
				<div><img src="./img/44.jpg"/></div>
			</div>			
		</div>		
	</div>
</template>
<script type="text/javascript">

</script>
<style type="text/css">
		#nav_ad{height: 120px;width: 1136px;overflow: hidden;margin-bottom: 30px}
		#nav{height: 120px;width: 11360px;}
		#nav div{float: left;float: left;height: 100%;width: 284px;transition:all .2s;position: relative;}
		#nav div:nth-child(1){background:url(img/1.jpg) no-repeat}
		#nav div:nth-child(2){background:url(img/2.jpg) no-repeat}
		#nav div:nth-child(3){background:url(img/3.jpg) no-repeat}
		#nav div:nth-child(4){background:url(img/4.jpg) no-repeat}
		#nav:hover div{width: 100px;}
		#nav div:hover{width: 852px;}
		#nav div img{position: absolute;bottom: 0;left: 284px;}	
</style>