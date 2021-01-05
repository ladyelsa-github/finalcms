
<div class="col-md-8">
 <br> 
  <div class="col-md-8" align="center"> <H3>Comentarios</H3> </div>
 <br>
  <div class="row">
    <div class="col-md-8"> 
          <table class="table table-bordered">
            <thead>
              <tr style= "background-color:#C0C0C0"valign="middle" align="center">
                <th>comment_id</th>
                <th>comment_post_id </th>
                <th>comment_author</th>
                <th>comment_email</th>
                <th>comment_content</th>
                <th></th>
                <th>comment_status</th>
                <th>comment_date</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php  
                  $conexion = new mysqli("localhost", "root", "", "cms");
                  $consulta = "SELECT * FROM comments ";
                  $registros = mysqli_query($conexion,$consulta);
                          while ($row = mysqli_fetch_array($registros)) { ?>
                            <tr>
                                <td> <?php echo $row['comment_id']?> </td>
                                <td> <?php echo $row['comment_post_id']?> </td>
                                <td> <?php echo $row['comment_author']?> </td>
                                <td> <?php echo $row['comment_email']?> </td>
                                <td colspan="2"> <?php echo $row['comment_content']?> </td>
                                <td> <?php echo $row['comment_status']?> </td>
                                <td> <?php echo $row['comment_date']?> </td>
                                <td> 
                                  <a href="comments_act_ad.php?id=<?php echo $row['comment_id'] ?>" class="btn btn-secondary">
                                  <i class="fas fa-marker"> Edit</i></a>
                                  <a href="comments_acc_ad.php?id=<?php echo $row['comment_id']."&ac=3" ?>" class="btn btn-danger"> 
                                  <i class="fas fa-marker"> delete </i> </a> 
                                </td>
                          </tr>
                        <?php  } ?>

              </tbody>   
              </table>
    </div>
    <div class="col-md-6" >
			<div class="card card-body">
				<form method="POST" action="comments_acc_ad.php?ac=1">
					<div class="form-group">
						<label for="comment_id"> <strong>comment_id </strong></label>
						<p><input type="text" name="comment_id" class="form-control" ></p>
						<label for="comment_post_id "> <strong>comment_post_id </strong></label>
						<p><input type="text" name="comment_post_id " class="form-control" ></p>
						<label for="comment_author"> <strong>comment_author </strong></label>
						<p><input type="text" name="comment_author" class="form-control" ></p>
						<label for="comment_email"> <strong>comment_email </strong></label>
						<p><input type="email" name="comment_email" class="form-control" ></p>
            <label for="comment_content"> <strong>comment_content </strong></label>
            <p><input type="text" name="comment_content" class="form-control" ></p>
            <label for="comment_status"> <strong>comment_status </strong></label>
						<p><input type="text" name="comment_status" class="form-control" ></p>
            <label for="comment_date"> <strong>comment_date</strong></label>
						<p><input type="date" name="comment_date" class="form-control" ></p>
						<input type="submit" name="Save_Comment class="btn btn-success btn-block" Value="Guardar">
					</div>
				</form>
			</div>
		</div>
	 </div>
</div>