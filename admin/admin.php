<?php include('../includes/header.php');?>
<?php include('navigationadmin.php'); ?>

<div class="container">
    <div class="row">
       <div class="col-md-9">
            <?php include('posts_ad.php'); ?>
            <?php include('categories_ad.php');?>
            <?php include('comments_ad.php');?>
            <?php include('users_ad.php');?>
        </div>
        <div class="col-md-3">
            <br>
            <br>
            <br>
            <sidebar>
                <div class="card bg-light">
                <div class="card-body">
                    <h4>Administracion</h4>
                    <ul class="list-group">
                        <li class="list-group-item">
                          <a href="users_ad.php" class="list-group-item list-group-item-action list-group-item-primary"> 
                            <h5> <strong>Usuarios</strong></h5></a>
                       </li>
                        <li class="list-group-item"> 
                         <a href="categories_ad.php" class="list-group-item list-group-item-action list-group-item-primary"> 
                          <h5> <strong>Categorias</strong></h5></a>
                        </li>
                        <li class="list-group-item"> 
                         <a href="posts_ad.php" class="list-group-item list-group-item-action list-group-item-primary"> 
                         <h5> <strong>Posts</strong></h5></a></li>
                        <li class="list-group-item"> 
                         <a href="comments_ad.php" class="list-group-item list-group-item-action list-group-item-primary"> 
                          <h5> <strong>Comentarios</strong></h5></a> </li>
                    </ul>
                </div>
                </div>
            </sidebar>
        </div>
    </div>
    <?php include('footeradmin.php'); ?>
<div>