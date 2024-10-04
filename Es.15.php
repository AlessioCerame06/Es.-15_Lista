<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LISTA</title>
    </head>
    <body>
        <?php
            function stampaLista ($num, $tipo) {
                if ($tipo == "o") {
                    $tag = "<ol>";
                    echo $tag;
                    $tag = "</ol>";
                } else {
                    $tag = "<ul>";
                    echo $tag;
                    $tag = "</ul>";
                }
                for ($i = 1; $i <= $num; $i++) {
                    if ($i %2 == 0 || $i %5 == 0) {
                        echo "<li>$i</li>";
                    }
                }
                echo $tag;
                
            }

            stampaLista(20, "o");
            stampaLista(15, "u");
            
        ?>
        
    </body>
</html>