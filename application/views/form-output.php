<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D-Lemas</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/styleoutput.css">
</head>

<body>
    <table>
        <tr>
            <th colspan="3">
                <h1>Tampil Data Siswa</h1>
            </th>
        </tr>
        <tr>
            <td>Nama </td>
            <td>:</td>
            <td>
                <?= $nama; ?>
            </td>
        </tr>
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td>
                <?= $nis; ?>
            </td>
        </tr>
        <tr>
            <td>Kelas </td>
            <td>:</td>
            <td>
                <?= $kelas; ?>
            </td>
        </tr>
        <tr>
            <td>Tanggal Lahir </td>
            <td>:</td>
            <td>
                <?= $tgl_lhr; ?>
            </td>
        </tr>
        <tr>
            <td>Tempat Lahir </td>
            <td>:</td>
            <td>
                <?= $tmpt_lhr; ?>
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin </td>
            <td>:</td>
            <td>
                <?= $jns_klmn; ?>
            </td>
        </tr>
        <tr>
            <td>Agama </td>
            <td>:</td>
            <td>
                <?= $agama; ?>
            </td>
        </tr>
        <tr>
            <th colspan="3">
                <a href="<?= base_url('inputan'); ?>">Kembali</a>
            </th>
        </tr>
    </table>
</body>

</body>

</html>