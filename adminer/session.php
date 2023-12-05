<?php

session_name("adminer_sid");
session_start();
$_SESSION['adminer.login'] = true;
var_dump($_SESSION);