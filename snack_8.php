<?php

/*
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

//checking that name is set and its length is longer than 3
var_dump(isset($_GET['name']) && strlen($_GET['name']) > 3);

//checking if mail is set and it contains the @ value
var_dump(isset($_GET['mail']) && str_contains($_GET['mail'], '@'));

//checking if is contained and if it's an integer
var_dump(isset($_GET['age']) && is_numeric($_GET['age']));

$canAccess;

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

    <form action="get" class="d-flex justify-content-center mt-5">
        <label for="name" class="me-1">name</label>
        <input type="text" class="me-2 text-center" name="name" id="name" required>

        <label for="mail" class="me-1">mail</label>
        <input type="text" class="me-2 text-center" name="mail" id="mail" required>

        <label for="age" class="me-1">age</label>
        <input type="text" class="me-2 text-center" name="age" id="age" required>

        <button class="bg-primary">submit</button>
    </form>
</body>

</html>