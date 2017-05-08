
//1.获取类名的兼容函数
function getClass(classname,father){//传入类名和父类
	var father=father||document;//返回靠前的真的值
	if(father.getElementsByClassName){//判断浏览器是否支持
		return father.getElementsByClassName(classname);//W3C浏览器返回
	}else{
		var arr=[];//建立新数组存放获取到的元素
		var alls=father.getElementsByTagName("*");//获取所有的标签元素
		for(var i=0;i<alls.length;i++){//遍历所有的获取到的元素
			if(checkClass(alls[i].className,classname)){//防止元素不止一个类名
				arr.push(alls[i]);//找到该类名则加入新数组
			}
		}
		return arr;//返回获取到的数组 
	}
}
function checkClass(str,classname){
	var newarr=str.split(" ");//将数组进行分割
	for(var i=0;i<newarr.length;i++){
		if(newarr[i]==classname){//找出与所要寻找的类名相同的元素
			return true;
		}
	}
	return false;
}
//获取对象的文本内容
function getText(obj,str){//传入对象名和需要设置的文本内容
		if(str==null){//传入文本内容为空表示只是获取对象文本
			if(obj.textContent){//为真表示是W3C浏览器
				return obj.textContent;
			}else{
				return obj.innerText;
			}
		}else{//文本内容不为空表示需要设置对象的文本内容
			if(obj.textContent!=undefined){
				 obj.textContent=str;
			}else{
				 obj.innerText=str;
			}
		}
		
	}

	
	//获取对象所有的css样式
	function getStyle(obj,attr){//传入 对象和属性
		if(obj.currentStyle){//判断浏览器类型
			return parseInt(obj.currentStyle[attr]);//iE返回获取属性
		}else{
			return parseInt(window.getComputedStyle(obj)[attr]);//其他浏览器返回
		}
	}

	function $(selector,father){
		if(typeof selector=="string"){
			selector=selector.replace(/^\s*|\s*$/g,"");//正则去字符串前后空格
			var father=father||document;
			var first=selector.substr(0,1);//charAt(0);
			if(first=="."){
				return getClass(selector.slice(1),father);
			}else if(first=="#"){
				return father.getElementById(selector.slice(1));
			}//else if(/^[a-z|1-10]{1,10}$/g.test(selector)){//正则表达式/^开始 $/结束
			// 	return father.getElementsByTagName(selector);
			// }
			else if(first>="a"&&first<="z"){
				return father.getElementsByTagName(selector);
			}
		}else if(typeof selector=="function"){
			window.onload=function(){
				selector();
			}
		}						
	}
	//获取父元素中的所有子元素或文本节点
		function getChilds(father,type){
			type=type||1;//第二个参数为空,默认获取元素节点
			var alls=father.childNodes;//获取所有子节点
			var arr=[];//定义新数组存放满足条件的节点
			for(var i=0;i<alls.length;i++){
				if(type==13){//获取元素与文本节点
					if(alls[i].nodeType==3){//文本节点
						var str=alls[i].nodeValue;//得到文本节点的值
						str=str.replace(/^\s*|\s*$/g,"");//去除文本值中的空格
						if(str!=""){
							arr.push(alls[i]);//存放满足条件的节点
						}	
					}
					if(alls[i].nodeType==1){//元素节点
						arr.push(alls[i]);
					}
				}else if(type=1){//获取元素节点
					if(alls[i].nodeType==1){
						arr.push(alls[i]);
					}
				}
			}
			return arr;//返回所有满足条件节点
		}
		function getFirst(father){
		 	return getChilds(father)[0];
		 }
		 function getLast(father){
			return getChilds(father)[getChilds(father).length-1];
		}
		Object.prototype.insertAfter=function (obj,after){
			if(after.nextSibling==null){//下一个兄弟节点不存在的话
				 this.appendChild(obj);//则新对象追加到最后
			}else{//下一个兄弟节点存在
				 this.insertBefore(obj,after.nextSibling);
				 //新对象添加到下一个兄弟节点的前面
			}
		}

		function getDown(obj){
			var next=obj.nextSibling;
			while(next.nodeType!=1){
			// while(next.nodeType!=1&&(next.nodeType!=3||next.nodeValue.replace(/^\s*|\s*$/g,"")=="")){
				next=next.nextSibling;
				if(next==null){
					return false;
				}
			}
			return next;
		}
		function getUp(obj){
			var pre=obj.previousSibling;
			while(pre.nodeType!=1){
				pre=pre.previousSibling;
			}
			if(pre==null){
					return false;
			}
			return pre;
		}

		

		//随滚动条变化的搜索框
		//srcollfix:搜索框主体
		//height:滚动条下滑的高度
		function fixedTop(srcollfix,height){
			var obj=document.documentElement.scrollTop?document.documentElement:document.body;
			if(obj.scrollTop>height){
				srcollfix.style.display="block";
			}if(obj.scrollTop<=height){
				srcollfix.style.display="none";
			}	
		}
		//页面漂浮广告
		//box:浮动主题
		//btn:关闭按钮
		//speedx与speedy  代表X轴移动速度和Y轴移动速度
		function floatwindow(box,btn,speedx,speedy){
			box.style.position="fixed";
			var t=setInterval(piao,50);
			var cheight=document.documentElement.clientHeight;//浏览器高度
			var cwidth=document.documentElement.clientWidth;//浏览器宽度
			var sheight=box.offsetHeight;//自身高度
			var swidth=box.offsetWidth;//自身宽度
			var sheepX=speedx||5;//X轴速度
			var sheepY=speedy||5;//Y轴速度
			//window.onload 文档加载完成事件
			//window.onscroll 窗口滚动条事件
			// window.onresize=function (){//窗口改变事件
			// 	cheight=document.documentElement.clientHeight;//浏览器高度
			// 	cwidth=document.documentElement.clientWidth;//浏览器宽度
			// }
			function piao(){
				cheight=document.documentElement.clientHeight;//浏览器高度
				cwidth=document.documentElement.clientWidth;//浏览器宽度
				var left=box.offsetLeft;//自身左边距
				var top=box.offsetTop;//自身上边距
				var newleft=left+sheepX;
				var newTop=top+sheepY;
				if(newTop<=0||newTop>=(cheight-sheight)){
					if(newTop>=(cheight-sheight)){
						newTop=cheight-sheight;
					}
					sheepY*=-1;
				}
				if(newleft<=0||newleft>=(cwidth-swidth)){
					if(newleft>=(cwidth-swidth)){
						newleft=cwidth-swidth;
					}
					sheepX*=-1;
				}
				box.style.left=newleft+"px";
				box.style.top=newTop+"px";
			}
			box.onmouseover=function (){
				clearInterval(t);
			}
			box.onmouseout=function (){
				t=setInterval(piao,50);
			}

			btn.onclick=function (){
				document.body.removeChild(box);
			}
		}


	// 同一事件添加多个事件处理程序
		function addEvent(obj,events,fun){
			if(obj.addEventListener){
				 obj.addEventListener(events,fun,false);
			}else{
				 obj.attachEvent("on"+events,fun);
			}
		}
			//阻止事件流
		function stopEvent(eve){
			if(eve.stopPropagation){
				eve.stopPropagation();
			}else{
				eve.cancelBubble=true;
			}
		}
		//阻止浏览器默认行为
		function stopClient(eve){
			if (eve.preventDefault){	
				eve.preventDefault();
			} //阻止默认浏览器动作(W3C)
			else{
				eve.returnValue = false;//IE中阻止函数器默认动作的方式 
			}
		}