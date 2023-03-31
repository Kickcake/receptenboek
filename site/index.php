<?php
require_once 'database.php';
session_start();
if (empty($_GET["sort"])) {
    $_GET["sort"] = "ing";
}
if (isset($_GET["sort"])) {
    switch ($_GET["sort"]) {
        case "tijd":
            $stmt = $conn->prepare("SELECT * FROM `Recepten` ORDER by time ASC;");
            break;
        case "niveau":
            $stmt = $conn->prepare("SELECT * FROM `Recepten` ORDER by level ASC;");
            break;
        case "ing":
            $stmt = $conn->prepare("SELECT * FROM `Recepten` ORDER by stuff ASC;");
            break;
        case "id":
            $stmt = $conn->prepare("SELECT * FROM `Recepten` ORDER by id ASC;");
            break;
        default:
            $stmt = $conn->prepare("SELECT * FROM `Recepten` ORDER by id ASC;");
            break;
    }
}

$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$recepten = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include 'compents/header.php' ?>
    <div>
        <img class="sideimg" src="images/160626-haal-marokko-in-huis-5-bron-casa-de-valentina.jpg" alt="sideimg">
    </div>
    <div class="recepten">
        <?php foreach ($recepten as $recept) : ?>
            <a href="<?php echo $recept['name'] ?>.php" class="recept-card">
                <div class="rgang">
                    <p>Gang: <?php echo $recept['course'] ?></p>
                </div>
                <div class="rpers">
                    <p><?php echo $recept['amount'] ?> Personen</p>
                </div>
                <div class="rtijd">
                    <p>Duur: <?php echo $recept['time'] ?></p>
                </div>
                <div class="ring">
                    <p><?php echo $recept['stuff'] ?> ingredienten</p>
                </div>
                <div class="rlevel">
                    <p>Niveau: <?php echo $recept['level'] ?></p>
                </div>
                <div class="rtitle">
                    <h1><?php echo $recept['name'] ?></h1>
                </div>
                <div class="rimg"><img src="<?php echo $recept['image'] ?>"></div>

            </a>
        <?php endforeach; ?>
    </div>
    <?php include 'compents/footer.php'; ?>
</body>


</html>