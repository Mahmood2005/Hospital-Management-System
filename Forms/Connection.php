<?php
$localhost = 'localhost';
$username = 'root';
$password = '';
$database = 'june-hospital';
$dbconnection = new mysqli($localhost,$username,$password,$database);
if ($dbconnection->connect_error) {
        echo 'Not Connected'.$dbconnection->connect_error;
}else {
    echo 'Connected';
}

?>