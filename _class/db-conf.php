<?php
$obj = new modernCMS();

// Sets the database connection variables
$obj->host = 'localhost'; //change this
$obj->username = 'root'; //and this
$obj->password = 'hamster'; // this, as well
$obj->db = 'minima'; // aaaand this

// connects to the database
$obj->connect();
?>
