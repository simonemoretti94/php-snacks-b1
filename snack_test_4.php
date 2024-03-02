<?php
//snack 4

$list = [];

while (count($list) < 15) {

    //generate a random number
    $randomNumber =  rand(1, 100);

    //check if generated number is included into array
    if (!in_array($randomNumber, $list)) {
        $list[] = $randomNumber;
        //array_push($list, $randomNumber);
    }

    //if not, push

};


var_dump($list);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack_4</title>
</head>

<body>

</body>

</html>