<?php
session_start();
$name=$_POST['name'];
session_destroy();
echo  $name;
?>