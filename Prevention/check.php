<?php session_start();
include 'main.php';
include 'token.php';

if(isset($_POST["name"]) && isset($_POST["token"]) && isset($_SESSION['ran'])){
	$accno=$_POST["accno"];
	$amount=$_POST["amount"];
	$val1 = $_POST["name"];
	$t = $_POST["token"];
	$r=$_SESSION['ran'];
	$val2=token::createToken($r,$t,$val1);
	if(token::checkToken($val1,$_COOKIE['csrfnameCookie']) && ($val2!=null)) 
	{
	    if(token::checkToken($val2,$_COOKIE['csrfTokenCookie']))
	    {     
	 	    session_start();
    		$_SESSION['accno'] = $accno;	
    		$_SESSION['amount'] =$amount;
	 	    header("Location:transaction.php");
			exit();
	    }
	    else {
	    	echo "first";
	        echo "Server request fail! , Unauthorized req!";
	    }
	}	
	else 
	{
	    echo "Server request fail! , Unauthorized req!";
	}
}
else{
	echo "Server request fail! , Unauthorized req!";
}

?>