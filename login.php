<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Pharmacia Natin Login</title>
</head>
<body>
    <!--<section class="signup-form">-->
    <div class ="wrapper">
        <div class="title">Login</div>
        <form action="includes/login.inc.php" method="post">
            <div class="field">
                <input type="text" name="uid"required>
                <label>Username/Email</label>
            </div>

            <div class="field">
                <input type="password" name="pwd" required>
                <label>Password</label>
            </div>  

            <div class="field">
                <input type="submit" name = "submit" value="Login">
            </div>
            <div class="signup-link">Not a member?<a href="signup.php">Signup now?</a></div>
            <div class="signup-link"><a href="index.php">Back to Home Page</a></div>
        </form>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                ?>
                     <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Please!</strong>Fill up all Fields
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                <?php
            }
            elseif ($_GET["error"] == "wronglogin") {
                ?>
                     <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong >Incorrect!</strong>Username and Password
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                <?php
    
            }
        }
        ?>
    </div>
    <!--</section>-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>