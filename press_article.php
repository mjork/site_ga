<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>International Student Forum | BEST</title>
<?php include("js/head_loader.php");?>
<?php include("css/article_style.php");?>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include('layout/header.php');?>
<div id="spotlight" class="total">
	<div class="container press">
		<div class="span-24">
			<?php 
				$link = 'articles/'.$_GET['id'].'.title.php';
				include($link); 		
			?>
		</div>
	</div>
</div>
<div id="content" class="total">
	<div class="container press">
		<div id="localnav" class="span-24 last">
			<?php 
				$link = 'localnav/'.substr($_GET['id'], 0, 2).'.nav.php';
				include($link);
			?>
			<script type="text/javascript">
				// coloration de l'onglet actif dans localnav
				$("#localnav li:eq(<?php echo substr($_GET['id'], 2, 3); ?>)").addClass("active");	
			</script> 
		</div>
		<div id="article">
			<?php 
				$link = 'articles/'.$_GET['id'].'.content.'.$_GET['release'].'.php';
				include($link);
			?>
			<script type="text/javascript">
				// distributions des id #s0, #s1, #s2 ...
				$('#article .section').each(function(index){
					$(this).attr('id', "s" + index);
				});	
			</script> 
		</div>

	</div>
<?php include('layout/footer.php');?>
</div>

</body>
</html>
