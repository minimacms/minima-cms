<h3><a href="#post">Add a post</a></h3><?=$obj->manage_content()?><br><form method="post" id="post" action="index.php">
<input type="hidden" name="add" value="true" />
<input type="text" name="title" id="title" placeholder="Name your post." />

<textarea name="body" id="body-field" rows="15" cols="48" class="ckeditor" placeholder="Type it out. HTML fully supported."> </textarea>

<input type="text" name="author" id="author" placeholder="What's your name?" />
<input type="submit" name="sumbit" class="button" value="Publish" />
</form>
