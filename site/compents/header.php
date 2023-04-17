<?php
require_once 'database.php';
$sql = "SELECT COUNT(*) AS dl FROM Recepten;";
$recepten = mysqli_query($conn, $sql);
$count = mysqli_fetch_assoc($recepten);
$l = ($count['dl']);
?>
<header>
    <h1>ÈPICER</h1>
    <?php include 'compents/nav.php' ?>
</header>