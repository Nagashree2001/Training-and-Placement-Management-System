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
	<div class="srch">
		<form class="navbar-form" method="post" name="form">

		<input class="form-control" type="text" name="search" placeholder="search usn.." required="">
		<button style="background-color: #6db6b9e6;" type="submit" name="submit" class="btn btn-default">
		<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		<?php

		
		if(isset($_POST['submit']))
		{
		$q=mysqli_query($con,"SELECT * from training where usn like '%$_POST[search]%' ");

		if(mysqli_num_rows($q)==0)
		{
		echo "Sorry! No such usn found.";
		}
		else
		{
		echo "<table class='table table-bordered table-hover' >";
		echo "<tr style='background-color: #6db6b9e6;'>";
		//Table header
		echo "<th>"; echo "ID"; echo "</th>";
		echo "<th>"; echo "USN";  echo "</th>";
		echo "<th>"; echo "Soft Skills";  echo "</th>";
		echo "<th>"; echo "Personal_Development";  echo "</th>";
		echo "<th>"; echo "Aptitude";  echo "</th>";
		echo "<th>"; echo "Technical";  echo "</th>";
		echo "</tr>";

		while($row=mysqli_fetch_assoc($q))
		{
		echo "<tr>";
		echo "<td>"; echo $row['id']; echo "</td>";
		echo "<td>"; echo $row['usn']; echo "</td>";
		echo "<td>"; echo $row['soft_skills']; echo "</td>";
		echo "<td>"; echo $row['personal_dev']; echo "</td>";
		echo "<td>"; echo $row['aptitude']; echo "</td>";
		echo "<td>"; echo $row['technical']; echo "</td>";

		echo "</tr>";
		}
		echo "</table>";
		}
		}
			?>
		</button>
		</form>
		</div>
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
	<h2>List of Trainings offered</h2>

		<?php
		$result = mysqli_query($con, "SELECT * FROM training");
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: white;'>";
		?>

		<table>
		    <tr>
		        <th>ID</th>
		        <th>USN</th>
		        <th>Soft Skills</th>
		        <th>Personal_Development</th>
		        <th>Aptitude</th>
		        <th>Technical</th>
		    </tr>
		    <?php

		while ($row = mysqli_fetch_assoc($result)) {
		    ?>
		    <tr>
		        <td><?php echo $row['id'] ?></td>
		        <td><?php echo $row['usn'] ?></td>
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