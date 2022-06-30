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
        <p class="email">
	<?php
	#Search specific email
	use Clivern\Imap\Core\Search;
	use Clivern\Imap\Core\Search\Condition\To;
	use Clivern\Imap\MailBox;

	
	$search = new Search();
	$search->addCondition(new To("$name@shizzap.biz"));

	$mailbox = new MailBox($connection);

	$messages = $mailbox->getMessages($search);

	foreach ($messages as $message) {
    	echo "From: " . $message->header()->get('from');
    	echo "| ";
    	echo "Subject: " . $message->header()->get('subject');
    	echo "<br>";
    	echo $message->body()->getMessage();
	}
	?>
	</p>
        </div>
    </div>
<div class="footer">
    <p>2022 - idGEN - School Project</p>
</div>

</script></body>
</html>
