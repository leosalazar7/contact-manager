<?php
    $servername = 'localhost';
    $dbuname = 'root';
    $dbpword = 'nico19981228';

    try {
        $conn = new PDO('mysql:host=localhost;dbname=contactManager', $dbuname, $dbpword);

        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connected successfully.<br>';
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }

    // Check if user exists
    $sql = 'select * from users where Login = :username and Password = :password';
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':username', $_GET['username']);
    $stmt->bindParam(':password', $_GET['password']);

    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $usr = $stmt->fetch(PDO::FETCH_ASSOC);
        echo 'Welcome back, '.$usr['FirstName'].'.';
    } else {
        echo 'User does not exist';
    }
?>