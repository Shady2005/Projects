<?php
$db_server = "localhost";
$db_user = "root"; 
$db_pass = "";     
$db_name = "regester_db";
try{
    $conn = new mysqli($db_server, $db_user, $db_pass, $db_name);
}


catch(mysqli_sql_exception){
    echo "Couldn't Connected!";
}


?>