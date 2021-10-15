<?php
$con=mysqli_connect('localhost','root');
if($con){
	echo "Successfully Registered";
}else{
	echo "Not Successful";
}
mysqli_select_db($con, "tpdb");

$query="UPDATE training SET soft_skills='$_POST[ss]', personal_dev='$_POST[pd]', aptitude='$_POST[ap]', technical='$_POST[te]', cgpa='$_POST[cgpa]' where usn='$_POST[usn]' ";

mysqli_query($con, $query);
header('location:http://localhost/website/dashboard.php');
?>

