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

if(isset($_POST['auto'])){
    switch($_POST['auto']){
        case "bmw":
            echo "bmw";
            break;
        case "audi":
                echo "audi";
                break;
         case "skoda":
                    echo "skoda";
                    break;

    }
}




echo "<br>","<br>";




if(isset($_POST['r'])){
    switch($_POST['r']){
        case "mężczyzna":
            echo "mężczyzna";
            break;
            case "kobieta":
                echo "kobieta";
                break;
                case "osoba nie binarna":
                    echo "osoba nie binarna";
                    break;
    }



echo "<br>","<br>";





if(isset($_POST['tak1'])){
echo "tak","<br>";
}

if(isset($_POST['tak2'])){
    echo "tak x2","<br>";
}

if(isset($_POST['tak3'])){
    echo "bardzo tak","<br>";
}
?>

















</body>
</html>