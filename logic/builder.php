<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Builder Certificate</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/builder.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
<nav class="header">
        <h1 class="logo"><a href="../index.php">Certificate Builder <i class="fa-solid fa-award"></i></a></h1>
</nav>

<main class="container">

<div class="side-bar certificate-options-container">
    <h1 class="title">Choose Your Design</h1>
    <div class="img-container">
        <img class="img active" src="../asset/certificate-1.jpg"  alt="">
        <img class="img" src="../asset/certificate-2.jpeg" alt="">
        <img class="img" src="../asset/certificate-3.jpeg" alt="">
        <img class="img" src="../asset/certificate-4.jpeg" alt="">
        <img class="img" src="../asset/certificate-10.jpeg" alt="">
        <img class="img" src="../asset/certificate-6.jpeg" alt="">
        <img class="img" src="../asset/certificate-8.jpeg" alt="">
        <img class="img" src="../asset/certificate-7.jpeg" alt="">
        <div class="msg">That's it folks ♡</div>
		<div class="navigation">
			<div class="btn active"></div>
			<div class="btn"></div>
			<div class="btn"></div>
			<div class="btn"></div>
			<div class="btn"></div>
			<div class="btn"></div>
			<div class="btn"></div>
			<div class="btn"></div>
		</div>
    </div>

</div>




<div class="form-container">
    <h1 class="title">Fill Required details</h1>

    <form action="./building.php" method="post">
        <label for="name"><p>Name </p>
            <input type="text" name="name" id="name" placeholder="Name" />
        </label>
        <label for="course"><p>Course </p>
            <input type="text" name="course" id="course" placeholder="Course" />
        </label>
        <label for="date"><p>Date of Completion </p>
            <input id="date" name="date" placeholder="DD/MM/YYYY"  value=""/>
        </label>

        <input type="submit" value="Built" name="submit">
    </form>

</div>

</main>

<script>
// Certificates Slider

let dateInput = document.querySelector('#date');
let newDate = new Date();
let dd = String(newDate.getDate()).padStart(2,'0');
let mm = String(newDate.getMonth()+1).padStart(2,'0');
let yyyy = newDate.getFullYear();
let resultDate = dd + '/'+mm + '/' + yyyy;
dateInput.value = resultDate; 

const slides = document.querySelectorAll('.img');
const btns = document.querySelectorAll('.btn');
let currentSlide = 1;

const manualSlide = (manual)=>{
    slides.forEach((slide)=>{
        slide.classList.remove('active');
    });
    btns.forEach((btn)=>{
        btn.classList.remove('active');
    })

    slides[manual].classList.add('active');
    btns[manual].classList.add('active');
}
btns.forEach((btn,i)=>{
    btn.addEventListener('click',()=>{
        manualSlide(i);
        currentSlide = i;
    })
})


let data = {
    date:resultDate
}
function sendDate(){
    $.post("./building.php", data);
}
sendDate();
let src = {
    src_url :""
};
slides.forEach((slide)=>{
    slide.addEventListener('click',(e)=>{
    src.src_url =  e.target.getAttribute("src");
        slide.style.outline = '2px solid green';
function sendSrc(){
    $.post("./building.php", src);
}
})
        // alert(srcData.src_url);
        // $.post("./building.php", srcData);
})





</script> 
</body>
</html>