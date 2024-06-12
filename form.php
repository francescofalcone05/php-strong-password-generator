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

        <form action="elabora.php" method="GET">

            <label for="password">Lunghezza password</label>
            <select name="password" id="password">
                <option value="" selected>--- Choose the size ---</option>
                <option value="6">6</option>
                <option value="8">8</option>
                <option value="10">10</option>
            </select>
            <button type="submit">Invia</button>



        </form>
    </div>




</body>

</html>