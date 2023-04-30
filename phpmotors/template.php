<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Content Title - PHP Motors</title>
        <link rel="stylesheet" href="/phpmotors/css/style.css">
        <script type="text/javascript" src="/phpmotors/js/script.js"></script>
    </head>
    <body>
        <header>
            <img src="/phpmotors/images/site/logo.png" name="logo" class="logo">
            <a href="#myaccount" class="myAcc">My Account</a>
        </header>
        <nav class="topnav" id="myTopnav">
            <?php require_once $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/nav.php'?>
        </nav>
        <main>
            <?php require_once $_SERVER['DOCUMENT_ROOT'].'/phpmotors/home.php'?>
        </main>
        <footer>
            <?php require_once $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/footer.php'?>
        </footer>
    </body>
    
</html>