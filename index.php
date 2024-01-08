
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Badwords</title>
</head>
<body>
    <div class="container radius">
        <!-- form -->
        <form action="processo.php" method="POST" class="flex gap">

            <!-- area del testo -->
            <div>
                <label for="paragraph"><h2>inserisci il testo qui:</h2></label> <br>
                <textarea name="paragraph" cols="30" rows="10"></textarea>
            </div>
            <!-- /area del testo -->

            <!-- area dichiarazione bad word -->
            <div>
                <label for="badWord"><h2>inserisci qui la parola da censurare</h2></label> <br>
                <input type="text" name="badWord">
                <button>invia</button>
            </div>
            <!-- /area dichiarazione bad word -->
            
        </form>
        <!-- /form -->
    </div>
</body>
</html>