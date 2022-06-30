<?php
#ini_set('display_errors', '1');
#ini_set('display_startup_errors', '1');
#error_reporting(E_ALL);

include_once __DIR__ . '/vendor/autoload.php';

#Connect to imap server

$imap_host = "";
$imap_port = "";
$imap_user = "";
$imap_pass = "";

use Clivern\Imap\Core\Connection;

$connection = new Connection(
    "$imap_host",
    "$imap_port",
    "$imap_user",
    "$imap_pass",
    "/ssl/novalidate-cert",
    "INBOX"
);
$connection->connect();

?>
