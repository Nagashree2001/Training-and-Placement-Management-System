<?php
session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'tpdb');
$usn=$_POST['usn'];
$pwd=$_POST['pwd'];
$q="select * from register where usn = '$usn' && pwd='$pwd' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1){
    $_SESSION['usn']=$usn;
    header('location:http://localhost/website/welcome.php');
}else{
    echo '<script>alert("Incorrect Password.");window.location="login.php"</script>';
    
}
?>