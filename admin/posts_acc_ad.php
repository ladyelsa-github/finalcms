<?php 
    include("../includes/db.php");
    include("../includes/functions.php");
      
    $accion = $_GET['ac'] ;
   
    switch($accion){

        case 1:
            //SQL Insertar
            $post_category_id = trim($_POST['post_category_id']);
            $post_title = trim($_POST['post_title']);
            $post_author = trim($_POST['post_author']);
            $post_user = trim($_POST['post_user'] );
            $post_content = trim($_POST['post_content']);
            $post_tags = trim($_POST['post_tags']);
            $post_status = trim($_POST['post_status']);

            $db->query("INSERT INTO posts(post_category_id, post_title, post_author, post_user, 
            post_content, post_tags , post_status) 
            VALUES(?,?,?,?,?,?,?)", array($post_category_id, $post_title, $post_author, $post_user, 
            $post_content, $post_tags , $post_status));
            $insertId = $db->lastInsertId();
            $db->closeConnection();

            header("Location:admin.php");
            break;
        
        case 2:
            //SQL Actualizar 
  
            $id=$_POST['post_id']; 
            $post_category_id = trim($_POST['post_category_id']);
            $post_title = trim($_POST['post_title']);
            $post_author = trim($_POST['post_author']);
            $post_user = trim($_POST['post_user'] );
            $post_content = trim($_POST['post_content']);
            $post_tags = trim($_POST['post_tags']);
            $post_status = trim($_POST['post_status']);

            $db->query("UPDATE posts SET post_id = ? , post_category_id = ?, post_title = ?, post_author = ?, post_user = ?, 
            post_content = ?, post_tags = ? , post_status = ? WHERE post_id = ?", array($id , $post_category_id, $post_title, 
            $post_author, $post_user, $post_content, $post_tags , $post_status, $id));
            $insertId = $db->lastInsertId();
            $db->closeConnection();

            header("Location:admin.php");

            break; 
        
        case 3:
            //SQL eliminar
            $id=$_GET['id']; 
            $db->query("DELETE FROM posts WHERE post_id = ?", array($id));
            $insertId = $db->lastInsertId();
            $db->closeConnection();

            header("Location: admin.php");
            break; 
            
        default:  

    }
?>

      




   
 ?>
