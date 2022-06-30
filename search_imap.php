<?php
include_once __DIR__ . '/vendor/autoload.php';

$email = $_GET['e'];

#Search specific email
use Clivern\Imap\Core\Search;
use Clivern\Imap\Core\Search\Condition\To;
use Clivern\Imap\MailBox;

use Clivern\Imap\Core\Connection;


$connection = new Connection(
    "imap_host",
    "imap_port",
    "imap_username",
    "imap_password",
    "/ssl/novalidate-cert",
    "INBOX"
);
$connection->connect();

$search = new Search();
$search->addCondition(new To("$email"));

$mailbox = new MailBox($connection);

$messages = $mailbox->getMessages($search);

foreach ($messages as $message) {
    $imap_from = "From: " . $message->header()->get('from');
    echo imap_utf8($imap_from) . "| ";
    $imap_subject = "Subject: " . $message->header()->get('subject');
    echo imap_utf8($imap_subject);
    echo "<br>";
    $imap_message = $message->body()->getMessage();
    echo imap_utf8($imap_message);
    echo "---<br>";
}
?>
