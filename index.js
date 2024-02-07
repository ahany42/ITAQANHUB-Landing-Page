var HomeNav=document.getElementById("HomeNav");
var AboutNav=document.getElementById("AboutNav");
var ServicesNav=document.getElementById("ServicesNav");
HomeNav.addEventListener('click',HomeNavFn);
AboutNav.addEventListener('click',AboutNavFn);
ServicesNav.addEventListener('click',ServicesNavFn);
function HomeNavFn(){
    HomeNav.style.textDecoration="underline";
    AboutNav.style.textDecoration="none";
    ServicesNav.style.textDecoration="none";
}
function AboutNavFn(){
    HomeNav.style.textDecoration="none";
    AboutNav.style.textDecoration="underline";
    ServicesNav.style.textDecoration="none";
}
function ServicesNavFn(){
    HomeNav.style.textDecoration="none";
    AboutNav.style.textDecoration="none";
    ServicesNav.style.textDecoration="underline";
}