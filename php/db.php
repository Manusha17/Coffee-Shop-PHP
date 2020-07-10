<?php

function Createdb()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "coffeestore";

    $con = mysqli_connect($servername, $username, $password);

    if (!$con) {
        die("Connection Failed: " . mysqli_connect_error());
    }

    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

    if (mysqli_query($con, $sql)) {
        $con = mysqli_connect($servername, $username, $password, $dbname);

        $sql = "
                CREATE TABLE IF NOT EXISTS coffee(
                    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    coffee_name VARCHAR(25) NOT NULL,
                    coffee_type VARCHAR(10),
                    coffee_price FLOAT
                );
        ";

        if (mysqli_query($con, $sql)) {
            echo "Table Created";
        } else
            echo "Error creating table";
    } else
        echo "error while creating DB" . mysqli_error($con);
}
