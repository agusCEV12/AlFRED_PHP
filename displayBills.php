<?php
$host = "localhost"; // Host name
$username = "id19883648_user_alfred";
$password = "123412313123123123123aA´";
$db_name="id19883648_alfred"; // Database name
$tbl_name="bills"; // Table name


// Connect to server and select databse.
$con = new mysqli($host, $username, $password, $db_name, 21);

$homeName = $_POST['nameHome'];
$bill;

 
$sql = "select * from bills where nameHome='$homeName'";

$res = mysqli_query($con,$sql);


 
$result = array();
 
while($row = mysqli_fetch_array($res)){
array_push($result,array('bill'=>$row['bill']));
}
 
echo json_encode(array("result"=>$result));
 
mysqli_close($con);
 
?>