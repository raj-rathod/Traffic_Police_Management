<?php
    include('../action.php')
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <form method="post" id="signup-form" class="signup-form" action="" >
                    <h2>Sign up </h2>
                    <div class="form-group">
                        <input type="text" class="form-input" name="name" id="name" placeholder="Your Name" required />
                    </div>
                   <div class="form-group">
                        <input type="text" class="form-input" name="uname" id="name" placeholder="Username" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="post" id="post" placeholder="Your Post" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="pid" id="pid" placeholder="Your Id" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="pno" id="phone" placeholder="Phone" required/>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-input" name="email" id="email" placeholder="Email" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="psw" id="password" placeholder="Password" required/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required/>
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="form-submit submit" value="Sign up"/>
                        <a href="login.php" class="submit-link submit">Log IN</a>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>