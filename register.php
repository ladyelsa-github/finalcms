
<?php include('includes/header.php'); // en header.php ya esta incluido el db.php?> 
<?php include('includes/navigation.php'); ?>

<?php

$db = new Database(DBHOST, DBPORT, DBNAME, DBUSER, DBPASSWORD);
$error = array();

if($_SERVER['REQUEST_METHOD'] == 'POST') { // $_SERVER variable global de datos en el servidor

  // Sanity de los datos trim elimina los espacios en blancos
  $username = trim($_POST['username']);
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);
  $user_firstname= trim($_POST['user_firstname']);

  // Validaciones de los campos a ingresar
  if (strlen($username) < 4) {
    $error['username'] = 'Username dehe ser mayor a 4 caracteres';
  }

  if (empty($username)) {
    $error['username'] = 'Username no debe ser vacío';
  }

    
  if (isset($username)) {
    $conexion = new mysqli("localhost", "root", "", "cms");
    $consulta = "SELECT username FROM users WHERE username = '$username'";
    $verificacion = mysqli_query($conexion,$consulta);
    $filas = mysqli_num_rows($verificacion);
    if($filas > 0) { 
    $error['username'] = 'Usuario ya existe';}
    mysqli_close($conexion);
  }
  
    
  /*
  @TODO: Validación si es que el username no esté creado ya en la base de datos
  Tarea 2: Jueves 24/12 24:00 h

  function usernameExists($username) -> return true ? false
  Agregar validación de existencia de usuario en el array $error['username'];
  */


  if (empty($email)) {
    $error['email'] = 'Email no debe ser vacío';
  }

  if (isset($email)) {
    $conexion = new mysqli("localhost", "root", "", "cms");
    $consulta = "SELECT user_email FROM users WHERE user_email = '$email'";
    $verificacion = mysqli_query($conexion,$consulta);
    $filas = mysqli_num_rows($verificacion);
    if($filas > 0) { 
    $error['email'] = 'email ya existe';}
    mysqli_close($conexion);
  }
  /*
  @TODO: Validación si es que el email no esté creado ya en la base de datos
  Tarea 2: Jueves 24/12 24:00 h

  function emailExists($email) -> return true ? false
  Agregar validación de existencia de email en el array $error['email'];
  */

  if (empty($password)) {
    $error['password'] = 'Password no debe ser vacío';
  }

  if (strlen($user_firstname) < 2) {
    $error['user_firstname'] = 'Primer nombre debe ser mayor a 2 caracteres';
  }

  if (empty($user_firstname)) {
    $error['user_firstname'] = 'Primer nombre no debe ser vacío';
  }

  foreach ($error as $key => $value) {
    if (empty($value)) {
        unset($error[$key]);
    }
  }

  if(empty($error)){
    // Insertar un registro en la tabla users de la base de datos cms

    // @TODO: Extrar la lógica de registro de usuarios a un función
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));

    $db->query("INSERT INTO users(username, user_email, user_password, user_role , user_firstname) 
                VALUES(?,?,?,?,?)", array($username, $email, $hashedPassword, 'subscriber', $user_firstname));
    $insertId = $db->lastInsertId();
    $db->closeConnection();
    $data['success'] = "Usuario " . $username . " registrado con éxito";
  }
}
?>
<div class="container">
    <div class="row">
    <form method="post"> <!-- MSi no pone action se asume que los datos se guardan en la misma pagina-->
          <legend>Registro</legend>
          <?php if(isset($data['success'])) { ?>
            <p><?php echo $data['success']; ?></p->
          <?php } ?>
          <fieldset>
            <div class="mb-3">
              <label for="username" class="form-label">Ingrese un username</label>
              <input type="text" class="form-control <?php echo isset($error['username']) ? 'is-invalid' : '' ?>" 
              id="username" name="username" value="<?php echo isset($username) ? $username : '' ?>" required> <!-- Hace que el campo sea requerido-->
              <div class="invalid-feedback"><?php echo $error['username']; ?></div> <!-- Mensaje de validacion de campo-->
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Ingrese un correo electrónico</label>
              <input type="email" class="form-control <?php echo isset($error['email']) ? 'is-invalid' : '' ?>" 
              id="email" name="email" value="<?php echo isset($email) ? $email : '' ?>" required>
              <div class="invalid-feedback"><?php echo $error['email']; ?></div>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Ingrese su contraseña</label>
              <input type="password" class="form-control <?php echo isset($error['password']) ? 'is-invalid' : '' ?>" 
              id="password" name="password" value="<?php echo isset($password) ? $password : '' ?>" required>
              <div class="invalid-feedback"><?php echo $error['password']; ?></div>
            </div>
            <div class="mb-3">
              <label for="user_firtsname" class="form-label">Ingresa tu primer nombre</label>
              <input type="text" class="form-control <?php echo isset($error['user_firstname']) ? 'is-invalid' : '' ?>" 
              id="user_firstname" name="user_firstname" value="<?php echo isset($user_firstname) ? $user_firstname : '' ?>" required>
              <div class="invalid-feedback"><?php echo $error['user_firstname']; ?></div>
            </div>
            <!-- <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Recordarme</label>
            </div>-->
            <button type="submit" class="btn btn-primary">Registrar</button>
          </fieldset>
        </form>
    </div>
<?php include('includes/footer.php'); ?>