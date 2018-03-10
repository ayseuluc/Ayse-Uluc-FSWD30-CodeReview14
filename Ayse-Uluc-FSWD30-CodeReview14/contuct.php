<?php 
	ob_start();
	session_start();
	require_once 'actions/db_connect.php'; 
	

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
         <h1>The Big Library</h1>
         <p>Welcome to oue Online Library</p>
      </div>
   </div>
</header>
<br><br>

 <div class="container ">
    <div class="row contuct_form_div">
      <div class="col-lg-4 col-md-4 col-4">
        
      </div>
      <div class="col-lg-5 col-md-5 col-5 offset-lg-5 offset-md-5 col-offset-5" id="box">
        
       <form class="form-horizontal" role="form" method="post" action="index.php">
       		<h1>Contuct Us</h1>
	<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-sm-2 control-label">Email</label>
		<div class="col-sm-10">
			<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
		</div>
	</div>
	<div class="form-group">
		<label for="message" class="col-sm-2 control-label">Message</label>
		<div class="col-sm-10">
			<textarea class="form-control" rows="4" name="message"></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<! Will be used to display an alert to the user>
		</div>
	</div>
	
</form>
           
      </div>
    </div>
  </div>
</body>
</html>
<?php ob_end_flush(); ?>
