
<?php 
 
 $servername = 'localhost';
 $username = 'root';
 $password = '';
 $dbname = 'record';
 $connection = mysqli_connect($servername, $username, $password, $dbname); // Establishing connection with dataBase

// checking the connection
if(!$connection->connect_error) {
    // echo "Successfully connected";
}
else {
    die("Connection Failed : " . $connect->connect_error);
}