<html>
<head>
	<title>Ini adalah default template CMS saya</title>
	<link type='text/css' rel='stylesheet' href='<?php echo $this->
  		getCurrentTemplatePath(); ?>css/style.css' />
</head>
<body>
<div class="wrapper">
	<div class="header">.::ARYANI::.</div>
	<div class='clear'></div>
	<div class="sidebar">Ini adalah sidebar<br>
	</div>
	<div class="content">
		<?php echo $this->appOutput(); ?>
	</div>
	<div class="clear"></div>
	<div class="footer">Ini adalah footer</div>
</div>
</body>
</html>