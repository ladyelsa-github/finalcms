
<?php include('../includes/header.php');?>
<?php include('navigationadmin.php'); ?>

<div class="container">
 <div class="row">
    <div class="col-md-6">
	    <?php
			$id=$_GET['id']; 
			$Comment = getComment($id);
		?>
	   <br>
	  <div class="card card-body">
		<form method="POST" action="comments_acc_ad.php?ac=2">
		   <div class="form-group">
		      <label for="comment_id"> <strong>comment_id </strong></label>
			  <p><input type="text" name="comment_id" class="form-control" value="<?php echo $Comment['comment_id']; ?>"></p>
			  <label for="comment_post_id"> <strong>comment_post_id </strong></label>
			  <p><input type="text" name="comment_post_id" class="form-control" value="<?php echo $Comment['comment_post_id']; ?>"></p>
			  <label for="comment_author"> <strong>comment_author</strong></label>
			  <p><input type="text" name="comment_author" class="form-control" value="<?php echo $Comment['comment_author']; ?>"></p>
			  <label for="comment_email"> <strong>comment_email </strong></label>
			  <p><input type="email" name="comment_email" class="form-control"  value="<?php echo $Comment['comment_email']; ?>" ></p>
			  <label for="comment_content"> <strong>comment_content </strong></label>
			  <p><input type="textarea" name="comment_content" class="form-control"  value="<?php echo $Comment['comment_content']; ?>" ></p>
              <label for="comment_status"> <strong>comment_status </strong></label>
              <p><input type="text" name="comment_status" class="form-control"  value="<?php echo $Comment['comment_status']; ?>"></p>
              <label for="comment_date"> <strong>comment_date </strong></label>
			  <p><input type="date" name="comment_date" class="form-control"  value="<?php echo $Comment['comment_date']; ?>"></p>
			  <input type="submit" name="Save_Comment" class="btn btn-success btn-block" Value="Actualizar">
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
