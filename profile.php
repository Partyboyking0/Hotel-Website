<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <?php require ('inc/link.php') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .sub-heading{
            display: flex;
            
            align-items: center;
            margin-bottom: 2px;
            
        }
        #address{
            
        }
    </style>
</head>

<body>
     <?php 
    // Start the session to access session variables
// session_start();
    
    // Include the header file
    // require ('inc/header_registered.php');

    // Check if the user is logged in (i.e., if the session variable 'name' is set)
    // if (isset($_SESSION['name'])) {
        // Fetch user information from session variables
        // $name2 = $_SESSION['name'];
        // $dsn = "mysql:host=localhost;dbname=relax";
        // $dbpassword = "";
        // $dbusername = "root";

        // $pdo = new PDO($dsn, $dbusername, $dbpassword);
        // echo $username;
        // $query5 = "SELECT name FROM users WHERE name = SESSION['name']";
        // $stmt5 = $pdo->prepare($query5);
        // $stmt5->bindParam(':name', $name3);
        // $stmt5->execute();
        // $result5 = $stmt5->fetch(PDO::FETCH_ASSOC);
        // $address2 = $_SESSION['address'];
        // $email2 = $_SESSION['email'];
        // $city2 = $_SESSION['city'];
        // $pass2 = $_SESSION['pass'];
    
        // Display user information
        // echo "<h1>Welcome, $name2!</h1>";
        // echo "<p>Address: $address2</p>";
        // echo "<p>Email: $email2</p>";
        // echo "<p>City: $city2</p>";
        // echo "<p>Password: $pass2</p>";
    // }
    //  else {
    //     // If the user is not logged in, display a message or redirect them to the login page
    //     echo "<p>Please log in to view your profile.</p>";
    // }

    // Include the footer or any other necessary scripts
     ?>

<?php
    // Start the session to access session variables
    // session_start();

    // Include the header file
    require 'inc/header_registered.php';

    // Check if the user is logged in (i.e., if the session variable 'name' is set)
    if (isset($_SESSION['name'])) {
        // Fetch user information from session variables
        $name = $_SESSION['name'];

        // Database connection details
        $dsn = "mysql:host=localhost;dbname=relax";
        $dbusername = "root";
        $dbpassword = "";

        // Establish connection
        $pdo = new PDO($dsn, $dbusername, $dbpassword);

        // Prepare and execute the query
        $query = "SELECT * FROM users WHERE name = :name";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->execute();

        // Fetch user data
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Display user information and a button to edit
        echo "<h1 class='h-font fw-bold '>Welcome, $name!</h1>";
        echo "<p class='sub-heading' >Address: <span id='address'>" . $user['address'] . "</span></p>";
        echo "<p class='sub-heading'>Email: <span id='email'>" . $user['email'] . "</span></p>";
        echo "<p class='sub-heading'>City: <span id='city'>" . $user['city'] . "</span></p>";
        
        
       
    } else {
        // If the user is not logged in, display a message or redirect them to the login page
        echo "<p>Please log in to view your profile.</p>";
    }
    ?>
<h2 style = "align-items: center;">This part of website is under construction</h2>









    <?php require 'inc/footer.php' ?>
</body>

</html>