<?php
session_start();

session_unset();
header('Location: sample15_input.html');
exit();
?>
