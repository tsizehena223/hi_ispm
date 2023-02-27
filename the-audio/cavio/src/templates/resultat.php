<?php require_once 'src/elements/header.php' ?>

<div class="container">
    <div class="item">
        <h1><?php echo $format[0] ?></h1>
        <img src="src/img/<?= strtolower($format[0]) ?>.png" alt="">
        <p><?= $format[1] ?>
        <a href="<?= $format[2]?>">En savoir plus</a>
        </p>
    </div>

    <div class="item">
        <h1><?php echo $format[3] ?></h1>
        <img src="src/img/<?= strtolower($format[3]) ?>.png" alt="">
        <p><?= $format[4] ?>
        <a href="<?= $format[5]?>">En savoir plus</a>
        </p>
    </div>
</div>
