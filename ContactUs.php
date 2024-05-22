<?php
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Message = $_POST['Message'];
if(empty($Name) && empty($Email) && empty($Message)){
echo"Fill all fields";
}
else{


$conn = new mysqli('localhost', 'root', '', 'testitqan');
if ($conn->connect_error) {
  die('Connection Failed: ' . $conn->connect_error);
  echo"Connection Error";

} else {
  $stmt = $conn->prepare("insert into contactus(Name, Email, Message, TimeStamp) values(?, ?, ?, NOW())");
  $stmt->bind_param("sss", $Name, $Email, $Message);
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
