<?php
$Name = $_POST['Name'];
$CandidateTitle=$_POST['CandidateTitle'];
$Email = $_POST['Email'];
$MobileNumber=$_POST['MobileNumber'];
$Training=$_POST['Training'];
$Country=$_POST['Country'];
$Company=$_POST['Company'];
$NumberOfSeats=$_POST['NumberOfSeats'];
$Message = $_POST['Message'];
if(empty($Name) || empty($Email) ||empty($MobileNumber)||empty($Training)||empty($Company)||empty($Country)||empty($NumberOfSeats)){
    echo"Fill all fields";
    }
    else{


        $conn = new mysqli('localhost', 'root', '', 'testitqan');
        if ($conn->connect_error) {
          die('Connection Failed: ' . $conn->connect_error);
          echo"Connection Error";
        
        } else {
          $stmt = $conn->prepare("insert into Training(Name, Email,JobTitle,Mobile,Training,Country,Company,NumberOfSeats,Message, TimeStamp) values(?, ?, ?, ?, ?, ?,?, ?,?,NOW())");
          $stmt->bind_param("sssssssis", $Name, $Email,$CandidateTitle,$MobileNumber,$Training,$Country,$Company,$NumberOfSeats, $Message);
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