<?php include('initialize.php'); ?>
<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();

redirect_to('../index.php');

?>