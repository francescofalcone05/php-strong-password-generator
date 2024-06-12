<?php
// if (isset($_GET)) {
//     $userSize = $_GET['password'];
//     $characters = 'QWERTYUIOPLKJHGFDSAZXCVBNMqwertyuiopasdfghjklzxcvbnm1234567890.,-_';
//     $password = '';
//     $paragraph = (empty($_GET) || $userSize == 0) ? '' : 'La tua password super sicura è :';


//     for ($i = 0; $i < $userSize; $i++) {
//         $numrand = rand(0, 65);
//         $password .= $characters[$numrand];
//     }
// }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Form Generate password</title>
</head>

<body>

    <div class="container">
        <h1>Genera la tua password</h1>

        <form action="form.php" method="POST">

            <label for="password">Lunghezza password</label>
            <select name="password" id="password">
                <option value="0" selected>--- Choose the size ---</option>
                <option value="6">6</option>
                <option value="8">8</option>
                <option value="10">10</option>
            </select>
            <button type="submit" name="submitButton">Invia</button>

        </form>

        <p>

            <?php
            if (isset($_POST['submitButton'])) {
                $userSize = $_POST['password'];
                $characters = 'QWERTYUIOPLKJHGFDSAZXCVBNMqwertyuiopasdfghjklzxcvbnm1234567890.,-_';
                $password = '';
                $paragraph = (empty($_POST) || $userSize == 0) ? '' : 'La tua password super sicura è :';


                for ($i = 0; $i < $userSize; $i++) {
                    $numrand = rand(0, 65);
                    $password .= $characters[$numrand];
                }
                echo $paragraph . ' ' . $password;
            }
            ?>
        </p>

    </div>




</body>

</html>