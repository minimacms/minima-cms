<?php
$obj = new modernCMS();

// Sets the database conection variables.
$obj->host = 'localhost'; //change this
$obj->username = 'root'; //and this
$obj->password = ''; // this, as well
$obj->db = 'minima'; // aaaand this

// let's try to make a connection
$obj->connect();
error_reporting(0); // reporting errors is turned off. minima may produce errors, but we don't want to create huge error log files. if you're not fine with this, you can disable the option and try to fix the bugs causing minima to misbehave. 
?>
