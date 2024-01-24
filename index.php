<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <form action="./badWords.php" method="GET">
        <textarea class="form-control" placeholder="Inserisci testo" name="paragraph" id="paragraph" cols="30" rows="10" required></textarea>
        <div class="m-3">
            <input type="text" class="form-control" name="badword" id="badword" placeholder="Inserisci parola da oscurare" required>
        </div> 
        <button class="btn btn-warning mx-3" type="submit">Invia</button>  
    </form>
</body>
</html>