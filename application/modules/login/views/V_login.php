<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example HMVC</title>
</head>
<body>
    <form method="POST" action="<?= base_url('login/proces_login'); ?>">
        <table>
            <thead>
                <th colspan="2"><h2>LOGIN USERS</h2></th>
            </thead>
            <tbody>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" name="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Login"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>