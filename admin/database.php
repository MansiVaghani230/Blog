<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "crypto_blogs";

// Procedural
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // Connection successful
    // echo "Connected successfully";
    // Optionally, you can print out the connection object to debug
    // var_dump($conn);
}

// OOP (commented out)
// class Database {
//     private $conn = null;
//     private function __construct($hostname = "localhost", $username ="root", $passwords = "", $database = "app"){
//     }
// }

// PDO Connection (commented out)

// Singleton pattern (commented out)
// class Database {
//     private $conn = null;
//     private function __construct($hostname = "localhost", $username ="root", $passwords = "", $database = "app"){
//         if(self::$conn === null){
//             // Database connection
//         }
//         return self::$conn;
//     }

//     public static function connect($hostname = "localhost", $username ="root", $passwords = "", $database = "app") {
//         $db = new Database($hostname, $username, $passwords, $database);
//         return $db->conn;
//     }
// }

// $conn = Database::connection("localhost", "root", "Admin@123", "admin");
?>
