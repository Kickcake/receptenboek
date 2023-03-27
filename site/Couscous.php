<?php
require_once 'database.php';
$id = 1;
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
    <div class="recept">

    </div>
    <footer>
        <p>okokok</p>
    </footer>
</body>


</html>