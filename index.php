<?php
include "config.php";
echo"<a href='login.php' style='text-align:right'>Log in</a>";
$sql = 'SELECT * FROM post ORDER BY post_id DESC LIMIT 50';
foreach ($pdo->query($sql) as $row) {
      print .$row['post_title'].
      print .$row['post_text'].
      $sql2 = 'SELECT * FROM vote Where post_id='.$row['post_id']. '';
      foreach ($pdo->query($sql2) as $row2) {
            print $karma =$row2['votes_up']-$row2['votes_down'];
            
      }
      
}

 
?>