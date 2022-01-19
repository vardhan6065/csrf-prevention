<?php
session_start();
?>
<?php
if(isset($_POST['username'],$_POST['password'])){
    $uname = $_POST['username'];
    $pwd = $_POST['password'];
    if($uname == 'admin' && $pwd == 'admin'){
        echo '<h1>you are Successfully logged in</h1>';

        //random hmac algoritham
        $cname = base64_encode(openssl_random_pseudo_bytes(32));
        $n1=mt_rand(0,43);
        $algo=hash_hmac_algos()[$n1];
        $cname1=hash_hmac($algo, $cname, session_id());
        
        
        //samesite cookie
        setcookie('csrfnameCookie',$cname1,['expires'=>time()+ 60*60*24*365 ,'path'=>'/','samesite'=>'strict']);
        header("Location:main1.php"); 

        
    }
    else{
        echo '<h1>Invalid Credentials</h1>';
        exit();
    }
}
?>
