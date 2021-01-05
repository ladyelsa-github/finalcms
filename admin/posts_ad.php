
<div class="col-md-8">
 <br> 
  <div class="col-md-8" align="center"> <H3>Posts</H3> </div>
 <br>
  <div class="row">
    <div class="col-md-8"> 
          <table class="table table-bordered">
            <thead>
              <tr style= "background-color:#C0C0C0"valign="middle" align="center">
                <th>post_category_id</th>
                <th>post_title</th>
                <th>post_author</th>
                <th>post_user</th>
                <th>post_content</th>
                <th></th>
                <th>post_tags</th>
                <th>post_status</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php  
                  $conexion = new mysqli("localhost", "root", "", "cms");
                  $consulta = "SELECT * FROM posts ";
                  $registros = mysqli_query($conexion,$consulta);
                          while ($row = mysqli_fetch_array($registros)) { ?>
                            <tr>
                                <td> <?php echo $row['post_category_id']?> </td>
                                <td> <?php echo $row['post_title']?> </td>
                                <td> <?php echo $row['post_author']?> </td>
                                <td> <?php echo $row['post_user']?> </td>
                                <td colspan="2"> <?php echo $row['post_content']?> </td>
                                <td> <?php echo $row['post_tags']?> </td>
                                <td> <?php echo $row['post_status']?> </td>
                                <td> 
                                  <a href="posts_act_ad.php?id=<?php echo $row['post_id'] ?>" class="btn btn-secondary">
                                  <i class="fas fa-marker"> Edit</i>
                                  </a>
                                  
                                  <a href="posts_acc_ad.php?id=<?php echo $row['post_id']."&ac=3" ?>" class="btn btn-danger"> 
                                  <i class="fas fa-marker"> delete </i> </a> 
                                </td>
                          </tr>
                        <?php  } ?>

              </tbody>   
              </table>
    </div>
    <div class="col-md-6" >
			<div class="card card-body">
				<form method="POST" action="posts_acc_ad.php?ac=1">
					<div class="form-group">
						<label for="post_category_id"> <strong>post_category_id </strong></label>
						<p><input type="text" name="post_category_id" class="form-control" ></p>
						<label for="post_title"> <strong>post_title</strong></label>
						<p><input type="text" name="post_title" class="form-control" ></p>
						<label for="post_author"> <strong>post_author </strong></label>
						<p><input type="text" name="post_author" class="form-control" ></p>
						<label for="post_user"> <strong>post_user </strong></label>
						<p><input type="textarea" name="post_user" class="form-control" ></p>
            <label for="post_content"> <strong>post_content </strong></label>
            <p><input type="text" name="post_content" class="form-control" ></p>
            <label for="post_tags"> <strong>post_tags </strong></label>
						<p><input type="text" name="post_tags" class="form-control" ></p>
            <label for="post_status"> <strong>post_status</strong></label>
						<p><input type="text" name="post_status" class="form-control" ></p>
						<input type="submit" name="Save_Post" class="btn btn-success btn-block" Value="Guardar">
					</div>
				</form>
			</div>
		</div>
	 </div>
</div>