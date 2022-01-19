<?php
session_start();
?>
<?php
if(isset($_POST['username'],$_POST['password'])){
    $uname = $_POST['username'];
    $pwd = $_POST['password'];
    if($uname == 'admin' && $pwd == 'admin'){
        echo '<h1>you are Successfully logged in</h1>';

        setcookie('userCookie',"admin",['expires'=>time()+ 60*60*24*365 ,'path'=>'/','samesite'=>'strict']);
        header("Location:main1.php");

        
    }
    else{
        echo '<h1>Invalid Credentials</h1>';
        exit();
    }
}
?>
