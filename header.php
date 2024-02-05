<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacia Natin.com</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css"rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/newstyle.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
</head>

<body>
 <header>
  <!--NAVIGATIOR BAR-->
  <div class="header">
      <div class="menu-bar">
          <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img src="img/pharmacyLogo5.png"> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
               </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ms-lg">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Medicine</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pharmacy.php">Pharmacy</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="emergencyhotline.php">Emergency Hotline</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="guidelines.php">Guidelines</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">about</a>
                    </li>

                  <?php
                  if (isset($_SESSION["useruid"])) {
                    ?>
                      <a href = "includes/logout.inc.php">
                        <button  type="button"  class="button">
                            <span class="button__text">Log-Out</span>
                            <span class="button__icon">
                              <i class="fa-solid fa-arrow-right-to-bracket"></i>
                            </span>                   
                        </button>
                      </a>
                    <?php
                  }  
                    else {
                      ?>
                      <!--SIGN-IN-->
                      <a href = "login.php">
                        <button  type="button"  class="button">
                            <span class="button__text">GET START</span>
                            <span class="button__icon">
                              <i class="fa-solid fa-arrow-right-to-bracket"></i>
                            </span>                   
                        </button>
                      </a>
                      <!--END SIGN-IN-->
                    <?php
                  }
                  ?>
                  
                  </ul>
                </div>
            </nav>
      </div>
      
  </div> 
<!--END NAVIGATIOR BAR-->
