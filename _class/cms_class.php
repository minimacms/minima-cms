<?php

class modernCMS {

	var $host;
	var $username;
	var $password;
	var $db;

	function connect() {
		$con = mysql_connect($this->host, $this->username, $this->password) or die('<h1>Oops.</h1>Something bad has happened.<br><a href="install/index.php">Run the installer?</a>');
		mysql_select_db($this->db, $con) or die('<h1>Oops.</h1>Something bad has happened.<br><a href="install/index.php">Run the installer?</a>');
	}

	function get_content($id = '') {
// gets the list of content
		if($id != ''):
			$id = mysql_real_escape_string($id);
			$sql = "SELECT * FROM cms_content WHERE id = '$id'";

$return = '<p><a href="index.php">home</a></p>';

		else:
			$sql = "SELECT * FROM cms_content ORDER BY id DESC";
		endif;



		$res = mysql_query($sql) or die(mysql_error());

		if(mysql_num_rows($res) !=0):
		while($row = mysql_fetch_assoc($res)) {
                        			echo '<h1 class="title"> <a href="?id=' . $row['id'] , '">'  . $row['title'] .  '</a></h1 >';
                        echo '<p class="meta"><span class="posted">Published by: ' .$row['author'] . '</span></p>';
                        echo '<div style="clear: both;">&nbsp;</div><hr>';
                      
                       
		}
		else:
			echo "<h1> Oops, this doesn't exist.</h1> Are you lost?</p>";
		endif;

	
}

function get_sitename($id = '') {
// gets the sitename

			$sql = "SELECT * FROM settings WHERE name = 'sitename'";
		
		$res = mysql_query($sql) or die(mysql_error());

		if(mysql_num_rows($res) !=0):
		while($row = mysql_fetch_assoc($res)) {
                        			echo $row['value'];
                      
                       
		}
		else:
			echo "(sitename not set?!)";
		endif;

	
}

	function read_content($id = '') {
//
		if($id != ''):
			$id = mysql_real_escape_string($id);
			$sql = "SELECT * FROM cms_content WHERE id = '$id'";

$return = '';

		else:
			$sql = "SELECT * FROM cms_content ORDER BY id DESC";
		endif;



		$res = mysql_query($sql) or die(mysql_error());

		if(mysql_num_rows($res) !=0):
		while($row = mysql_fetch_assoc($res)) {
                        			echo '<h1 class="title"> <a href="?id=' . $row['id'] , '">'  . $row['title'] .  '</a></h1>';
                        echo '<p class="meta"><span class="posted">Posted by: ' .$row['author'] . '</span></p>';
                        echo '<div style="clear: both;">&nbsp;</div>';
echo '<p>' . $row['body'] , '</p> ';
			                        echo '<p class="links"><a href="?id=' . $row['id'] , '">Permalink </a></p></div><hr><h5>Comments</h5>';
			                        
			                        echo '</div></div></div><div class="row"><div class="four colums"><h5>Add your comment.</h5><form method="post" action="index.php">
<input type="hidden" name="comm" value="true" />
<input type="hidden" name="postid" value="' .$row['id'], '">

<label for="commauth">Your name?</label>
<input type="text" name="commauth" id="commauth" />
	
	<label for="commemail">And your email? (will not be published)</label>
<input type="text" name="commemail" id="commemail" />

	
<label for="body">And your comment?</label>
<textarea name="commbody" id="editor1" rows="3" cols="25"> </textarea>





<input type="submit" name="sumbit" class="button" value="Add" />

</form></div><div class="seven columns">';
echo '';
			$postid = mysql_real_escape_string($postid);
						$commid = mysql_real_escape_string($commid);
$commsql = "SELECT * FROM comments WHERE postid = '$id'";
		$gc = mysql_query($commsql) or die(mysql_error());
if(mysql_num_rows($gc) !=0):
		while($row = mysql_fetch_assoc($gc)) {

echo '<div class="comment"><i class="comment-author">' .$row['commauth'], ' wrote: </i><p class="comment-body">' .$row['commbody'], '</p>';


}
 
		else:
			echo "<h5><strong>No comments yet.</strong></h5>";
		endif;

                      
                       
		}
		else:
			echo "<h1> Oops, this doesn't exist. </h1> Are you lost?</p>";
		endif;
echo $return;
	
}


function add_comment($p) {
	$postid = mysql_real_escape_string($p['postid']);
	        $commauth = mysql_real_escape_string($p['commauth']);
	                $commemail = mysql_real_escape_string($p['commemail']);
	$commbody = mysql_real_escape_string($p['commbody']);




	if(!$postid|| !$commbody|| !$commauth || !$commemail):
echo '<p>Something is missing.</p>' ;
		
	
	else:
	
	$sql = "INSERT INTO comments VALUES (null, '$postid', '$commauth', '$commemail', '$commbody')";
	$res = mysql_query($sql) or die(mysql_error());
	echo 'Your comment has been added.';

	endif;
	

echo $return;
}
	function manage_content($id = '') {
	echo '<div id="manage">';
	$sql = "SELECT * FROM cms_content ";
	$res = mysql_query($sql) or die(mysql_error());
	while($row = mysql_fetch_assoc($res)) :
	?>

	<div>
	<h2 class="title"><?=$row['title']?></h2>
	<span class="actions"><a href="update-content.php?id=<?=$row['id']; ?>">Edit</a> | <a href="manage-content.php?delete=<?=$row['id']; ?>">Delete</a></span>
	</div>
	<?php
		endwhile;
		echo '</div>'; // Closes the manage div

	
	}


	function delete_content($id) {
		if(!$id) {
			return false;
		
		}else {
		$id = mysql_real_escape_string($id);
		$sql = "DELETE FROM cms_content WHERE id = '$id'";
		$res = mysql_query($sql) or die(mysql_error());
		echo 'Deleted.';
}
		
	}
function manage_comments($id = '') {
	echo '<div id="manage">';
	$sql = "SELECT * FROM comments ORDER BY commid DESC";
	$res = mysql_query($sql) or die(mysql_error());
	while($row = mysql_fetch_assoc($res)) :
	?>

	<div>
	<?=$row['commbody']?> <em>by <?=$row['commauth']?></em><br>
	<span class="actions"><a href="index.php?delete=<?=$row['commid']; ?>">Delete</a></span>
	</div>
	<?php
		endwhile;
		echo '</div>'; // Closes the manage div

	
	}


	function delete_comment($commid) {
		if(!$commid) {
			return false;
		
		}else {
		$commid = mysql_real_escape_string($commid);
		$sql = "DELETE FROM comments WHERE commid = '$commid'";
		$res = mysql_query($sql) or die(mysql_error());
		echo 'Deleted.';
}
		
	}
	
function update_content_form($id) {	
	$id = mysql_real_escape_string($id);
	$sql = "SELECT * FROM cms_content WHERE id= '$id'";
	$res = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($res);
?>
<form method="post" action="index.php">
<input type="hidden" name="update" value="true" />
<input type="hidden" name="id" value="<?=$row['id']?>" />	
	<div>
<label for="title">Title:</label>
<input type="text" name="title" id="title" value="<?=$row['title']?>" />
	</div>
	
	<div>
<label for="body">Text:</label>
<textarea name="body" id="body" rows="8" cols="48" ><?=$row['body']?> </textarea>
	</div>
<input type="submit" name="sumbit" value="Update" />
</form>
<?php	

	}

	function update_content($p) {
	$title = mysql_real_escape_string($p['title']);
	$body = mysql_real_escape_string($p['body']);
	$id = mysql_real_escape_string($p['id']);

	if(!$title || !$body):
echo '<p>Something is missing, or you are trying to edit a post that does not exist. <a href="update-content.php?id='.    $id    .'"> Either way, try  again. </a> </p>' ;
		
	
	else:
	
	$sql = "UPDATE cms_content SET title = '$title', body= '$body'  WHERE id = '$id'";
	$res = mysql_query($sql) or die(mysql_error());
	echo 'Updated.';

	endif;
		
	}
	function get_css($id = '') {
		if($id != ''):
			$id = mysql_real_escape_string($id);
			$sql = "SELECT * FROM defaulttheme WHERE id = '$id'";

$return = '<p><a href="index.php">home</a></p>';

		else:
			$sql = "SELECT * FROM defaulttheme ORDER BY id DESC";
		endif;



		$res = mysql_query($sql) or die(mysql_error());

		if(mysql_num_rows($res) !=0):
		while($row = mysql_fetch_assoc($res)) {
                        			echo $row['inc'];
                       
                       
		}
		else:
			echo "<h1> Sorry, Minima can't load this page.</h1> No default theme was found. Sorry for that.</p>";
		endif;

	
}
	function update_theme_form($id) {	
	$id = mysql_real_escape_string($id);
	$sql = "SELECT * FROM defaulttheme WHERE id= '$id'";
	$res = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($res);
?>
<form method="post" action="index.php">
<input type="hidden" name="ctheme" value="true" />
<input type="hidden" name="id" value="2" />	
	<div>
<label for="inc">The theme header:</label>
<textarea name="inc" id="inc"><?=$row['inc']?></textarea>
	</div>
	
	<div>
<input type="submit" name="sumbit" class="button" value="Change" />
</form>
<?php	

	}



	function update_theme($p) {
	$inc = mysql_real_escape_string($p['inc']);
	$id = mysql_real_escape_string($p['id']);

	if(!$inc):
echo '<p>You *really* need to enter the code. <a href="ctheme.php?id='.    $id    .'"> But ok, take another try. </a> </p>' ;
		
	
	else:
	
	$sql = "UPDATE defaulttheme SET inc = '$inc' WHERE id = '2'";
	$res = mysql_query($sql) or die(mysql_error());
	echo 'Great! That worked. The default theme has been set.';

	endif;
		
	}
function update_sitename_form($id) {	
	$id = mysql_real_escape_string($id);
	$sql = "SELECT * FROM settings WHERE id = '1'";
	$res = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($res);
?>
<form method="post" action="index.php">
<input type="hidden" name="upsitename" value="true" />
<input type="hidden" name="id" value="1" />	
	<div>
<label for="value">Sitename:</label>
<input type="text" name="value" id="value" value="<?=$row['value']?>" />
	</div>
	
<input type="submit" name="sumbit" class="button" value="Change" />
</form>
<?php	

	}

	function update_sitename($p) {
	$id = mysql_real_escape_string($p['id']);
	$value = mysql_real_escape_string($p['value']);

	$sql = "UPDATE settings SET name = 'sitename', value = '$value'  WHERE id = '$id'";
	$res = mysql_query($sql) or die(mysql_error());
	echo 'Updated.';


		
	}
	
function get_pages($id = '') {
		if($id != ''):
			$id = mysql_real_escape_string($id);
			$sql = "SELECT * FROM pages WHERE id = '$id'";

$return = '<p><a href="index.php">home</a></p>';

		else:
			$sql = "SELECT * FROM pages ORDER BY id DESC";
		endif;



		$res = mysql_query($sql) or die(mysql_error());

		if(mysql_num_rows($res) !=0):
		while($row = mysql_fetch_assoc($res)) {
                        			echo '<h1 class="title"> <a href="index.php?pg=' . $row['id'] , '">'  . $row['title'] .  '</a></h1>';
                        echo '<p class="meta"><span class="posted">Published by: ' .$row['author'] . '</span></p>';
echo '<p>' . $row['body'] , '</p> ';
                        echo '<div style="clear: both;">&nbsp;</div>';
                        echo '<p class="links"><a href="index.php?pg=' . $row['id'] , '">Permalink</p>';
                       
		}
		else:
			echo "<h1> Oops, this doesn't exist.</h1> Are you lost?</p>";
		endif;

	
}
function add_pages($p) {
	$title = mysql_real_escape_string($p['title']);
	$body = mysql_real_escape_string($p['body']);
        $email = mysql_real_escape_string($p['email']);
        $delcode = mysql_real_escape_string($p['delcode']);
        $author = mysql_real_escape_string($p['author']);

	if(!$title || !$body || !$author):
echo '<p>Something is missing. <a href="index.php"> Try again. </a> </p>' ;
		
	
	else:
	
	$sql = "INSERT INTO pages VALUES (null, '$title', '$body', '$email', '$delcode', '$author')";
	$res = mysql_query($sql) or die(mysql_error());
	echo '<h1>Added.</h1>';

	endif;
	
}

function add_content($p) {
	$title = mysql_real_escape_string($p['title']);
	$body = mysql_real_escape_string($p['body']);
        $email = mysql_real_escape_string($p['email']);
        $delcode = mysql_real_escape_string($p['delcode']);
        $author = mysql_real_escape_string($p['author']);

	if(!$title || !$body || !$author):
echo '<p>Something is missing. <a href="index.php"> Try again. </a> </p>' ;
		
	
	else:
	
	$sql = "INSERT INTO cms_content VALUES (null, '$title', '$body', '$email', '$delcode', '$author')";
	$res = mysql_query($sql) or die(mysql_error());
	echo '<h1>Added.</h1>';

	endif;
	
}
	function manage_pages($id = '') {
	echo '<div id="manage">';
	$sql = "SELECT * FROM pages ";
	$res = mysql_query($sql) or die(mysql_error());
	while($row = mysql_fetch_assoc($res)) :
	?>

	<div>
	<h2 class="title"><?=$row['title']?></h2>
	<span class="actions"><a href="update-page.php?id=<?=$row['id']; ?>">Edit</a> | <a href="manage-pages.php?deletepage=<?=$row['id']; ?>">Delete</a></span>
	</div>
	<?php
		endwhile;
		echo '</div>'; // Zatvara div "manage"

	
	}

	function delete_pages($id) {
		if(!$id) {
			return false;
		
		}else {
		$id = mysql_real_escape_string($id);
		$sql = "DELETE FROM pages WHERE id = '$id'";
		$res = mysql_query($sql) or die(mysql_error());
		echo 'Deleted.';
}
		
	}

function update_pages_form($id) {	
	$id = mysql_real_escape_string($id);
	$sql = "SELECT * FROM pages WHERE id= '$id'";
	$res = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($res);
?>
<form method="post" action="index.php">
<input type="hidden" name="updatepage" value="true" />
<input type="hidden" name="id" value="<?=$row['id']?>" />	
	<div>
<label for="title">Title:</label>
<input type="text" name="title" id="title" value="<?=$row['title']?>" />
	</div>
	
	<div>
<label for="body">Text:</label>
<textarea name="body" id="body" rows="8" cols="48" ><?=$row['body']?> </textarea>
	</div>
<input type="submit" name="sumbit" value="Update" />
</form>
<?php	

	}

	function update_pages($p) {
	$title = mysql_real_escape_string($p['title']);
	$body = mysql_real_escape_string($p['body']);
	$id = mysql_real_escape_string($p['id']);

	if(!$title || !$body):
echo '<p>Something is missing, or you are trying to edit a post that does not exist. <a href="update-pages.php?id='.    $id    .'"> Either way, try  again. </a> </p>' ;
		
	
	else:
	
	$sql = "UPDATE pages SET title = '$title', body= '$body'  WHERE id = '$id'";
	$res = mysql_query($sql) or die(mysql_error());
	echo 'Updated.';

	endif;
		
	}
	function list_pages($id = '') {
		if($id != ''):
			$id = mysql_real_escape_string($id);
			$sql = "SELECT * FROM pages WHERE id = '$id'";

$return = '<p><a href="index.php">home</a></p>';

		else:
			$sql = "SELECT * FROM pages ORDER BY id DESC";
		endif;



		$res = mysql_query($sql) or die(mysql_error());

		if(mysql_num_rows($res) !=0):
		while($row = mysql_fetch_assoc($res)) {
                        			echo '<li><label><a href="index.php?pg=' . $row['id'] , '">'  . $row['title'] .  '</a></li></label>';
                    
                       
		}
		else:
			echo "<h1> Oops, this doesn't exist.</h1> Are you lost?</p>";
		endif;

	
}
		
} // Ends the class
?>
