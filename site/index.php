<?php
require_once 'database.php';
// Dit is het startpunt van je applicatie.

echo ' Welkom bij het receptenboek';

$stmt = $conn->prepare("SELECT * FROM `Recepten`;");

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
    <div class="recepten">
        <?php foreach ($recepten as $recept) : ?>
            <a hred="index.php" class="recept-card">
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
                        <p>
                            <?php echo $recept['id'] ?>
                        </p>
                    </td>
                    <td>
                        <p>
                            <?php echo $recept['name'] ?>
                        </p>
                    </td>
                    <td>
                        <p>
                            <?php echo $recept['level'] ?>
                        </p>
                    </td>
                    <td>
                        <p>
                            <?php echo $recept['chef'] ?>
                        </p>
                    </td>
                    <td>
                        <p>
                            <?php echo $recept['taste'] ?>
                        </p>
                    </td>
                    <td>
                        <p>
                            <?php echo $recept['amount'] ?>
                        </p>
                    </td>
                    <td>
                        <p>
                            <?php echo $recept['time'] ?>
                        </p>
                    </td>
                    <td>
                        <p>
                            <?php echo $recept['preparation'] ?>
                        </p>
                    </td>

                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>