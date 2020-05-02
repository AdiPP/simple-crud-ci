<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    // echo "<pre>";
    // var_dump($user);
    // die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD INDEX</title>
</head>
<body>
    <div style="margin-bottom: 50px;">
        <form action="<?= site_url('Crud/update/'.$user->id) ?>" method="POST">
            <label for="">Firstname</label>
            <input type="text" name="firstName" value="<?= $user->firstname ?>">
            <label for="">Lastname</label>
            <input type="text" name="lastName" value="<?= $user->lastname ?>">
            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>