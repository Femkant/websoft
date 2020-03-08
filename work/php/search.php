<?php
/**
 * A page controller
 */
require "config.php";
require "src/functions.php";

// Get incoming values
$search = $_GET["search"] ?? null;
$like = "%$search%";
//var_dump($_GET);

if ($search) {
    // Connect to the database
    $db = connectDatabase($dsn);

    // Prepare and execute the SQL statement
    $sql = <<<EOD
SELECT
    *
FROM mytable
WHERE
    id = ?
    OR name LIKE ?
    OR hobby LIKE ?
;
EOD;
    $stmt = $db->prepare($sql);
    $stmt->execute([$search, $like, $like]);

    // Get the results as an array with column names as array keys
    $res = $stmt->fetchAll();
}
?>

<!doctype html>
<html lang="en">

<head>
<link rel="stylesheet" href="css/style.css" />
</head>

<body id="bg">
<div style="text-align: center;">
    <header>
        <?php require __DIR__ . "../view/header.php" ?>
    </header>

    <h1>Search the database</h1>

<form>
    <p>
        <label>Search: 
            <input type="text" name="search" value="<?= $search ?>">
        </label>
    </p>
</form>

<?php if ($search) : ?>
    <div class="cent">
    <table cellpadding="5" border="1" style="border-collapse: collapse;">
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
    </div>
<?php endif; ?>


<div id="duck" class="duck"></div>
<?php require __DIR__ . "../view/footer.php" ?>

<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/duck.js"></script>


</div>
</body>
</html>