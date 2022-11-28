<?php
$host = "localhost"; // Host name
$username = "id19883648_user_alfred";
$password = "123412313123123123123aA´";
$db_name="id19883648_alfred"; // Database name
$tbl_name="home"; // Table name


// Connect to server and select databse.
$mysqli = new mysqli($host, $username, $password, $db_name, 21);
echo $mysqli->host_info . "\n";

// username and password sent from form
$myEmailUser=$_POST['emailUser'];
$myName=$_POST['name'];

if(empty(trim($_POST["name"]))){
    echo "Please enter a house name";
} else{
    $sql = "INSERT INTO home (emailUser, name)
        VALUES ('$myEmailUser', '$myName')";
}

if ($mysqli->query($sql) === TRUE) {
    echo "Casa Creada";
  } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
  }
   // Close connection
    mysqli_close($mysqli);
?>