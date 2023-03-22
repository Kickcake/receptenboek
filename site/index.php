<?php
require 'database.php';
// Dit is het startpunt van je applicatie.

echo ' Welkom bij het receptenboek';

$conn = mysqli_connect($servername, $username, $password);
$sql = "SELECT * FROM `Recepten`;";
$result = mysqli_query($conn, $sql);
$recepten = mysqli_fetch_assoc($result)
?>

<body>
    <?php foreach ($recepten as $recept) { ?>
        <p><?php echo $recept['name'] ?></p>
    <?php } ?>

</body>