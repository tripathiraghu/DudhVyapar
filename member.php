<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Members | Dudh Vyaparr</title>


<link rel="stylesheet" href="css/bootstrap.min.css" >

<link rel="icon" href="image/icon.png">
<!-- coustom Style sheet -->

<style type="text/css">
	<style type="text/css">
	.TFtable{
		width:100%; 
		border-collapse:collapse; 
	}
	.TFtable td{ 
		padding:7px; border:#4e95f4 1px solid;
	}
	/* provide some minimal visual accomodation for IE8 and below */
	.TFtable tr{
		background: #b8d1f3;
	}
	/*  Define the background color for all the ODD background rows  */
	.TFtable tr:nth-child(odd){ 
		background: #b8d1f3;
	}
	/*  Define the background color for all the EVEN background rows  */
	.TFtable tr:nth-child(even){
		background: #dae5f4;
	}
</style>


	
</style>

</head>
<body style="background-color: ghostwhite;">
<!-- navbar -->

  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="margin-bottom: 10%;">
      <a class="navbar-brand" href="home.php"><img src="image/icon.png" height="50" width="50" style="margin-right: 2%"> Dudh Vyapar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="addMember.php">Add Member</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Update Rate List</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="addMember.php">Bills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
        
      </div>
    </nav>
    <!-- nav bar ends here -->

    <!-- main tabular conataint start here -->
<div class="container" style="margin-top: 80px;">
<center>
<table class="TFtable">
	<tr style="background: black; color: white; font-size: 22px;"><td>S.NO</td><td>Name</td><td>Address</td><td>Mobile</td><td>Date</td></tr>
	
<?php

include 'connection.php';
$sql_tab = "SELECT * FROM member  ORDER BY id DESC";
$dt = mysqli_query($con, $sql_tab);
$s = mysqli_num_rows($dt);
while ($row = mysqli_fetch_array($dt, MYSQLI_ASSOC)) {
$id = $row['id'];
$name = $row['name'];
$address = $row['address'];
$mobile = $row['mobile'];
$date = $row['date'];

echo "<tr><td>".$id."</td><td>".$name."</td><td>".$address."</td><td>".$mobile."</td><td>".$date."</td></tr>";


}
?>



	
</table>
</center>


</div>





<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" ></script>
</body>
</html>