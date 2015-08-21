<?php
	define("TOKEN", "hillock");			//寰俊鍏叡璐﹀彿token

	define("PHOTO_DN", "photo");  //鍥剧墖鏂囦欢澶瑰悕绉�
	define("PHOTORZ_DN", "photoResize");  //缂╃暐鍥炬枃浠跺す鍚嶇О
	define("PHOTORZ_MAX", 36);  //鑾峰緱鍥剧墖鏈�澶ф暟閲�
	define("WEB4WX", 'http://'.$_SERVER['HTTP_HOST']);	
	define("DEBUG_OUTPUT","/home/wwwroot/pper/log.html");//璋冭瘯杈撳嚭鏂囦欢澶�
	require 'photo.php';
	
	//璋冭瘯鍑芥暟
	function logger($content)
	{
		if(!defined("DEBUG_OUTPUT")) return;
		$debug = print_r($content,true);
		//$debug = var_export($content,true);
		file_put_contents(DEBUG_OUTPUT, date('Y-m-d H:i:s  ').$debug."<br>", FILE_APPEND);
	}

?>