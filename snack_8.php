<?php

/*
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

//checking that name is set and its length is longer than 3
#var_dump('name: ', isset($_GET['name']) && strlen($_GET['name']) > 3);

//checking if mail is set and it contains the @ value
#var_dump('mail:', isset($_GET['mail']) && str_contains($_GET['mail'], '@'));

//checking if is contained and if it's an integer
#var_dump('age: ', isset($_GET['age']) && is_numeric($_GET['age']));

$canAccess;

if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
    var_dump('name, mail and age are set');
    if (strlen($_GET['name']) > 3 && str_contains($_GET['mail'], '@') && is_numeric($_GET['age'])) {
        var_dump('every value matches requirements, you can access your personal area');
        $canAccess = true;
    }
} else {
    var_dump('error');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>snack_8</title>
</head>

<body>


    <div class="container">
        <p class="col-4 text-center text-primary my-2"><?php echo $canAccess ? 'Welcome!' : 'Access denied' ?></p>
        <form action="" method="get">
            <div class="wrapper">
                <label for="name">Name</label>
                <input class="form-control" type="text" placeholder="write here your name" name="name" id="input_name" required>
            </div>
            <div class="wrapper">
                <label for="mail">Mail</label>
                <input class="form-control" type="text" placeholder="write here your mail" name="mail" id="input_mail">
            </div>
            <div class="wrapper">
                <label for="age">Age</label>
                <input class="form-control" type="text" placeholder="write here your age" name="age" id="input_age">
            </div>
            <button class="btn btn-primary" type="submit">submit</button>
        </form>
    </div>

    <style>
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .wrapper {
            display: flex;
            margin-top: 1rem;

            >label {
                margin-right: .5rem;
                margin-top: .1rem;
            }
        }

        form {
            margin-top: .5rem;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        button {
            margin-top: 1rem;
        }

        button:hover {
            background-color: red;
        }
    </style>

</body>

</html>