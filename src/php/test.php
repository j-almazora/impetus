<?php
header('Access-Control-Allow-Origin: https://impetusapp.com');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type");
header("Access-Control-Allow-Credentials: true");



$servername = "aa1io5ppsbam478.cyxokgcipezr.us-west-1.rds.amazonaws.com"; $username = "jimmy"; $password = "Bao121192";
$dbname = "impetus_db";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error()); 

}
else{
    $sql = "SELECT * FROM teams WHERE teamname = 'DOTO';";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_all($res, MYSQLI_ASSOC);

    print_r($row);
    echo "hello";
} 
mysqli_close($conn);




?>