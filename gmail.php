<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="water.css">

    <head>
        <title>contact</title>
        <link rel="icon" type="image/x-icon" href="images/logo.png">
    </head>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
            width: 100%;
            background-color: #555;
            overflow: auto;
        }

        .navbar a {
            float: left;
            padding: 12px;
            color: white;
            text-decoration: none;
            font-size: 17px;
        }

        .navbar a:hover {
            background-color: #000;
        }

        .active {
            background-color: #04AA6D;
        }

        @media screen and (max-width: 500px) {
            .navbar a {
                float: none;
                display: block;
            }
        }
    </style>
</head>

<body>
    <div class="navbar">
        <a href="index.html"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="signup.html"><i class="fa fa-fw fa-user"></i> sign up</a>
        <a href="login.html"><i class="fa fa-fw fa-user"></i> Login</a>
        <a class="active" href="gmail.html"><i class="fa fa-fw fa-envelope"></i> contact</a>
    </div>
    <h2>username:bukharidarwisy2015</h2>

    <h2>gmail email:bukharidarwisy2015@gmail.com</h2>

    <h2>microsoft email:bukharidarwisy2015@outlook.com</h2>

    <h3>contact now!</h3>

    <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
        <div class="row">
          <label class="required" for="name">Your name:</label><br />
          <input id="name" class="input" name="name" type="text" value="" size="30" /><br />
          <span id="name_validation" class="error_message"></span>
        </div>
        <div class="row">
          <label class="required" for="email">Your email:</label><br />
          <input id="email" class="input" name="email" type="text" value="" size="30" /><br />
          <span id="email_validation" class="error_message"></span>
        </div>
        <div class="row">
          <label class="required" for="message">Your message:</label><br />
          <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
          <span id="message_validation" class="error_message"></span>
        </div>
<?php

?>

        
          <input id="submit_button" type="submit" value="Send email"/>
      </form>

</body>

</html>