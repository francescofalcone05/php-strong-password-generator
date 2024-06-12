<?php
$userSize = $_GET['password'];
$password = '';

for ($i = 0; $i < $userSize; $i++) {
    $password .= 'x';
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

        <p> <?php
            echo $password;
            ?>
        </p>

    </div>

</body>

</html>