<?php
require_once 'whoistools.class.php';

/*** Loading Class ***/
$whois = new WhoisTools();
$results = $whois->WhoisRaw('google.com');

echo "<pre>" .$results ."</pre>";

?>
