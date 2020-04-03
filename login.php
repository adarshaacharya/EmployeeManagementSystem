<?php

// check connection
 mysqli_connect('localhost', 'root', '', 'record');

session_start();

// check if users already logged in
if (isset($_SESSION['user_id'])) {
    header('location:index.php');
    exit();
}

if (!empty($_POST)) {
    $errors = array();

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) == true or empty($password) == true) {
        $errors[] = '* Username/Password field is required';
    } else {
        // if username exists

        if ($username === 'admin' && $password === 'admin') {
            $_SESSION['logged_in'] = true;
            $_SESSION['user'] = 'admin';

            header('location:index.php');
            exit();
        } else {
            $errors[] = ' * Username/Password combination is incorrect';
        }
    }

}

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="stylesheet" href="style.css">
    </head>
	<body>
		<div class="login">
			<h1>Login</h1>
			<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Login">
			</form>
		</div>
	</body>
</html>
