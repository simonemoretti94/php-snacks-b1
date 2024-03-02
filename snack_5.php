<?php
//snack 5

$paragraph  = "Il sole sorge all’alba. I fiori sbocciano in primavera. L’estate è la stagione più calda dell’anno. Le foglie cadono in autunno. L’inverno porta la neve.";

$explodeParagraphs = explode('.', $paragraph);

var_dump($explodeParagraphs);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack_5</title>
</head>

<body>

    <?php foreach ($explodeParagraphs as $sentence) : ?>

        <!-- abbreviata -->
        <p><?= $sentence ?></p>

        <!-- estesa -->
        <p><?php echo $sentence ?></p>

    <?php endforeach;  ?>


</body>

</html>