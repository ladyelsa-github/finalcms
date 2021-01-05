<?php 
    include("../includes/db.php");
    include("../includes/functions.php");
      
    $accion = $_GET['ac'] ;
   
    switch($accion){

        case 1:
            //SQL Insertar
            $comment_id = trim($_POST['comment_id']);
            $comment_post_id = trim($_POST['comment_post_id']);
            $comment_author = trim($_POST['comment_author']);
            $comment_email = trim($_POST['comment_email'] );
            $comment_content = trim($_POST['comment_content']);
            $comment_status = trim($_POST['comment_status']);
            $comment_date = trim($_POST['comment_date']);

            $db->query("INSERT INTO posts(comment_id, comment_post_id, comment_author, comment_email, 
            comment_content, comment_status , comment_date) 
            VALUES(?,?,?,?,?,?,?)", array($comment_id, $comment_post_id, $comment_author, $comment_email, 
            $comment_content, $comment_status , $comment_date));
            $insertId = $db->lastInsertId();
            $db->closeConnection();

            header("Location:admin.php");
            break;
        
        case 2:
            //SQL Actualizar 
  
            $id=$_POST['comment_id']; 
            $comment_id = trim($_POST['comment_id']);
            $comment_post_id = trim($_POST['comment_post_id']);
            $comment_author = trim($_POST['comment_author']);
            $comment_email = trim($_POST['comment_email'] );
            $comment_content = trim($_POST['comment_content']);
            $comment_status = trim($_POST['comment_status']);
            $comment_date = trim($_POST['comment_date']);

            $db->query("UPDATE comments SET comment_id = ?, comment_post_id = ?, comment_author = ?, comment_email = ?, 
            comment_content = ?, comment_status = ? , comment_date = ? WHERE comment_id = ?", array($comment_id, $comment_post_id, 
            $comment_author, $comment_email, $comment_content, $comment_status , $comment_date, $id));
            $insertId = $db->lastInsertId();
            $db->closeConnection();

            header("Location:admin.php");

            break; 
        
        case 3:
            //SQL eliminar
            $id=$_GET['id']; 
            $db->query("DELETE FROM comments WHERE comment_id = ?", array($id));
            $insertId = $db->lastInsertId();
            $db->closeConnection();

            header("Location: admin.php");
            break; 
            
        default:  

    }
?>

      




   
 ?>
