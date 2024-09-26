<?php
// print_r(PDO::getAvailableDrivers());
phpinfo();
?>

<?php
$dsn = 'mysql:host=localhost;port=3306;database=contactManager;charset=utf8';  // Data source name (DSN)
$username = 'root';  // Database username
$password = '';      // Database password

try {
    // Create a new PDO instance
    $pdo = new PDO($dsn, $username, $password);

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Example query to fetch data
    $stmt = $pdo->query('SELECT * FROM users');

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row['username'] . "<br>";
    }

    echo "Connected successfully!";
} catch (PDOException $e) {
    // Handle connection errors
    echo "Connection failed: " . $e->getMessage();
}
?>
