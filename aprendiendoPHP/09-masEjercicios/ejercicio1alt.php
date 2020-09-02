<?php

session_start();
$_SESSION['numero']=101;
header("Refresh: 0.5 ; URL = ejercicio1.php");