<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

/**
 * Created by PhpStorm.
 * User: R
 * Date: 08/10/2017
 * Time: 14:43
 */


/** @var TYPE_NAME $get */
$get = $_GET;
echo "<a href=\"/login.php\">Login</a><br>";
if ($get) {
    $name = "'".$get['name']."'";
    $password = "'".$get['password']."'";
    $sql = "INSERT INTO users (name, password)
    VALUES ($name, $password)";
    if ($conn->query($sql) === TRUE) {
        echo "New account created successfully";
        header("Location: /login.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
<html>
<body>
<form action="/register.php" method="get">
    <input type="text" name="name" placeholder="Name">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Register">
</form>
</body>
</html>
