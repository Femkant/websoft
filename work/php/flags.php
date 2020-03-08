<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/flags.css" />
    <style>
        th, td, input {
            font:12px Verdana;
        }
        table, th, td 
        {
            border: solid 1px #DDD;
            border-collapse: collapse;
            padding: 2px 3px;
            text-align: center;
            
        }
        th {
            font-weight:bold;
        }
    </style>
</head>

<body id="bg" >

<div style="text-align: center;">
    <header>
        <?php require __DIR__ . "../view/header.php" ?>
    </header>


    <div class="linkContainer">
        <button id="swedenID" onclick="toggleSweden()" class="c1">Sweden</button>
        <button id="italyID" onclick="toggleItaly()" class="c2">Italy</button>
        <button id="germanyID" onclick="toggleGermany()" class="c3">Germany</button>
    </div>

    <div class="flag" id="flagContainer" onclick="hide()"></div>

    <div id="duck" class="duck"></div>
<?php require __DIR__ . "../view/footer.php" ?>

<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/duck.js"></script>
<script type="text/javascript" src="js/flags.js"></script>


</div>
</body>
</html>
