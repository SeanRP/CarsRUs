<?php
function get_vehicles_by_category($category_id) {
    global $db;
    $query = 'SELECT * FROM vehicles
              WHERE vehicles.categoryID = :category_id
              ORDER BY vehicleID';
    $statement = $db->prepare($query);
    $statement->bindValue(":category_id", $category_id);
    $statement->execute();
    $vehicles = $statement->fetchAll();
    $statement->closeCursor();
    return $vehicles;
}

function get_vehicle($vehicle_id) {
    global $db;
    $query = 'SELECT * FROM vehicles
              WHERE vehicleID = :vehicle_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":vehicle_id", $vehicle_id);
    $statement->execute();
    $vehicle = $statement->fetch();
    $statement->closeCursor();
    return $vehicle;
}

function delete_vehicle($vehicle_id) {
    global $db;
    $query = 'DELETE FROM vehicles
              WHERE vehicleID = :vehicle_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':vehicle_id', $vehicle_id);
    $statement->execute();
    $statement->closeCursor();
}

function add_vehicle($category_id, $code, $name, $price) {
    global $db;
    $query = 'INSERT INTO vehicles
                 (categoryID, vehicleCode, vehicleName, listPrice)
              VALUES
                 (:category_id, :code, :name, :price)';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':code', $code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':price', $price);
    $statement->execute();
    $statement->closeCursor();
}
?>