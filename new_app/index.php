<?php
    $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $dbname = "myDB";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo "Connected successfully!";
    }

    $sql = "CREATE DATABASE IF NOT EXISTS myDB";
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully!";
    } else {
        echo "Error creating database!" . mysqli_connect_error($conn);
    }
    
    $sql = "CREATE TABLE IF NOT EXISTS myTable (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
    if (mysqli_query($conn, $sql)) {
        echo "Table created successfully!";
    } else {
        echo "Error creating table!" . mysqli_connect_error($conn);
    }

    
    $sql = "SELECT id, firstname, lastname, reg_date FROM myTable";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo ("<table><tr><th>Id</th><th>Name</th><th>Surname</th><th>Registration date</th></tr>");
        while($row = mysqli_fetch_assoc($result)) {
            echo ("<tr><td>" . $row["id"] . "</td>" . "<td>" . $row["firstname"] . "</td>" . "<td>" . $row["lastname"] . "</td>" . "<td>" . $row["reg_date"] . "</td>" . "</tr>");
        }
    } else {
        echo "No results";
    }
