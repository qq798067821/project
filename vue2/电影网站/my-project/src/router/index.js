import Vue from 'vue'
import Router from 'vue-router'
import index from "@/components/index"
import hot from "@/components/hot/hot"
import movie from "@/components/hot/movie"
import tv from "@/components/hot/tv"

Vue.use(Router)

export default new Router({
  routes: [
    {  
          path:"/index",
          component:index,
          children:
          [
          {
            path:"/",
            component:movie
          }, 
          {
            path:"/tv",
            component:tv
          }           
          ]    
    },
    {path:'*', redirect:'/index'}
  ]
})
