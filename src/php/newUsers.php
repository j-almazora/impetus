<?php
// header("Access-Control-Allow-Origin: https://impetusapp.com");
// header("Access-Control-Allow-Headers: https://jimmytruong.ca");

header('Access-Control-Allow-Origin: https://impetusapp.com');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type");
header("Access-Control-Allow-Credentials: true");


$data = json_decode(file_get_contents("php://input"),true);

session_start();  

  //echo $_SESSION["user_email"];
  $email = $_SESSION["user_email"];
  // $email = 'hoangbao1992@gmail.com';


  $servername = "aa1io5ppsbam478.cyxokgcipezr.us-west-1.rds.amazonaws.com"; $username = "jimmy"; $password = "Bao121192";
  $dbname = "impetus_db";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error()); 

}
else{

    $pst = new DateTimeZone('America/Los_Angeles');
    $current = new DateTime('',$pst); // first argument uses strtotime parsing
    $time = $current->format('Y-m-d H:i:s'); 

    $sql = "SELECT * FROM users ORDER BY user_id DESC LIMIT 10;";

    $res = mysqli_query($conn,$sql);

    $row = mysqli_fetch_all($res, MYSQLI_ASSOC);


    echo json_encode($row);
} 


mysqli_close($conn);




?>