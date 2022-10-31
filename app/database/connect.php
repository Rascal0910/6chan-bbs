<?php

$user = "portfolio";
$pass = "masa0910";

//DBと接続
try {
    $pdo = new PDO('mysql:host=localhost;dbname=6chan-bbs', $user, $pass);
    //echo "DBとの接続に成功しました";
} catch (PDOException $error) {
    echo $error->getMessage();
}
