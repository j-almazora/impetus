<?php
// header("Access-Control-Allow-Origin: https://impetusapp.com");
// header("Access-Control-Allow-Headers: https://jimmytruong.ca");

header('Access-Control-Allow-Origin: https://impetusapp.com');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type");
header("Access-Control-Allow-Credentials: true");


$data = json_decode(file_get_contents("php://input"),true);

session_start();  

$email = $data['userEmail'];
$user_id = $data['userID'];

  $servername = "aa1io5ppsbam478.cyxokgcipezr.us-west-1.rds.amazonaws.com"; $username = "jimmy"; $password = "Bao121192";
  $dbname = "impetus_db";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error()); 

}
else{

    $pst = new DateTimeZone('America/Los_Angeles');
    $current = new DateTime('',$pst); // first argument uses strtotime parsing
    $time = $current->format('Y-m-d'); 

    $sql = "SELECT * FROM events WHERE date>='".$time."' ORDER BY convert(date,DATE) ASC;";
    $sql2 = "SELECT events.event_id,users_events.user_id, users_events.status FROM events LEFT JOIN users_events ON events.event_id = users_events.event_id WHERE users_events.user_id = $user_id;";
    $sql3 = "SELECT * FROM users ORDER BY score DESC LIMIT 3;";
    $sql4 = "SELECT * FROM announcement;";
    $sql5 = "SELECT * FROM teams ORDER BY team_score DESC LIMIT 5;";

    $res = mysqli_query($conn,$sql);
    $res2 = mysqli_query($conn,$sql2);
    $res3 = mysqli_query($conn,$sql3);
    $res4 = mysqli_query($conn,$sql4);
    $res5 = mysqli_query($conn,$sql5);

    $row = mysqli_fetch_all($res, MYSQLI_ASSOC);
    $row2 = mysqli_fetch_all($res2, MYSQLI_ASSOC);
    $row3 = mysqli_fetch_all($res3, MYSQLI_ASSOC);
    $row4 = mysqli_fetch_all($res4, MYSQLI_ASSOC);
    $row5 = mysqli_fetch_all($res5, MYSQLI_ASSOC);

    $array = array();
    $array[] = $row;
    $array[] = $row2;
    $array[] = $row3;
    $array[] = $row4;
    $array[] = $row5;

  

    echo json_encode($array);

} 


mysqli_close($conn);




?>