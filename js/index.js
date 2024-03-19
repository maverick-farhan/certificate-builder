const github = document.querySelector('.github');
const menu_mobile = document.querySelector('.menubar-mobile');

const mobileSize = ()=>{
if(screen.width < 700){
        github.style.display="none";
        menu_mobile.style.visibility="visible";
}
else{
        github.style.display="block";
        menu_mobile.style.visibility="hidden";

}
}
if(window.screen.width<700){
        mobileSize();
}
