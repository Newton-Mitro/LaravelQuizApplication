<!-- Header File (navebar) included. -->
<?php include('header.php'); ?>

  
<div id="container">
    
    <!-- Message For Error -->
    <div class="alert alert-danger" role="alert">
                Error Message.
    </div>
    
    <h4 class="text-center">Add Content</h4>
    <!-- Form -->
    <form method="post" target="">
  		
            <div class="form-group">
    			<label for="contenttitle">Title</label>
    			<input type="text" class="form-control" id="contenttitle" name="title" placeholder="Title">
  			</div>
  			
  			<div class="form-group">
    			<label>Content</label>
                
                <!-- TinyMCE Embed Here by Using ID (mytextarea)-->
    			<textarea id="mytextarea" name="content"></textarea>
  			</div>

  			<button class="btn btn-primary" name="submit" type="submit">Submit</button>
	
    </form>

  
</div>

<!-- Footer included. -->
<?php include('footer.php'); ?>