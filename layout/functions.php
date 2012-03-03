
<?php 

	function topnav_activity($var){
		global $topnav_active;
		// demande que topnav_active soit initialisée
		if ($var == $topnav_active) {
			echo "active";
		} else {
			echo "";
		}
	}
	





?>