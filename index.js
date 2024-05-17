var MenuIcon=document.getElementById("MenuIcon");
var MobileNavBarActive=document.getElementById("MobileNavBarActive");
var HomeNav=document.getElementById("HomeNav");
var MobileHomeNav=document.getElementById("MobileHomeNav");
var MobileContactNav=document.getElementById("MobileContactNav");
var ContactNav=document.getElementById("ContactNav");
var CloseIcon=document.getElementById("CloseIcon");
MenuIcon.addEventListener('click',MobileNavActiveFn);
CloseIcon.addEventListener('click',MoileNavInactiveFn);
window.addEventListener('scroll',MoileNavInactiveFn);
HomeNav.addEventListener('click',HomeNavFn);
MobileHomeNav.addEventListener('click',HomeNavFn);
ContactNav.addEventListener('click',ContactNavFn);
MobileContactNav.addEventListener('click',ContactNavFn);

function HomeNavFn(){
    MobileHomeNav.style.textDecoration="underline";
    HomeNav.style.textDecoration="underline";
    MobileContactNav.style.textDecoration="none";
    ContactNav.style.textDecoration="none";
}
function ContactNavFn(){
    MobileHomeNav.style.textDecoration="none";
    HomeNav.style.textDecoration="none";
    MobileContactNav.style.textDecoration="underline";
    ContactNav.style.textDecoration="underline"; 
}
function MobileNavActiveFn(){
    MobileNavBarActive.style.display="flex";
    CloseIcon.style.display="flex";
    MenuIcon.style.display="none";
   
}
function MoileNavInactiveFn(){
    MobileNavBarActive.style.display="none";
    CloseIcon.style.display="none";
    MenuIcon.style.display="flex";
}
