<?php

$sr = (float) $_POST['sr'];
$koszt = (float) $_POST['benzyna'];
$km = $_POST['km'];
$wynig;

echo "koszt benzyny: ",$koszt,"<br>","liczba km: ",$km,"<br>","średnie spalanie: ",$sr,"<br>";

$km=$km/100;
$wynik=$sr*$km*$koszt;
echo "koszt przejazdu = ",$wynik," zł";



?>