var HomeNav=document.getElementById("HomeNav");
var AboutNav=document.getElementById("AboutNav");
var ServicesNav=document.getElementById("ServicesNav");
var MobileHomeNav=document.getElementById("MobileHomeNav");
var MobileAboutNav=document.getElementById("MobileAboutNav");
var MobileServicesNav=document.getElementById("MobileServicesNav");
var MenuIcon=document.getElementById("MenuIcon");
var MobileNavBarActive=document.getElementById("MobileNavBarActive");
var CloseIcon=document.getElementById("CloseIcon");
HomeNav.addEventListener('click',HomeNavFn);
MobileHomeNav.addEventListener('click',HomeNavFn);
AboutNav.addEventListener('click',AboutNavFn);
MobileAboutNav.addEventListener('click',AboutNavFn);
ServicesNav.addEventListener('click',ServicesNavFn);
MobileServicesNav.addEventListener('click',ServicesNavFn);
MenuIcon.addEventListener('click',MobileNavActiveFn);
CloseIcon.addEventListener('click',MoileNavInactiveFn);
function HomeNavFn(){
    HomeNav.style.textDecoration="underline";
    MobileHomeNav.style.textDecoration="underline";
    AboutNav.style.textDecoration="none";
    MobileAboutNav.style.textDecoration="none";
    ServicesNav.style.textDecoration="none";
    MobileServicesNav.style.textDecoration="none";
}
function AboutNavFn(){
    HomeNav.style.textDecoration="none";
    MobileHomeNav.style.textDecoration="none";
    AboutNav.style.textDecoration="underline";
    MobileAboutNav.style.textDecoration="underline";
    ServicesNav.style.textDecoration="none";
    MobileServicesNav.style.textDecoration="none";
}
function ServicesNavFn(){
    HomeNav.style.textDecoration="none";
    MobileHomeNav.style.textDecoration="none";
    AboutNav.style.textDecoration="none";
    MobileAboutNav.style.textDecoration="none";
    ServicesNav.style.textDecoration="underline";
    MobileServicesNav.style.textDecoration="underline";
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