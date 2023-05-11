<?php

echo "koszt dowozu: ";
$wynik=$_POST['odlegkm']*0.5;

if(empty($_POST['ciepla'])){
    echo $wynik," zł";
}elseif(isset($_POST['ciepla'])){
    $wynik=$wynik*1.5;
    echo $wynik," zł";
}





?>