<?php 

	require_once 'actions/db_connect.php';

	$sql= "SELECT * FROM `events`
			LEFT JOIN address ON events.fk_address_id = address.address_id
			LEFT JOIN event_date ON events.fk_date_id = event_date.date_id
			LEFT JOIN event_type ON events.fk_event_type_id = event_type.type_id";

	$result = mysqli_query($conn, $sql);

	//all bootstrap links in head
	require_once 'parts/head.php';
?>

<body>

<!-- NAVBAR -->
<div class="navbar navbar-inverse navbar-fixed-top custom-navbar" >
      <div class="navbar-header">
         <a class="navbar-brand" href="index.php">The Big Eventlist</a>
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
    <div class="row contuct_form_div">
		<?php 
			while ($row = mysqli_fetch_assoc($result)) {
				echo 
					"<div class='col-md-5 col-lg-5 col-5'>
						<img src='".$row["image"]."' class='images'>
						<div>
							<h3>".$row["name"]."</h3>
							<p>".$row["location"]."</p>
						</div>
					</div>";
			};
		?>
		
	</div>
</div>
</div>
</body>
</html>