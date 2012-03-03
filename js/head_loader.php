

<link rel="shortcut icon" href="http://best.eu.org/favicon.ico" type="image/vnd.microsoft.icon" />


<!-- loading of Blueprint CSS framework -->
<link rel="stylesheet" href="css/blueprint/screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="css/blueprint/print.css" type="text/css" media="print">
<!--[if IE]>
<link rel="stylesheet" href="css/blueprint/ie.css" type="text/css"
media="screen, projection">
<![endif]-->


<!-- loading of Open Sans font -->

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'> 

<!-- chargement de Jquery 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" ></script> -->
<script type="text/javascript" src="js/jquery-1.6.2.js" ></script>
<!-- chargement de Jquery UI -->
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.5.3/jquery-ui.min.js" ></script>-->


<!-- loading lightbox effect -->
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />

<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
	  //sert à l'affichage de iframes pour les videos youtube de la boite they_trusted_us.php
    		$(".video").fancybox({
				'width'				: '75%',
				'height'			: '75%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});
			$(".cv_access").fancybox({
				maxWidth	: 800,
				maxHeight	: 600,
				fitToView	: false,
				width		: '70%',
				height		: '70%',
				autoSize	: false,
				closeClick	: false,
				openEffect	: 'none',
				closeEffect	: 'none'
			});
			
	
  });
</script>

<!-- loading three dots effect -->
<script type="text/javascript" src="js/jquery.ThreeDots.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		// limite un contenu à des dimensions fixes et introduit trois petits points ...
		// sert pour les adresses mail trop longues et les teasers de news
		$('.mail').ThreeDots({max_rows: 1, whole_word: false});
		$('.news p').ThreeDots({max_rows: 2, whole_word: true});
	});
</script>