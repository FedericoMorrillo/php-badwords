
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <!-- form -->
    <form action="processo.php" method="POST">

        <!-- area del testo -->
        <div>
            <label for="paragraph"> inserisci il testo qui:</label> <br>
            <textarea name="paragraph" cols="30" rows="10"></textarea>
        </div>
        <!-- /area del testo -->

        <!-- area dichiarazione bad word -->
        <div>
            <label for="badWord">inserisci qui la parola da censurare</label> <br>
            <input type="text" name="badWord">
            <button>invia</button>
        </div>
        <!-- /area dichiarazione bad word -->
        
    </form>
    <!-- /form -->
</body>
</html>