<?
session_start();
session_unset();
session_destroy();

header("location: loginses.php");
exit();
?>