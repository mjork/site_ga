<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Students - International Student Forum | BEST</title>
<?php include("js/head_loader.php");?>
<?php include("css/subindex_style.php");?>
</head>
<body>
<?php include('layout/header.php');?>
<div id="spotlight" class="total">
	<div class="container students">
		<div class="youare student">you are a</div>
		<h1 class="span-24 youare last">student</h1>
		<hr class="space" />
		<div class="span-6 block">
			<h2><span class="impact">Exchange</span> with international entities</h2>
			<p>The International Student Forum is an outstanding opportunity to exchange companies and universities.</p>
		</div>
		<div class="span-6 block">
			<h2><span class="impact">Seize</span> international opportunities</h2>
			<p>Find offers about studies, internships and jobs with international aspects</p>
		</div>
		<div class="span-6 block">
			<h2><span class="impact">Get ready</span> for your international experience</h2>
			<p>Upload your CV and make it browsable by international companies and univerisites</p>
		</div>
		<div class="span-6 bottom_button last" style="padding-top:80px"> <a href="cv.php" class="button rounded">Register &amp; upload your CV</a> </div>
		<hr class="space"/>
	</div>
</div>
<div id="content" class="total">
	<div class="container">
		<div id="checkout" class="span-8 application_process">
			<div class="span-2 icon"><img src="images/layout/st_03.png" alt="" /> </div>
			<div class="span-6 last"><span class="impact">Check out</span> <p> the participating companies and universities</p></div>
		</div>
		<div id="register" class="span-8 application_process">
			<div class="span-2 icon"><img src="images/layout/st_10.png" alt="" /> </div>
			<div class="span-6 last"><span class="impact">Register</span> <p>&amp; upload your CV online</p></div>
		</div>
		<div id="checkin" class="span-8 application_process last">
			<div class="span-2 icon"><img src="images/layout/st_07.png" alt="" /> </div>
			<div class="span-6 last"><span class="impact">Check in</span> <p>for the activites you want to take part in</p></div>
		</div>
		
		<script type="text/javascript">
			$(function() {
				var i = 0;
				  function lightplease ()
				  {
						$(".application_process:eq("+((i-1)%3)+")").removeClass("active");
						$(".application_process:eq("+(i%3)+")").addClass("active");
						i++;
						window.setTimeout(lightplease, 1000);	
				  }
				$(document).ready(function(){
					lightplease();	
				});
			});
		</script>
		
		<div class="span-16" style="margin-top:-30px">
				<?php include('boites/st_who_is_involved.php');?>
		</div>
		<div class="span-8 last" style="margin-top:-30px;">
			<?php include('boites/follow_us.php');?>
			<hr class="space"/>
			<?php include('boites/st_program.php');?>
			<?php include('boites/st_useful_infos.php');?>
		</div>
		<hr class="space"/>


	</div>

</div>
<?php include('layout/footer.php');?>
</body>
</html>
