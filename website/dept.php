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
	<h2>Departments</h2>
	<div class="srch">
		<form class="navbar-form" method="post" name="form">

		<input class="form-control" type="text" name="search" placeholder="search department.." required="">
		<button style="background-color: #6db6b9e6;" type="submit" name="submit" class="btn btn-default">
		<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		<?php

		if(isset($_POST['submit']))
		{
		$q=mysqli_query($con,"SELECT * from department where dept_name like '%$_POST[search]%' ");

		if(mysqli_num_rows($q)==0)
		{
		echo '<script>alert("Sorry! No such department found.")</script>';
		}
		else
		{
		echo "<table class='table table-bordered table-hover' >";
		echo "<tr style='background-color: #6db6b9e6;'>";
		//Table header
		echo "<th>"; echo "Department Name"; echo "</th>";
		echo "<th>"; echo "Head of Department";  echo "</th>";
		echo "</tr>";

		while($row=mysqli_fetch_assoc($q))
		{
		echo "<tr>";
		echo "<td>"; echo $row['dept_name']; echo "</td>";
		echo "<td>"; echo $row['HOD']; echo "</td>";

		
		echo "</tr>";
		}
		echo "</table>";
		}
		}
	?>
	</button>
		</form>
		</div>
		<?php
		$result = mysqli_query($con, "SELECT * FROM department");
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: white;'>";
		?>

		<table>
		    <tr>
		        <th>Department Name</th>
		        <th>Head of Department</th>
		        
		        
		    </tr>
		    <?php

		while ($row = mysqli_fetch_assoc($result)) {
		    ?>
		    <tr>
		        <td><?php echo $row['dept_name'] ?></td>
		        <td><?php echo $row['HOD'] ?></td>
		        
		      
		    </tr>
		    <?php
		}
		?>
		</table>
</body>
</html>