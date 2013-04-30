<?php
$obj = new modernCMS();

// Postavlja vezu s databazom - varijable veze
$obj->host = 'localhost'; //change this
$obj->username = 'pulsir_sql1'; //and this
$obj->password = 'amadea'; // this, as well
$obj->db = 'pulsir_ss'; // aaaand this

// Spajanje na databazu
$obj->connect();
?>
