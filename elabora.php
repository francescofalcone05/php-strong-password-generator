<?php
$userSize = $_GET['password'];
$characters = 'qwertyuiopasdfghjklzxcvbnm1234567890.,-_';
$password = '';

for ($i = 0; $i < $userSize; $i++) {
    $numrand = rand(0, 35);
    $password .= $characters[$numrand];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleElabora.css">
    <title>Generate password</title>
</head>

<body>

    <div class="container">

        <p>
            La tua password super sicura è :
            <?php
            echo $password;
            ?>
        </p>

    </div>

</body>

</html>