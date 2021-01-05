
<div class="col-md-8">
 <br> 
  <div class="col-md-8" align="center"> <H3>Usuarios</H3> </div>
 <br>
  <div class="row">
    <div class="col-md-8"> 
          <table class="table table-bordered">
            <thead>
              <tr style= "background-color:#C0C0C0"valign="middle" align="center">
                <th>user_id</th>
                <th>username</th>
                <th>user_password</th>
                <th>user_firstname</th>
                <th>user_lastname</th>
                <th></th>
                <th>user_email</th>
                <th>user_image</th>
                <th>user_role</th>
                <th>randSalt</th>
                <th>token</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php  
                  $conexion = new mysqli("localhost", "root", "", "cms");
                  $consulta = "SELECT * FROM users ";
                  $registros = mysqli_query($conexion,$consulta);
                          while ($row = mysqli_fetch_array($registros)) { ?>
                            <tr>
                                <td> <?php echo $row['user_id']?> </td>
                                <td> <?php echo $row['username']?> </td>
                                <td> <?php echo $row['user_password']?> </td>
                                <td> <?php echo $row['user_firstname']?> </td>
                                <td colspan="2"> <?php echo $row['user_lastname']?> </td>
                                <td> <?php echo $row['user_email']?> </td>
                                <td> <?php echo $row['user_image']?> </td>
                                <td> <?php echo $row['user_role']?> </td>
                                <td> <?php echo $row['randSalt']?> </td>
                                <td> <?php echo $row['token']?> </td>
                                <td> 
                                  <a href="users_act_ad.php?id=<?php echo $row['user_id'] ?>" class="btn btn-secondary">
                                  <i class="fas fa-marker"> Edit</i>
                                  </a>
                                  
                                  <a href="users_acc_ad.php?id=<?php echo $row['user_id']."&ac=3" ?>" class="btn btn-danger"> 
                                  <i class="fas fa-marker"> delete </i> </a> 
                                </td>
                          </tr>
                        <?php  } ?>

              </tbody>   
              </table>
    </div>
    <div class="col-md-6" >
			<div class="card card-body">
				<form method="POST" action="users_acc_ad.php?ac=1">
					<div class="form-group">
						<label for="user_id"> <strong>user_id </strong></label>
						<p><input type="text" name="user_id" class="form-control" ></p>
						<label for="username"> <strong>username</strong></label>
						<p><input type="text" name="username" class="form-control" ></p>
						<label for="user_password"> <strong>user_password </strong></label>
						<p><input type="text" name="user_password" class="form-control" ></p>
						<label for="user_firstname"> <strong>user_firstname </strong></label>
						<p><input type="textarea" name="user_firstname" class="form-control" ></p>
            <label for="user_lastname"> <strong>user_lastname </strong></label>
            <p><input type="text" name="user_lastname" class="form-control" ></p>
            <label for="user_email"> <strong>user_email </strong></label>
						<p><input type="email" name="user_email" class="form-control" ></p>
            <label for="user_image"> <strong>user_image</strong></label>
						<p><input type="text" name="user_image" class="form-control" ></p>
            <label for="user_role"> <strong>user_role </strong></label>
						<p><input type="text" name="user_role" class="form-control" ></p>
            <label for="randSalt"> <strong>randSalt</strong></label>
						<p><input type="text" name="randSalt" class="form-control" ></p>
            <label for="token"> <strong>token</strong></label>
						<p><input type="text" name="token" class="form-control" ></p>
						<input type="submit" name="Save_Post" class="btn btn-success btn-block" Value="Guardar">
					</div>
				</form>
			</div>
		</div>
	 </div>
</div>