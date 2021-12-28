<?php

$currentPassword = $_POST['currentPassword'];
$newPassword = $_POST['newPassword'];
$confirmPassword = $_POST['confirmPassword'];

$myfile = fopen('pswd.txt', 'r');
$pswd = fread($myfile, filesize('pswd.txt'));

if ($currentPassword = $pswd) {
    if ($newPassword != '') {
        if ($confirmPassword == $newPassword) {
            $updatePassword = password_hash($confirmPassword, PASSWORD_BCRYPT);
            $updateFile = fopen('pswd.txt', 'w');
            fwrite($updateFile, $updatePassword);
            fclose($updateFile);
        }
    }
}
