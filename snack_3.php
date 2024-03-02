<?php
//snack 3

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

// foreach ($posts as $date => $post_list) {
//     echo $date;

//     //var_dump($date, $post_list);
//     foreach ($post_list as $post) {
//         var_dump($post);
//     }
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack_3</title>
</head>

<body>

    <div class="container p-5 mb-4">
        <h1>Posts</h1>
    </div>

    <section>
        <div class="container">


            <?php foreach ($posts as $date => $post_list) : ?>

                <h1><?php echo $date; ?></h1>
                <?php foreach ($post_list as $post) : ?>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h3><?php echo $post['title'] ?></h3>
                            <p><?php echo $post['text'] ?></p>
                        </div>
                        <div class="card-footer">
                            <p><?php echo $post['author'] ?></p>
                        </div>
                    </div>

                    <!-- <div><?php var_dump($post);  ?></div> -->
                <?php endforeach; ?>


            <?php endforeach; ?>



        </div>
    </section>

</body>

</html>