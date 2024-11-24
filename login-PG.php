<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    
    <style>
        .error {
            color: red;
            font-weight: bold;
        }
        body {
        padding: 0;
        margin: 0;
        overflow: hidden; 
        position: relative; 
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("image/pwdd.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            filter: blur(2px); 
            z-index: -1; 
        }

        .loginbox{
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            
        }

        .box1{
            width: 400px;
            height: 400px;
            background: rgba(0, 0, 0, 0.9);
            
            text-align: center;
            
            border-bottom-right-radius: 5%;
            border-top-right-radius: 5%;
        }
        .box2{
            width: 700px;
            height: 400px;
            background: rgba(0, 0, 0, 0.9);
            
            text-align: center;
            border-bottom-left-radius: 5%;
            border-top-left-radius: 5%;
            
        }
        .box2 h1{
            color: rgb(255, 255, 255);
            font-size: 40px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            padding-bottom: 0;
            margin-bottom: 0;
        }
        .box2 p{
            color: rgb(255, 255, 255);
            font-size: 20px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .login{
            margin-bottom: 0;
            margin-top: 5%;
            font-size: 3.2em;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: white;
        } 
        .Username{

            margin-bottom: 2px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: white;
        }
        .Password{
            margin-bottom: 2px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: white;
        }
        .Underlinelogin{
            
            margin:auto ;
            width: 80%;
            border-bottom: 1px solid white ;
            padding-top: 15px;
            padding-bottom: 5px;


        }
        #Username{
            width: 100%;
            height: 31px;
            outline: none;
            background: transparent;
            border: 0;
            color: white;
            font-size: 1em;
        }
        #Password{
            width: 100%;
            height: 31px;
            outline: none;
            background: transparent;
            border: 0;
            color: white;
            font-size: 1em;
        }
        #Submit{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            padding: 15px;
            padding-right: 140px;
            padding-left: 140px;
            text-align: center;
            border-radius: 10px;
            background-color: rgb(255, 201, 24,0.9);
            color: white;
            cursor: pointer;
            font-size: 1em;
            border: 0px;
            transition: 5ms;

        }
        #Submit:hover{
            background-color: white;
            color: black;
        }
        .box1 p{
            padding-right: 10%;
            display: flex;
            justify-content: end;
        }
        .box1 p a{
            text-decoration: none;
            color: white;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .box1 p a:hover{

            color: rgb(77, 77, 255);
        }

    </style>
</head>
<body>
    <div class="loginbox">
        <div class="box2">
            <h1>Welcome to OB!</h1>
            <p>Your online booklet service for your PWD and Senior Citizen Purchase</p>
        </div>
        <div class="box1">
            <h1 class="login">Login</h1><br>
            <?php
            if (isset($_SESSION['login_error'])) {
                echo "<p class='error'>" . $_SESSION['login_error'] . "</p>";
                unset($_SESSION['login_error']);
            }
            ?>

            <form action="login-PG.control.php" method="POST">
                <div class="Underlinelogin">
                    <input type="text" name="username" placeholder="Username" id="Username">
                </div>
                <div class="Underlinelogin">
                    <input type="password" name="password" placeholder="Password" id="Password">
                </div>
                <p><a href="#">Forgot Password?</a></p>

                <input type="submit" value="Submit" id="Submit">
            </form>
        </div>
    </div>
</body>
</html>
