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
        }else{
            ?>
            <script>
            alert('password lama dan baru sama.');
            window.location = 'change.php';
        </script>
        <?php
        }
    }else{
        ?>
        <script>
            alert('password lama dan baru sama.');
            window.location = 'change.php';
        </script>
        <?php
    }
}else{
    ?>
    <script>
            alert('password salah.');
            window.location = 'change.php';
        </script>
        <?php
}
