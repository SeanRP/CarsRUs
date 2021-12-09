<?php
require($_SERVER['DOCUMENT_ROOT'].'/carsRUS/model/database_class.php');
$db = new Database();

if(isset($_POST['submit'])) { 
    //Get and filter inputs
    $userName       = filter_input(INPUT_POST, 'userName');
    $password       = filter_input(INPUT_POST, 'password');
    $passwordMatch  = filter_input(INPUT_POST, 'passwordMatch');
    $email          = filter_input(INPUT_POST, 'email');
    $phone          = filter_input(INPUT_POST, 'phone');
    $address        = filter_input(INPUT_POST, 'address');
    $address2       = filter_input(INPUT_POST, 'address2');
    $city           = filter_input(INPUT_POST, 'inputCity');
    $province       = filter_input(INPUT_POST, 'inputProvince');
    $postalCode     = filter_input(INPUT_POST, 'inputPostalCode');

    //If any input is null, reload form
    if(
      empty($userName) 
      || empty($password) 
      || empty($email) 
      || empty($phone) 
      || empty($address)
      || empty($postalCode)
      || empty($city) 
    ){
      header('location: ?message=emptyField');
      echo "<script type='text/javascript'>alert('Please fill in all fields');</script>";
    }
  
    //Check if passwords match
    
    if($password !== $passwordMatch){
        header('location: ?message=passwordError');
        echo "<script type='text/javascript'>alert('Passwords does not match');</script>";
    } 
    
    
    //Search for duplicate userName
    $checkuserName = $db->run("SELECT * FROM users WHERE userName=?", [$userName])->fetch();

    if ($checkuserName){
      echo "<script type='text/javascript'>alert('Username Taken');</script>";
    }
    else {

      //hash password
      $hashed_pword = password_hash($password, PASSWORD_DEFAULT);

      //create user
      $db->run("INSERT INTO users (
        userName, password, emailAddress, phoneNumber, address, postalCode, city)
        VALUES ( ?, ?, ?, ?, ?, ?, ?)",[$userName, $hashed_pword, $email, $phone, $address, $postalCode, $city]);
     
      //header("location: http://".$_SERVER['HTTP_HOST']);
      header('location: /carsRUS/');
    }
  
        
}