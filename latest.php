<?php
include "config.php";

 $sql = 'SELECT hannest_id FROM post ORDER BY post_id DESC LIMIT 1';
  foreach ($pdo->query($sql) as $row) {
        print $row['hannest_id'] ;
    }
?>