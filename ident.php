<?php

$admin_us = $_SESSION['valor_user'];
if($admin_us != 1) {
    header("Location: index.php");
} 