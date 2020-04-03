<?php 
	session_start();
	// check if user is not logged in
	if (empty($_SESSION['user'])) {
	header('location:login.php');
		exit();
	}
	if (isset($_SESSION['user'])) {?>

        <?php
            if (isset($_POST['Submit'])) {
                if (!empty($_POST['EName']) && !empty($_POST['phone']) && !empty($_POST['Dept']) && !empty($_POST['Salary']) && !empty($_POST['HomeAddress'])) {
                    $EName = $_POST['EName'];
                    $phone = $_POST['phone'];
                    $Dept = $_POST['Dept'];
                    $Salary = $_POST['Salary'];
                    $HomeAddress = $_POST['HomeAddress'];
                    $connection = mysqli_connect('localhost', 'root', '', 'record'); // Establishing connection with dataBase
                    $Query = "INSERT INTO emp_record(ename,phone,dept,salary,homeaddress)VALUES('$EName','$phone','$Dept','$Salary','$HomeAddress')";
                    $result = mysqli_query($connection, $Query);

                    if ($result) {
                        echo '<span class="success">New record created successfully</span>';
                    } else {
                        echo "Error: " . $Query . "<br>" . mysqli_error($connection);
                    }
                    } else {
                        echo '<span class="danger">Please fill all field</span>';
                    }

                }

        ?>

<?php include 'nav.php'?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert into DataBase</title>
</head>

<body>


	<div id="insert-employee">
		<form action="insert.php?" method="POST">
			<fieldset>
				<span class="FieldInfo">Employee Name :</span><br><input type="text" name="EName" value="" id="emp-name"><br>


				<span class="FieldInfo">Phone No :</span><br> <input type="text" name="phone" value="" id="phone"><br>


				<span class="FieldInfo">Department :</span><br> <input type="text" name="Dept" value="" id="department"><br>


				<span class="FieldInfo">Salary :</span> <br><input type="text" name="Salary" value=""id="salary"><br>


				<span class="FieldInfo">Home Address :</span><br><textarea name="HomeAddress" id="home-address"></textarea><br>


                <input type="submit" name="Submit" value="Submit Your Record"  id="submit-employee" onClick="validateEmployee();">
                
			</fieldset>
		</form>
	</div>

    <script src="app.js"></script>
</body>
</html>

<?php
}
?>