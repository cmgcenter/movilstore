<?php 

class utils 
{

	
	public static function Match($one, $two)
	{
		if($one == $two){return true;}
		else{return false;}
	}

	public static function CarouselImage($data, $i)
	{

		return USERS_IMAGES.json_decode( $data['carousel'][$i]['galery'] )->img0;
	}

	public static function ShowPropetyImage($data, $i)
	{
		return USERS_IMAGES.json_decode( $data['propety'][$i]['galery'] )->img0;

	}

	public static function intProtect($int)
	{
		if( is_nan($int) )
		{
			return 0;
		}
		else
		{
			return intval($int);
		}
	}

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
		if( !isset($_SESSION['roll']) OR !isset($_SESSION['userId']) OR !isset($_SESSION['authKey']) )
		{
			return false;
		}
		else
		{
			return true;
		}
	}

	public static function isService($sts)
	{
		if($sts == 'rent' || $sts == 'sold' || $sts == 'secure') 
		{
			return self::protect($sts);
		}
		else
		{
			return self::protect("rent");
		}
	}

	public static function propetyStatus($int)
	{
		$int = intval($int);

		if( is_int($int) )
		{
			if($int == 1)
			{
				return "Rent | ";
			}
			else if($int == 2)
			{
				return "Sold | ";
			}
			else
			{
				return "";
			}
		}
		else
		{
			return "";
		}
	}
}

?>