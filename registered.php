<?php
session_start();

$dsn = "mysql:host=localhost;dbname=relax";
$dbuser = "root";
$dbpass = "";
$pdo = new PDO($dsn, $dbuser, $dbpass);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["fname"];
    $address = $_POST["faddress"];
    $email = $_POST["femail"];
    $city = $_POST["fcity"];
    $pass = $_POST["fpass"]; // Assign the value of password field to $pass
    $query = "INSERT INTO users (name, address, email, pass, city) VALUES (:name, :address, :email, :pass, :city)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":address", $address);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":city", $city);
    $stmt->bindParam(":pass", $pass);
    $stmt->execute();
    $_SESSION['name'] = $name;
    header("Location: ../website/index_main_registered.php");
}
?>
