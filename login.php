<?php
$users=[];
require_once "database.php";

//$user = "phamquanglinh";
//$password = "aaaaaaa";
//$remember_token = "OIPADSNPsdsdKSAJGDASLKASsdasIAPSAJNAOSIASO";
//
//setcookie("user",$user,time()+7200,"/","localhost");
if(isset($_POST["email"])){
    $httpEmail = $_POST["email"];
}else{
    $httpEmail = "";
}
if(isset($_POST["password"])){
    $httpPassword = $_POST["password"];
}else{
    $httpPassword = "";
}
if(isset($_POST["remember"])){
    $httpRemember = $_POST["remember"];
}else{
    $httpRemember = "";
}
//echo "Email:".$httpEmail."<br>";
//echo "Password:".$httpPassword."<br>";
//echo "Remember:".$httpRemember."<br>";

//check login
$isAccount = false;
$isLogin = false;
foreach($users as $user){
    if($user["email"]==$httpEmail){
        $isAccount = true;
        if($user["password"]==$httpPassword){
            $isLogin =true;
            $_SESSION["name"] = $user["name"];
            $_SESSION["email"] = $user["email"];
            $_SESSION["login"] = true;
            if(isset($_POST["remember"])){
               if($_POST["remember"]=="on"){
                   setcookie("remember_token",$user["token"],time()+3600,"/");
               }
            }
        }
    }
}

//After Successfully Login
if(!$isAccount){
    echo "Tài khoản không tồn tại";

}else{
    if(!$isLogin){
        echo "Sai mật khẩu";
    }
}

?>