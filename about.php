<?php
session_start();
if(isset($_SESSION["name"])){
    $name = $_SESSION["name"];
}else{
    $name ="Anonymous";
}
echo $name ;
?>