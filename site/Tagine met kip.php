<?php
require_once 'database.php';

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
    <header>
        <h1>Yo website </h1>
        <nav>
            <a href="index.php"><button>Home</button></a>
            <a href=""><button>5 eurp</button></a>
            <a href=""><button>5 eurp</button></a>
            <a href=""><button>5 eurp</button></a>
        </nav>
    </header>
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

                </>
            <?php endforeach; ?>
    </div>
    <footer>
        <p>okokok</p>
    </footer>
</body>


</html>