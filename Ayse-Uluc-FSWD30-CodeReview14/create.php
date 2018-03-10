<?php 
require_once 'parts/head.php';
?>

</head>
<body>

	<fieldset>

	    <legend>Add Table</legend>

	    <form action="actions/a_create.php" method="post">
	        <table cellspacing="0" cellpadding="0">
	      
            <tr>
            <th>Name</th>

                <td><input type="text" name="name" placeholder="name" /></td>

            </tr>

            <tr>

                <th>Description</th>

                <td><input type="text" name="description" placeholder="short description" /></td>

            </tr>
            <tr>

                <th>Img URL</th>

                <td><input type="text" name="img" placeholder="image url" /></td>

            </tr>

            <tr>

                <th>Capacity</th>

                <td><input type="text" name="capacity" placeholder="max capacity" /></td>

            </tr>

            <tr>

                <th>Email</th>

                <td><input type="text" name="email" placeholder="event email" /></td>

            </tr>

            <tr>

                <th>Phone</th>

                <td><input type="text" name="phone" placeholder="contact number" /></td>

            </tr>

            <tr>

                <th>Address</th>

                <td><input type="text" name="address" placeholder="event address" /></td>

            </tr>

            <tr>

                <th>URL</th>

                <td><input type="text" name="url" placeholder="event/artist www" /></td>

            </tr>

            <tr>

                <th>Genre</th>

                <td><input type="text" name="genre" placeholder="genre" /></td>

            </tr>

            <tr>

                <th>Date</th>

                <td><input type="text" name="date" placeholder="YYYY-MM-DD" /></td>

            </tr>

            <tr>

                <th>Time</th>

                <td><input type="text" name="time" placeholder="HH:MM:SS" /></td>

            </tr>

            <tr>

                <td><button type="submit" class="btnsubmit">Add Event</button></td>

                <td><a href="home.php"><button type="button" class="btnsubmit">Back</button></a></td>

            </tr>

        </table>

    </form>

	</fieldset>

</body>
</html>