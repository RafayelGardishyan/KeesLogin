<?php
/**
 * Created by PhpStorm.
 * User: R
 * Date: 10/10/2017
 * Time: 20:01
 */

if ($_GET['loggedin'] === "True"){
    $name = $_GET['user'];
    echo "Welcome " . $name;
    echo "<br><a href='/'>Logout</a>";
}else{
    header("Location: /login.php");
}

?>