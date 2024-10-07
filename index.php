
<?php
 function getStrongRandomPassword($chars)
 {
     $characters = '!"#$%&()*+,-./:;=?@[]^_{|}~;1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
     return substr(str_shuffle($characters), 0, $chars);
 }
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PASSWORD GENERATOR</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="./style/style.css">
    </head>

<body>
    <div class="container">
        <h1 class="text-center mt-5 mb-3"> STRONG PASSWORD GENERATOR</h1>
        <h2 class="text-center">Genera una password sicura</h2> 
        <div class="smallbox">
        <?php if(isset($_GET['number']) && ($_GET['number'] >= 8)) { ?>
           <p class="p-3"> <?= getStrongRandomPassword((int)$_GET['number'])?></p> 
        <?php } else { ?>
            <p>DATO NON VALIDO</p>
        <?php }?>
        </div>

        
        <div class="big-box">
            <form action="" method="GET">
                <div class="row p-3">
                    <div class="col-6">
                        Lunghezza PASSWORD:
                    </div>
                    <div class="col-6">
                        <input type="number" name="number">
                    </div>
                </div>
            <div class="p-3">
                <button type="submit" class="btn btn-primary">INVIA</button>
                <button type="reset" class="btn btn-danger">ANNULLA</button>
            </div>
            </form>
        </div>
        
    </div>
</body>
</html>