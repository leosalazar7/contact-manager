<?php
$dsn = 'mysql:host=127.0.0.1;dbname=contactManager;charset=utf8';  // Data source name (DSN)
$username = 'root';  // Database username
$password = 'nico19981228';      // Database password

try {
    // Create a new PDO instance
    $pdo = new PDO($dsn, $username, $password);

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $username = $_GET['username'];
    $password = $_GET['password'];

    // Example query to fetch data
    $stmt = $pdo->prepare('SELECT * FROM users where Login = :username and Password = :password');
    $stmt->bindParam('username', $username, PDO::PARAM_STR);
    $stmt->bindParam('password', $password, PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        header('Location: ../pages/account.html');
        exit();
    } else {
        echo "Invalid username/password combination. Try again.";
    }

} catch (PDOException $e) {
    // Handle connection errors
    echo "Connection failed: " . $e->getMessage();
}
?>
