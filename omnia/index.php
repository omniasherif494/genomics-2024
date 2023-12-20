<?php
$Username=$_REQUEST['username'];
$Password=$_REQUEST['password'];

if(isset($_POST['btntest']))
{

$servername="localhost";
$username="root";
$password="";
$dbname="bis_level_four";



$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection failed : " . $conn->connect_error);

}

$sql="insert into studentbisinfo values('$Username','$Password')";
if($conn->query($sql)=== True){
    echo"Record inserted successfully ";
}
else{
     echo "Error inserting record :" . $conn->error;
}
$conn->close();
}
?>