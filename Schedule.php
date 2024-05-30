<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'testitqan';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}

$conn->query("SET time_zone = '+02:00'");

$sql = "SELECT * FROM courses where EndDate > CURDATE() and Visible=1" ;
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width" />
        <meta name="description" content="Stay updated with our upcoming training sessions and events! Explore our schedule and register now" />
        <meta property="og:title" content="ItqanHub">
        <meta property="og:image" content="https://itqanhub.com/Assets/ItqanHubOpenGraph.png">
        <meta property="og:type" content="website">
        <title>ItqanHub</title>
    <link rel="stylesheet" href="Assets/index.css">
    <link rel="stylesheet" href="Assets/Calendar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="Assets/favicon.ico">
</head>
<body>
<div class="NavBardiv">
        <img class="NavLogo"src="Assets/ItqanHubEmblem1.png" alt="Navigation Bar Logo">
    <div class="NavBarContainer">
    <div class="NavBar">
        <a id="HomeNav" href="index.html" >Home</a>
        <a id="AboutNav" href="AboutUs.html">About Us</a>
        <a id="ServicesNav" href="Services.html">Our Services</a>
        <a id="PartnersNav" href="Partners.html">Our Partners</a>
        <a id="CalendarNav" href="#CalendarMain" class="SelectedNavBar">Schedule</a>
        <a id="ContactNav" href="index.html#ContactUs">Contact Us</a>
        <a id="JobsNav" href="Jobs.html">Jobs</a>
       
    </div>
</div>
</div>
<div class="MobileNavBarContainer">
    <div class="MobileNavBar">
        <a href="index.html">
            <img class="NavLogo"src="Assets/ItqanHubEmblem1.png" alt="Navigation Bar Logo">
        </a>
    <i id="MenuIcon" class="fa-solid fa-bars"></i>
    <i id="CloseIcon" class="fa-solid fa-x"></i>
</div>
<div id="MobileNavBarActive" class="MobileNavBarActive" >
    <a id="MobileHomeNav" href="index.html" >Home</a>
    <a id="MobileAboutNav" href="AboutUs.html">About Us</a>
    <a id="MobileServicesNav" href="Services.html">Our Services</a>
    <a id="MobilePartnersNav" href="Partners.html">Our Partners</a>
    <a id="CalendarNav" href="#CalendarMain" class="SelectedNavBar">Schedule</a>
    <a id="MobileContactNav" href="index.html#ContactUs">Contact Us</a>
    <a id="MobileJobsNav" href="Jobs.html">Jobs</a>
 
</div>
</div>
<section class="CalendarMain">
<h3 class="Title">Schedule</h3>
    <?php
      echo"<div class=CalendarContainer>";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $startDate = $row['StartDate'];
            $endDate = $row['EndDate'];
            $startDateTime = new DateTime($startDate);
            $endDateTime = new DateTime($endDate);
            $startDay = $startDateTime->format('j'); 
            $endDay=$endDateTime->format('j');
            $startMonth = $startDateTime->format('M'); 
            $endMonth=$endDateTime->format('M'); 
            $startTime=$row['StartTime'];
            $endTime=$row['EndTime'];
            $startHour = date('G', strtotime($startTime));
            $startMinutes = date('i', strtotime($startTime));
            $endHour =  date('G', strtotime($endTime));
            $endMinutes =  date('i', strtotime($endTime));
            echo "<div class=card1>";
            echo "<div class=CalendarLogos>";
            echo "<img src='Assets/" . $row['PngName'] . ".png' alt='" . $row['PngName'] . ".image'>";
            echo "</div>";
            echo "<h3 class=CourseTitle>" . htmlspecialchars($row['CourseName']) . "</h3>";
            echo "<hr class='ServicesPreviewLine center'>";
            echo "<div class=CourseDetails>";
            echo "<div class=CalendarDate>";
            echo "<div class=CalendarHeader>";
            if($startMonth===$endMonth){

                echo "<h4 class=CalendarMonth>" . htmlspecialchars($startMonth) . "</h4>";
                
            }
            else {
                echo "<h4 class=CalendarMonth>" . htmlspecialchars($startMonth) ."-". htmlspecialchars($endMonth) . "</h4>";
            }
            echo "</div>";
            echo "<div class=CalendarBody>";
            if($startDate===$endDate){
                echo "<h3 class=DateText>" . htmlspecialchars($startDay) ."</h3>";
            }
            else{
            echo "<h3 class=DateText>" . htmlspecialchars($startDay) ." - ". htmlspecialchars($endDay) . "</h3>";
            }
            echo "</div>";
            echo "</div>";
            if($startHour>=12)
            {
                $sPmorAm="Pm";
                if($startHour>12)
                $startHour=$startHour-12;
            }
            else{
                $sPmorAm="Am";
            }
            if($endHour>=12)
            {
                $ePmorAm="Pm";
                if($endHour>12)
                $endHour=$endHour-12;
            }
            else{
                $ePmorAm="Am";
            }
            echo "<div class=TimeandPlace>";
            echo "<h4 class=Time>" .htmlspecialchars($startHour).":".htmlspecialchars($startMinutes). $sPmorAm. "-". htmlspecialchars($endHour).":".htmlspecialchars($endMinutes). $ePmorAm. "</h4>";
            echo "<h4 class=Time>" .  htmlspecialchars($row['Place']) ;
            echo "</div>";
            echo "</div>";
            echo "<a href='Assets/" . $row['PDFName'] . ".pdf' class='DownloadPDF' target='_blank'>Training Description</a>";
            echo "<a href='Training.html#" . htmlspecialchars($row['CourseName']) . "#" . htmlspecialchars($startDay) . "-" . htmlspecialchars($endDay) . " " . htmlspecialchars($startMonth) . "'><button class='SubmitButton CalendarButton'>Enroll</button></a>";
            echo "</div>";
        }
        echo "</div>";
        echo "</div>";
        echo "</div>";
      
    } else {
        echo "No courses found.";
    }
    echo "</section>";
    $conn->close();
    ?>
    <section class="FooterSection">
    <div class="SocialLinks">
        <a href="https://www.facebook.com/ItqanHub/">
            <i class="fab fa-facebook"></i>
        </a>
      
        <a href="https://www.linkedin.com/company/itqan-hub/">
            <i class="fab fa-linkedin"></i>
        </a>
       
    </div>
    <img class="FooterLogo" src="Assets/ItqanHubSecondaryLogo3.png" alt="Footer Logo">
    <h5 class="CopyRightsText">COPYRIGHT &copy; 2024 ITQANHUB.COM-ALL RIGHTS RESERVED</h5>
</section> 
</body>
<script src="index.js"></script>
</html>