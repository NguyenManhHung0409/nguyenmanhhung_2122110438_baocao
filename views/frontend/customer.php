<?php

if (isset($_REQUEST['login'])) {
    require_once "views/frontend/customer-login.php";
}
if (isset($_REQUEST['logout'])) {
    unset($_SESSION['iscustom']);
    unset($_SESSION['user_id']);
    unset($_SESSION['name']);
    header('location:index.php?option=customer&login'); //chuyển hướng trang, thực tế có thể chuyển hướng ttrang về trang trước nó
}
if (isset($_REQUEST['register'])) {
    require_once "views/frontend/customer-register.php";
}
if (isset($_REQUEST['profile'])) {
    require_once "views/frontend/customer-profile.php";
}
