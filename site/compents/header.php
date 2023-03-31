<?php
require_once 'database.php';
$sql = "SELECT COUNT(*) FROM Recepten;";
$res = $conn->query($sql);
$count = $res->fetchColumn();
?>
<header>
    <h1>Yo website </h1>
    <?php include 'compents/nav.php' ?>
    <div class="count">
        <p><?php echo $count ?> <br> Recepten sorteren op:</p>
    </div>
</header>