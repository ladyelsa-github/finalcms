
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') { 
   
    $autor = trim($_POST['autor']);
    $email = trim($_POST['email']);
    $comentario = trim($_POST['comentario']);
    $lenguaje = trim($_POST['lenguaje']);

   /* $db->query("INSERT INTO comments(comment_author, comment_email, comment_content) 
                VALUES(?,?,?)", array($autor, $email, $comentario));
    $insertId = $db->lastInsertId();
    $db->closeConnection();
     $data['success'] = "Post añadido "; produce error */
    try{
    $conexion = new PDO('mysql: host=localhost ; dbname=cms', 'root', '');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET utf8");
    $sql="INSERT INTO comments(comment_post_id, comment_author, comment_email, comment_content) VALUES (:lenguaje, :autor ,:email, :comentario)" ;
    $resultado = $conexion->prepare($sql);
    $resultado->execute(array(":lenguaje"=>$lenguaje ,":autor"=>$autor ,":email"=>$email , ":comentario"=>$comentario));

    $resultado->closeCursor();

    } catch (exception $e) {
    die ('Error : ' .$e->GetMessage());
    } finally {
    $conexion=null;
    }
    
}

?>
    <form class="form-comments" method="POST">
            <legend>Comentarios</legend>
            <?php if(isset($data['success'])) { ?>
            <p><?php echo $data['success']; ?></p->
            <?php } ?>
            <fieldset>
              <div class="form-group">
                <label for="lenguaje" class="form-label">Lenguaje</label>
                <select class="form-control"name="lenguaje" id="lenguaje" aria-placeholder="Elije la categoria" required>
                  <?php 
                     $conexion = new mysqli("localhost", "root", "", "cms");
                     $consulta = "SELECT * FROM categories ";
                     $categorias = mysqli_query($conexion,$consulta);
                  ?>
                  <?php foreach ($categorias as $categoria):?> 
                    <option value="<?php echo $categoria['cat_id']; ?>" > <?php echo $categoria['cat_title']; ?> </option>
                  <?php endforeach ?>
                </select>
              </div>

              <div class="mb-3">
                <label for="autor" class="form-label">Autor</label>
                <input type="text" name="autor" id="autor" class="form-control" required>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
              </div>

              <div class="mb-3">
                <label for="comentario" class="form-label">Comentarios</label>
                <textarea class="form-control" rows="4" name="comentario" id="comentario" required>
                </textarea>
              </div>
              <input type="submit" class="btn btn-primary" value="Enviar">
            </fieldset>
    </form>

