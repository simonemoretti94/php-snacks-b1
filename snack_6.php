<?php

//snack 6

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>snack_6</title>
</head>

<body>

    <?php foreach ($db as $category => $list) : ?>

        <div class="<?php echo $category === 'teachers' ? 'bg-warning' : 'bg-primary' ?>">

            <?php foreach ($list as $employee) : ?>

                <h3><?= $employee['name'] ?> <?= $employee['lastname'] ?></h3>

            <?php endforeach; ?>

        </div>

    <?php endforeach; ?>

</body>

</html>