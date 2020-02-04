<?php
/**
 * A page controller
 */
require "config.php";
require "src/functions.php";

// Get incoming values
$name  = $_POST["label"] ?? null;
$hobby   = $_POST["type"] ?? null;
$create = $_POST["create"] ?? null;
//var_dump($_POST);

if ($create) {
    // Connect to the database
    $db = connectDatabase($dsn);

    // Prepare and execute the SQL statement
    $sql = "INSERT INTO mytable (name, hobby) VALUES (?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->execute([$name, $hobby]);

    // Get the results as an array with column names as array keys
    $sql = "SELECT * FROM mytable";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $res = $stmt->fetchAll();
}



?>
<!doctype html>
<html>

<head>
<link rel="stylesheet" href="css/style.css" />
</head>

<body id="bg">
<div style="text-align: center;">
    <header>
        <?php require __DIR__ . "../view/header.php" ?>
    </header>

<h1>Create an entry into the table</h1>

<form method="post">
    <fieldset>
        <legend>Create</legend>
        <p>
            <label>Name: 
                <input type="text" name="label" placeholder="Enter name">
            </label>
        </p>
        <p>
            <label>Hobby: 
                <input type="text" name="type" placeholder="Enter hobby">
            </label>
        </p>
        <p>
            <input type="submit" name="create" value="Create">
        </p>
    </fieldset>
</form>

<?php if ($res ?? null) : ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Hobby</th>
        </tr>

    <?php foreach ($res as $row) : ?>
        <tr>
            <td><?= $row["id"] ?></td>
            <td><?= $row["name"] ?></td>
            <td><?= $row["hobby"] ?></td>
        </tr>
    <?php endforeach; ?>

    </table>
<?php endif; ?>


<div id="duck" class="duck"></div>
<?php require __DIR__ . "../view/footer.php" ?>

<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/duck.js"></script>


</div>
</body>
</html>