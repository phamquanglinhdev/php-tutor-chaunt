<?php
session_start();
$users = [
    [
        "name" => "Phạm Quang Linh",
        "email" => "phamquanglinhdev@gmail.com",
        "password" => "linhpham0701",
        "token" => "ASJNASJUUpjiUJAISAPOIASL",
    ],
    [
        "name" => "Nguyễn Văn A",
        "email" => "nguyen.a@gmail.com",
        "password" => "nguyena123",
        "token" => "ASJNASJUUpjiUJAISAds",
    ],
    [
        "name" => "Trần Văn B",
        "email" => "tranb@gmail.com",
        "password" => "trantranb",
        "token" => "d34sdadsdefafasdasdasd",
    ],
    [
        "name" => "Nguyễn Thế Châu",
        "email" => "ntchau98@gmail.com",
        "password" => "ntchau98",
        "token" => "ASJNASJdasdasIASL",
    ],


];
if (!isset($_SESSION["login"])) {
    if (isset($_COOKIE["remember_token"])) {
        foreach ($users as $user) {
            if ($user["token"] == $_COOKIE["remember_token"]) {
                $_SESSION["name"] = $user["name"];
                $_SESSION["email"] = $user["email"];
                $_SESSION["login"] = true;
            }
        }
    }
}
?>