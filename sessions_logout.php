<?php
// Start the session 
session_start();
session_unset(); //unsets all variables
session_destroy(); //destroys current session
echo "<br> You have been logged out";
?>