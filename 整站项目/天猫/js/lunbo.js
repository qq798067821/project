window.onload=function(){
	//页面刷新后始终在顶部
	var obj=document.documentElement.scrollTop?document.documentElement:document.body;
	obj.scrollTop=0;
	var caidanc=getClass("caidanc");
	var caidans=getClass("caidans");
	var yanse1=["#fff701","#e0e0e0","#73eac4","#b917f8","#e4e4e4","#e0e0e0","#73eac4","#b917f8","#e4e4e4","#fff701","#b917f8","#e4e4e4","#fff701","#e0e0e0","#73eac4"]
	var xiao1=getClass('xiao1');
	var quanbj;
	var youtupiana=getClass("youtupiana");
	for(var i=0;i<caidanc.length;i++){
		caidanc[i].a=i;
		caidanc[i].onmouseover=function(){
			caidans[this.a].style.display="block";
			if(this.a>0){
				for(var y=0;y<youtupiana.length;y++){
						youtupiana[y].style.display="none";
					}
				if(this.a%3==0){
					youtupiana[0].style.display="block";
				}
				if(this.a%3==1){
					youtupiana[1].style.display="block";
				}
				if(this.a%3==2){
					youtupiana[2].style.display="block";
				}
				clearInterval(t);
				xiao1[this.a-1].style.display="block";
				quanbj=quan.style.background;
				quan.style.background=yanse1[this.a-1];
			}

		};
		caidanc[i].onmouseout=function(){
			if(this.a>0){
				t=setInterval(gun,2000);
				xiao1[this.a-1].style.display="none";
				quan.style.background=quanbj;
			}
			caidans[this.a].style.display="none";
		};
	}
	for(var j=0;j<caidans.length;j++){
		caidans[j].a=j;
		caidans[j].onmouseover=function(){
			caidans[this.a].style.display="block";
		};
		caidans[j].onmouseout=function(){
			caidans[this.a].style.display="none";
		};
	}

	var daohangc=getClass("daohangc");
	var daohangs=getClass("daohangs");
	for(var i=0;i<daohangc.length;i++){
		daohangc[i].a=i;
		daohangc[i].onmouseover=function(){
			//daohangs[this.a].style.display="block";
			var son=getFirst(daohangs[this.a]);
			var dh=getStyle(son,"height");
			animate(daohangs[this.a],{height:dh},200,Tween.Linear);
			this.style.background="white";
		};
		daohangc[i].onmouseout=function(){
			animate(daohangs[this.a],{height:0},200,Tween.Linear);
			this.style.background="#f0f0f0";
		};
	}
	var shoujiban=document.getElementById('shoujiban');
	var shoujiban2=document.getElementById('shoujiban2');
	shoujiban.onmouseover=function (){
		var a=getFirst(this);
		a.style.color="yellow";
		a.style.textDecoration="none";
		var son=getFirst(shoujiban2);
		var dh=getStyle(son,"height");
		animate(shoujiban2,{height:dh},200,Tween.Linear);
	}
	shoujiban.onmouseout=function (){
		var a=getFirst(this);
		a.style.color="#999";
		animate(shoujiban2,{height:0},200,Tween.Linear);
	}


	var wangzhandaohang=document.getElementById('wangzhandaohang');
	var wangzhandaohang2=document.getElementById('wangzhandaohang2');

	wangzhandaohang.onmouseover=function (){
		this.style.color="#c40000";
		wangzhandaohang2.style.padding="25px 0";
		var son=getFirst(wangzhandaohang2);
		var dh=getStyle(son,"height");
		animate(wangzhandaohang2,{height:dh},200,Tween.Linear);
	}
	wangzhandaohang.onmouseout=function (){
		this.style.color="#999";	
		animate(wangzhandaohang2,{height:0,paddingTop:0,paddingBottom:0},200,Tween.Linear);
	}









var yanse=["#b917f8","#e4e4e4","#fff701","#e0e0e0","#73eac4"];

var quan=document.getElementById('quanjing');
var xiao=getClass("xiao");
var we=document.getElementById('daa');
var shuzi=getClass('shuzi');
var a=1;
function gun(){
	we.style.marginLeft=-810*a+'px';
	for(var i=0;i<shuzi.length;i++){
		shuzi[i].style.background="black";
	}
	
	quan.style.background=yanse[a];
	shuzi[a].style.background="#c40000";
	a++;
	if(a==5)
	a=0;
	}
var t=setInterval(gun,2000);


for(var j=0;j<shuzi.length;j++){
	shuzi[j].index=j;
	shuzi[j].onmouseover=function(){
	for(var i=0;i<shuzi.length;i++){
		shuzi[i].style.background="black";
	}
	quan.style.background=yanse[this.index];
	we.style.marginLeft=-810*this.index+'px';
	this.style.background="#c40000";
	i=this.index;
	clearInterval(t);
	}
	shuzi[j].onmouseout=function(){
	t=setInterval(gun,2000);
	}
}

	var pinpai=getClass('pinpai');
	var pinpaidaohang=getClass('pinpaidaohang');
	var pinpaiarr=[];
	for(var p=1;p<=54;p++){
		pinpaiarr.push("img/mingpai"+p+".jpg");
	}//获取所有品牌图片
	function randomsort(a, b) {
        return Math.random()>0.5 ? -1 : 1;
	//用Math.random()函数生成0~1之间的随机数与0.5比较，返回-1或1
	}
	
	var newarr=pinpaiarr.sort(randomsort);
	


	for(var k=0;k<pinpai.length;k++){
			pinpaidaohang[k].a=k;
			pinpaidaohang[k].onclick=function(){
				for(var j=0;j<pinpai.length;j++){
					pinpai[j].style.display="none";
					pinpaidaohang[j].style.fontWeight="normal";
					pinpaidaohang[j].style.borderBottom="0";
				}
				pinpai[this.a].style.display="block";
				var suijiimg=$("img",pinpai[this.a]);
				for(var j=0;j<suijiimg.length;j++){
					suijiimg[j].src=newarr[j];
				}	
					newarr=newarr.sort(randomsort);	
				pinpaidaohang[this.a].style.fontWeight="bold";
				pinpaidaohang[this.a].style.borderBottom="2px solid black";
				
			}
		}
		var huanyipi=$("#huanyipi");
		huanyipi.onclick=function (){
			for(var i=0;i<4;i++){
				if(pinpai[i].style.display=="block"){

					var suijiimg=$("img",pinpai[i]);
					for(var j=0;j<suijiimg.length;j++){
						suijiimg[j].src=newarr[j];
					}	
					newarr=newarr.sort(randomsort);	
				}
			}
		}



	var arrow=getClass("arrow");
	var xiangzuo=getClass("xiangzuo");
	var xiangyou=getClass("xiangyou");
	var zhongjianda=getClass("zhongjianda");

	for(var i=0;i<xiangzuo.length;i++){
		xiangzuo[i].b=i;
		xiangzuo[i].onclick=function (){
			var ml=getStyle(zhongjianda[this.b],"marginLeft");
			var nml=ml-105;
			if(nml<-210){
				nml=0;
			}
			animate(zhongjianda[this.b],{marginLeft:nml},200,Tween.Linear);
		}
		xiangyou[i].b=i;
		xiangyou[i].onclick=function (){

			var ml=getStyle(zhongjianda[this.b],"marginLeft");
			var nml=ml+105;
			if(nml>0){
				nml=-210;
			}
			animate(zhongjianda[this.b],{marginLeft:nml},200,Tween.Linear);
		}
	}


	for(var i=0;i<arrow.length;i++){
		arrow[i].a=i;
		arrow[i].onmouseover=function(){
			xiangzuo[this.a].style.display="block";
			xiangyou[this.a].style.display="block";
		};
		arrow[i].onmouseout=function(){
			xiangzuo[this.a].style.display="none";
			xiangyou[this.a].style.display="none";
		};
	}
	for(var j=0;j<xiangzuo.length;j++){
		xiangzuo[j].a=j;
		xiangyou[j].a=j;
		xiangzuo[j].onmouseover=function(){
			xiangzuo[this.a].style.display="block";
		};
		xiangzuo[j].onmouseout=function(){
			xiangzuo[this.a].style.display="none";
		};
		xiangyou[j].onmouseover=function(){
			xiangyou[this.a].style.display="block";
		};
		xiangyou[j].onmouseout=function(){
			xiangyou[this.a].style.display="none";
		};
	}

	var wenben=$("#wenben");
	wenben.onfocus=function (){
		this.style.color="#222";
		if(this.value="搜索商品"){
			this.value="";
		}
	}
	wenben.onblur=function (){
		if(this.value=""){
			this.value="双11买买买！！！";
		}
	}
	var scrolltext=$("#scrolltext");
	scrolltext.onfocus=function (){
		this.style.color="#222";
		if(this.value="送送送！！！"){
			this.value="";
		}
	}
	scrolltext.onblur=function (){
		if(this.value=""){
			this.value="送松松送！！";
		}
	}



	var father=getClass('pinpaizhong')[0];																																																			;
	var pinpaia=$("a",father);
	var taoxin=getClass("taoxin");
	for(var i=0;i<pinpaia.length;i++){
		pinpaia[i].a=i;
		pinpaia[i].onmouseover=function(){
			taoxin[this.a].style.display="block";
		};
		pinpaia[i].onmouseout=function(){
			taoxin[this.a].style.display="none";			
		};
	}
	for(var j=0;j<taoxin.length;j++){
		taoxin[j].a=j;
		taoxin[j].onmouseover=function(){
			taoxin[this.a].style.display="block";			
		};
		taoxin[j].onmouseout=function(){
			taoxin[this.a].style.display="none";			
		};
	}
	
	var srcollfix=getClass("srcollfix")[0];
	var floorfix=getClass("floorfix")[0];
	var flag1=true;//保证每次下拉的时候开关都是开着的
	var flag2=true;
	var obj=document.documentElement.scrollTop?document.documentElement:document.body;
	

	
	var louceng=getClass("louceng");
	var louding=louceng[0].offsetTop;
	var floornum=getClass("floornum");
	var floorheight=louceng[0].offsetHeight+25;
	
	var cH=document.documentElement.clientHeight;
	var main=getClass("main")[0];
	var anquan=getClass("anquan",main);
	var img=$("img",main);
	for(var i=0;i<img.length;i++){
		var val=img[i].getAttribute("src");
		img[i].setAttribute("aa",val);
		img[i].setAttribute("src","")
	}
	
	window.onscroll=function (){
		var obj=document.documentElement.scrollTop?document.documentElement:document.body;
		for(var i=0;i<louceng.length;i++){
			if(louceng[i].offsetTop<obj.scrollTop+cH){
				var limg=$("img",louceng[i]);
				for(var j=0;j<limg.length;j++){
					var aa=limg[j].getAttribute("aa");
					limg[j].setAttribute("src",aa);
				}
			}
		}
		for(var i=0;i<anquan.length;i++){
			if(anquan[i].offsetTop<obj.scrollTop+cH){
				var limg=$("img",anquan[i]);
				for(var j=0;j<limg.length;j++){
					var aa=limg[j].getAttribute("aa");
					limg[j].setAttribute("src",aa);
				}
			}
	}
		
		if(obj.scrollTop>=230){
			if(obj.scrollTop>=louceng[0].offsetTop-200&&obj.scrollTop<=louceng[11].offsetTop+300){
				floorfix.style.display="block";
			}
			if(obj.scrollTop<louceng[0].offsetTop-200||obj.scrollTop>louceng[11].offsetTop+300){
				floorfix.style.display="none";
			}
			if(flag1){
				animate(srcollfix,{top:0},500,Tween.Linear)
				flag1=false;
				flag2=true;
			}
		}else{		
			if(flag2){
				animate(srcollfix,{top:-54},100,Tween.Linear);
				flag1=true;
				flag2=false;
			}	
		}

		for(m=0;m<louceng.length;m++){
			louceng[m].index=m;
			floornum[m].g1=louding+floorheight*m-200;
			floornum[m].g2=louding+floorheight*(m+1)-200;
			if(obj.scrollTop>=louceng[m].offsetTop-200){
				for(n=0;n<floornum.length;n++){
					floornum[n].style.background="#eee";
					floornum[n].style.color="#222";
				}
				floornum[m].style.background="#c40000";
				floornum[m].style.color="#fff";
			}
		}


	for(var f=0;f<floornum.length;f++){
		floornum[f].index=f;
		floornum[f].onclick=function(){
			for(var g=0;g<floornum.length;g++){
				floornum[g].style.background="#eee";
				floornum[g].style.color="#222";
			}
			this.style.background="#c40000";
			this.style.color="#fff"
			animate(obj,{scrollTop:louceng[this.index].offsetTop-100},300,Tween.Linear);
		}
	}
	}

	var bian=$(".bian");
	var bians=$(".bians");
	for(var i=0;i<bian.length;i++){
		bian[i].index=i;
		bian[i].onmouseover=function (){
			var bs=getFirst(bians[this.index]);
			var bh=getStyle(bs,"width");
			animate(bians[this.index],{width:bh},100,Tween.Linear);
			// bians[this.index].style.display="block";
		}
		bian[i].onmouseout=function (){
			//bians[this.index].style.display="none";
			animate(bians[this.index],{width:0},100,Tween.Linear)
		}

	}




}