<?php
include 'db_config.php';

try{
    if(!$_POST){
        die('Netinkamas metodas');
}

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare("INSERT INTO kontaktai (name, email, password)
VALUES (:name, :email, :password)");
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);

$name = $_POST['vardas'];
$email = $_POST['elpastas'];
$password = $_POST['slaptazodis'];
$stmt->execute();

echo "Jūsų paskyra sėkmingai sukurta.";
} catch (PDOException $e) {
echo "Error: " . $e->getMessage();
}

$conn = null;
?>