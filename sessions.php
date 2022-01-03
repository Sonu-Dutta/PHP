<?php
// Session: Use to manage information across different pages

// verify the user login info
session_start();
$_SESSION['username']='Sonu';
$_SESSION['favCat']='Books';
echo "Your session is saved";
?>