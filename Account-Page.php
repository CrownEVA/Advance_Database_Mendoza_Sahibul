<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Booklet</title>
    <style>

body{
    padding: 0%;
    margin: 0%;
    background: url(../image/pwdd.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
}

.container{
    width: 100%;
    height: 70px;
    background: white;
    
    backdrop-filter: blur(10px);
    box-shadow: 0 .4rem .8rem #0005;
    display: flex;

    overflow: hidden;
}
.square1{
    padding-left: 20px;
    height: 70px;
    width: 100%;
    display: flex;
    justify-content: left;
    align-items: center;
}
.square2{
    height: 70px;

    display: flex;

    text-align: center;
    align-items: center;
}
.square3{
    padding-right: 20px;
    height: 70px;
    width: 100%;
    display: flex;
    justify-content: flex-end;
    align-items: center;
}
.Logo a{
    text-decoration: none;
   font-size: 50px;
   color: rgb(0, 0, 0);
}

.ID{
    padding: 30px;
    text-decoration: none;
    color: rgb(0, 0, 0);
    display: flex;
}
.ID:hover{
    background-color: black;
    color: white;
}
.ID img{
    width: 20px;
    height: 20px;
}
.spacebetween{
    display: flex;
    justify-content: space-around;

}
.booklet{
    padding: 30px;
    text-decoration: none;
    color: rgb(0, 0, 0);
}
.booklet:hover{
    background-color: black;
    color: white;
}
.prescription{
    padding: 30px;
    text-decoration: none;
    color: rgb(0, 0, 0);
    display: flex;
}
.prescription:hover{
    background-color: black;
    color: white;
}



.Account{
    padding: 30px;
    text-decoration: none;
    color: rgb(0, 0, 0);
}
.Account:hover{
    background-color: black;
    color: white;
}
.Us{
    padding: 30px;
    text-decoration: none;
    color: rgb(0, 0, 0);
}
.Us:hover{
    background-color: black;
    color: white;
}
.Logout{
    padding: 30px;
    text-decoration: none;
    color: rgb(0, 0, 0);
}
.Logout:hover{
    background-color: black;
    color: white;
}
.b {
    
    width: 100%;
    height: 100vh;

    box-shadow: 0 .4rem .8rem #0005;

    display: flex;
    justify-content: center;
    align-items: center;
}



        /* Existing design styles */
        body {
            padding: 0%;
            margin: 0%;
            background: url(../image/pwdd.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
            width: 100%;
            height: 70px;
            background: white;
            backdrop-filter: blur(10px);
            box-shadow: 0 .4rem .8rem #0005;
            display: flex;
        }

        /* Style for ID cards */
        .id-card {
            width: 100%;
            max-width: 450px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 20px;
            box-shadow: 0 .4rem .8rem #0005;
            padding: 20px;
            overflow: hidden;
        }

        .id-card p {
            margin: 5px 0;
            font-size: 14px;
        }

        .big {
            font-size: 30px;
        }
        
        .small {
            font-size: 12px;
        }

        .part1, .part2 {
            text-align: center;
        }

        .id-card .picc {
            height: 150px;
            width: 150px;
        }
    </style>
</head>
<body>

<div class="container">
        <div class="square1">
            <div><a class="ID" href="Account-Page.html">Identification Card</a></div>
            <div><a class="booklet" href="Booklet.php ">Booklet</a></div>
            <div><a class="prescription" href="Prescription.html">Prescription</a></div>
        </div>
        <div class="square2">
            <div class="Logo"><a href="Account-Page.html">OB</a></div>
        </div>
        <div class="square3">
            <div><a class="Account" href="Account.html">Account</a></div>
            <div><a class="Us" href="#">About Us</a></div>
            <div><a class="Logout" href="Untitled-1.html">Log Out</a></div>
        </div>
</div>

<div id="id-cards-container">
    <?php
    $servername = "localhost"; // Use "localhost" if database is on the same server as PHP
    $username = "root";         // Default username for XAMPP is "root"
    $password = "";             // Default password for XAMPP is empty
    $dbname = "ob";             // Replace with the actual name of your database
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT pwd_id_number, full_name, date_of_birth, address, type_of_disability, blood_type, date_issued, guardian_name, guardian_contact_number, password FROM pwd_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='id-card'>
                    <div class='part1'>
                        <p class='big'>PWD ID</p>
                        <p class='small'>{$row['pwd_id_number']}</p>
                        <p><strong>Name:</strong> {$row['full_name']}</p>
                        <p><strong>Date of Birth:</strong> {$row['date_of_birth']}</p>
                        <p><strong>Address:</strong> {$row['address']}</p>
                        <p><strong>Type of Disability:</strong> {$row['type_of_disability']}</p>
                        <p><strong>Blood Type:</strong> {$row['blood_type']}</p>
                        <p><strong>Date Issued:</strong> {$row['date_issued']}</p>
                    </div>
                    <div class='part2'>
                        <p><strong>Guardian Name:</strong> {$row['guardian_name']}</p>
                        <p><strong>Contact No.:</strong> {$row['guardian_contact_number']}</p>
                    </div>
                </div>";
        }
    } else {
        echo "<p>No records found</p>";
    }

    $conn->close();
    ?>
</div>

</body>
</html>
