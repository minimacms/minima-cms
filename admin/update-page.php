<?php
include '../_class/cms_class.php';

include '../_class/db-conf.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UFT-8" />
<title>Minima 1.1</title>
<link rel="stylesheet" href="../style.css" type="text/css">
</head>

<body>

<div id="page-wrap">

<h2> Update pages </h2>

<?=$obj->update_pages_form($_GET['id'])?>
<?php
include 'adminplugins.php';
?>
</body>
<html>
