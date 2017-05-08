<template>
<div>
<div class="container">
<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header col-lg-1">
        <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target="#example-navbar-collapse">
            <span class="sr-only">切换导航</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="nav_logo navbar-brand " href="#" ><img src="./assets/logo.png" alt="" class="img-responsive"></a>
    </div>
    <div class="collapse navbar-collapse" id="example-navbar-collapse">
        <ul class="nav navbar-nav col-lg-11 ">
            <li class="active"><router-link to="/index">首页</router-link></li>
            <li><a href="#">Vip</a></li>
            <li class="col-lg-6 col-lg-push-1">
            <div class="input-group inp_text" >
            <input type="text" class="form-control" placeholder="输入查询电影">
            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span> 
            </div>
            </li>    
            <li class="dropdown col-lg-offset-3">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user"></span>
                    用户
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#">注册</a></li>
                    <li><a href="#">登录</a></li>

                </ul>
            </li>
        </ul>
    </div>
</nav>
<router-view></router-view>
</div>  
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

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
}
li{list-style: none}
nav{background: red;line-height: 30px}
nav a:hover{text-decoration: none}
.nav_logo{
    width: 60px
}
.nav_list{}
.inp_text{margin-top: 9px }
#myCarousel img{max-height: 450px;min-height: 100px;width: 100%}

</style>
