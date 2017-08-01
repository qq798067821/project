		//imgFile('.img');//调用方法 
		function imgFile(obj){
		$(obj).css({'overflow':'hidden'})	
		//获取传过来的照片	
		var ajaximg=[];
		//第一张后面的隐藏
		$(obj).find('i:gt(0)').hide();
		//到哪里移除I
		$(obj).find('i:gt(7)').remove()
		//照片数
		var mun=0;
		for(var i=0;i<$(obj).find('img').length;i++)
		{
			ajaximg.push($(obj).find('img').eq(i).attr('src'))
		}
		console.log('ajax',ajaximg)
		//上传的图片
		//var addimg=[];
		//删除的照片数组
		var delarr=[];
		//上传照片			

		$(obj).find('i input:file').on('change',function(){
			var ind=$(this).parent().index();
			$(this).parent().next().show(100)
			mun=$(obj).find('i').length;
			var objUrl = getObjectURL(this.files[0]);
			if (objUrl) {
				var img=$('<img src='+objUrl+'>')
				$(this).parent().append(img); 
			}				
		})			
			

					
			
		// 点击照片删除
			$(obj).find('i').click(function(){
				var mun=$(this).children().length;
				if(mun>1){
					for (var i=0;i<ajaximg.length;i++) {
						if(ajaximg[i]==$(this).find('img').attr('src'))
						{
							delarr.push($(this).find('img').attr('src'))//获取删除的ajax照片
							break;
						}
						
					}				
					$(this).find('img').remove();
					$(this).find('input:file').val(''); 
				}
			})
		
		
		//提交
		$('#tj').click(function(){
			console.log('删除的',delarr) 
		}) 
		
		function getObjectURL(file) {
			var url = null ; 
			if (window.createObjectURL!=undefined) { // basic
				url = window.createObjectURL(file) ;
			} else if (window.URL!=undefined) { // mozilla(firefox)
				url = window.URL.createObjectURL(file) ;
			} else if (window.webkitURL!=undefined) { // webkit or chrome
				url = window.webkitURL.createObjectURL(file) ; 
			} 
			return url ;
		}						
		}

		//上传照片	