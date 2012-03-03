<!-- Anything Slider -->
<link rel="stylesheet" href="css/anythingslider.css">
<script src="js/jquery.anythingslider.min.js"></script>
<!--[if lte IE 7]>
	<link rel="stylesheet" href="css/anythingslider-ie.css" type="text/css" media="screen" />
<![endif]-->
<style>
#slider {
	margin-left:0;
	padding-left:0;
	height: 275px;
	width:700px;
}
</style>
<script type="text/javascript">
	$(document).ready(function(){
		// DOM Ready
		$(function(){
			$('#slider').anythingSlider({vertical:true,hashTags:false,buildArrows: false, buildNavigation: false, buildStartStop:false, autoPlay:true, delay:3500});
		});
	});
</script>
<div class="span-17 last">
	<div id="slider">
		<li id="slide_3" class="slide">
			<div class="description span-10">
				<h1><em>International</em> <br />
					companies <br />
					<em style="margin:0px">&amp;</em> universities</h1>
				<p>The international forum is the place to <strong>exchange about international matters</strong>.</p>
			</div>
			<div class="illustration span-7 last"> <img src="images/slides/debates.jpg" alt="debates" /> </div>
		</li>
		<li id="slide_2" class="slide">
			<div class="description span-10">
				<h1><em>Job fair</em> <br />
					&amp; interviews</h1>
				<p>establishing <strong>privileged relationship</strong> between students, universities and companies</p>
			</div>
			<div class="illustration span-7 last"> <img src="images/slides/debates.jpg" alt="debates" /> </div>
		</li>
		<li id="slide_1" class="slide">
			<div class="description span-10">
				<h1><em>Debates</em> <br />
					&amp; Workshops</h1>
				<p>a place where student, universities and companies will <strong>share</strong> about international topics</p>
			</div>
			<div class="illustration span-7 last"> <img src="images/slides/debates.jpg" alt="debates" /> </div>
		</li>

		
	</div>
</div>
