<?php
require_once "database.php";
if (isset($_SESSION["name"])) {
    $name = $_SESSION["name"];
} else {
    $name = "Anonymous";
}
if (isset($_SESSION["email"])) {
    $email = $_SESSION["email"];
} else {
    $email = "Anonymous";
}

if(isset($_SESSION["login"])){
    if($_SESSION["login"]){
        echo "Tên:".$name."<br>";
        echo "Email:".$email."<br>";
        echo "<a href='logout.php'>Đăng xuất</a>";
    }else{
        echo "Bạn đã đăng xuất";
    }
}else{
    echo "Bạn đã đăng xuất";
}





?>
