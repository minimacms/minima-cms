<?php
include '../_class/cms_class.php';

include '../_class/db-conf.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UFT-8" />
<title>Update page -- Minima</title>
<link rel="stylesheet" href="../style.css" type="text/css">
<script src="../inc/ckeditor/ckeditor.js"></script>
</head>

<body>

<div id="page-wrap">

<h2> Update pages </h2>

<?=$obj->update_pages_form($_GET['id'])?>
<?php
include 'adminplugins.php';
?>
<a href="index.php">back to admin panel</a>
</body>
<html>
