<?php
session_start();

$usN = $_POST["suser"] ?? '';
$usP = $_POST["spass"] ?? '';

require_once __DIR__ . '/system/main/lib/connect.php';

$user_pass  = null;
$super_pass = null;

// Student password
$res = mysql_query("SELECT user_pass FROM user_info WHERE user_name='$usN'");
if ($res) {
    while ($row = mysql_fetch_array($res, MYSQL_ASSOC)) {
        $user_pass = $row['user_pass'] ?? null;
    }
}

// Admin password
$res2 = mysql_query("SELECT admin_pass FROM admin WHERE admin_name='$usN'");
if ($res2) {
    while ($row = mysql_fetch_array($res2, MYSQL_ASSOC)) {
        $super_pass = $row['admin_pass'] ?? null;
    }
}

if ($user_pass === $usP || $super_pass === $usP) {
    $_SESSION["user"] = $usN;

    if ($super_pass === $usP) {
        header('Location: system/lectures.php');
        exit;
    }

    header('Location: system/profile.php');
    exit;
}

header('Location: index.php');
exit;
