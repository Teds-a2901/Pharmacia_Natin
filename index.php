<?php
include_once'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/0b7219e024.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/newcarousel.css">
</head>
<body>
    <div class="slider">
        <div class="slide active">
            <div class="info" style="background-color: rgba(0, 0, 0, 0.5)">
            <img src="img/myriam-zilles-KltoLK6Mk-g-unsplash.jpg" alt="">
                <h2>Pharmacy</h2>
                <a href="pharmacy.php">Learn More</a>
            </div>
        </div>

        <div class="slide">
            <div class="info" style="background-color: rgba(0, 0, 0, 0.5)">
            <img src="img/myriam-zilles-KltoLK6Mk-g-unsplash.jpg" alt="">
                <h3></h3>
                <h2>Medicine</h2>
                <a href="medicine.php">Learn More</a>
            </div>
            
        </div>


        <div class="slide">
            <div class="info" style="background-color: rgba(0, 0, 0, 0.5)">
            <img src="img/Emergencyslideshow.jpg" alt="">
                <h2>Emergency</h2>
                <a href="emergencyhotline.php">Learn More</a>
            </div>
            
        </div>
        <div class="navigationbutton">
            <i class="fa-solid fa-chevron-left prev-btn"></i>
            <i class="fa-solid fa-chevron-right next-btn"></i>
        </div>

        <div class="navigation-visibility">
            <div class="slide-icon active"> 
            <div class="slide-icon"> 
            <div class="slide-icon"> 
            </div>
        </div>
    </div>
    <script src="js/imgslide.js"></script>

</body>
</html>
<?php
include_once'footer.php';
?>
<?php
include_once'chatbot.php';
?>
