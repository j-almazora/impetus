<?php
header('Access-Control-Allow-Origin: https://impetusapp.com');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type");
header("Access-Control-Allow-Credentials: true");

$servername = "aa1io5ppsbam478.cyxokgcipezr.us-west-1.rds.amazonaws.com"; $username = "jimmy"; $password = "Bao121192";
$dbname = "impetus_db";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$id = $_GET['id'];

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error()); 

}
else{
    $sql = "UPDATE users SET type='User' WHERE user_id=$id;";
    $res = mysqli_query($conn,$sql);
} 
mysqli_close($conn);




?>