
<?php include('../includes/header.php');?>
<?php include('navigationadmin.php'); ?>

<div class="container">
 <div class="row">
    <div class="col-md-6">
	    <?php
			$id=$_GET['id']; 
			$post = getUser($id);
		?>
	   <br>
	  <div class="card card-body">
		<form method="POST" action="users_acc_ad.php?ac=2">
		   <div class="form-group">
		      <label for="user_id"> <strong>user_id </strong></label>
			  <p><input type="text" name="user_id" class="form-control" value="<?php echo $post['user_id']; ?>"></p>
			  <label for="username"> <strong>username </strong></label>
			  <p><input type="text" name="username" class="form-control" value="<?php echo $post['username']; ?>"></p>
			  <label for="user_password"> <strong>user_password</strong></label>
			  <p><input type="text" name="user_password" class="form-control" value="<?php echo $post['user_password']; ?>"></p>
			  <label for="user_firstname"> <strong>user_firstname </strong></label>
			  <p><input type="text" name="user_firstname" class="form-control"  value="<?php echo $post['user_firstname']; ?>" ></p>
			  <label for="user_lastname"> <strong>user_lastname </strong></label>
			  <p><input type="textarea" name="user_lastname" class="form-control"  value="<?php echo $post['user_lastname']; ?>" ></p>
              <label for="user_email"> <strong>user_email </strong></label>
              <p><input type="text" name="user_email" class="form-control"  value="<?php echo $post['user_email']; ?>"></p>
              <label for="user_image"> <strong>user_image </strong></label>
			  <p><input type="text" name="user_image" class="form-control"  value="<?php echo $post['user_image']; ?>"></p>
              <label for="user_role"> <strong>user_role</strong></label>
			  <p><input type="text" name="user_role1" class="form-control"  value="<?php echo $post['user_role']; ?>"></p>
			  <label for="randSalt"> <strong>randSalt </strong></label>
              <p><input type="text" name="randSalt" class="form-control"  value="<?php echo $post['randSalt']; ?>"></p>
              <label for="token"> <strong>token </strong></label>
			  <p><input type="text" name="token" class="form-control"  value="<?php echo $post['token']; ?>"></p>
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
