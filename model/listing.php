<?php
require($_SERVER['DOCUMENT_ROOT'].'/carsRUS/model/database_class.php');
$db = new Database();


if(isset($_POST['submit'])) { 
 
    $args = array(
        'categoryID' =>FILTER_VALIDATE_INT,
        'make'=>FILTER_SANITIZE_STRING, 
        'model'=>FILTER_SANITIZE_STRING,
        'years'=>FILTER_SANITIZE_STRING,
        'transmission'=>FILTER_SANITIZE_STRING,
        'trims'=>FILTER_SANITIZE_STRING,
        'colour'=>FILTER_SANITIZE_STRING,
        'trunkSpace'=>FILTER_SANITIZE_STRING,
        'mpg'=>FILTER_VALIDATE_INT,
        'horsePower'=>FILTER_VALIDATE_INT,
        'driveTrain'=>FILTER_SANITIZE_STRING
    );

    $post_arr = filter_input_array(INPUT_POST,$args);
    echo "<pre>";
    echo print_r($post_arr);
    echo"</pre>";
    
    //generate vehicle code to match images
    $vehicle_code = strtolower($post_arr['make']) . "_" . strtolower($post_arr['model']) . "_" . $post_arr['years'];
    echo $vehicle_code;

    $db->run("INSERT INTO vehicles (
        categoryID,
        make,
        model,
        years,
        vehicleCode, 
        transmission, 
        trims,
        colour,
        trunkSpace,
        mpg, 
        horsePower,
        driveTrain)
        VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ? ,? ,? ,?)", [
            $post_arr['categoryID'],
            $post_arr['make'],
            $post_arr['model'],
            $post_arr['years'],
            $vehicle_code,
            $post_arr['transmission'],
            $post_arr['trims'],
            $post_arr['colour'],
            $post_arr['trunkSpace'],
            $post_arr['mpg'],
            $post_arr['horsePower'],
            $post_arr['driveTrain']
        ]);

}

?> 