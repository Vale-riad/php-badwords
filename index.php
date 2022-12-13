<?php 
$paragraph = "Il Signore degli Anelli narra della missione di nove Compagni,<br> la Compagnia dell'Anello, partiti per distruggere il più potente Anello del Potere, un'arma che renderebbe invincibile il suo malvagio creatore Sauron<br> se tornasse nelle sue mani, dandogli il potere di dominare tutta la Terra di Mezzo. "
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <p>
      <?php echo $paragraph; ?>
    </p>
    <h4> La lunghezza del paragrafo: <?php echo strlen($paragraph); ?></h4>
</head>
<body>
    
</body>
</html>