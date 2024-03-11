<?php

session_start();
if (isset($_SESSION['user']) === false) {
    header('Location: /a2z_food/login.php');
}
