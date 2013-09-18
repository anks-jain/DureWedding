<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Admin</title>
     <meta charset="utf-8">
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <script src="js/jquery.js"></script>
		 <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
     <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
     <link href="bootstrap/css/tweaks.css" rel="stylesheet" type="text/css">
		<style>
			.span3 {
				word-wrap: break-word;
			}
		</style>
     <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">

    <![endif]-->
     </head>
<body>
<?php 
include 'db_connect.php';
$result = mysqli_query($mysqli, "SELECT * FROM wishes_moniter");
  if(! $result) {
      die("SQL Error: " . mysqli_error($mysqli));
  }
  $Name = array();
  $Email= array();
  $Message = array();
  $Cname = array();
  $Cemail= array();
  $Cmessage = array();
  while ($row = mysqli_fetch_array($result)) {
		$validate = $row['display'];
      $name = $row['name'];
      $email = $row['email'];
      $message = $row['message'];
    if($validate == 0){ 
      array_push($Name,$name);
      array_push($Email,$email);
      array_push($Message,$message);
		} else {
			array_push($Cname,$name);
			array_push($Cemail,$email);
			array_push($Cmessage,$message);
		}
  }
?>
	<div class="container">
	<div class="span3">
	<h4>Not on page yet, to validate</h4>
	<form id="form2" method="post" action="validate.php">
<?php
	for($i=0;$i<count($Email);$i++) {
?>
		<div class="well">
		<input type="checkbox" name="<?php echo $i;?>" value="<?php echo $Email[$i];?>" /><br>
<?php
		echo $Name[$i];
		echo '<br/>';
		echo $Email[$i];
		echo '<br/>';
		echo $Message[$i];
		echo '<br/>';
		echo '<br/>';
?>
	</div>
<?php
	}
?>
	<input class="btn btn-success" type="submit" value="Validate"/>
	</form>
	</div>

	<div class="span3">
	<h4>Not on page yet, to cancel</h4>
	<form id="form3" method="post" action="delete.php">
<?php
	for($j=0;$j<count($Email);$j++) {
?>
		<div class="well">
		<input type="checkbox" name="<?php echo $j;?>" value="<?php echo $Email[$j];?>" /><br>
<?php
		echo $Name[$j];
		echo '<br/>';
		echo $Email[$j];
		echo '<br/>';
		echo $Message[$j];
		echo '<br/>';
		echo '<br/>';
?>
	</div>
<?php
	}
?>
	<input class="btn btn-success" type="submit" value="Delete"/>
	</form>
	</div>

	<div class="span3">
		<h4> On page, decide to cancel</h4>
	<form id="form4" method="post" action="delete.php">
<?php
	for($k=0;$k<count($Cemail);$k++) {
?>
		<div class="well">
		<input type="checkbox" name="<?php echo $k;?>" value="<?php echo $Cemail[$k];?>" /><br>
<?php
		echo $Cname[$k];
		echo '<br/>';
		echo $Cemail[$k];
		echo '<br/>';
		echo $Cmessage[$k];
		echo '<br/>';
		echo '<br/>';
?>
	</div>
<?php
	}
?>
	<input class="btn btn-success" type="submit" value="Delete"/>
	</form>
		</div>
	</div>
</body>
</html>
