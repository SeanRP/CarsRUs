<?php
require('../model/database.php');
require('../model/vehicle_db.php');
require('../model/category_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_vehicles';
    }
}

if ($action == 'list_vehicles') {
    $category_id = filter_input(INPUT_GET, 'category_id', 
            FILTER_VALIDATE_INT);
    if ($category_id == NULL || $category_id == FALSE) {
        $category_id = 1;
    }
    $category_name = get_category_name($category_id);
    $categories = get_categories();
    $vehicles = get_vehicles_by_category($category_id);
    include('vehicle_list.php');
} else if ($action == 'delete_vehicle') {
    $vehicle_id = filter_input(INPUT_POST, 'vehicle_id', 
            FILTER_VALIDATE_INT);
    $category_id = filter_input(INPUT_POST, 'category_id', 
            FILTER_VALIDATE_INT);
    if ($category_id == NULL || $category_id == FALSE ||
            $vehicle_id == NULL || $vehicle_id == FALSE) {
        $error = "Missing or incorrect vehicle id or category id.";
        include('../errors/error.php');
    } else { 
        delete_vehicle($vehicle_id);
        header("Location: .?category_id=$category_id");
    }
} else if ($action == 'show_add_form') {
    $categories = get_categories();
    include('vehicle_add.php');    
} else if ($action == 'add_vehicle') {
    $category_id = filter_input(INPUT_POST, 'category_id', 
            FILTER_VALIDATE_INT);
    $code = filter_input(INPUT_POST, 'code');
    $name = filter_input(INPUT_POST, 'name');
    $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
    if ($category_id == NULL || $category_id == FALSE || $code == NULL || 
            $name == NULL || $price == NULL || $price == FALSE) {
        $error = "Invalid vehicle data. Check all fields and try again.";
        include('../errors/error.php');
    } else { 
        add_vehicle($category_id, $code, $name, $price);
        header("Location: .?category_id=$category_id");
    }
}    
?>