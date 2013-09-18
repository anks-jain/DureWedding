<?php
include 'db_connect.php';
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
      
$username = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$display = 0;              
              
if ($insert_stmt = $mysqli->prepare("INSERT INTO wishes_moniter (email,name, message,display) VALUES (?,?, ?, ?)")) {            
   $insert_stmt->bind_param('ssss', $email,$username, $message,$display);
   // Execute the prepared query.
   if($insert_stmt->execute()) {
      header('Location: ./index-4.php?success=true');
  }
}     
?>
