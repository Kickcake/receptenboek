<div class="recepten">
    <?php foreach ($recepten as $recept) : ?>
        <a href="Recept.php?id=<?php echo $recept['id'] ?>" class="recept-card">
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

        </a>
    <?php endforeach; ?>
</div>