function getCourseDetails() {
    return window.location.hash.substring(1);
}
const courseDetails = getCourseDetails();
if(courseDetails){
var Training=document.getElementById("Training");
var TrainingDate=document.getElementById("TrainingDate");
const parts=courseDetails .split("#");
const courseName = parts[0];
Training.value = decodeURIComponent(courseName);
const courseDate = parts[1];
TrainingDate.value = decodeURIComponent(courseDate);
}
var currentDate=new Date();
//26/6/2024
var Training1Date = new Date(currentDate.getFullYear(),5, 26);
if(currentDate>Training1Date){
    document.getElementById("June").style.display="none";
}
//31/7/2024
var Training2Date = new Date(currentDate.getFullYear(),6, 31);
if(currentDate>Training2Date){
    document.getElementById("July").style.display="none";
}
//28/8/2024
var Training3Date = new Date(currentDate.getFullYear(),7, 28);
if(currentDate>Training3Date){
    document.getElementById("Aug").style.display="none";
}
//25/9/2024
var Training4Date = new Date(currentDate.getFullYear(),8, 25);
if(currentDate>Training4Date){
    document.getElementById("Sep").style.display="none";
}
//23/10/2024
var Training5Date = new Date(currentDate.getFullYear(),9, 23);
if(currentDate>Training5Date){
    document.getElementById("Oct").style.display="none";
}
//27/11/2024
var Training6Date = new Date(currentDate.getFullYear(),10, 27);
if(currentDate>Training6Date){
    document.getElementById("Nov").style.display="none";
}
//18/12/2024
var Training7Date = new Date(currentDate.getFullYear(),11, 18);
if(currentDate>Training7Date){
    document.getElementById("Dec").style.display="none";
}