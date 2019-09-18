<?php
// header("Access-Control-Allow-Origin: https://impetusapp.com");
// header("Access-Control-Allow-Headers: https://jimmytruong.ca");

header('Access-Control-Allow-Origin: https://impetusapp.com');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type");

$data = json_decode(file_get_contents("php://input"),true);
$event = $data['event'];
$servername = "aa1io5ppsbam478.cyxokgcipezr.us-west-1.rds.amazonaws.com"; $username = "jimmy"; $password = "Bao121192";
$dbname = "impetus_db";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn || !$event) {
    die("Connection failed: " . mysqli_connect_error()); 

}
else{
    $sql = "INSERT INTO events (name,date,time,thumb,sport,location,description) VALUES ('{$event["name"]}','{$event["date"]}','{$event["time"]}','{$event["thumb"]}','{$event["sport"]}','{$event["location"]}','{$event["desc"]}')";
    
    $res = mysqli_query($conn,$sql);
    // $last_id = mysqli_insert_id($conn);
    // $eventName = "event".$last_id;

    // $sql2 = "CREATE TABLE $eventName (user_id VARCHAR(20), participants VARCHAR(100), reg_time VARCHAR(100), status VARCHAR(100), PRIMARY KEY (user_id));";
    // $res2 = mysqli_query($conn,$sql2);
    
    if($res){
        echo json_encode(true);
    } else {
        echo json_encode(false);
    }
} 
mysqli_close($conn);




?>

