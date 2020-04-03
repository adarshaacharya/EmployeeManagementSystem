<?php include 'nav.php'?>
<?php
$connection = mysqli_connect('localhost', 'root', '', 'record'); // Establishing connection with dataBase
$Update_Record = $_GET['id'];
$ShowQuery = "SELECT * FROM emp_record WHERE id=$Update_Record ";
$Execute = mysqli_query($connection, $ShowQuery);
while ($DataRows = mysqli_fetch_array($Execute)) {
    $update_Id = $DataRows['id'];
    $Ename = $DataRows['ename'];
    $phone = $DataRows['phone'];
    $Dept = $DataRows['dept'];
    $Salary = $DataRows['salary'];
    $HomeAddress = $DataRows['homeaddress'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update into DataBase</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div id="insert-employee">
		<form  method="POST">
			<fieldset>
				<span class="FieldInfo">Employee Name :</span><br><input type="text" name="EName" value="<?php echo $Ename; ?>"><br>
				<span class="FieldInfo">Social Security Number :</span><br> <input type="text" name="phone" value="<?php echo $phone; ?>"><br>
				<span class="FieldInfo">Department :</span><br> <input type="text" name="Dept" value="<?php echo $Dept; ?>"><br>
				<span class="FieldInfo">Salary :</span> <br><input type="text" name="Salary" value="<?php echo $Salary; ?>"><br>
				<span class="FieldInfo">Home Address :</span><br><textarea name="HomeAddress"><?php echo $HomeAddress; ?></textarea><br>
				<input type="submit" name="Submit" value="Update">
			</fieldset>
		</form>
	</div>
</body>
</html>


<?php

$connection = mysqli_connect('localhost', 'root', '', 'record'); // Establishing connection with dataBase
if (isset($_POST['Submit'])) {
    $Update_id = $_GET['id'];
    $Ename = $_POST['EName'];
    $phone = $_POST['phone'];
    $Dept = $_POST['Dept'];
    $Salary = $_POST['Salary'];
    $HomeAddress = $_POST['HomeAddress'];
    $UpdateQuery = "UPDATE emp_record SET ename='$Ename', phone='$phone', dept='$Dept', salary='$Salary', homeaddress='$HomeAddress' WHERE id=$Update_id";
    $Execute = mysqli_query($connection, $UpdateQuery);
    if ($Execute) {
        echo "<script>window.location.href = 'index.php';</script>";
        echo '<script>window.open("Update_Into_DataBase.php?Update=Record Updated Successfully","_self") </script>';
    }
}

?>