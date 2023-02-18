<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blog";
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $komen = $_POST['komen'];
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO students (nama, nim, komen) VALUES ('$nama', '$nim', '$komen')";

    if ($conn->query($sql) === TRUE) {
        include 'index.php'; 
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>

