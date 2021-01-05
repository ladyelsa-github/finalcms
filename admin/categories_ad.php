
<div class="col-md-9">
 <br> 
  <div class="col-md-9" align="center"> <H3>Categorias</H3> </div>
 <br>
  <div class="row">
    <div class="col-md-6"> 
          <table class="table table-bordered">
            <thead>
              <tr style= "background-color:#C0C0C0"valign="middle" align="center">
                <th>cat_id</th>
                <th>cat_title</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php  
                  $conexion = new mysqli("localhost", "root", "", "cms");
                  $consulta = "SELECT * FROM categories";
                  $registros = mysqli_query($conexion,$consulta);
                          while ($row = mysqli_fetch_array($registros)) { ?>
                            <tr>
                                <td> <?php echo $row['cat_id']?> </td>
                                <td> <?php echo $row['cat_title']?> </td>
                                <td> 
                                  <a href="categories_act_ad.php?id=<?php echo $row['cat_id'] ?>" class="btn btn-secondary">
                                  <i class="fas fa-marker"> Edit</i></a>
                                  
                                  <a href="categories_acc_ad.php?id=<?php echo $row['cat_id']."&ac=3" ?>" class="btn btn-danger"> 
                                  <i class="fas fa-marker"> delete </i> </a> 
                                </td>
                          </tr>
                        <?php  } ?>

              </tbody>   
              </table>
    </div>
    <div class="col-md-3" >
			<div class="card card-body">
				<form method="POST" action="categorias_acc_ad.php?ac=1">
					<div class="form-group">
						<label for="cat_id"> <strong>cat_id </strong></label>
						<p><input type="text" name="cat_id" class="form-control" ></p>
						<label for="cat_title"> <strong>cat_title</strong></label>
						<p><input type="text" name="cat_title" class="form-control" ></p>
						<input type="submit" name="Save_Post" class="btn btn-success btn-block" Value="Guardar">
					</div>
				</form>
			</div>
		</div>
	 </div>
</div>