<?php
$host = "localhost"; // Host name
$username = "id19883648_user_alfred";
$password = "123412313123123123123aA´";
$db_name="id19883648_alfred"; // Database name
$tbl_name="bills"; // Table name


// Connect to server and select databse.
$mysqli = new mysqli($host, $username, $password, $db_name, 21);
echo $mysqli->host_info . "\n";

// username and password sent from form
$myHomeName=$_POST['nameHome'];
$myBill=$_POST['bill'];

if(empty(trim($_POST["bill"]))){
    echo "Please enter one article";
} else{
    $sql = "INSERT INTO bills (nameHome, bill)
        VALUES ('$myHomeName', '$myBill')";
}

if ($mysqli->query($sql) === TRUE) {
    echo "Gasto añadido";
  } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
  }
   // Close connection
    mysqli_close($mysqli);