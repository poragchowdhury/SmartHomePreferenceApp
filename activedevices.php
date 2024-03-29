<!DOCTYPE html>
<!--
Author: Moinul Morshed Porag Chowdhury
Contributors: ---
Date Last Modified: 04/19/2022
Description: Finds all devices currently connected to Openhab and Lists them as links to mywebpage2.php
Includes: createfiles.php Item_handler.php nav-bar.php
Included In: ---
Links To: mywebpage2.php home.php
Links From: ---
-->
<html lang="en">
<head>
	<title>Smart Home Device Scheduler</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php include 'createfiles.php'; ?>
<?php include 'Item_handler.php';?>

<!-- make the corresponding navigation bar to active -->
<?php include('nav-bar.php'); ?>
<?php echo "<script> document.getElementById('activedevices').className += ' active';</script>"; ?>

<div class="container">
	<div class="jumbotron">
	  <h1>Active devices</h3>
	  <p>Below devices are active in the smart home.</p>
	</div>
  <?php 
    $items = array_values(getAllItems('localhost:8080',$usr,$psd));
	echo '<div class ="border border-primary">';		
	foreach($items as $item){
	echo '<form method="post" action="mywebpage2.php?val='.array_values($item)[4].'"><div class="d-block p-2">
			<button class="btn btn-primary" type="submit">'.array_values($item)[4].'</button> 
		 </div></form>';
	}
	echo '</div>';
  ?>

  </br>
  <!--button class="btn btn-primary" type="button" onclick="location.href='home.php'">Install new bindings</button-->
	<button class="btn btn-primary" type="button" onclick="location.href='home.php'">Back</button>

</div>
</body>
</html>