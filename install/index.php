<?php 
if($_POST['codegenerate']):
$mysql_user = $_POST['mysql_user'];
$mysql_pass = $_POST['mysql_pass'];
$mysql_host = $_POST['mysql_host'];
$mysql_db = $_POST['mysql_db'];
$codedefined = 'true';
elseif($_POST['done']):
$done = 'true';
endif;
?>
<!DOCTYPE html>
<html>
<head>
<title>Hi, let's install Minima!</title>
<style>
body{
background-color: #7A003C;
text-align:center;
color: #fff;
}

a{
color:fff;
}
a:visited{
color:#fff;
}

.button, .button:hover, .button:focus{
background-color: #01ADF9;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
text-decoration:none;
-webkit-transition: 500ms linear 0s;
  -moz-transition: 500ms linear 0s;
	-o-transition: 500ms linear 0s;
	transition: 500ms linear 0s;
	outline: 0 none;
}

a, a:hover{
-webkit-transition: 500ms linear 0s;
	-moz-transition: 500ms linear 0s;
	-o-transition: 500ms linear 0s;
	transition: 500ms linear 0s;
	outline: 0 none;
}

.button:hover, .button:focus, a:hover{
color: #fff;
	text-shadow: -1px 1px 8px #ffc, 1px -1px 8px #fff;
}

.error, .button{
font-family: 'Raleway', sans-serif;
font-weight: 100;

}

input    {
width:250px;
border: 1px solid #999;
height: 25px;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
border: 1p solid #999;
}


</style>
</head>
<body>
<div class="thelogo">
<img src="../_class/mlogo.png" _title="Minima" alt="minima" />
</div>
<div class="error">
Hi, I'm here to help you with setting up Minima. You'll have to do some things yourself, but it won't be that hard. To start, enter your MySQL connection parameters.<br><br>





<h3>Step #1 - Enter your MySQL connection parameters.</h3>
<form name="codegenerate" method="post" value="index.php">
<input type="hidden" name="codegenerate" value="true" /><input type="text" name="mysql_user" id="mysql_user" placeholder="MySQL username" /><input type="text" name="mysql_pass" id="mysql_pass" placeholder="MySQL password (will be visible!)" /><input type="text" name="mysql_host" id="mysql_host" placeholder="MySQL server address (usually localhost)" /><input type="text" name="mysql_db" id="mysql_db" placeholder="MySQL database name" /><button type="sumbit" name="sumbit"  class="button" />Generate the code.</button></form>

<?php
if($_POST['codegenerate']):
echo "<p>Here's the code. <strong>Paste this in _class/db-conf.php overwriting the file.</strong><br><br><code>&lt;?php
&#36;obj = new modernCMS();<br>
 <br><br>
// Sets the database connection variables<br>
&#36;obj->host = '". $mysql_host ,"'; //change this<br>
&#36;obj->username = '". $mysql_user ,"'; //and this<br>
&#36;obj->password = '". $mysql_pass ,"'; // this, as well<br>
&#36;obj->db = '". $mysql_db ."'; // aaaand this<br>
 <br>
// connects to the database<br>
&#36;obj->connect();<br>
?></code>";
echo '<h3>Step 2 - Import the database layout</h3><br><p>Great. Now you\'ll need to import <a href="mysql-data.sql">this SQL file</a> into your database or run an SQL query on it with the query being the file content. To do this, Minima recommends PHPMyAdmin. (I can\'t help you with that, sorry) <br><br><form name="done" method="post" value="index.php">
<input type="hidden" name="done" value="true" />When you\'re done,  <button type="sumbit" name="sumbit"  class="button" />let me know.</button></form>';
elseif($_POST['done']): 
echo '<h3>Step 3 - There is no step 3</h3><br>Wow, that was fast! We\'re done here. <a href="../index.php">Visit your new site</a> or <a href="../admin/index.php">go to fancyadmin</a>.';
else:
echo "";
endif;
?>


</div>
<script>
if (document.createElement("detect").style.textShadow === "") {
	document.getElementsByTagName("html")[0].className += " textshadow";
}
</script>
</body>
</html>
