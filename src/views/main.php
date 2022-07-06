<?php

// SESSION_TIMEOUT is the amount of seconds we want the session to last for.
const SESSION_TIMEOUT = 10;

if (isset($_COOKIE['PHPSESSID'])) {
	session_start();
    
    // Checking if session is not expired
    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > SESSION_TIMEOUT)) {
        session_unset();
        session_destroy();
	    setcookie('PHPSESSID', null, -1, '/');
        header('Location: ./auth/login');
    }
    
    // Updating session time
	$_SESSION['LAST_ACTIVITY'] = time();
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Main Page</title>
    <link rel="stylesheet" type="text/css" href="/src/assets/css/style.css">
</head>
<body>
    <header class="flex-row-spaced">
<?php
    if (isset($_SESSION['user_id'])) {
        echo "
            <span id='welcome-box'>Welcome, " . $_SESSION['name'] . "</span>
            <nav>
              <a href='/auth/logout'>Sign Out</a>
            </nav>";
    } else {
        echo "
            <span id='welcome-box'>Please register or sign in</span>
            <nav>
              <a href='/auth/register'>Sign Up</a>
              <a href='/auth/login'>Sign In</a>
            </nav>";
    }
?>
    </header>
    <main>
<?php
    if (isset($_SESSION['user_id'])) {
        echo "
            <section id='profile-section'>
                <h3>Your profile data</h3>
                <article id='profile-data'>
                    <p>Name:" . $_SESSION['name'] . "</p>
                    <p>Name:" . $_SESSION['surname'] . "</p>
                    <p>Name:" . $_SESSION['email'] . "</p>
                </article>
            </section>";
        echo "
            <section id='own-posts-section'>
                <h3>Your posts</h3>
                <div id='own-posts'></div>
            </section>";
    }
?>
        <section id="all-posts-section">
            <h3>All posts</h3>
            <div id="all-posts"></div>
        </section>
    </main>
</body>
</html>