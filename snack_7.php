<?php

//snack 7

$students = [
    [
        'name' => 'gianluca',
        'lastname' => 'bagante',
        'votes' => [1, 2, 2, 3, 1, 1],
    ],
    [
        'name' => 'sara',
        'lastname' => 'elsharkawy',
        'votes' => [1, 2, 2, 3, 1, 1],
    ],
    [
        'name' => 'fabio',
        'lastname' => 'pacific',
        'votes' => [1, 2, 2, 3, 1, 1],
    ],
    [
        'name' => 'cristina',
        'lastname' => 'giacobbe',
        'votes' => [1, 2, 2, 3, 1, 1],
    ],
    [
        'name' => 'giuseppe',
        'lastname' => 'vartulli',
        'votes' => [1, 2, 2, 3, 1, 1],
    ],
    [
        'name' => 'alessia',
        'lastname' => 'marsetti',
        'votes' => [1, 2, 2, 3, 1, 1],
    ],
];

// foreach ($students as $student) {

//     echo '<div>';
//     echo $student['name'] . ' ' . $student['lastname'] . '| votes avg: ' . array_sum($students[2]['votes']) / count($students[2]['votes']);
//     echo '</div>';
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>snack_7</title>
</head>

<body>
    <div class="container d-flex flex-column   justify-content-center align-items-center">
        <?php foreach ($students as $student) : ?>

            <div class="mt-5 col-4">
                <p class="bg-dark text-white text-center">
                    <?php echo $student['name'] . ' ' . $student['lastname'] . '| votes avg: ' . array_sum($students[2]['votes']) / count($students[2]['votes']) ?>
                </p>
            </div>

        <?php endforeach; ?>
    </div>
</body>

</html>