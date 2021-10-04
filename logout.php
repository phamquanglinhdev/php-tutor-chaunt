<?php
session_start();
session_destroy();
setcookie("remember_token","_",-1,"/")
?>
<p>Đăng xuất thành công !</p>
<a href="login.html">Đăng nhập</a>
