<?php
include "config.php";
echo"
<form action='userProfile.php'>
<div class='container'>
    <label><b>Username</b></label>
    <input type='text' placeholder='Enter Username' name='uname' required>
    <br><br>
    <label><b>Password</b></label>
    <input type='password' placeholder='Enter Password' name='psw' required>
    <br><br>
    <button type='submit'>Login</button>
    </div>
    <div class='container' style='background-color:#f1f1f1'>
    <hr>
    <a> &nbsp;</a>
    <a href='index.php'>Cancel</a>
    <a> &nbsp;</a>
    <a href='register.php'>Register</a>
</div>
</form>
 ";
?>