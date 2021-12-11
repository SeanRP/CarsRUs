<?php 
require($_SERVER['DOCUMENT_ROOT'].'/carsRUS/model/database_class.php');
$db = new Database();

if(isset($_SESSION['login'])){
    header('location: /carsRUS/account');
  }

if(isset($_POST['submit'])) { 

    //Take input, filter it and place inside variables
    $userName = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');

    //Fetches information from login
    $user = $db->run("SELECT * FROM users WHERE userName=?", [$userName])->fetch();
    $auth = password_verify($password, $user['password']);

        if ($user && $auth){
            session_start();
            //Set login to 1 to verify user has logged in
            $_SESSION['login'] = true;
            $_SESSION['userID'] = $user['userID'];
            $_SESSION['userName'] = $user['userName'];
            $_SESSION['email'] = $user['emailAddress'];
            $_SESSION['phone'] = $user['phoneNumber'];
            $_SESSION['address'] = $user['address'];
            $_SESSION['postalCode'] = $user['postalCode'];
            $_SESSION['city'] = $user['city'];

            header('location: /carsRUS/view/my_account.php');

        } else {
            echo "<script type='text/javascript'>alert('Invalid Credentials');</script>";
        }
            
}
