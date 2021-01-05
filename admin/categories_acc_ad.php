<?php 
    include("../includes/db.php");
    include("../includes/functions.php");
      
    $accion = $_GET['ac'] ;
   
    switch($accion){

        case 1:
            //SQL Insertar
            $cat_id = trim($_POST['cat_id']);
            $cat_title = trim($_POST['cat_title']);

            $db->query("INSERT INTO categories(cat_id, cat_title) 
            VALUES(?,?)", array($cat_id, $cat_title));
            $insertId = $db->lastInsertId();
            $db->closeConnection();

            header("Location:admin.php");
            break;
        
        case 2:
            //SQL Actualizar 
  
            $cat_id = trim($_POST['cat_id']);
            $cat_title = trim($_POST['cat_title']);


            $db->query("UPDATE categories SET cat_id = ?, cat_title = ? WHERE cat_id = ?", array($cat_id, $cat_title, $cat_id));
            $insertId = $db->lastInsertId();
            $db->closeConnection();

            header("Location:admin.php");

            break; 
        
        case 3:
            //SQL eliminar
            $id=$_GET['id']; 
            $db->query("DELETE FROM categories WHERE cat_id = ?", array($id));
            $insertId = $db->lastInsertId();
            $db->closeConnection();

            header("Location: admin.php");
            break; 
            
        default:  

    }
?>

      




   
 ?>
