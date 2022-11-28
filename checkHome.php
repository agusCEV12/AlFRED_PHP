<?php
$host = "localhost"; // Host name
$username = "id19883648_user_alfred";
$password = "123412313123123123123aA´";
$db_name="id19883648_alfred"; // Database name
$tbl_name="home"; // Table name

//ini_set('display_errors', 1);
//error_reporting(~0);

$row["name"]="";

// Connect to server and select databse.
$mysqli = new mysqli($host, $username, $password, $db_name, 21);
echo $mysqli->host_info . "\n";

// username and password sent from form
$myusername=$_POST['email'];

$sql="SELECT * FROM $tbl_name WHERE emailUser ='$myusername'"; 
$result=mysqli_query($mysqli,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count== 1){
    echo "This user already has a home";
}
    else {
        echo "This user doesnt has a home";
    }
?>