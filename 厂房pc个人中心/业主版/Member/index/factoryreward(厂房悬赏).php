<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<link rel="stylesheet" type="text/css" href="../css/css.css"/>
	<link rel="stylesheet" type="text/css" href="../css/Menber.css"/> 
	<link rel="stylesheet" type="text/css" href="../../../font/iconfont.css"/>
	<link rel="stylesheet" type="text/css" href="../css/integral.css"/>
	<link rel="stylesheet" type="text/css" href="../css/rm.css"/> 
	<link rel="stylesheet" type="text/css" href="../css/f_lease.css"/> 
	<link rel="stylesheet" type="text/css" href="../css/p_i.css"/>
	<script src="../../../js/jquery.min.js" type="text/javascript" charset="utf-8"></script> 
	
	<style type="text/css">
		#tab > a{
			display: inline-block;
			padding: 15px 10px;
			margin-bottom: -10px;
		}
		#tab > a:nth-child(1){
			border-bottom: 2px solid #725BDE;
		}	
	</style>
	<body>
		<?php include '../../y_head/y_head.php' ?>
		<div class="all">
			<div class="Menber alls">
				<?php include '../y_M_L.php' ?>
				<?php include '../cf_R.php' ?>	  
				<div class=" clear"></div><!--清除浮动-->        
			</div>  
		</div>
		<?php include '../../y_foot/y_foot.php' ?>
	</body> 
	<script type="text/javascript">
		$(function(){
		//全选按钮
			$('.boos').change(function(){
				if($(this).prop('checked')) 
				{
					$('input[type=checkbox] ').prop('checked',true)
				}else{
					$('input:checkbox').prop('checked',false)
				}
			})
			
		//验证
		$('#tj').click(function(){
			var keys=true;
			//悬赏金额
			if($('#money').val()=='')
			{
				keys=false
				$('#money').parent().find('.ts').css({'display':'inline-block'})				
			}else{
				$('#money').parent().find('.ts').css({'display':'none'}); 					
			}			
			
			//地址没选
			var selelen=$('#address select').length//select数量 
			for(var i=0;i<selelen;i++)
			{
				if($('#address select').eq(i).find('option:selected').val()=='')
				{
					keys=false;
					$('#address select').parent().find('.ts').css({'display':'block'});
				}else{
					$('#address select').parent().find('.ts').css({'display':'none'}); 
					
				}
			}
			
			//区域
			var selelen=$('#region select').length//select数量
			for(var i=0;i<selelen;i++)
			{
				if($('#region select').eq(i).find('option:selected').val()=='')
				{
					keys=false;
					$('#region select').parent().find('.ts').css({'display':'block'});
					
				}else{
					$('#region select').parent().find('.ts').css({'display':'none'}); 
				}
			}
			
			//价格
			if($('#price').val()=='')
			{
				keys=false
				$('#price').parent().find('.ts').css({'display':'inline-block'})				
			}else{
				$('#price').parent().find('.ts').css({'display':'none'}); 			
			}						
	
			//具体位置
			if($('#position').val()=='')
			{
				keys=false
				$('#position').next().css({'display':'inline-block'})				
			}else{
				$('#position').next().css({'display':'none'}); 
							
			}
			
			
			//标题没写
			if($('#title').val()=='')
			{
				keys=false
				$('#title').next().css({'display':'inline-block'})
			}else{
				$('#title').next().css({'display':'none'});
				
			}
			//联系人没填
			if($('#contacts').val()=='')
			{
				keys=false
				$('#contacts').next().css({'display':'inline-block'})
			}else{
				$('#contacts').next().css({'display':'none'});
				
			}
			
			//电话没填
			if($('#tel').val()=='')
			{
				keys=false
				$('#tel').next().css({'display':'inline-block'})
			}else{
				$('#tel').next().css({'display':'none'}) 
			}
			
			
			
			if(keys)
			{
				var h=$(document).height(); 
				$('#mt').css({'min-height':h});
				$('#mt').show();//模态框
				$('.lod').show();//等待图标
			}else{
				//ajax提交在里面写
			}
		})		
		
						
		})
		
		
	</script>
</html>