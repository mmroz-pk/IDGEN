<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>idGen</title>
</head>
<body>
<div class="header">
    <p class="homebutton"><a href="./index.php">idGEN</a></p>
</div>
<div class="mainbody">
    <div class="form">
        <form action="./index.php" method="POST" enctype="application/x-www-form-urlencoded">
            <p class="form-title">Login</p>
            <p>- Username -</p>
            <p class="dataSet"><input type="text" name="username" value=""></p>
            <p>- Password -</p>
            <p class="dataSet"><input type="password" name="password" value=""></p>
            <p><button class="button btn" type="submit" name="username">Login</button>
                <button class="button btn" type="submit" name="username">Register</button></p>
        </form>
    </div>
</div>
<div class="footer">
    <p>2022 - idGEN - School Project</p>
</div>
</body>
</html>
