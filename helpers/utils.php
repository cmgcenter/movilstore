<?php 

class utils 
{


	public static function protect($input)
    {
      $strip_chars = array("~", "`", "!","#", "$", "%", "^", "&", "*", "(", ")", "=", "+", "[", "{", "]","}", "\\", "|", ";", ":", "\"", "'", "&#8216;", "&#8217;", "&#8220;", "&#8221;", "&#8211;", "&#8212;",",", "<", ">", "/", "?");

      $output = trim(str_replace($strip_chars, " ", strip_tags($input)));
      $output = preg_replace('/\s+/', ' ',$output);
      $output = preg_replace('/\-+/', '-',$output);
      $output = htmlentities($output);
      $output = htmlspecialchars($output);
      return $output;
    }


	public static  function userRoll($u)
	{
		
			if($u < 99)
			{
				return "users";
			}
			else if($u == 99)
			{
				return "admins";
			}
	}
	
	public static function CryptString($key, $base64=false)
	{
		$r = random_int(11111111, 99999999);
		$_key = $r."_".$key;
		if($base64==true){return base64_encode($_key); }
		else{return $_key;}
	}

	public static function Curl_Call($url, $u, $p)
	{
		$client = curl_init();
		curl_setopt($client, CURLOPT_URL, $url);
		curl_setopt($client, CURLOPT_POST, 1);
		curl_setopt($client, CURLOPT_POSTFIELDS,"username=".$u."&password=".$p);
		curl_setopt($client, CURLOPT_COOKIEJAR, 'cookie.txt');
		curl_exec($client);
		curl_close($client);
	}

	public static function GoTo($url)
	{
		header("location: ".URI."/".$url);
	}

	public static function switchError($errno)
	{
		switch ($errno) {
			case '0':
				self::GoTo("errno/PendientUser/".$errno."/");
				break;

			case '2':
				self::GoTo("errno/BannedUser/".$errno."/");
				break;
			
			default:
				self::GoTo("errno/InvalidUserCode/".$errno."/");
				break;
		}
	}

	public static function SessionActive()
	{
		if( !isset($_SESSION['roll']) AND !isset($_SESSION['userId']) AND !isset($_SESSION['authKey']) )
		{
			return false;
		}
		else
		{
			return true;
		}
	}

}

?>