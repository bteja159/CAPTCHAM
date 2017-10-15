<?php

session_start();

if($_POST["captcha"]==$_SESSION["captcha"])
{
echo "valid captcha";
}
else
{
echo "invalid captcha";
}
?>