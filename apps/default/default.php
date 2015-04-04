<?php
require_once('includes/cmsApplication.php');
class DefaultApplication extends CmsApplication {
	function addcontent() {
		echo 'here add content functionality will takes palces';	
	}

	function display() { //rename from viewcontent, merupakan override function
		echo 'tampilan dari fungsi display() dalam CmsApplication';
	}

	function anyothertask() {
		echo 'this is another task here can be written a complete php program against that task';
	}
}
?>