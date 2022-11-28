<?php
$host = "localhost"; // Host name
$username = "id19883648_user_alfred";
$password = "123412313123123123123aA´";
$db_name="id19883648_alfred"; // Database name
$tbl_name="users"; // Table name

ini_set('display_errors', 1);
error_reporting(~0);

$row["name"]="";

// Connect to server and select databse.
$mysqli = new mysqli($host, $username, $password, $db_name, 21);
echo $mysqli->host_info . "\n";

// username, password and email sent from form
$myusername=$_POST['username'];
$mypassword=$_POST['password'];
$mymail=$_POST['email'];

$confirm_password_err = $_POST['password2'];
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        echo "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        echo"Username can only contain letters, numbers, and underscores.";
    } else{
        $myusername_param = trim($_POST["username"]);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        echo "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        echo "Password must have atleast 6 characters.";
    } else{
        $mypassword_param = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["password2"]))){
        echo "Please confirm password.";     
    } else{
        $confirm_password_err_param = trim($_POST["password2"]);
        if(empty($mypassword) || ($mypassword != $confirm_password_err)){
            echo "Password did not match.";
        }
    }
    
    //Validate email
    if(empty(trim($_POST["email"]))){
        echo "Please enter a email";     
    } else{
        
        $sql="SELECT email FROM $tbl_name WHERE email='$mymail'"; 
        $result=mysqli_query($mysqli,$sql);
        
        // Mysql_num_row is counting table row
        $count=mysqli_num_rows($result);
        // If result matched $myusername and $mypassword, table row must be 1 row
        
        if($count==1){
            echo " Ya existe un usuario con ese email";
        }else {
            $mymail_param = trim($_POST["email"]);
        }
        
        
    }
    
    
    // Check input errors before inserting in database
    if(!empty($myusername_param) && !empty($mypassword_param) && !empty($confirm_password_err_param) && !empty($mymail_param)){
        
        
        $sql = "INSERT INTO users (name, password, email)
        VALUES ('$myusername_param', '$mypassword_param', '$mymail_param')";
        
        if ($mysqli->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
        
        }
    
    // Close connection
    mysqli_close($mysqli);
?>