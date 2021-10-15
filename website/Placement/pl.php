<?php
$con=mysqli_connect('localhost','root');
if($con){
	echo "Successfully Registered";
}else{
	echo "Not Successful";
}
mysqli_select_db($con, "tpdb");

$query="UPDATE placement  SET Company_name='$_POST[cn]', aptitude_round='$_POST[ar]', group_discussion='$_POST[gd]', HR_round='$_POST[hr]', Interview='$_POST[interview]' where usn='$_POST[usn]' ";
mysqli_query($con, $query);
header('location:http://localhost/website/dashboard.php');
?>

