<?php

	require_once 'db_connect.php';


if($_POST) {

    $id = $_POST['id'];

 

    $sql = "DELETE FROM events WHERE id = {$id}";

    if($connect->query($sql) === TRUE) {

    	echo "<div class='change'>";
        echo "<p>Successfully deleted!!</p>";

        echo "<a href='../home.php'><button type='button' >Back</button></a>";

        echo "</div>";

    } else {

        echo "Error updating record : " . $connect->error;

    }

 

    $connect->close();

}

 

?>