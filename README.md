# WhoisTools PHP Library
PHP library to query WhoisTools API service.

WhoisTools Menggunakan Sistem RestFull API dengan result JSON. Untuk Authentikasi akun, bisa dengan API Key yang dapat anda lihat di <a href='//whoistools.web.id/dashboard'>dashboard area</a>. 

## How To
Anda dapat memanggil file <code>whoistools.class.php</code> pada code anda, dan lakukan pemanggilan perintah dengan cara :
<pre>
&lt;?php
require_once &#039;whoistools.class.php&#039;;

/*** Loading Class ***/
$whois = new WhoisTools(&#039;YOU_API_KEY_HERE&#039;);
$results = $whois-&gt;WhoisAPI(&#039;google.com&#039;);
?&gt;
</pre>
Untuk Contoh yang lebih lengkap bisa anda lihat file di atas

## Troubleshoot
Jika anda mendapatkan problem dalam menjalankan library, hubungi whoistools@dev.mexious.com

## License
PHP Library ini menggunakan lisensi GNU General Public License v2 (or later)

