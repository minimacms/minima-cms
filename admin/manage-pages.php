<?php
include '../_class/cms_class.php';

include '../_class/db-conf.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UFT-8" />
<title>Minima 1.1</title>
<link rel="stylesheet" href="../style.css" type="text/css">
<?php
include 'adminplugins.php';
?>
</head>

<body>

<div id="container">
<h1>Manage content</h1>
<?php
	if($_GET['deletepage']):
		$obj->delete_pages($_GET['deletepage']);
	endif;
?>

<?=$obj->manage_pages()?>


</body>
<html>
