<?php
include "config.php";

$data = json_decode(file_get_contents('php://input'), true);
$title = $data["post_title"];
$text = $data["post_text"];
$type = $data["post_type"];
$parent = $data["post_parent"];
$username = $data["username"];
$pwd = $data["pwd_hash"];
$url = $data["post_url"];
$hannestId = $data["hanesst_id"];


 $sql = "SELECT username FROM login WHERE username='".$username."' AND password='".$pwd."'";
    foreach ($pdo->query($sql) as $row) {
       try {
         $sql="INSERT into post(username,post_type,post_title,post_url,post_parent,date,hannest_id,post_text) values('".$username."','".$type."','".$title."','".$url."',".$parent.",'".date("Y/m/d")."',".$hannestId.",'".$text."')";
       $pdo->exec($sql);
    } catch(PDOException $e) {
      echo $e->getMessage();
    }
    }


?>