<template>
	<div>
		<a href="#" class="list-group-item " v-for="(d,index) in tv" :class="{hot:index<3}">{{d}}</a>
	</div>
</template>
<script >
require("./css.css")
export default{
	data(){
		return{
			tv:['鹿鼎记','大唐无双','人民的名义','生活大爆炸','哥谭','禁忌','权利的游戏','双龙','世界']
		}
	}
}
</script>
<style scoped>
div a:hover{background: red}
</style>