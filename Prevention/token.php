<?php 
class token {
   
	public static function checkToken($token,$cookiecsrf){
			if($cookiecsrf == $token) {
				return true;
			}
	}
	public static function createToken($r,$t,$val){
		$algo=hash_hmac_algos()[$r];
		$ans=hash_hmac($algo, $t, $val);
		
		return $ans;
	}
}
?>