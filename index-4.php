<?php 
	include 'db_connect.php';
	$result = mysqli_query($mysqli, "SELECT * FROM wishes_moniter");
	if(! $result) {
      die("SQL Error: " . mysqli_error($mysqli));
  }
  $Name = array();
	$Email= array();
	$Message = array();
  while ($row = mysqli_fetch_array($result)) {
		$validate = $row['display'];
		if($validate == 1) {
			$name = $row['name'];
			$email = $row['email'];
			$message = $row['message'];
			if(in_array($email,$Email)) {
				$key = array_search($email,$Email);
				$Message[$key] = $Message[$key] . "#" . $message;
			} else {
				array_push($Name,$name);
				array_push($Email,$email);
				array_push($Message,$message);
			}		
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Your Wishes</title>
     <meta charset="utf-8">
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/form.css">
     <script src="js/jquery.js"></script>
     <!--<script src="js/forms.js"></script>-->
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/superfish.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
		 <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
     <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
     <link href="bootstrap/css/tweaks.css" rel="stylesheet" type="text/css">
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
     <body  class="">
<!--==============================header=================================-->
 <header> 
  <div class="container_12">
    <div class="grid_12"> 
    <h1><a href="index.html"><img src="images/logo.png" alt="Sara  &amp;  Robert Personal Wedding Page"></a> </h1>
         <div class="menu_block">
           <nav  class="" >
            <ul class="sf-menu">
                   <li><a href="index.html">Home</a></li>
                   <li class="with_ul"><a href="index-1.html">About Us </a>
                     <ul>
                         <li><a href="#"> Presentation</a></li>
                         <li><a href="#">Calendar</a></li>
                     </ul>
                   </li>
                   <li><a href="index-2.html">Weddings</a></li>
                   <li><a href="index-3.html">Photo Album</a></li>
                   <li class="current"><a href="index-4.php">Your Wishes</a></li>
                   <li><a href="index-5.html">Contact Us</a></li>
                 </ul>
              </nav>
           <div class="clear"></div>
           </div>
           <div class="clear"></div>
      </div>
    </div>
</header>

<!--=======content================================-->
<div class="content">
			<?php if(isset($_GET["success"]) && $_GET["success"] == true) { ?>
      <div class="alert alert-success alert-message" id="alert_template" style="display: block;">
        <strong>Success! </strong>Thanks for your lovely wishes, but i do have nasty friends so please bear till i approve!! 
      </div>
      <script>
        window.setTimeout(function() {
            $(".alert-message").fadeTo(500, 0).slideUp(500, function(){
              $(this).remove(); 
            }); 
        }, 3000);
      </script>
    <?php } ?>
  <div class="container_12 pp">
    <div class="grid_7">
      <h3><p class="muted">Your Wishes</p></h3>
			<?php for($i=0;$i<count($Email);$i++) { ?>
        <div style="word-wrap: break-word;" class="well">
        <span><strong><p class="text-info"><?php echo $Name[$i]; ?></p></strong></span>
				<?php 
					$arrMess = split('#',$Message[$i]);
					foreach($arrMess as $arr) {
						echo $arr; 
						echo '<br/>';
					}
				?>
        </div>
      </blockquote>
      <?php } ?>
      <div class="border"></div>
    </div>
		<script>
			function validate() {
				var name = document.forms["form"]["name"].value;
				var email = document.forms["form"]["email"].value;
				var message = document.forms["form"]["message"].value;
				if(name==null || name=="" || email=="" || email == null || message == null || message =="")
				{
					alert("One of the fields is blank. Please fill the complete information");
					return false;
				} else if (name.length >= 30){
					alert("Name field is greater than 30 characters.Please reduce the size");
					return false;
				} else if (email.length >= 30) {
					alert("Email field is greater than 30 characters.Please reduce the size");
					return false;
				} else if (message.length >=255) {
					alert("Message field is greater than 255 characters.Please reduce the size");
					return false;
				}
				var atpos=email.indexOf("@");
				var dotpos=email.lastIndexOf(".");
				if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
 				{
  				alert("Not a valid e-mail address");
  				return false;
 				}

				return true;
			}	
		</script>
    <div class="grid_5">
      <h3><p class="muted">Add Your Wish</p></h3>
      <form id="form" method="post" action="add_wish.php" onsubmit="return validate();">
      <fieldset>
      <label class="name">
      <input type="text" id="name" name="name" placeholder="Your Name:">
			</label>
      <br class="clear">
      <label class="email">
      <input type="text" id="email" name="email" placeholder="E-mail:">
			</label>
      <br class="clear">
      <label class="message">
      <textarea id="message" name="message"  placeholder="Message"></textarea>
			</label>
      <div class="clear"></div>
			</fieldset>
			<input class="btn btn-inverse" type="submit" value="Submit"/>
			</form>
    </div>
  </div>
</div>
<!--==============================footer=================================-->

<footer>    
  <div class="container_12">
    <div class="grid_12">
      <div class="socials">
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
      </div>
     <p><a href="index.html" class="footer_logo"><img src="images/footer_logo.png"  alt=""></a>  &copy; 2013 | <a href="#">Privacy Policy</a> | Website  designed by <a href="http://www.templatemonster.com" rel="nofollow">TemplateMonster.com</a></p><p>Professional free web templates <a href="http://www.websitetemplatesonline.com" target="_blank">at www.websitetemplatesonline.com</a>. <a href="http://www.getjoomlatemplatesfree.com/" title="Joomla themes">Get Joomla Templates Free.com</a> - free Joomla templates.</p>
     
    </div>
    <div class="clear"></div>
  </div>
</footer>
</body>
</html>
