<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $modello = "Iphone";
        $grado = "A";

        switch($grado){
            case 'A':
                echo "<h2>{$modello}, perfetto uguale al nuovo.</h2>";
                break;
            case 'B':
                echo "<h2>{$modello}, in ottime condizioni.</h2>";
                break;
            case 'C': 
                echo "<h2>{$modello}, con graffi e/o segni di usura.</h2>";
                break;
            default:
                echo "<h1>Errore!</h1>";
        }
    
    
    
    
    ?>
</body>
</html>