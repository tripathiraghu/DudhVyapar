<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Milk Collection | Dudh Vyaparr</title>


<link rel="stylesheet" href="css/bootstrap.min.css" >

<link rel="icon" href="image/icon.png">
<!-- coustom Style sheet -->

<style type="text/css">
	


	
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
          <li class="nav-item ">
            <a class="nav-link" href="addMember.php">Add Member</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="updateRate.php">Update Rate List</a>
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

<!-- navebar Ends -->
<!-- Member add form -->
<div class="container">
<h2 style="margin-top: 100px;" align="center">Add Milk</h2>
<form method="post" action="addMemberQuery.php" name="fr1" enctype="multipart/form-data">
 <div class="forssm-row">
                  <!-- select Name -->

                  <div class="form-group col-md-12">
      <label for="inputState">Member Name</label>
      <select id="inputState" name="state" class="form-control">
        <option selected>Choose...</option>
        <!-- user list fetching from DataBase -->

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

echo "<option>".$name."</option>";


}
?>







        
<!-- user list fetching ends -->
        </select>
    </div>
                <div class="form-group" style="margin-top: 15px; margin-left: 10px ;margin-right: 10px;">
                    <label for="labelName">S N F</label>
                            <input type="text" name="snf" class="form-control" id="name" placeholder="S N F" required>
                        </div>

                        <div class="form-group" style="margin-top: 15px; margin-left: 10px ;margin-right: 10px;">
                            <label for="labelName">Fat</label>
                            <input type="text" name="fat" class="form-control" id="address" placeholder="8.0" required>
                        </div>
                        <!-- mobile Number -->
                        <div class="form-group" style="margin-top: 15px; margin-left: 10px ;margin-right: 10px;">
                            <label for="Mobile Number" required>Rate</label>
                            <input type="number" name="rate" class="form-control" id="mobile" placeholder="254">
                        </div>
                        <!-- <div class="form-group" style="margin-top: 15px; margin-left: 10px ;margin-right: 10px;">
                        	<label for="profile_pic" required>Select A Profile Picture</label>
                        <input type="file" name="fileToUpload" id="fileToUpload" >
                    </div> -->
                       <button type="submit" class="btn " style="width:96%; background-color:rgb(52, 58, 64);color: #fff; font-size: 20px; margin:10px; ">Add</button>
                    </div>
               

                       <button  onclick="window.location.href = 'home.php';"  class="btn " style="width:96%; background-color:rgb(52, 58, 64);color: #fff; font-size: 20px; margin:10px; ">Back To Home</button>
 </form>

</div>






<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" ></script>

</body>
</html>