<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/HTML; charset=ISO-8859-9" />
<title>Çıkış</title>
<link href="styles.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="page">
	
	<div id="cikis"> 
		<?php
			session_start();
			ob_start();
			session_destroy();
		 	echo '<span><p align="center"> Ana Sayfaya Yönlendiriliyorsunuz..</p></span>';
			header("Refresh: 2; url=index.php");
		?>
	</div>
	
</div>

</body>
</html>