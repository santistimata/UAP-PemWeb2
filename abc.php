<?php
require("var.php");
echo $var;
$var = " 2,";
echo $var;
$var = " 3,";
require_once("var.php");
echo $var;
?>