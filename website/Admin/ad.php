<?php
session_start();
$con=mysqli_connect('localhost','root');
if($con){
    echo "Connection Successful";
}
else{
    echo "No connection";
}
mysqli_select_db($con,'tpdb');
$name=$_POST['name'];
$pwd=$_POST['pwd'];
$q="select * from admin where Admin_Name = '$name' && Password='$pwd' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1){
    $_SESSION['name']=$name;
    header('location:http://localhost/website/dashboard.php');
}else{
    echo '<script>alert("Incorrect Username or Password.");window.location="http://localhost/website/Admin/admin.php"</script>';
}
?>