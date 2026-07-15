<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "income";
$con = new mysqli($server,$user,$pass,$dbname);
if($con->connect_errno !=0){
	die($con->connect_error);
}

$sql = "SELECT * FROM income";
$res = $con->query($sql);
$data = [];
while($row = $res->fetch_assoc()){ //puts database data in array
	array_push($data,$row);
}
echo json_encode($data); //prints data as json format
?>