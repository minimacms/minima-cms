<?php
$obj = new modernCMS();

// Postavlja vezu s databazom - varijable veze
$obj->host = 'localhost'; //change this
$obj->username = 'root'; //and this
$obj->password = 'hamster'; // this, as well
$obj->db = 'minima'; // aaaand this

// Spajanje na databazu
$obj->connect();
?>
