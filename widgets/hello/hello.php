<?php
require_once('includes/cmsWidget.php');         
class HelloWidget extends CmsWidget{ 
	
	function display()
	{
		echo "Welcome to My World!";
	}
}
?>
