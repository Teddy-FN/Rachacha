<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
        <table>
            <tr>
                <th>No</th>
                <th>Nama Karyawan</th>
                <th>Nip</th>
                <th>Jabatan</th>
                <th>Email</th>
                <th>No Telfon</th>
            </tr>

            <tr>
            <?php $no = 1; 
            foreach ($karyawan as $kyw) :
            ?>
                <td><?= $no++ ?></td>
                <td><?= $kyw->nama ?></td>
                <td><?= $kyw->nip ?></td>
                <td><?= $kyw->posisi ?></td>
                <td><?= $kyw->email ?></td>
                <td><?= $kyw->no_telp ?></td>
            </tr>

            <?php endforeach; ?>
        </table>

        <script>
            window.print();
        </script>
</body>
</html>