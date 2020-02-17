<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css" />
    <meta charset="utf-8">
    <title>About this site</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="favicon.ico">
</head>

<body id="bg">

    <div style="text-align: center;">
        <header>
        <?php require "header.php" ?>
        </header>

        <article>

            <h1 style="text-align: center;">About</h1>

            <p>This website is part of the course websoft <a
                    href="https://www.hkr.se/program/datasystemutveckling">HKR</a>.
            </p>

            <p>This website will provide information about me and my progress in web development. In the report section,
                I
                will be posting a short text about what I've learned each session during the course.</p>

            <p style="text-align: center;">
                <img src="img/pic.jpg" width="500" alt="Me on an image">
            </p>

            <p><a href="https://github.com/Webbprogrammering/websoft">Link to course github</a>.</p>
            <p><a href="https://github.com/Femkant/websoft">Link to my forked version</a>.</p>
        </article>

        <div id="duck" class="duck"></div>

        <?php require "footer.php" ?>

        <script type="text/javascript" src="js/duck.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="js/play.js">
        </script>
</body>

</html>