<template>
	<div>
		<router-link to="/index/hot" id="rt">热门电影</router-link>	
		<router-link to="/tv">热门电视剧</router-link>	
		<transition name="fade" mode="out-in">
		<router-view></router-view>
		</transition>
	</div>
</template>
<script>

export default {
  data(){
    return{

    }
  }
}
</script>
<style  scoped>
#rt{margin-right: 10px}
.component-fade-enter-active, .component-fade-leave-active {
  transition: opacity .3s ease;
}
.component-fade-enter, .component-fade-leave-active {
  opacity: 0;
}
</style>