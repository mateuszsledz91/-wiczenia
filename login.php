<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="post">
    <?php



if(isset($_POST['login'])){
echo "login: ",$_POST['login'],"<br>";
}

if(isset($_POST['haslo'])){
echo "hasło: ",sha1($_POST['haslo'],"<br>");
}

echo "<br>";
if(empty($_POST['zaznaczenie'])){
    echo "checbox nie zaznaczony";
}elseif (isset($_POST['zaznaczenie'])){
    echo "checbox zaznaczony";
}







?>
</form


</body>
</html>