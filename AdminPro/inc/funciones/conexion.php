<?php

$conn = new mysqli('localhost', 'root', 'root', 'db_admin_pro');

if($conn->connect_error){
    echo $conn->connect_error;
}

$conn->set_charset('utf8');