<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWD ID Login</title>

    <style>
        /* Add your CSS styling here */
        body{
            padding: 0;
            margin: 0;
        }
        section{
            position: relative;
        }
        section::before {
            content: "";
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

        nav{
            width: 100%;
            height: 70px;
            background: rgba(0, 0, 0, 0.9);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .Navbar{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-left: 40px;
            padding-right: 40px;
        }
        li{
            list-style: none;
            display: inline-block;
        }
        li a{
            margin: 20px;
            text-decoration: none;
            color: white;
        }

        .Logo a{
            text-decoration: none;
            font-size: 50px;
            color: white;
        }
        li a:hover{
            border-bottom: 1px solid white;
        }
        .container{
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .Underlinelogin{
            margin: auto;
            width: 80%;
            border-bottom: 1px solid white;
            padding-bottom: 5px;
        }
        .box{
            width: 400px;
            height: 500px;
            background: rgba(0, 0, 0, 0.9);
            text-align: center;
            border-radius: 5%;
            color: white;
        }
        .box label{
            display: flex;
            padding-left: 10%;
            justify-content: start;
        }
        .box h1{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        p{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin-bottom: 2px;
        }
        #pwd_id_number{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background:transparent;
            font-size: 1em;
            width: 100%;
            height: 31px;
            border: 0;
            outline: none;
            color: white;
        }
        #password{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background:transparent;
            font-size: 1em;
            width: 100%;
            height: 31px;
            border: 0;
            outline: none;
            color: white;
        }
        #submit{
            margin-top: 20px;
            padding: 10px;
            padding-right: 140px;
            padding-left: 140px;
            text-align: center;
            border-radius: 10px;
            background-color: rgb(255, 201, 24, 0.9);
            color: white;
            border: 0px;
            transition:  2s;
        }
        #submit:hover{
            background-color: white;
            color: black;
        }
    </style>
</head>
<body>
    <?php

        session_start();
    ?>
    <section>
        <nav>
            <div class="Navbar">
                <div class="Logo"><a href="#">OB</a></div>
                <ul>
                    <li><a href="#"></a></li>
                    <li><a href="">Account</a></li>
                    <li><a href="Untitled-1.html">Log Out</a></li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <div class="box">

                <?php
                
                if (isset($_SESSION['pwd_login_error'])) {
                    echo "<p class='error'>" . $_SESSION['pwd_login_error'] . "</p>";
                    unset($_SESSION['pwd_login_error']); 
                }
                ?>

                <h1>ID Information</h1>
                <form action="pwd-login.control.php" method="POST">
                    <label for=""><p>ID Number</p></label>
                    <div class="Underlinelogin">
                        <input type="text" name="pwd_id_number" id="pwd_id_number" placeholder="Enter PWD ID Number" maxlength="7" >
                    </div>

                    <label for=""><p>Password</p></label>
                    <div class="Underlinelogin">
                        <input type="password" name="password" id="password" placeholder="Enter Password" >
                    </div>

                    <input type="submit" value="Submit" id="submit">
                </form>
            </div>
        </div>
    </section>
</body>
</html>
