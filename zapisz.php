<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php


echo "pseudonim: ",$_POST['pseudonim'],"<br>";





echo "komentarz (wykonany kod html): ",$_POST['komentazz'],"<br>";
echo "<br>";


$k = (string) $_POST['komentazz'];


echo "komentarz (w pełni tekstowo): ",htmlspecialchars($k);












?>










</body>
</html>