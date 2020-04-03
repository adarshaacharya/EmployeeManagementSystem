<?php 
	session_start();
	// check if user is not logged in
	if (empty($_SESSION['user'])) {
	header('location:login.php');
		exit();
	}
	if (isset($_SESSION['user'])) {?>

<?php include 'nav.php'?>

<!DOCTYPE html>
<html>
<head>
	<title>View From DataBase</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>



<div class="container">
	<table>
			<caption>Employee Database Record</caption>
			<tr>
				<th>ID</th>
				<th>Employee Name</th>
				<th>Phone No.</th>
				<th>Department</th>
				<th>Salary</th>
				<th>Home Address</th>
				<th>Delete</th>
				<th>Update</th>
			</tr>

			<?php
				$servername = 'localhost';
				$username = 'root';
				$password = '';
				$dbname = 'record';
				$connection = mysqli_connect($servername, $username, $password, $dbname); // Establishing connection with dataBase
				
				$ViewQuery = "SELECT * From emp_record";
				$Execute = mysqli_query($connection, $ViewQuery);

				while ($DataRows = mysqli_fetch_array($Execute)) {
					$Id = $DataRows['id'];
					$Ename = $DataRows['ename'];
					$phone = $DataRows['phone'];
					$Dept = $DataRows['dept'];
					$Salary = $DataRows['salary'];
					$HomeAddress = $DataRows['homeaddress'];

					?>
									<tr>
										<td><?php echo $Id ?></td>
										<td><?php echo $Ename ?></td>
										<td><?php echo $phone ?></td>
										<td><?php echo $Dept ?></td>
										<td><?php echo $Salary ?></td>
										<td><?php echo $HomeAddress ?></td>
										<td><a class="delete" href="delete.php?id=<?php echo $Id; ?>">Delete</a></td>
										<td><a class="update" href="update.php?id=<?php echo $Id; ?>">Update</a></td>
									</tr>
							<?php }?>
		</table>
	</div>



</body>
</html>


<?php
}
?>