<?php
require_once 'whoistools.class.php';

/*** Loading Class ***/
$whois = new WhoisTools('YOU_API_KEY_HERE');
$results = $whois->WhoisAPI('google.com');


echo "<pre>"; print_r($results); echo "</pre>";

?>
