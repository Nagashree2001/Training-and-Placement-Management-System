<?php
$con=mysqli_connect('localhost','root');
if($con){
  echo "Successfully Registered";
}else{
  echo "Not Successful";
}
mysqli_select_db($con, "tpdb");

$cn=$_POST['cn'];
$loc=$_POST['loc'];
$job=$_POST['job'];
$pack=$_POST['pack'];

$query="insert into company (Company_name, Location, Job_offered, Package) values ('$cn', '$loc', '$job', '$pack')";

mysqli_query($con, $query);
header('location:http://localhost/website/dashboard.php');
?>

