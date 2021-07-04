<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example HMVC</title>
</head>
<body>
    <h2>DAFTAR USERS</h2>
    <table border="1" cellpadding="10">
        <thead>
            <th>No.</th>
            <th>Nama</th>
            <th>Username</th>
        </thead>
        <tbody>
            <?php
            foreach ($users as $user) {
            ?>
                <tr>
                    <td><?= $user->id; ?></td>
                    <td><?= $user->nama; ?></td>
                    <td><?= $user->username; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <a href="<?= base_url('users/add_user'); ?>">Tambah User</a>
    <!-- <a href="<?= base_url('login'); ?>">Back</a> -->
</body>
</html>