<?php

require_once '../src/connect.php.php';

// Gegevens ophalen uit een database
$studenten = $conn->query('SELECT * FROM studenten');


// Over studenten loopen
foreach($studenten as $student)
{
    echo $student['naam'];
    echo $student['ingeruild'];
}


// Rij invoeren
$conn->query('INSERT INTO studenten (naam, ingeruild) VALUES ("Benny", "nee")');


// Rij wijzigen
$student_id = 1;
$conn->query("UPDATE studenten SET ingeruild='ja' WHERE id={$$student_id}");
