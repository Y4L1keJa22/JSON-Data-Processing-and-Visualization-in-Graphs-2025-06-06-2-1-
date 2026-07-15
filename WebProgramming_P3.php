<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "income";
$con = new mysqli($server,$user,$pass,$dbname);
if($con->connect_errno !=0){
	die($con->connect_error);
}
//echo "Connection succesful.";

$id=filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT); //all values returned are string. filter_input() changes string into integer
$date=$_POST["date"];
$income=filter_input(INPUT_POST, "income", FILTER_VALIDATE_INT);
$comments=$_POST["comments"];
//for checkbox, to prevent NULL errors, use $variable = filterinput(INPUT_POST,"InputNameHere",FILTER_VALIDATE_BOOL);

if ( !$id || !$date || !$income) { //server-side validation
	die("incomplete form. Please fill up all the required(non-Optional) inputs");
}

$sql = "INSERT INTO income (id, date, income, comments) VALUES (?,?,?,?)"; //placeholder values

$stmt = mysqli_stmt_init($con); //statement
if ( ! mysqli_stmt_prepare($stmt,$sql)){ //catches syntax errors in the sql
	die(mysqli_error($con));
} 

mysqli_stmt_bind_param($stmt,"isis",$id,$date,$income,$comments); //parameters for binding values to placeholders

mysqli_stmt_execute($stmt); //passes the statement object as an argument

//echo "Record saved."; 

//var_dump($id, $date,$income,$comments);

?>