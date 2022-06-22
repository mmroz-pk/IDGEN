<?php

#$tel = file_get_contents("./dane/tel.txt");
#$email = file_get_contents("./dane/email.txt");

#ImieNazwisko
$imie= explode("\n", file_get_contents('./dane/imie.txt'));
$rand_imie = array_rand($imie, 2);
$show_imie = $imie[$rand_imie[0]] . "\n";

#Adres
$adres= explode("\n", file_get_contents('./dane/adres.txt'));
$rand_adres = array_rand($adres, 2);
$show_adres = $adres[$rand_adres[0]] . "\n";

#Urodziny
$urodziny= explode("\n", file_get_contents('./dane/urodziny.txt'));
$rand_urodziny = array_rand($urodziny, 2);
$show_urodziny =  $urodziny[$rand_urodziny[0]] . "\n";

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
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
</head>
<body>
<div class="header">
    <p>IdGen</p>
</div>
<div class="data">
    <!--Obraz-->
    <p><img src="https://www.thispersondoesnotexist.com/image" height="250px"></p>

    <!--Wyświetl imię i nazwisko-->
    <p>Imię i Nazwisko:</p>
        <p><input type="text" value="<?php echo $show_imie; ?>" disabled></p>

    <!--Wyświetl adres zamieszkania-->
    <p>Adres zamieszkania:</p>
        <p><textarea rows="5" disabled><?php echo $show_adres; ?></textarea></p>

    <!--Wyświetl datę urodzenia-->
    <p>Data urodzenia:</p>
        <p><input type="text" value="<?php echo $show_urodziny; ?>" disabled></p>

    <p>---</p>

    <!--Wyświetl numer telefonu-->
    <p>Numer telefonu: </p>
        <p><input type="text" value="+48 727 801 893" disabled></p>
            <p><a target="_blank" href="https://receive-smss.com/sms/48727801893/"><button>Sprawdź SMS</button></a></p>

    <!--Wyświetl adres email-->
    <p>Adres E-Mail: </p>
        <p><input type="text" value="<?php echo $show_imie . "@einrot.com"; ?>" disabled></p>
            <p><a target="_blank" href="<?php echo "http://www.fakemailgenerator.com/#/einrot.com/$show_imie";?>"><button>Sprawdź Pocztę</button></a></p>

</div>
</body>
</html>
