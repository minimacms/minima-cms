<?php
include '_class/cms_class.php';
include '_class/db-conf.php';
include 'ant/addons/active.php';
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hi there.</title>
<?php
$obj->get_css();
?>

   </head>
   <body>

        
                    


      <div class="container">
      <?php include 'header.php' ?>
        
        </div>
                
                    
                    
            

  
            
        
        <div class="container">
        
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
      <div class="container">
     <?php include 'footer.php' ?>
    </div>

</body>
</html>
