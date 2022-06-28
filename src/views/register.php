<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration page</title>
    <link rel="stylesheet" type="text/css" href="/src/assets/css/style.css">
</head>
<body class="full-screen flex-column-centered">
    <h1>Registration</h1>
	<form method="POST">
        <div>Name: <input type="text" name="name"></div>
        <div>Surname: <input type="text" name="surname"></div>
        <div>Email: <input type="text" name="email"></div>
        <div>Password: <input type="text" name="password"></div>
        <input type="submit" value="Send">
	</form>
    <div>
        <span>Already registered?</span>
        <a href="/auth/login">Sign in</a>
    </div>
    <?php
       if (count($_POST) > 0) {
	       foreach ($_POST as $key => $value) {
		       echo $key . ": " . $value . "<br>";
	       }
           
           require_once './src/configuration/connection.php';
       }
    ?>
</body>
</html>