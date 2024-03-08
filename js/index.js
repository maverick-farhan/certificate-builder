let moonIcon = document.getElementById('moonIcon');
const github = document.getElementById('github');
const mode = document.getElementById('moon');
const menu_mobile = document.querySelector('.menubar-mobile');



window.addEventListener('resize', ()=>{
if(screen.width < 700){
        mode.style.display="none";
        github.style.display="none";
        menu_mobile.style.visibility="visible";
}
else{
        mode.style.display="block";
        github.style.display="block";
        menu_mobile.style.visibility="hidden";

}
},true);

moonIcon.addEventListener('click', (e)=>{
        e.target.classList.remove('moonIcon');
        e.target.classList.toggle("fa-sun");
});
