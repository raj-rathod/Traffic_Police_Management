<?php
    include('../action.php')
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Violetor Details </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <form method="post" id="signup-form" class="signup-form">
                    <h3>Violetor Details </h3>
                    <div class="form-group">
                        <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="add" id="post" placeholder="Address"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="aid" id="pid" placeholder="Adhar Card No."/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="pno" id="phone" placeholder="Phone"/>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-input" name="email" id="email" placeholder="Email"/>
                    </div>
                   
                    <div class="form-group">
                        <input type="submit" name="client" id="submit" class="form-submit submit" value="Submit"/>
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