<?php
include '../_class/cms_class.php';
include '../_class/db-conf.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UFT-8" />
<title>/admin</title>
<link rel="stylesheet" href="../style.css" type="text/css">
<link rel="stylesheet" type="text/css" href="../demo.css" media="screen" />

</head>
<body>

<div id="main">
  <div class="container">
    <h1>/admin</h1>
    </div>
    
    <div class="container">
<?php
      $obj->list_pages();
  ?>
  </div>
    
  <div class="container tutorial-info">
<?php
include '../footer.php'
?>
    </div>
</div>
</body>
</html>