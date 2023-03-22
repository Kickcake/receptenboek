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
    <table class="ja">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>level</th>
                <th>chef</th>
                <th>taste</th>
                <th>amount</th>
                <th>time</th>
                <th>preparation</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recepten as $recept) { ?>
                <tr>
                    <td>
                        <p><?php echo $recept['id'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $recept['name'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $recept['level'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $recept['chef'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $recept['taste'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $recept['amount'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $recept['time'] ?></p>
                    </td>
                    <td>
                        <p><?php echo $recept['preparation'] ?></p>
                    </td>

                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>