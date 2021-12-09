<?php 
session_start();
session_destroy();
header('location: /carsRUS/view/log_in.php');

?>