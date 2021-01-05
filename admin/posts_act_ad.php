
<?php include('../includes/header.php');?>
<?php include('navigationadmin.php'); ?>

<div class="container">
 <div class="row">
    <div class="col-md-6">
	    <?php
			$id=$_GET['id']; 
			$post = getPost($id);
		?>
	   <br>
	  <div class="card card-body">
		<form method="POST" action="posts_acc_ad.php?ac=2">
		   <div class="form-group">
		      <label for="post_id"> <strong>post_id </strong></label>
			  <p><input type="text" name="post_id" class="form-control" value="<?php echo $post['post_id']; ?>"></p>
			  <label for="post_category_id"> <strong>post_category_id </strong></label>
			  <p><input type="text" name="post_category_id" class="form-control" value="<?php echo $post['post_category_id']; ?>"></p>
			  <label for="post_title"> <strong>post_title</strong></label>
			  <p><input type="text" name="post_title" class="form-control" value="<?php echo $post['post_title']; ?>"></p>
			  <label for="post_author"> <strong>post_author </strong></label>
			  <p><input type="text" name="post_author" class="form-control"  value="<?php echo $post['post_author']; ?>" ></p>
			  <label for="post_user"> <strong>post_user </strong></label>
			  <p><input type="textarea" name="post_user" class="form-control"  value="<?php echo $post['post_user']; ?>" ></p>
              <label for="post_content"> <strong>post_content </strong></label>
              <p><input type="text" name="post_content" class="form-control"  value="<?php echo $post['post_content']; ?>"></p>
              <label for="post_tags"> <strong>post_tags </strong></label>
			  <p><input type="text" name="post_tags" class="form-control"  value="<?php echo $post['post_tags']; ?>"></p>
              <label for="post_status"> <strong>post_status</strong></label>
			  <p><input type="text" name="post_status" class="form-control"  value="<?php echo $post['post_status']; ?>"></p>
			  <input type="submit" name="Save_Post" class="btn btn-success btn-block" Value="Actualizar">
			</div>
		</form>
	  </div>
	  <br>
	</div >
	<div class="col-md-6">
      <?php include('sideadmin.php'); ?>
	</div>
 </div>
<div>
