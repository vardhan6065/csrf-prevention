<?php session_start();
include 'main.php';
include 'token.php';

$accno=$_POST["accno"];
$amount=$_POST["amount"];
$val1 = $_POST["name"];

if(isset($_POST['name']) &&isset($_COOKIE['userCookie'])&& $val1!=null){

	$val2=$_COOKIE['userCookie'];
	if($val2!=null && token::checkToken($val1,$val2)) 
	{
			echo $val1;
			echo $val2;
	 	    session_start();
    		$_SESSION['accno'] = $accno;	
    		$_SESSION['amount'] =$amount;
	 	    header("Location:transaction.php");
			exit();
	}	
	else 
	{
	    echo "Server request fail! , Unauthorized req!";
	}
}
else{
	echo "Error";
}
?>