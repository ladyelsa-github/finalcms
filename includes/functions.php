<?php

define('DBHOST', 'localhost');
define('DBNAME', 'cms');
define('DBUSER', 'root');
define('DBPORT', 3306);
define('DBPASSWORD','');

$db = new Database(DBHOST, DBPORT, DBNAME, DBUSER, DBPASSWORD);

function loginUser($username, $password) {
  global $db;
  $username = trim($username);
  $password = trim($password);

  $row = $db->row("SELECT * FROM users WHERE username=? ", array($username));

  if (password_verify($password, $row['user_password'])) {
      $_SESSION['username'] = $row['username'];
      $_SESSION['firstname'] = $row['user_firstname'];
      $_SESSION['lastname'] = $row['user_lastname'];
      $_SESSION['user_role'] = $row['user_role'];
      //var_dump($_SESSION);
      header("Location: /final/admin");
  } else {
      return false;
  }
  $db->closeConnection();
  return true;
}

function isUserLoggedIn() {
  if (isset($_SESSION['user_role'])) {
    return true;
  }
  return false;
}

function getCategories() {
  global $db;
  $categories = $db->query("SELECT cat_id, cat_title FROM categories");
  return $categories;
}

function getCategorie($id) {
  global $db;
  $categorie = $db->row("SELECT cat_id, cat_title FROM categories 
                           WHERE cat_id = ? ", array($id));
  return $categorie;
}



function getPosts() {
  global $db;
  $posts = $db->query("SELECT post_id, post_title, post_author, post_date, post_content FROM posts");
  return $posts;
}

function getPost($id) {
  global $db;
  $post = $db->row("SELECT post_id, post_category_id, post_title, post_author, post_user, post_date, 
                    post_content, post_tags, post_status FROM posts
                    WHERE post_id = ?", array($id));
  return $post;
}

function getComments($id) {
  global $db;
  $comments = $db->query("SELECT * FROM comments
                    WHERE comment_post_id = ?", array($id));
  return $comments;
}

function getComment($id) {
  global $db;
  $comment = $db->row("SELECT * FROM comments
                    WHERE comment_id = ?", array($id));
  return $comment;
}

function getUsers() {
  global $db;
  $users = $db->query("SELECT * FROM users");
  return $users;
}

function getUser($id) {
  global $db;
  $user = $db->row("SELECT * FROM users
                    WHERE user_id = ?", array($id));
  return $user;
}


function getPostsBySearch($search) {
  global $db;
  $posts = $db->query("SELECT post_id, post_title, post_author, post_date, post_content FROM posts
                      WHERE post_content LIKE ?", array($search));
  return $posts;
}


?>