<?php

$insert = false;
 if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";


    $con= mysqli_connect($server ,$username, $password);

    if(!$con){
        die("connection to this datbase failed due to" . mysqli_connect_error());
    }
    // echo "success connecting to the db";

  $name = $_POST ['name'];
  $age = $_POST ['age'];
  $email = $_POST ['email'];
  $phone = $_POST ['phone'];
  $gender = $_POST ['gender'];
  $other = $_POST ['other'];
    $sql = "  INSERT INTO `trip`.`trip` ( `Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `DD`) VALUES ( '$name',  '$age', '$gender', '$email', '$phone', '$other', current_timestamp())";
    // echo $sql;


    if($con->query($sql) == true){
        // echo "successfully inserted";
        $submit=true;

        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();

 }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="iit-kharagpur.jpg" alt="IIT Kharagpur">
    <div class="container">
        <h1> Welcome to IIT Kharagpur Travel Form</h1>
        <p>Enter your details and submit to confirm your participation in the trip.</p>
    <?php
    if($insert == true) {
        echo "<p class='success'>Your entry has been submitted successfully!</p>";
    }
    ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="email" id="email" placeholder="Enter your email">
            <input type="text" name="phone" id="phone" placeholder="Enter your phone">
             <input type="text" name="gender" id="gender" placeholder="Enter your gender">

            <textarea name="other" id="other" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>
        </form>

    </div>
    <script src="index.js"></script>

</body>
</html>