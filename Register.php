<?php

require_once 'connection.php';







?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="stylePage.css">
</head>
<body style="background-color: rgb(237, 255, 232);">




<div class = "formDiv">
<div style="margin: auto;">
<h3 class="formFont" style = "font-size: 20px; text-align: center;"> Create an account today </h3>
<p class="formFont" style = "font-size: 12px; text-align: center;"> Become a member of the Plant and Jazz Club today</p>

</div>


<form action ="" method = "post" class = "formFont" onsubmit="return passwordCheck()">
<label for = "username"> Username: </label>
<input type = "text" id ="username" name = "username">
<label for= "email"> Email Address: </label>
<input type = "text" id = "email" name = "email">
<label for= "password"> Password: </label>
<span id = "message" style = "color: red;"> </span>
<input type = "password" id = "password" name = "password">
<label for= "Verpassword"> Verify Password: </label>
<span id = "message2" style = "color: red;"> </span>

<input type = "password" id = "Verpassword" name = "Verpassword">
<input type ="submit" value = "Create Account">


</form>
<p class="formFont" style = "font-size: 12px; text-align: center;"> Already Have an Account log in</p>
</div> 

<script src="registration.js">
    </script>
</body>