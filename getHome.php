<?php
$host = "localhost"; // Host name
$username = "id19883648_user_alfred";
$password = "123412313123123123123aA´";
$db_name="id19883648_alfred"; // Database name
$tbl_name="home"; // Table name


// Connect to server and select databse.
$mysqli = new mysqli($host, $username, $password, $db_name, 21);

$userEmail=$_POST['email'];
$resultHome = "";
$row['name'] = "";


$sql="SELECT * FROM $tbl_name WHERE emailUser ='$userEmail'"; 
$result=mysqli_query($mysqli,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

while($row = mysqli_fetch_array($result)){
      echo $row['name'];
 }

