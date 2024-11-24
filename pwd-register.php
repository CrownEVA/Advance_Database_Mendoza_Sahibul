<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="pwd-register.control.php" method="POST">
        <label for="pwd-id-number">PWD ID Number:</label>
        <input type="text" name="pwd-id-number"><br>

        <label for="password">Password:</label>
        <input type="password" name="password"><br>

        <label for="fullname">Fullname</label>
        <input type="text" name="fullname"><br>
        
        <label for="type_of_disability">Type of Disability</label>
        <input type="text" name="type_of_disability"><br>
        
        <label for="date_of_birth">Date of Birth</label>
        <input type="date" name="date_of_birth"><br>

        <label for="blood_type">Blood Type</label>
        <input type="text" name="blood_type"><br>

        <label for="address">Address</label>
        <input type="text" name="address"><br>

        <label for="date_issued">Date Issued</label>
        <input type="date" name="date_issued"><br>

        <label for="guardian_name">Guardian Name</label>
        <input type="text" name="guardian_name"><br>

        <label for="guardian_contact_number">Guardian Contact Number</label>
        <input type="text" name="guardian_contact_number"><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
