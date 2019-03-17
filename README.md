# WhoisTools PHP Library
PHP library to query WhoisTools API service.

WhoisTools Menggunakan Sistem RestFull API dengan result JSON. Untuk Authentikasi akun, bisa dengan API Key yang dapat anda lihat di dashboard Utama. 

## How To
Anda dapat memanggil file <pre>whoistools.class.php</pre> pada code anda, dan lakukan pemanggilan perintah dengan cara :
<pre>
<?php
require_once 'whoistools.class.php';

/*** Loading Class ***/
$whois = new WhoisTools('YOU_API_KEY');
$results = $whois->WhoisAPI('google.com');

</pre>

?>
