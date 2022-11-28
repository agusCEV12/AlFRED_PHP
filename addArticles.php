<?php
$host = "localhost"; // Host name
$username = "id19883648_user_alfred";
$password = "123412313123123123123aA´";
$db_name="id19883648_alfred"; // Database name
$tbl_name="shopList"; // Table name


// Connect to server and select databse.
$mysqli = new mysqli($host, $username, $password, $db_name, 21);
echo $mysqli->host_info . "\n";

// username and password sent from form
$myHomeName=$_POST['nameHome'];
$myArticles=$_POST['articles'];

if(empty(trim($_POST["articles"]))){
    echo "Please enter one article";
} else{
    $sql = "INSERT INTO shopList (nameHome, articles)
        VALUES ('$myHomeName', '$myArticles')";
}

if ($mysqli->query($sql) === TRUE) {
    echo "Articulo añadido";
  } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
  }
   // Close connection
    mysqli_close($mysqli);