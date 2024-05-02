
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="water.css">
    <head><title>register</title>
        <link rel="icon" type="image/x-icon" href="images/logo.png"></head>
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
        <a class="active" href="signup.php"><i class="fa fa-fw fa-user"></i> sign up</a>
        <a href="login.html"><i class="fa fa-fw fa-user"></i> Login</a>
        <a href="gmail.html"><i class="fa fa-fw fa-envelope"></i> contact</a>
    </div>

    

<h1>sign up</h1>

<form action="signuser.php" method="get">

<h2>username</h2>

<input type="username" name="username" id="username" placeholder="username">

<h2>email</h2>

<input type="email" name="email" id="email" placeholder="email">

<h2>passwords</h2>

<input type="password" name="password" id="password" placeholder="password">

<input type="submit" value="sign up">

    </form>

</body>

</html>
