<?php 
	session_start();
	// check if user is not logged in
	if (empty($_SESSION['user'])) {
	header('location:login.php');
		exit();
	}
	if (isset($_SESSION['user'])) {?>

<?php include 'nav.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>View From DataBase</title>
</head>

<body>
	<div class="search">
		<form action="search.php" method="GET" class="search-box">
				<input type="text" name="Search" value="" placeholder="Type emp ID or name..." id="search-term">
				<input type="submit" name="SearchButton" value="Search" id="searchButton" onClick="search();">
		</form>
	</div>

<?php 
	$connection = mysqli_connect('localhost','root','','record'); // Establishing connection with dataBase
	if(isset($_GET['SearchButton']))
	{
		$Search = $_GET['Search'];
		$SearchQuery = "SELECT * From emp_record WHERE ename='$Search' OR id='$Search'";
		$Execute = mysqli_query($connection,$SearchQuery);
		while($DataRows = mysqli_fetch_array($Execute))
		{
				$Id = $DataRows['id'];
				$Ename = $DataRows['ename'];
				$phone = $DataRows['phone'];
				$Dept = $DataRows['dept'];
				$Salary = $DataRows['salary'];
				$HomeAddress = $DataRows['homeaddress'];
?>
<table>
	<caption>Search Results</caption>
	<tr>
		<th>ID</th>
		<th>Employee Name</th>
		<th>phone</th>
		<th>Department</th>
		<th>Salary</th>
		<th>Home Address</th>
	</tr>
	<tr>
		<td><?php echo $Id ?></td>
		<td><?php echo $Ename ?></td>
		<td><?php echo $phone ?></td>
		<td><?php echo $Dept ?></td>
		<td><?php echo $Salary ?></td>
		<td><?php echo $HomeAddress ?></td>
	</tr>
</table>
<?php }
	} 
?>


<div class="container">
<table>
	<caption>Employee Database Record</caption>
	<tr>
		<th>ID</th>
		<th>Employee Name</th>
		<th>phone</th>
		<th>Department</th>
		<th>Salary</th>
		<th>Home Address</th>
		<th>Delete</th>
		<th>Update</th>
	</tr>
	
		<?php
			$connection = mysqli_connect('localhost','root','','record'); // Establishing connection with dataBase
			$ViewQuery = "SELECT * From emp_record";
			$Execute = mysqli_query($connection,$ViewQuery);
			while($DataRows = mysqli_fetch_array($Execute))
			{
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
	<?php } ?> 
</table>
	
</div>

<script src="app.js"></script>
</body>
</html>



<?php } ?>;