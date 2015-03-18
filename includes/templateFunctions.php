<?php
require_once('cmsBase.php');     
class TemplateFunctions extends CmsBase{         
  var $templateName = 'default';

  function show() //akan menampilkan template.php
  {
  	require_once($this->getCurrentTemplatePath().'template.php');
  }

  function getCurrentTemplatePath()
  {
  	//untuk mendapatkan nama folder tempat menyimpan template.php
  	return 'templates/'.$this->templateName.'/';
  }

  function setTemplate($templateName)
  {
  	$this->templateName = $templateName;
  }

  function appOutput()
  {
  	require_once('includes/cmsApplication.php');
  	$app = new CmsApplication();
  	$app->run();
  }
}


//tanda petik dua akan mencetak isi variabel, namun tanda petik satu akan mencetak apa adanya
//setiap var lokal yang diatur dalam kelas yang sama, harus diawali dengan $this
//nama folder harus sama dengan nama file template

?>