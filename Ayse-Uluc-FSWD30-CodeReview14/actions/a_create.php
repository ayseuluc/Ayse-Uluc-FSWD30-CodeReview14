<?php

	require_once 'db_connect.php';

	if($_POST) {

	
if($_POST) {

    $name = $_POST['name'];
    $description = $_POST['description'];
    $img = $_POST['img'];
    $capacity = $_POST['capacity'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $url = $_POST['url'];
    $genre = $_POST['genre'];
    $date = $_POST['date'];
    $time = $_POST['time'];
   

 

    $sql = "INSERT INTO events (name, description, img, capacity, email, phone, address, url, genre, date, time) VALUES ('$name', '$description', '$img','$capacity', '$email', '$phone', '$address', '$url', '$genre', '$date','$time')";

    if($connect->query($sql) === TRUE) {

        echo "<div class='change'>";

        echo "<p class='formsetting'>New Record Successfully Created</p>";

        echo "<a href='../create.php'><button type='button' class='btnsubmit'>Back</button></a>";

        echo "<a href='../home.php'><button type='button' class='btnsubmit' >Home</button></a>";

        echo "</div>";

    } else {

        echo "Error " . $sql . ' ' . $connect->connect_error;

    }

 

    $connect->close();

}

 

?>