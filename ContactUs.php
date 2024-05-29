<?php
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Company=$_POST['Company'];
$Mobile=$_POST['MobileNumber'];
$Message = $_POST['Message'];
date_default_timezone_set('Africa/Cairo');
if(empty($Name) || empty($Email) || empty($Message) ||empty($Company)||empty($Mobile)){
echo"Fill all fields";
}
else{

 //Testing DB String   
 $conn = new mysqli('localhost', 'root', '', 'testitqan');

if ($conn->connect_error) {
  die('Connection Failed: ' . $conn->connect_error);
  echo"Connection Error";

} else {
$conn->query("SET time_zone = '+02:00'");
  $stmt = $conn->prepare("insert into ContactUs(Name, Email,Mobile,Company, Message, TimeStamp) values(?, ?,?,?, ?, NOW())");
  $stmt->bind_param("sssss", $Name, $Email,$Mobile,$Company, $Message);
  if ($stmt->execute()) {
    header('Location:Success.html');
  } else {
    echo "Error sending message: " . $stmt->error;
  }
  $stmt->close();
  $conn->close();
}
}
?>
