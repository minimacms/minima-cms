<?php
include '_class/cms_class.php';
include '_class/db-conf.php';
include 'ant/addons/active.php';
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
<title><?php $obj->get_sitename(); ?></title>
 <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="stylesheets/foundation.min.css">
  <link rel="stylesheet" href="stylesheets/app.css">

  <script src="javascripts/modernizr.foundation.js"></script>

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

<script src="inc/ckeditor/ckeditor.js"></script>

   </head>
   <body>

        
                    <div class="row">
    <div class="twelve columns">
<div class="row">
  <div class="twelve columns">
    <nav class="top-bar">
      <ul>
        <!-- Title Area -->
        <li class="name">
          <h1>
            <a href="index.php">
              <?php $obj->get_sitename(); ?>
            </a>
          </h1>
        </li>
        <li class="toggle-topbar"><a href="index.php"></a></li>
      </ul>

      <section>
        <!-- Right Nav Section -->
        <ul class="right">
          
        <?php $obj->list_pages(); ?>
</ul>
         </section>
    </nav>
  </div>
</div>

       
                    
</div>
</div>
            

   <div class="row">
    <div class="twelve columns">
            
        
    
        
         <?php
  if(isset($_GET['id'])):
    $obj->read_content($_GET['id']);
  elseif(isset($_GET['pg'])):
    $obj->get_pages($_GET['pg']);
  else:
    $obj->get_content();
  endif;
?>
</div>
</div>
    




<?php
	if($_POST['comm']):
		$obj->add_comment($_POST);
	
	endif;
?>


  <!-- Included JS Files (Compressed) -->
  <script src="javascripts/jquery.js"></script>
  <script src="javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="javascripts/app.js"></script>

</body>
</html>
