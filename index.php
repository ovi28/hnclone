<?php
include "config.php";
echo"<a href='login.php' style='text-align:right'>Log in</a>";
$sql = 'SELECT * FROM post ORDER BY post_id DESC LIMIT 50';
foreach ($pdo->query($sql) as $row) {
      echo "<table style='background-color:beige'>";
      echo "<tr>";
      echo "<td style='font-weight:bold'>".$row['post_title']."</td>"; 
      echo "<tr>";
      echo "<td style='color:grey'>".$row['post_text']."</td>"; 
      $sql2 = 'SELECT * FROM vote Where post_id='.$row['post_id']. '';
      foreach ($pdo->query($sql2) as $row2) {
            $karma =$row2['votes_up']-$row2['votes_down'];
            echo "<td style='color:red'>".$karma."</td>";  
      }
      echo "<hr>";
}
echo "</table>";
 
?>