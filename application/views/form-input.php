<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D-Lemas</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <form action="<?= base_url('Inputan/cetak'); ?>" method="post">
        <h1>Form Input Siswa</h1>
        <br>
        <table>
            <tr>
                <td>Nama Siswa </td>
                <td>:</td>
                <td><input type="text" id="nama" name="nama" required></td>
            </tr>
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td><input type="text" id="nis" name="nis" required></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" id="kelas" name="kelas"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" id="tgl-lhr" name="tgl_lhr"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td> : </td>
                <td><input type="text" id="tmpt-lhr" name="tmpt_lhr"></td>
            </tr>
            <tr>
                <td>Alamat </td>
                <td>:</td>
                <td><input type="text" id="alamat" name="alamat"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin </td>
                <td>:</td>
                <td>
                    <input type="radio" id="laki_laki" name="jns_klmn" value="Laki - Laki" checked>
                    <label for="laki_laki">Laki-Laki</label>
                    <input type="radio" id="perempuan" name="jns_klmn" value="Perempuan">
                    <label for="perempuan">Perempuan</label>
                </td>
            </tr>
            <tr>
                <td>Agama </td>
                <td>:</td>
                <td> <select name="agama" id="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Khonghucu">Khonghucu</option>
                    </select>
                </td>
            </tr>

            <tr>
                <th colspan="3">
                    <input type="submit" value="Submit" name="Result">
                </th>
            </tr>
        </table>
        <?php
        if (isset($_POST['submit'])) {
            if (!empty($_POST['radio'])) {
                echo '  ' . $_POST['radio'];
            } else {
                echo 'Please select the value.';
            }
        }
        ?>
</body>

</html>