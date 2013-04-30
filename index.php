<?php
include '_class/cms_class.php';
include '_class/db-conf.php';
include 'ant/addons/active.php';
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php $obj->get_sitename(); ?></title>
<?php
$obj->get_css();
?>

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
    


<!--

<?php
	if($_POST['comm']):
		$obj->add_comment($_POST);
	
	endif;
?>

--!>
</body>
</html>
