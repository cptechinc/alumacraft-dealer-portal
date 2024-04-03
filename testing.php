<?php 
session_start();
unset($_SESSION['sdruser']);

echo var_dump($_SESSION['sdruser']);