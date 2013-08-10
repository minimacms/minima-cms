<?php

include '../_class/cms_class.php';

include '../_class/db-conf.php';

include '../_class/versiondata.php';

?>
<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-../stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Admin panel | Minima</title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="../stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="../stylesheets/foundation.min.css">
  <link rel="stylesheet" href="../stylesheets/app.css">


  <script src="../javascripts/modernizr.foundation.js"></script>

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
<script src="../inc/ckeditor/ckeditor.js"></script>
</head>
<body>

  <div class="row">
    <div class="twelve columns">
      <h2>Admin panel</h2>
   
      <hr />
    </div>
  </div>

    <div class="row">
    <div class="four columns">
      <?php
	if($_POST['add']):
		$obj->add_content($_POST);
	elseif($_POST['update']):
		$obj->update_content($_POST);
  elseif($_POST['ctheme']):
    $obj->update_theme($_POST);
  elseif($_POST['addpage']):
    $obj->add_pages($_POST);
  elseif($_POST['updatepage']):
    $obj->update_pages($_POST);
elseif($_POST['upsitename']):
    $obj->update_sitename($_POST);
elseif($_GET['delete']):
		$obj->delete_comment($_GET['delete']);
	
	endif;
?>
	   
	      <dl class="vertical tabs">
		<dd class="active"><a href="#dashboard">Dashboard</a></dd>
	 	<dd><a href="#posts">Posts</a></dd>
		<dd><a href="#pages">Pages</a></dd>
		<dd><a href="#comments">Comments</a></dd>
		<dd><a href="#settings">Settings</a></dd>
	      </dl>
	</div>
	<div class="eight columns">
      <ul class="tabs-content">
		 <li class="active" id="dashboardTab"><?php require_once 'inc/dashboard.php'; ?></li>
		 <li id="postsTab"><?php require_once 'inc/posts.php'; ?></li>
       		 <li id="commentsTab"><?php require_once 'inc/comments.php'; ?></li>
		 <li id="settingsTab"><?php require_once 'inc/settings.php'; ?></li>
     		 <li id="pagesTab"><?php require_once 'inc/pages.php'; ?></li>
	</ul>
      
      
      
     	</div>
     </div>


  
  
  
  
  <!-- Included JS Files (Compressed) -->
  <script src="../javascripts/jquery.js"></script>
  <script src="../javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="../javascripts/app.js"></script>
</body>
</html>






