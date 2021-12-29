<?php

include 'db_config.php';

$email = $_POST['elpastas'];
$form_password = $_POST['slaptazodis'];

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$sql = "SELECT COUNT(*)
FROM mano_db.kontaktai
WHERE email= '{$email}' AND password = '{$form_password}'";

foreach ($conn->query($sql) as $row) {
    $row['COUNT(*)'];
}

if($row['COUNT(*)'] === 1) {
    echo "<strong>Prisijungei!</strong>";
} else {
    echo "<strong>Nepavyko!</strong>";
}