<?php 
    include("../includes/db.php");
    include("../includes/functions.php");
      
    $accion = $_GET['ac'] ;
   
    switch($accion){

        case 1:
            //SQL Insertar
            $user_id = trim($_POST['user_id']);
            $username = trim($_POST['username']);
            $user_password = trim($_POST['user_password']);
            $user_firstname = trim($_POST['user_firstname'] );
            $user_lastname = trim($_POST['user_lastname']);
            $user_email = trim($_POST['user_email']);
            $user_image = trim($_POST['user_image']);
            $user_role = trim($_POST['user_role']);
            $randSalt= trim($_POST['randSalt']);
            $token = trim($_POST['token']);

            $db->query("INSERT INTO users(user_id, username, user_password, user_firstname , 
            user_lastname, user_email , user_image, user_role, randSalt , token) 
            VALUES(?,?,?,?,?,?,? ,?,?,?)", array($user_id, $username, $user_password, $user_firstname , 
            $user_lastname, $user_email , $user_image, $user_role, $randSalt , $token));
            $insertId = $db->lastInsertId();
            $db->closeConnection();

            header("Location:admin.php");
            break;
        
        case 2:
            //SQL Actualizar 
  
            $id=$_POST['user_id']; 
            $user_id = trim($_POST['user_id']);
            $username = trim($_POST['username']);
            $user_password = trim($_POST['user_password']);
            $user_firstname = trim($_POST['user_firstname'] );
            $user_lastname = trim($_POST['user_lastname']);
            $user_email = trim($_POST['user_email']);
            $user_image = trim($_POST['user_image']);
            $user_role = trim($_POST['user_role']);
            $randSalt= trim($_POST['randSalt']);
            $token = trim($_POST['token']);

            $db->query("UPDATE users SET user_id = ?, username = ?, user_password = ?, user_firstname = ?, 
            user_lastname = ?, user_email = ? , user_image = ?,  user_role = ?, randSalt = ? , token = ? WHERE user_id = ?",
            array($user_id, $username, $user_password, $user_firstname, $user_lastname, $user_email , $user_image,
            $user_role, $randSalt , $token, $id));
            $insertId = $db->lastInsertId();
            $db->closeConnection();

            header("Location:admin.php");

            break; 
        
        case 3:
            //SQL eliminar
            $id=$_GET['id']; 
            $db->query("DELETE FROM users WHERE user_id = ?", array($id));
            $insertId = $db->lastInsertId();
            $db->closeConnection();

            header("Location: admin.php");
            break; 
            
        default:  

    }
?>

      




   
 ?>
