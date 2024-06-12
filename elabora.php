<?php
if (isset($_POST['password'])) {

    $userSize = $_POST['password'];
}
function generatoreP($arg1,)
{
    if (isset($_POST['submitButton'])) {
        $characters = 'QWERTYUIOPLKJHGFDSAZXCVBNMqwertyuiopasdfghjklzxcvbnm1234567890.,-_';
        $password = '';
        $paragraph = (empty($_POST) || $arg1 == 0) ? '' : 'La tua password super sicura è :';


        for ($i = 0; $i < $arg1; $i++) {
            $numrand = rand(0, 65);
            $password .= $characters[$numrand];
        }
        echo $paragraph . ' ' . $password;
    }
};

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



</body>

</html>