<?php
include("php/database.php");
include("connect_imap.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>idGen</title>
</head>
<body>
<div class="header">
    <p class="homebutton"><a href="./index.php">idGEN</a></p>
    <p class="homebutton"><a href="./index.php">Generate ID</a></p>
    <p class="homebutton" style="display: none;"><a href="./index.php">Register</a></p>
    <p class="homebutton" style="display: none;"><a href="./index.php">Login</a></p>
</div>
    <div class="mainbody">
        <div class="left">
            <p class="left-title">Your New Identity</p>
            <p>- Full Name -</p>
            <p class="dataSet"><?php echo $name; ?></p>
            <p>- Street Address -</p>
            <p class="dataSet"><?php if($country == "Poland"){echo "$address<br>$zip $city<br>$country";}elseif($country == "United States"){echo "$address<br>$city, $state $zip<br>$country";} ?></p>
            <p>- Dath of Birth -</p>
            <p class="dataSet"><?php echo $dob; ?></p>
            <p>- Mother's maiden name -</p>
            <p class="dataSet"><?php echo $maiden; ?></p>
            <p>- National ID (PESEL/SSN) -</p>
            <p class="dataSet"><?php echo $pesel; ?></p>
            <p>- Phone Number -</p>
            <p class="dataSet"><?php if($country == "Poland"){echo "+48 $phone";}elseif($country == "United States"){echo "+1 $phone";} ?></p>
            <p>- Email Address -</p>
            <p class="dataSet"><?php echo $email; ?></p>
        </div>
        <div class="right" id="right">
            <p class="right-title">&nbsp;Here is where you receive emails</p>
            <script>
                var auto_refresh = setInterval(
                    (function () {
                        $("#email").load("search_imap.php?e=<?php echo $email; ?>"); //Load the content into the div
                    }), 1000);
            </script>
        <div class="email" id="email"></div>
        </div>
    </div>
<div class="footer">
    <p>2022 - idGEN - School Project</p>
</div>

</script></body>
</html>
