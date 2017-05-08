<template>
  <div>
        <a href="#" class="list-group-item " v-for="(d,index) in list" :class="{hot:index<3}">{{d}}</a>
  </div>
</template>

<script>
import "./css.css"
export default {
  data () {
    return {
      list:["长城","勇敢的心","居家男人","变形金刚4","非诚勿扰","非诚勿扰2","手机","速度与激情8","速度与激情7"]
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
div a:hover{background: red}
</style>
