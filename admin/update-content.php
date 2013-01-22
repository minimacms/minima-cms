<?php
include '../_class/cms_class.php';

include '../_class/db-conf.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UFT-8" />
<title>Modern - CMS for modern stuff</title>
<link rel="stylesheet" href="../style.css" type="text/css">
<?php
include 'adminplugins.php';
?>
</head>

<body>

<div id="page-wrap">

<h2> Update content </h2>

<?=$obj->update_content_form($_GET['id'])?>
<?php
include 'adminplugins.php';
?>
</body>
<html>
