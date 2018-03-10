<?php 
	ob_start();
	session_start();
	require_once 'actions/db_connect.php'; 
	

	$res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['user']);

	$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);

	require_once 'parts/head.php';
?>
<body>
	
<!-- NAVBAR -->
<div class="navbar navbar-inverse navbar-fixed-top custom-navbar" >
   <div class="container">
      <div class="navbar-header">
         <a class="navbar-brand" href="index.php">The Big Library</a>
      </div>
      <div>
         <ul class="nav navbar-nav pull-right">
            <li class="active"><a href="home.php">Home</a></li>
            <li><a href="register.php">Sign Up</a></li>
            <li><a href="contuct.php">Contuct</a></li>
         </ul>
      </div>
   </div>
</div>
<!-- BANNER -->
<header class="banner">
   <div class="container text-center"">
      <div class="row">
 <h1>The Big Eventlist</h1>
         <p>The Best Evetns are here </p>
      </div>
   </div>
</header>
<br><br>


	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th>image</th>
					<th>ID</th>
					<th>Name</th>
					<th>Date</th>
					<th>Capacity</th>
					<th>email</th>
					<th>Phonenumber</th>
					<th>Location</th>
				</tr>
			</thead>
			<tbody>
				<?php

	            $sql = "SELECT * FROM `events`
					LEFT JOIN address ON events.fk_address_id = address.address_id
					LEFT JOIN event_date ON events.fk_date_id = event_date.date_id
					LEFT JOIN event_type ON events.fk_event_type_id = event_type.type_id";
	            $result = $conn->query($sql);

	            if($result->num_rows > 0) { //für admin
	                while($row = $result->fetch_assoc()) {
	                    	echo "<tr>
	                    	<td><img src='".$row["image"]."' class='images'></td>
	                        <td>".$row['id']."</td>
	                        <td>".$row['name']."</td>
	                        <td>".$row['start_date']." <br>-<br> ".$row['end_date']."</td>
	                        <td>".$row['capacity']."</td>
	                        <td>".$row['contact_email']."</td>
	                        <td>".$row['contact_phonenumber']."</td>
	                        <td>".$row['location']."</td>
	                        <td>
	                            <a href='update.php?id=".$row['id']."'><button type='button'>Edit</button></a>
	                            <a href='delete.php?id=".$row['id']."'><button type='button'>Delete</button></a>
	                        </td>
	                    </tr>";
	                }
	            }else {
	                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
	            }
            ?>
			</tbody>
		</table>
	</div>	

</body>
</html>
<?php ob_end_flush(); ?>