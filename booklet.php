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
            background-image: url(image/pwdd.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container{
            width: 100%;
            height: 70px;
            background: white;
            display: flex;
            backdrop-filter: blur(10px);
            box-shadow: 0 .4rem .8rem #0005;
            overflow: hidden;
        }
        .square1{
            padding-left: 20px;
            height: 70px;
            width: 100%;
            display: flex;
            align-items: center;
        }
        .square2{
            height: 70px;
            width: 100%;
            display: flex;
            justify-content: center;
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
        }
        .ID:hover{
            background-color: black;
            color: white;
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
        .leftside{
            padding-right: 150px;
            min-width: 400px;
            display: flex;
            justify-content: end;
            align-items: center;
        }
        .choices{
            padding-top: 20px;
            height: 50px;
            display: flex;
            align-items: center;
            
        }
        .Pharmacy,
        .Grocery{
            padding: 20px;
            text-decoration: none;
            color: rgb(0, 0, 0);
        }
        .center{
            width: 100%;
            height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .boxcontainer{
            width: 70vw;
            height: 80%;
            background-color: #fff5;

            backdrop-filter: blur(10px);
            box-shadow: 0 .4rem .8rem #0005;
            border-bottom-left-radius: .8rem;
            border-bottom-right-radius: .8rem ;

            overflow: auto;
            overflow: overlay;
        }
        .header{
            width: 70vw;
            height: 50px;
            background-color: rgba(255, 255, 255, 0.733);

            backdrop-filter: blur(10px);
            box-shadow: 0 .4rem .8rem #0005;
            border-top-left-radius: .8rem;
            border-top-right-radius: .8rem ;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .header h1{
            padding-left: 15px;
        }
        .header button{
            margin-right: 15px;
            width: 130px;
            height: 27px;
            background-color: rgb(101, 101, 243);
            color: white;

            border: 0px;
            backdrop-filter: blur(10px);
            box-shadow: 0 .4rem .8rem #0005;

            display: flex;
            align-items: center;
            justify-content: center;

            cursor: pointer;
        }
        .header button:hover{
            background-color: white;
            color: black;
        }

        .header button img{
            width: 15px;
            height: 15px;
            padding: 5px;
        }
        .OB{
            width: 100%;
            max-height: calc(89% - 1.6rem);
            background-color: rgba(255, 255, 255);

            margin: .8rem auto;
            border-radius: .6rem;
            font-family: Arial, Helvetica, sans-serif;

            overflow: auto;
            overflow: overlay;
        }
        table,th,td{
            border-collapse: collapse;
            padding: 1rem;
            text-align: left;
        }
        tbody tr{
            background-color: rgba(0, 0, 0, 0.043);
        }
        th{
            background-color: #cfcfcffe;
        }
        tr:nth-of-type(even){
            background-color: rgba(255, 255, 255, 0.043);
        }
        tr:nth-of-type(even):hover{
            background-color: rgba(0, 0, 0, 0.078);
        }
        tr:nth-of-type(odd):hover{
            background-color: rgb(235, 235, 235);
        }

        /* Modal Styling */
.modal {
    display: none; /* Hidden by default */
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
    display: flex;
    justify-content: center;
    align-items: center;
}

.modal-content {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    width: 400px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    position: relative;
}

.modal-content .close {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 24px;
    cursor: pointer;
}

        



    </style>
</head>
<body>
    <!-- Navigation and Header -->
    <div class="container">
        <div class="square1">
            <div><a class="ID" href="Account-Page.php">Identification Card</a></div>
            <div><a class="booklet" href="Booklet.php">Booklet</a></div>
            <div><a class="prescription" href="Prescription.html">Prescription</a></div>
        </div>
        <div class="square2">
            <div class="Logo"><a href="Account-Page.php">OB</a></div>
        </div>
        <div class="square3">
            <div><a class="Account" href="">Account</a></div>
            <div><a class="Us" href="#">About Us</a></div>
            <div><a class="Logout" href="login-PG.php">Log Out</a></div>
        </div>
    </div>

    <!-- Center Container with Add Purchase Button -->
    <div class="center">
        <div class="header">
            <h1>BOOKLET</h1>
            <button onclick="openModal()">Add Purchase</button>
        </div>
        <div class="boxcontainer">
            <div class="OB">
                <!-- Display Existing Purchases -->
                <table class="medicine">
                    <thead>
                        <tr>
                            <th>Date Purchased</th>
                            <th>Item</th>
                            <th>Quantity</th>
                            <th>Balance</th>
                            <th>Attending Physician</th>
                            <th>PTR No.</th>
                            <th>Servicing Drug Store</th>
                            <th>Date Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // PHP code to fetch data from the database
                        $servername = "localhost";
                        $username_db = "root";  
                        $password_db = "";  
                        $dbname = "ob"; 

                        $conn = new mysqli($servername, $username_db, $password_db, $dbname);
                        $query = "SELECT * FROM booklet";  // Adjust table name and query as needed
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                <td>{$row['date_purchased']}</td>
                                <td>{$row['item']}</td>
                                <td>{$row['quantity']}</td>
                                <td>{$row['bala']}</td>
                                <td>{$row['attending_physician']}</td>
                                <td>{$row['ptr_no']}</td>
                                <td>{$row['servicing_drug_store']}</td>
                                <td>{$row['date_created']}</td>
                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <button onclick="openModal()">Add Purchase</button>

    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Add New Purchase</h2>
            <form action="add-product.control.php" method="POST">
                <label for="date_purchased">Date Purchased:</label>
                <input type="date" name="date_purchased" required><br>
                
                <label for="item">Item:</label>
                <input type="text" name="item" required><br>

                
                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" required><br>

                <label for="balance">Balance:</label>
                <input type="text" name="balance" required><br>
                
                <label for="ptr_no">PTR No.:</label>
                <input type="text" name="ptr_no" required><br>

                <label for="attending_physician">Attending Physician:</label>
                <input type="text" name="attending_physician"><br>
                
                <label for="servicing_drug_store">Servicing Drug Store:</label>
                <input type="text" name="servicing_drug_store" required><br>

                <button type="submit">Add Purchase</button>
            </form>
        </div>
    </div>

    <script>
       function openModal() {
            const modal = document.getElementById("modal");
            modal.style.display = "flex"; // Set display to flex to show the modal
        }

        function closeModal() {
            const modal = document.getElementById("modal");
            modal.style.display = "none"; // Hide the modal
        }
    </script>
</body>
</html>