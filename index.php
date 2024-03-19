<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Source|Certificate Builder</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
   <?php 
    include 'header.php';
   ?> 
    
    <div class="menubar-mobile">
        <ul class="nav-list">
            <li class="nav-items github"><a href="https://github.com/maverick-farhan/certificate-builder" target="_blank"><i class="fa-brands fa-github"></i></a></li>
        </ul>
    </div>
    
    <main class="hero-section">
        <div class="container">
            <h1 class="title">Build your custom certificates in just few clicks and key strokes.</h1>
            <div class="image"><img src="./asset/certificate-4.jpeg" alt="certificate-demo" /></div>
        </div>
            <button type="button" class="build"><a href="./logic/builder.php">Build Certificate</a></button>
    </main>
<?php 
include 'footer.php';
?>

    <script src="./js/index.js"></script>
</body>
</html>
