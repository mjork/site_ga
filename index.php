<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>International Student Forum | BEST</title>

<?php include("js/head_loader.php");?>
<?php include("css/index_style.php");?>
</head>



<body>
<?php include('layout/header.php');?>
<div id="spotlight" class="total">
	<div class="container">
		<div id="buttons" class="span-7">
			<ul>
				<li id="companies"><a href="companies.php">
					<div class="button">Companies</div>
					</a> </li>
				<li id="universities"><a href="universities.php">
					<div class="button">Universities</div>
					</a></li>
				<li id="students"><a href="students.php">
					<div class="button">Students</div>
					</a></li>
				<li id="medias"><a href="press.php">
					<div class="button">Press</div>
					</a></li>
			</ul>

		</div>
		<?php include('layout/slider.php');?>
		<hr class="space" />
	</div>
</div>
<div id="content" class="total">
	<div class="container">
		<div class="span-6">
			<?php include('boites/our_organisation.php');?>
			<?php include('boites/our_supporters.php');?>
		</div>
		<div class="span-12">
			<?php include('boites/news.php');?>
		</div>
		<div class="span-6 last">
			<?php //include('boites/follow_us.php');?>
			<?php include('boites/co_useful_infos.php');?>
			
		</div>
	</div>
</div>
<?php include('layout/footer.php');?>
</body>


</html>
