<h3><a href="#addpage">Add a page</a></h3><?=$obj->manage_pages()?><br><span id="addpage"></span><form method="post" action="index.php">
	<input type="hidden" name="addpage" value="true" />
	<input type="text" name="title" id="title" placeholder="Give your page a name."  />

	<textarea name="body" id="body-field" rows="15" cols="48" class="ckeditor" placeholder="Give it some content. HTML fully supported."> </textarea>
	
	<input type="text" name="author" id="author" placeholder="What's your name?" />
	<input type="text" name="redirect" id="redirect" placeholder="Redirect to URL?" />
		<input type="submit" class="button" name="sumbit" value="Publish" />

	</form>
