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
    <?php include 'compents/kaart.php'; ?>
    <?php include 'compents/footer.php'; ?>
</body>


</html>