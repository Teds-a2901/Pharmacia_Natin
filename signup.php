<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class = "Title">Sign Up</div>
        <form action = "includes/signup.inc.php" method="post">
            <div class = "user-details">
                <div class="input-box">
                <span class = "details">Full Name</span>
                <input type ="text" name="name" placeholder="Enter you Name" required>
            </div>
            <div class = "user-details">
                <div class="input-box">
                <span class = "details">Username</span>
                <input type ="text" name="userid" placeholder="Enter your Username" required>
            </div>
            <div class = "user-details">
                <div class="input-box">
                <span class = "details">Email</span>
                <input type ="text" name="email" placeholder="Enter you Email" required>
            </div>
            <div class = "user-details">
                <div class="input-box">
                <span class = "details">Password</span>
                <input type ="password" name="pwd" placeholder="Enter you Password" required>
            </div>

            <div class = "user-details">
                <div class="input-box">
                <span class = "details">Confirm Password</span>
                <input type ="password" name="pwdrepeat" placeholder="Enter you Password" required>
            </div>
            <div class="button">
                <input type="submit" name="submit" value="Register">
            </div>
        <div class="login-link "><a href="login.php">Back to Log in form</a>

        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                ?>
                     <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Please!</strong>Fill-up all Fields!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                      </div>
                <?php
            }
            elseif ($_GET["error"] == "invaliduid") {
                ?>
                     <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Please!</strong> Choose a proper username!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                      </div>
                <?php
            }
            elseif ($_GET["error"] == "invalidemail") {
                ?>
                     <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Please!</strong> Choose a proper Email!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                      </div>
                <?php
            }
            elseif ($_GET["error"] == "passwordsdontmatch") {
                ?>
                     <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Please Check!</strong> Password doesn't match!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                      </div>
                <?php
            }

            elseif ($_GET["error"] == "usernametaken") {
                ?>
                     <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Please Change!</strong> Username and Email is already taken!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                      </div>
                <?php
            }

            elseif ($_GET["error"] == "none") {
                ?>
                     <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>You been Successfully</strong> Sign up!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                      </div>
                <?php
            }
        }
        ?>
    </form>
</div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html> 