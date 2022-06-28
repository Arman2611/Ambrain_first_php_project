<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login page</title>
    <link rel="stylesheet" type="text/css" href="/src/assets/css/style.css">
</head>
<body class="full-screen flex-column-centered">
    <h1>Login</h1>
    <form method="POST">
        <div>Email: <input type="text" name="email"></div>
        <div>Password: <input type="text" name="password"></div>
        <input type="submit" value="Send">
    </form>
    <div>
        <span>Not registered?</span>
        <a href="/auth/register">Sign up</a>
    </div>
</body>
</html>