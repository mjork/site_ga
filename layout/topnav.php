
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />

<ul id="MenuBar1" class="MenuBarHorizontal">
	<li class="first"><a href="index.php">Home</a></li>
	<li><a class="MenuBarItemSubmenu" href="#">You are ...</a>
		<ul>
			<li id="tab_co"><a href="companies.php">company</a></li>
			<li id="tab_un"><a href="universities.php">university</a></li>
			<li id="tab_st"><a href="students.php">student</a></li>
			<li id="tab_pr"><a href="press.php">press</a></li>
		</ul>
	</li>
	<li><a href="general_assembly.php">30th General Assembly</a></li>
	<li><a href="about_us.php">About us</a></li>
	<li class="last"><a href="contact.php">Contact</a></li>
</ul>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script> 
