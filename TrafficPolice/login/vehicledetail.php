<?php
    include('../action.php')
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vehicle Details </title>

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
                    <h3>Vehicle Details </h3>
                    <div class="form-group">
                        <input type="text" class="form-input" name="vname" id="name" placeholder="Vehicle name"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="vno" id="post" placeholder="Vehicle no."/>
                    </div>
                     <div class="form-group">
                                <label for="sel1">Vehicle Type</label>
                                 <select class="form-control" id="sel1" name="vtype">
                                     <option value="2">Two Wheeler</option>
                                     <option value="3">Three Wheeler</option>
                                     <option value="4">Four Wheeler</option>
                                     <option value="6">Six Wheeler</option>
                                     <option value="10">Ten Wheeler</option>
                                 </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="vmodel" id="phone" placeholder="Vehicle Model"/>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="vdetail" id="submit" class="form-submit submit" value="Submit"/>
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