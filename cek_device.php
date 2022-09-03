<?php

// fungsi untuk medeteksi device yang membuka web ini
function is_mobile($option, $url){
	if ($option == "on") {	
		$useragent = $_SERVER['HTTP_USER_AGENT'];
		$match = preg_match('/android.+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge|maemo|meego.+mobile|midp|mmp|netfront|opera m(ob|in)i|palm(os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent);
		if ($url == "client") {
			if(!$match) {
				// jika pc atau laptop maka redirect kesini	
				header("location:admin");	
			} else {
				// jika pc atau laptop maka redirect kesini	
				header("location:client");	
			};
				
		} 
		if ($url == "client2") {
			if(!$match) {
				// jika pc atau laptop maka redirect kesini	
				header("location:../admin");	
			} else {
				// jika pc atau laptop maka redirect kesini	
				header("location:../client");	
			};
				
		} 
		else if ($url == "server") {
			if($match)
			// jika smartphone maka redirect kesini	
			header("location:client");
			
		}	
	} else {
		
	}
}
?> 