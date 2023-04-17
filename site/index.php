<?php
require_once 'database.php';
session_start();
if (empty($_GET["sort"])) {
    $_GET["sort"] = "ing";
}
if (isset($_GET["sort"])) {
    switch ($_GET["sort"]) {
        case "tijd":
            $sql = "SELECT * FROM `Recepten` ORDER by time Desc;";
            break;
        case "niveau":
            $sql = "SELECT * FROM `Recepten` ORDER by level ASC;";
            break;
        case "ing":
            $sql = "SELECT * FROM `Recepten` ORDER by ing ASC;";
            break;
        case "id":
            $sql = "SELECT * FROM `Recepten` ORDER by id ASC;";
            break;
        default:
            $sql = "SELECT * FROM `Recepten` ORDER by id ASC;";
            break;
    }
}

$recepten = mysqli_query($conn, $sql);
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
    <?php include 'compents/kaart.php'; ?>
    <?php include 'compents/footer.php'; ?>
</body>


</html>