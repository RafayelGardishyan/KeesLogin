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
$sql = "SELECT id, name, password FROM users";
$result = $conn->query($sql);

echo "Login page<br>";
echo "<a href=\"/register.php\">Register</a><br>";

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        if ($get["name"] == $row["name"]) {
            $name = $get['name'];
            if ($get["password"] == $row["password"]) {
                echo "Hello, " . $get["name"];
                header("Location: /?loggedin=True&user=$name");
            }
    }
    }
}else {
  echo "add some users";
}
$conn->close();



?>

<html>
    
<body>
<form action="/login.php" method="get"><input type="text" name="name" placeholder="Username"><input type="password" name="password" placeholder="Password"><input type="submit" value="enter"></form>

</body>

</html>
