<?php
require_once('cmsBase.php');
class CmsApplication extends CmsBase {
  //Anything here will be accesible in main functionality of CMS
	function run(){

		if (isset($_REQUEST['task'])) {
			$task = $_REQUEST['task'];
			switch ($task) {
				case 'addcontent':
					$this->addcontent();
					break;
				case 'anyothertask':
					$this->anyothertask();
					break;
				default :
					$this->viewcontent();
					break;
			}
		} else {
			$this->viewcontent();
		}

	}
	function addcontent() {
		echo 'here add content functionality will takes palces';	
	}

	function viewcontent() {
		echo 'here view content functionality will takes place';
	}

	function anyothertask() {
		echo 'this is another task here can be written a complete php program against that task';
	}
}
