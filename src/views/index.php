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
        <span id="welcome-box">Please register or sign in</span>
        <nav>
            <a href="/auth/register">Sign Up</a>
            <a href="/auth/login">Sign In</a>
        </nav>
    </header>
    <main>
        <section id="profile-section">
            <h3>Your profile data</h3>
            <article id="profile-data"></article>
        </section>
        <section id="own-posts-section">
            <h3>Your posts</h3>
            <div id="own-posts"></div>
        </section>
        <section id="all-posts-section">
            <h3>All posts</h3>
            <div id="all-posts"></div>
        </section>
    </main>
    <footer></footer>
</body>
</html>