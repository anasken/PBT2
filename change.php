<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script>
    currentPassword = document.getElementById('currentPassword');
    newPassword = document.getElementById('newPassword');
    confirmPassword = document.getElementById('confirmPassword');

    if(currentPassword != newPassword){
        if(newPassword == confirmPassword){
            return true;
        }else{
            alert('password baru dan confirm password tak sama.');
            window.location = 'change.php';
        }
    }else{
        
        alert('password lama dan baru sama.');
        window.location = 'change.php';
    }
    
</script>
<body>
    <form action="update.php" method="post" onsubmit="return check();">
        <table>
            <tr>
                <td>
                    <label for="currentPassword">Current Password</label>
                </td>
                <td>
                    <input type="text" name="currentPassword" id="currentPassword">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="newPassword">New Password</label>

                </td>
                <td>
                    <input type="password" name="newPassword" id="newPassword">

                </td>
            </tr>
            <tr>
                <td>
                    <label for="confirmPassword">Confirm Password</label>

                </td>
                <td>
                    <input type="password" name="confirmPassword" id="confirmPassword">

                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">SUBMIT</button>

                </td>
            </tr>
        </table>
    </form>
</body>

</html>