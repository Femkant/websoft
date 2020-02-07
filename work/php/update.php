<?php
/**
 * A page controller
 */
require "config.php";
require "src/functions.php";

// Get incoming values
$item  = $_GET["item"] ?? null;
$id    = $_POST["id"] ?? null;
$name = $_POST["name"] ?? null;
$hobby  = $_POST["hobby"] ?? null;
$save  = $_POST["save"] ?? null;
// var_dump($_GET);
// var_dump($_POST);

$db = connectDatabase($dsn);

$sql = "SELECT * FROM mytable";
$stmt = $db->prepare($sql);
$stmt->execute();
$res1 = $stmt->fetchAll();
//var_dump($res1);

if ($item) {
    $sql = "SELECT * FROM mytable WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$item]);
    $res2 = $stmt->fetch();
    //var_dump($res2);
}

if ($save) {
    $sql = "UPDATE mytable SET name = ?, hobby = ? WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$name, $hobby, $id]);
    //var_dump([$label, $type, $id]);

    header("Location: " . $_SERVER['PHP_SELF'] . "?item=$id");
    exit;
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

<h1>Update a row in the table</h1>
    <form>
        <select name="item" onchange="this.form.submit()">
            <option value="-1">Select item</option>
            <?php foreach ($res1 as $row) : ?>
                <option value="<?= $row["id"] ?>"><?= "(" . $row["id"]. ") " . $row["name"] ?></option>
                <?php endforeach; ?>
            </select>
        </form>



<?php if ($res2 ?? null) : ?>
        <form method="post">
            <fieldset>
                <legend>Update</legend>
                <p>
                    <label>Id: 
                        <input type="text" readonly="readonly" name="id" value="<?= $res2["id"] ?>">
                    </label>
                </p>
                <p>
                    <label>Label: 
                        <input type="text" name="name" value="<?= $res2["name"] ?>">
                    </label>
                </p>
                <p>
                    <label>Type: 
                        <input type="text" name="hobby" value="<?= $res2["hobby"] ?>">
                    </label>
                </p>
                <p>
                    <input type="submit" name="save" value="Save">
                </p>
            </fieldset>
        </form>
        <?php endif; ?>
        

<?php if ($res1 ?? null) : ?>
    <div class="cent">
    <table cellpadding="5" border="1" style="border-collapse: collapse;">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Hobby</th>
        </tr>

    <?php foreach ($res1 as $row) : ?>
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
