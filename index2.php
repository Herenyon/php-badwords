<?php 

$text = $_GET['text'];
$text_length = strlen($text);
$banned_word = $_GET['ban'];

 $banned_sentece = str_ireplace($banned_word, '***', $text);
 $ban_length = strlen($banned_sentece);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- il primo scrive la frase come è stata scritta dall'utente con la sua lunghezza -->
    <div>La tua frase è: <strong><?php echo $text?></strong>; ed è lunga <strong><?php echo $text_length?></strong></div>
    <!-- il secondo scrive la frase con la censura sulla parola scritta dall'utante -->
    <div>La tua frase con la parola censurata è: <strong><?php echo $banned_sentece?></strong>; ed è lunga <strong><?php echo $ban_length?></strong></div>
</body>
</html>
