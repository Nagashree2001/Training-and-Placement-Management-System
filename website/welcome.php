
<?php
session_start();

$con=mysqli_connect('localhost','root');
if($con){
	echo "";
}else{
	echo "Not Successful";
}
mysqli_select_db($con, "tpdb");
$sql="CALL Result('$_SESSION[usn]')";
?>

<?php
$con=mysqli_connect('localhost','root');
if($con){
	echo "";
}else{
	echo "Not Successful";
}
mysqli_select_db($con, "tpdb");
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Welcome to Training and Placement</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>

  </button>
</nav>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<h1>USN - <?php echo $_SESSION['usn'];?></h1>
	<body style='background-color:#5DADE2'>;
	<style type="text/css">
		table {
			border-collapse: collapse;
			width: 100%;
			color: #0000ff;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
		}
		th {
			background-color: #588c7e;
			color: white;
		}
	</style>
</head>
<body>
	<h2>Training</h2>

		<?php
		$result = mysqli_query($con, "SELECT * FROM training where usn='$_SESSION[usn]' ");
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: white;'>";
		?>

		<table>
		    <tr>
		        <th>Soft Skills</th>
		        <th>Personal_Development</th>
		        <th>Aptitude</th>
		        <th>Technical</th>
		    </tr>
		    <?php

		while ($row = mysqli_fetch_assoc($result)) {
		    ?>
		    <tr>

		        <td><?php echo $row['soft_skills'] ?></td>
		        <td><?php echo $row['personal_dev'] ?></td>
		        <td><?php echo $row['aptitude'] ?></td>
		        <td><?php echo $row['technical'] ?></td>
		    </tr>
		    <?php
		}
		?>
		</table>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table {
			border-collapse: collapse;
			width: 100%;
			color: #000000;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
		}
		th {
			background-color: #0000ff;
			color: white;
		}
	</style>
</head>
<body>
	<h2>Placement</h2>

		<?php
		$result = mysqli_query($con, "SELECT * FROM placement where usn='$_SESSION[usn]'");
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: white;'>";
		?>

		<table>
		    <tr>
		        
		        <th>Company Name</th>
		        <th>Aptitude Round</th>
		        <th>Group Discussion</th>
		        <th>HR Round</th>
		        <th>Interview</th>
		        <th>Result</th>
		    </tr>
		    <?php

		while ($row = mysqli_fetch_assoc($result)) {
		    ?>
		    <tr>
		        
		        <td><?php echo $row['Company_name'] ?></td>
		        <td><?php echo $row['aptitude_round'] ?></td>
		        <td><?php echo $row['group_discussion'] ?></td>
		        <td><?php echo $row['HR_round'] ?></td>
		        <td><?php echo $row['Interview'] ?></td>
		        <td><?php echo $row['Result'] ?></td>
		    </tr>
		    <?php
		}
		?>
		</table>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style4.css">
<div class="login-box">
          <form align='right' action="logout.php" method="post">
  

  <input type="submit" class="btn" value="Log out" href="#">
  
</head>
</html>