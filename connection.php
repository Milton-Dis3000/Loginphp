<?php
try{
    $mysqli = new mysqli("localhost", "root", "", "red_social");
}catch(mysqli_sql_exception $e){
    echo "Error:" . $e->getMessage();
}