<?php
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Message = $_POST['message'];
echo $Name;
$conn = new mysqli('localhost', 'root', '', 'testitqan');


if ($conn->connect_error) {
  die('Connection Failed: ' . $conn->connect_error);

} else {
  $stmt = $conn->prepare("insert into contactus(Name, Email, Message, TimeStamp) values(?, ?, ?, NOW())");
  $stmt->bind_param("sss", $Name, $Email, $Message);
  if ($stmt->execute()) {
    echo "Thank you! Your message has been sent.";
  } else {
    echo "Error sending message: " . $stmt->error;
  }
  $stmt->close();
  $conn->close();
}
?>
