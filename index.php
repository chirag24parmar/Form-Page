<?php
if (isset($_POST['name'])) {
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);
mysqli_select_db($con, "trip");

if(!$con) {
    die("connection to this database failed due to" . mysqli_connect_error());

}

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];

 $sql = "INSERT INTO trip (uname, age, gender, email, phone, other) 
        VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc')";
// echo $sql;


if ($con->query($sql) == true) {
    echo "Successfully inserted";
}else {
    echo "ERROR: $sql <br> $con->error";
}

$con->close();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img  class="bg" src="bg.jpeg" alt="SSIPMT">
    <div class="container">
       <h1>Welcome to SSIPMT US trip form</h1>
       <p>Enter your details and submit this form to confrom your participation in the trip.</p>
       <p>Thanks for submitting your form. We are happy to see you joining us for the trip.</p>
       <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="text" name="age" id="age" placeholder="Enter your age">
        <input type="text" name="gender" id="gender" placeholder="Enter your gender">
        <input type="text" name="email" id="email" placeholder="Enter your email">
        <input type="text" name="phone" id="phone" placeholder="Enter your phone">
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
        <button class="btn">submit</button>
       </form>
    </div>
    <script src="index.js"></script>
</body>
</html>