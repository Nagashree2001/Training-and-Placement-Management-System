<?php
$con=mysqli_connect('localhost','root');
if($con){
	echo "Successfully Registered";
}else{
	echo "Not Successful";
}
mysqli_select_db($con, "tpdb");

$name=$_POST['name'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$dob=$_POST['dob'];
$usn=$_POST['usn'];
$sem=$_POST['sem'];
$branch=$_POST['branch'];
$phone=$_POST['phone'];

$query="insert into register (name, email, pwd, dob, usn, sem, branch, phone) values ('$name', '$email', '$pwd', '$dob', '$usn', '$sem', '$branch', '$phone')";

mysqli_query($con, $query);
echo '<script>alert("Registered Successfully!");window.location="http://localhost/website/index.php"</script>';
?>

