<?php
//    header("Content-Type: text/css");
	/*******************************
	******     DEBUG    ************
	*******************************/
	$userdata['style'] = 'default';
	function style($file) {
		print '<link rel="stylesheet" href="system/application/sources/styles/'.$file.'" type="text/css" media="screen" />'."\n";
	} // end style

	if(is_file($userdata['style'].'/structural.css.php'))	style($userdata['style'].'/structural.css.php');//echo '@import url('.$userdata['style'].'/structural.css.php)'."\n";
	if(is_file($userdata['style'].'/visual.css.php'))	style($userdata['style'].'/visual.css.php');//echo '@import url('.$userdata['style'].'/visual.css.php)'."\n";
	if(is_file($userdata['style'].'/custom.css.php'))	style($userdata['style'].'/custom.css.php');//echo '@import url('.$userdata['style'].'/custom.css.php)'."\n";
?>
