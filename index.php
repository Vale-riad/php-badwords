<?php 
$badword = $_GET['badword'];
$paragraph = "Il Signore degli Anelli narra della missione di nove Compagni,<br> la Compagnia dell'Anello, partiti per distruggere il più potente Anello del Potere, un'arma che renderebbe invincibile il suo malvagio creatore Sauron<br> se tornasse nelle sue mani, dandogli il potere di dominare tutta la Terra di Mezzo. ";
$paragraph2 = str_replace($badword, "***", $paragraph2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Badwords</title>
    
    <p>
      <?php echo $paragraph; ?>
    </p>
    <h4> La lunghezza del primo paragrafo: 
        <?php echo strlen($paragraph); ?>
    </h4>
    <p>
        <?php echo $paragraph2; ?>
    </p>
    <h4>La lunghezza del secondo paragrafo: 
        <?php echo strlen($paragraph2); ?>
    </h4>
</head>
<body>
    
</body>
</html>