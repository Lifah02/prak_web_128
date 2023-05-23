<!DOCTYPE html>
<html leng="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widht=device-widht, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>km</th>
            <th>matakuliah</th>
            <th>sks</th>
        </tr>
    <?php foreach ($krs as $user): ?>
        <tr>
            <td><?= $user->km ?></td>
            <td><?= $user->mahasiswa ?></td>
            <td><?= $user->sks ?></td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>