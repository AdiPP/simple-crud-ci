<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
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
        <form action="<?= site_url('Crud/create') ?>" method="POST">
            <label for="">Firstname</label>
            <input type="text" name="firstName">
            <label for="">Lastname</label>
            <input type="text" name="lastName">
            <button type="submit">Simpan</button>
        </form>
    </div>
    <div>
        <table style="border: 1px black solid">
            <thead>
                <tr>
                    <th style="text-align: center;">#</th>
                    <th style="text-align: center;">Firstname</th>
                    <th style="text-align: center;">Lastname</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 1;    
                ?>
                <?php foreach ($users as $item): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $item->firstname ?></td>
                    <td><?= $item->lastname ?></td>
                    <td>
                        <a href="<?= site_url('Crud/read/'.$item->id) ?>">Edit</a> |
                        <a href="<?= site_url('Crud/konfirmasi/'.$item->id) ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>
</html>