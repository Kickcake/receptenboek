<?php
require_once 'database.php';
// Dit is het startpunt van je applicatie.

echo ' Welkom bij het receptenboek';

$stmt = $conn->prepare("SELECT * FROM `Recepten`;");

$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$recepten = $stmt->fetchAll();
?>

<body>
    <?php foreach ($recepten as $recept) { ?>
        <p><?php echo $recept['name'] ?></p>
    <?php } ?>

</body>