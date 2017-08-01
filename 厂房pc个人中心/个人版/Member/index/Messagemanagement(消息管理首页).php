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
	<link rel="stylesheet" type="text/css" href="../css/M_m.css"/>
	<script src="../../../js/jquery.min.js" type="text/javascript" charset="utf-8"></script> 
	<body>
		<?php include '../../y_head/y_head.php' ?>
		<div class="all">
			<div class="Menber alls">
				<?php include '../y_M_L.php' ?>
				<?php include '../M_m_index(消息管理首页).php' ?> 	  
				<div class=" clear"></div><!--清除浮动-->        
			</div>  
		</div>
		<?php include '../../y_foot/y_foot.php' ?>
	</body> 
</html>
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
	
$('.rm_x span').click(function(){
	$('.y_m_r .m_r_c').eq(1).show().siblings().hide();
})				
})
</script>