

function getCourseDetails() {
    return window.location.hash.substring(1);
}
const courseDetails = getCourseDetails();
var Training=document.getElementById("Training");
var TrainingDate=document.getElementById("TrainingDate");
const parts=courseDetails .split("#");
const courseName = parts[0];
Training.value = decodeURIComponent(courseName);
const courseDate = parts[1];
TrainingDate.value = decodeURIComponent(courseDate);