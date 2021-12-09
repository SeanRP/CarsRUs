<?php
session_start();
print("SESSION:  ");
echo "<pre>";
print("login: ");
print_r($_SESSION['login']);
print("\nuserID: ");
print_r($_SESSION['userID']);
print("\nuserName: ");
print_r($_SESSION['userName']);
print("\nemail: ");
print_r($_SESSION['email']);
print("\nphone: ");
print_r($_SESSION['phone']);
print("\naddress: ");
print_r($_SESSION['address']);
print("\npostalCode: ");
print_r($_SESSION['postalCode']);
print("\ncity: ");
print_r($_SESSION['city']);
var_dump($_POST);
echo "</pre>";
?>