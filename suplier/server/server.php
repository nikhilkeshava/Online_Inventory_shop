<?php
session_start();
?>

<?php

// initializing variables
$name = "";
$username = "";
$errors = array();
$time = date("M,d,Y h:i:s A");

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'onlineshop');


// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email) & empty($username)) {
    array_push($errors, "email is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }
$sql = "UPDATE `sup_info` SET `login_time` = '$time' WHERE email = '$email'";
          $run_query2 = mysqli_query($db,$sql);
  if (count($errors) == 0) {
    
    $query = "SELECT * FROM sup_info WHERE email='$email' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['first_name'] = $name;
      $_SESSION['email'] = $email;
      $_SESSION['success'] = "You are now logged in";
      header('location: ./supadmin/');
    }else {
      array_push($errors, "<h4 style='color:red;'>Wrong username/password combination</h4>");
    }
  }
}

?>

