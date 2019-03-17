<?php
/**************************************************************
 *																														*
 * WhoisTools API class v1.0																	*
 * Author: Muhammad Rifky Abimayu															*
 * Email: rifky@mexious.com																		*
 *																														*
 * https://whoistools.web.id/																	*
 * https://whoistools.web.id/docs															*
 *																														*
 **************************************************************/
class WhoisTools {
		protected $apiKey;
		public function __construct($apiKey) {
			$this->apiKey = $apiKey;
			$this->urlApi = 'https://api.whoistools.web.id/v1/';
		}

		public function WhoisAPI($domain)
		{
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $this->urlApi. 'whois/' . $this->apiKey . '/' . $domain . '/');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_VERBOSE, 1);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
			$result = curl_exec($ch);
			$array  = json_decode($result, true);
			if ($array['success'] == false) {
				return "Error : " .$array['error']['message'];
			} else if ($array['success'] == true) {
				return $array;
			}
		}

		public function WhoisRaw($domain)
		{
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $this->urlApi. 'raw/show/' . $domain);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_VERBOSE, 1);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
			$result = curl_exec($ch);
			if ($result) {
				return $result;
			} else {
				return "GET Data Failed";
			}
		}


}
?>
