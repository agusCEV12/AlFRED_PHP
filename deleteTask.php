<?php
$host = "localhost"; // Host name
$username = "id19883648_user_alfred";
$password = "123412313123123123123aA´";
$db_name="id19883648_alfred"; // Database name
$tbl_name="taskList"; // Table name


// Connect to server and select databse.
$mysqli = new mysqli($host, $username, $password, $db_name, 21);
echo $mysqli->host_info . "\n";

// username and password sent from form
$myHomeName=$_POST['nameHome'];
$myTask=$_POST['task'];

if(empty(trim($_POST["task"]))){
    echo "Please enter one article";
} else{
    $sql = "DELETE FROM taskList WHERE task = '$myTask' AND nameHome = '$myHomeName'";
}


if ($mysqli->query($sql) === TRUE) {
    echo "Tarea Realizada";
  } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
  }
   // Close connection
    mysqli_close($mysqli);