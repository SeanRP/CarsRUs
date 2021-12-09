<?php 
include($_SERVER['DOCUMENT_ROOT'].'/carsRUS/auth/print_session.php');
require($_SERVER['DOCUMENT_ROOT'].'/carsRUS/model/database_class.php');
$db = new Database();

if(isset($_POST['submit'])) { 
    
    $brand              = filter_input(INPUT_POST, 'brand');
    $model              = filter_input(INPUT_POST, 'model');
    $year               = filter_input(INPUT_POST, 'year');
    $transmission       = filter_input(INPUT_POST, 'transmission');
    $price              = filter_input(INPUT_POST, 'price');
    $milleage           = filter_input(INPUT_POST, 'milleage');

    $categoryID = 1;
    $trims = "trims"; 
    $colour = "blue"; 
    $trunkspace = "26L";
    $mpg = 25;
    $horsepower = 200;
    $drivetrain = 200;


    $db->run("INSERT INTO vehicles (
        categoryID,
        brand,
        years,
        transmission,
        trims, 
        colour, 
        trunkspace,
        mpg,
        horsepower,
        driveTrain)
        VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ? ,?)", [$categoryID,$brand,$year,$transmission,$trims,$colour,$trunkspace,$mpg,$horsepower,$drivetrain]);

}

?> 