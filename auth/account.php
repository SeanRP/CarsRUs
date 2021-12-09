<?php 

require($_SERVER['DOCUMENT_ROOT'].'/carsRUS/auth/print_session.php');

require($_SERVER['DOCUMENT_ROOT'].'/carsRUS/model/database_class.php');
$db = new Database();

$user = $db->run("SELECT * FROM users WHERE userName=?", [$userName])->fetch();




?>