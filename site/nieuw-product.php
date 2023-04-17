<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuw product invoeren</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form action="verwerk-nieuw-product.php" method="post">
        <h1>Nieuw product</h1>
        <div class="groep">

            <label for="naamp">Naam product</label>
            <input type="text" name="naamp" id="naamp">
        </div>
        <div class="groep">

            <label for="categoriep">Categorie product</label>
            <input type="text" name="categoriep" id="categoriep">
        </div>
        <div class="groep">

            <label for="prijsp">Prijs product</label>
            <input type="text" name="prijsp" id="prijsp">
        </div>
        <div class="groep">

            <label for="merkp">Merk product</label>
            <input type="text" name="merkp" id="merkp">
        </div>
        <button type="submit">Maak nieuw product!</button>
    </form>
</body>

</html>