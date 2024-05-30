<?php
// Include en require doen hetzelfde maar met include kun je ook een array vullen.
$configuratie = include '../src/config.php';

// Verbinding met de database maken
$conn = new PDO('mysql:host=' . $configuratie['DB_SERVER'] . ';dbname=' . $configuratie['DB_NAME'], $configuratie['DB_USER'], $configuratie['DB_PASS']);
