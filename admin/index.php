<?php

include '../_class/cms_class.php';

include '../_class/db-conf.php';

include '../_class/versiondata.php';

include 'adminplugins.php';
?>
<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
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
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="../ant/themes/foundation/stylesheets/foundation.min.css">
  <link rel="stylesheet" href="../ant/themes/foundation/stylesheets/app.css">

  <script src="../ant/themes/foundation/javascripts/modernizr.foundation.js"></script>

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>
<body>

  <div class="row">
    <div class="twelve columns">
      <h2>Admin panel</h2>
      <p>This is version <strong><?php echo $ver; ?></strong> codenamed <?php echo $codename; ?>. <a href="<?php echo $chup; ?>">Check for updates</a></p>
      <hr />
    </div>
  </div>

    <div class="row">
    <div class="twelve columns">
      
   
      <dl class="tabs">
        <dd class="active"><a href="#addcontent">Add content</a></dd>
        <dd><a href="#simple2">Add a page</a></dd>
<dd><a href="#simple4">Content</a></dd>
<dd><a href="#simple5">Pages</a></dd>
<dd><a href="#simple6">Manage pages</a></dd>
        <dd><a href="#simple3">Change the theme</a></dd>
      </dl>

      <ul class="tabs-content">
        <li class="active" id="addcontentTab"><form method="post" action="index.php">
<input type="hidden" name="add" value="true" />
	<div id="page-wrap">
<label for="title">Title:</label>
<input type="text" name="title" id="title" />
	</div>
	
	<div id="page-wrap">
	
<label for="body">Body:</label>
<textarea name="body" id="editor1" rows="15" cols="48"> </textarea>
<?php
include 'adminplugins.php';
?>
	</div>


<div id="page-wrap">
<label for="author">Author:</label>
<input type="text" name="author" id="author" />
</div>
<div id="page-wrap">
<input type="submit" name="sumbit" class="button" value="Publish" />

</form></li>
        <li id="simple2Tab"><form method="post" action="index.php">
<input type="hidden" name="addpage" value="true" />
  <div id="page-wrap">
<label for="title">Title:</label>
<input type="text" name="title" id="title" />
  </div>
  
  <div id="page-wrap">
  
<label for="body">Body:</label>
<textarea name="body" id="body" rows="15" cols="48"> </textarea>
  </div>
<?php
include 'adminplugins.php';
?>

<div id="page-wrap">
<label for="author">Author:</label>
<input type="text" name="author" id="author" />
</div>
<div id="page-wrap">
<input type="submit" class="button" name="sumbit" value="Publish" />

</form></li>
        <li id="simple3Tab"><?=$obj->update_theme_form($_GET['id'])?></li>
      <li id="simple4Tab"><?=$obj->manage_content()?></li>
<li id="simple5Tab"><?=$obj->list_pages()?></li>
<li id="simple6Tab"><?=$obj->manage_pages()?></li>
      </ul>
      
      
      
     </div>
</div>


  
  
  
  <!-- Included JS Files (Uncompressed) -->
 
  
  <script src="../ant/themes/foundation/javascripts/jquery.js"></script>
  
  <script src="../ant/themes/foundation/javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  
  <script src="../ant/themes/foundation/javascripts/jquery.foundation.forms.js"></script>
  
  <script src="../ant/themes/foundation/javascripts/jquery.foundation.reveal.js"></script>
  
  <script src="../ant/themes/foundation/javascripts/jquery.foundation.orbit.js"></script>
  
  <script src="../ant/themes/foundation/javascripts/jquery.foundation.navigation.js"></script>
  
  <script src="../ant/themes/foundation/javascripts/jquery.foundation.buttons.js"></script>
  
  <script src="../ant/themes/foundation/javascripts/jquery.foundation.tabs.js"></script>
  
  <script src="../ant/themes/foundation/javascripts/jquery.foundation.tooltips.js"></script>
  
  <script src="../ant/themes/foundation/javascripts/jquery.foundation.accordion.js"></script>
  
  <script src="../ant/themes/foundation/javascripts/jquery.placeholder.js"></script>
  
  <script src="../ant/themes/foundation/javascripts/jquery.foundation.alerts.js"></script>
  
  <script src="../ant/themes/foundation/javascripts/jquery.foundation.topbar.js"></script>
  

  
  <!-- Included JS Files (Compressed) -->
  <script src="../ant/themes/foundation/javascripts/jquery.js"></script>
  <script src="../ant/themes/foundation/javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="../ant/themes/foundation/javascripts/app.js"></script>
</body>
</html>

<!--

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
	endif;
?>

--!>

