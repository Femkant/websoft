<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css" />
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

        <button onclick="runFetch()" class="buttons" style="margin-top:50px; min-width: 120px; min-height: 60px;">Fetch 1081</button>
        <button onclick="fetchData()" class="buttons" style="margin-top:50px; min-width: 120px; min-height: 60px;">Fetch data</button>

    <div id="placeHolder"></div>

    
    <div class="selectPos">
        <div id="warningMsg" style="margin-bottom: 5px; font-size: large;">Select municipality first!</div>
    <select id="municipality">
        <option>Select municipality</option>
        </select>
    </div>

    <div id="duck" class="duck"></div>

    <?php require __DIR__ . "../view/footer.php" ?>

    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/duck.js"></script>
    <script type="text/javascript" src="js/schools.js"></script>
    <script type="text/javascript" src="js/municipality.js"></script>

</div>
</body>
</html>