<?php 
session_set_cookie_params(0);
session_start();
$errors = [];
$user_id = "";
$db = mysqli_connect("localhost", "deefgu_test", "Deepak@24", "deefgu_test");

// Login
$user_id=$password="";
if (isset($_POST['login_user'])) {
  // Get username and password from login form
  $user_id = htmlspecialchars(trim($_POST['user_id']));
  $password = htmlspecialchars(trim($_POST['password']));
  $user_id = mysqli_real_escape_string($db, $_POST['user_id']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $user_id= stripslashes($user_id);
  $password= stripslashes($password);
  if (empty($user_id)) array_push($errors, "Username is required".'</br>');
  if (empty($password)) array_push($errors, "Password is required");
  // if no error in form, log user in
  if (count($errors) == 0) {
      $sql = "SELECT * FROM main_admin WHERE username = '$user_id'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      if(password_verify($password, $row['password_hash'])) {
      $count = mysqli_num_rows($result);
      $_SESSION['username'] = $user_id;
      $_SESSION['password'] = $password;
      if(!empty($_POST["remember"])){
         $hour = time() + 3600 * 24 * 30;
         $password=sha1($password);
         setcookie('username', $user_id, $hour);
         setcookie('password', $password, $hour);
      }
      $_SESSION['success'] = "You are now logged in";
      header('location: ../index.php');
    }else {
      array_push($errors, "Wrong credentials");
    }
  }
}

// Signup
$user_id=$password=$phone="";
if (isset($_POST['signup_user'])) {
  $user_id = htmlspecialchars(trim($_POST['user_id']));
  $password = htmlspecialchars(trim($_POST['password']));
  $number = htmlspecialchars(trim($_POST['number']));
  $user_id = mysqli_real_escape_string($db, $_POST['user_id']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $number = mysqli_real_escape_string($db, $_POST['number']);
  $user_id= stripslashes($user_id);
  $password= stripslashes($password);
  $number = stripslashes($number);
  $password = password_hash($password, PASSWORD_DEFAULT);
  if (empty($user_id)) array_push($errors, "Username is required".'</br>');
  if (empty($password)) array_push($errors, "Password is required".'</br>');
  if (empty($number)) array_push($errors, "Phone number is required");
  if (count($errors) == 0) {
      $sql = "SELECT username FROM main_admin WHERE username = '$user_id'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
  if($count == 1)  {
     array_push($errors, "Username already exists");
  }
  else{
    if (count($errors) == 0) {
      $sql = "Insert into main_admin values('$user_id','$password','$number')";
      $result = mysqli_query($db,$sql);
      array_push($errors, "Account Created");
    }
    else{
    array_push($errors, "Something went wrong");
    } 
  }
}
}

// Reset
if (isset($_POST['reset-password'])) {
  $username = htmlspecialchars(trim($_POST['username']));
  $number = htmlspecialchars(trim($_POST['number']));
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $number = mysqli_real_escape_string($db, $_POST['number']);
  $username= stripslashes($username);
  $number= stripslashes($number);
  if (empty($username)) array_push($errors, "Username is required".'</br>');
  if (empty($number)) array_push($errors, "Phone number is required");
  if (count($errors) == 0) {
     $query = "SELECT username FROM main_admin WHERE username='$username' and phone='$number'";
     $result = mysqli_query($db,$query);
     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     $count = mysqli_num_rows($result);
     if($count == 1)  {
        $token = bin2hex(random_bytes(5));
        $_SESSION['username'] = $username;
        $_SESSION['phone'] = $number;
        $_SESSION['update_password'] = $token;
        $new_password = password_hash($token, PASSWORD_DEFAULT);
        $sql = "UPDATE main_admin SET password_hash='$new_password' where username='$username'";
        $results = mysqli_query($db, $sql);
        header('location: pending.php?username=' . $username);
     }
     else{
      array_push($errors, "Sorry, no user exists on our system with that email"); 
     }
  }
}
?>