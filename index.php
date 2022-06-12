<?php

#$tel = file_get_contents("./dane/tel.txt");
#$email = file_get_contents("./dane/email.txt");

#Imie
$imie= explode("\n", file_get_contents('./dane/imie.txt'));
$rand_imie = array_rand($imie, 2);
#echo $imie[$rand_imie[0]] . "\n";

#Nazwisko
$nazwisko= explode("\n", file_get_contents('./dane/nazwisko.txt'));
$rand_nazwisko = array_rand($nazwisko, 2);
#echo $nazwisko[$rand_nazwisko[0]] . "\n";

#Adres
$adres= explode("\n", file_get_contents('./dane/adres.txt'));
$rand_adres = array_rand($adres, 2);
#echo $adres[$rand_adres[0]] . "\n";

#Urodziny
$urodziny= explode("\n", file_get_contents('./dane/urodziny.txt'));
$rand_urodziny = array_rand($urodziny, 2);
#echo $urodziny[$rand_urodziny[0]] . "\n";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IdGen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    <p>IdGen</p>
</div>
<div class="data">
    <p><img src="https://www.thispersondoesnotexist.com/image" height="250px"></p>
    <p>Imię i Naziwsko:</p><p><input type="text" value="<?php echo $imie[$rand_imie[0]] . "\n";?>" disabled></p>
    <p>Adres zamieszkania:</p><p><textarea rows="5" disabled><?php echo $adres[$rand_adres[0]] . "\n"; ?></textarea></p>
    <p>Data urodzenia:</p><p><input type="text" value="<?php echo $urodziny[$rand_urodziny[0]] . "\n"; ?>" disabled></p>
    <p>---</p>
    <p>Numer telefonu: </p><p><input type="text" value="" disabled></p><p><button>Sprawdź SMS</button></p>
    <p>Adres E-Mail: </p><p><input type="text" value="" disabled></p><p><button>Sprawdź Pocztę</button></p>
</div>
</body>
</html>
