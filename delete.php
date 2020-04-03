<?php

$connection = mysqli_connect('localhost','root','','record'); // Establishing connection with dataBase 
$Delete_Record_Id = $_GET['id'];
$DeleteQuery = "DELETE FROM emp_record WHERE id=$Delete_Record_Id";
$Execute = mysqli_query($connection,$DeleteQuery);
if($Execute)
{
	//echo  "<script>window.location.href = 'View_From_DataBase.php';</script>";
	header('location:index.php');
}

?>