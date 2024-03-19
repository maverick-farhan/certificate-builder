<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Builder Certificate</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="builder.css">
</head>
<body>
<nav class="header">
        <h1 class="logo">Certificate Builder <i class="fa-solid fa-award"></i></h1>
</nav>

<main class="container">

<div class="side-bar certificate-options-container">
    <h1 class="title">Choose Your Design</h1>
    <div class="image-container">
        <img src="../asset/certificate-1.jpeg" alt="">
        <img src="../asset/certificate-2.jpeg" alt="">
        <img src="../asset/certificate-3.jpeg" alt="">
        <img src="../asset/certificate-4.jpeg" alt="">
        <img src="../asset/certificate-10.jpeg" alt="">
        <img src="../asset/certificate-6.jpeg" alt="">
        <img src="../asset/certificate-8.jpeg" alt="">
        <img src="../asset/certificate-7.jpeg" alt="">
        <div class="msg">That's it folks ♡</div>
    </div>
</div>

<div class="form-container">
    <h1 class="title">Fill Required details</h1>

    <form action="<?php $_SERVER='PHP_SELF'?>" method="post">
        <label for="name"><p>Name </p>
            <input type="text" name="name" id="name" placeholder="Name" />
        </label>
        <label for="course"><p>Course </p>
            <input type="text" name="course" id="course" placeholder="Course" />
        </label>
        <label for="date"><p>Date of Completion </p>
            <?php echo '<input id="date" x-mask="99/99/9999" placeholder="MM/DD/YYYY" value="date"/>'; ?>
        </label>

        <input type="submit" value="Built it" >
    </form>

</div>

</main>

    
<!-- Alpine Plugins -->
<script src="https://cdn.jsdelivr.net/npm/@alpinejs/mask@3.x.x/dist/cdn.min.js"></script>
 
<!-- Alpine Core -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>