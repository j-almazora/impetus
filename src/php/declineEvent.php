<?php
header('Access-Control-Allow-Origin: https://impetusapp.com');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type");
header("Access-Control-Allow-Credentials: true");

session_start();
$user_id = $_SESSION["user_id"];
$event_id = $_GET['event_id'];


$servername = "aa1io5ppsbam478.cyxokgcipezr.us-west-1.rds.amazonaws.com"; $username = "jimmy"; $password = "Bao121192";
$dbname = "impetus_db";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error()); 

}
else{

    

    $sql = "UPDATE users_events SET status='No' WHERE user_id=$user_id AND event_id=$event_id;";

    $res = mysqli_query($conn,$sql);

    $row = mysqli_fetch_assoc($res);

    // echo json_encode($row);

    if($res){
        echo json_encode(true);
    } else {
        echo json_encode(false);
    
    }
} 
mysqli_close($conn);




?>