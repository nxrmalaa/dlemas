<!DOCTYPE html>
<html lang="en"> 
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/styledlemas.css"> 
</head> 
<body>
<div id="container">
<div class="header"> 
                    <h1>DI-LEMAS</h1> 
                    <h3>Digital Learning Management System</h3>
</div>
<div class="table">
    <center> 
        <table> 
            <tr> 
                <th colspan="3"><h3>DATA SISWA</h3></th> 
            </tr> 
            <tr> 
                <td colspan="3">
                <hr> 
            </td> 
            </tr> 
        <tr> 
            <th>Nama</th> 
            <th>:</th> 
            <td> 
            <?= $nama; ?>
            </td> 
        </tr> 
        <tr> 
            <th>NIS</th> 
        <td>:</td> 
        <td> <?= $nis; ?> </td> 
</tr> 
<tr>
    <th>Kelas</th>
    <td>:</td>
    <td><?= $kelas; ?></td>
</tr>
<tr>
    <th>Jenis Kelamin</th>
    <td>:</td>
    <td> <?= $jenisKelamin; ?> </td>
</tr>
<tr>
    <th>Tempat Lahir</th>
    <td>:</td>
    <td><?= $tempatLahir; ?></td>
</tr>
<tr>
    <th>Tanggal Lahir</th>
    <td>:</td>
    <td><?= $tanggalLahir; ?></td>
</tr>
<tr>
    <th>Alamat Lengkap</th>
    <td>:</td>
    <td><?= $alamat; ?></td>
</tr>
<tr> 
    <th>Agama</th> 
    <td>:</td> 
    <td> <?= $agama; ?> </td> 
</tr>
<tr> 
                <td colspan="3">
                <hr> 
            </td> 
            </tr>  
<tr>
</tr>
<tr> 
                    <td colspan="3" align="center"> <a href="<?= base_url('dlemas'); ?>">Kembali</a> 
                </td> 
            </tr> 
        </table> 
    </center>
    <br>
</div>
<div class="footer">
<footer>
    <a>Digital Learning Management System (Di-Lemas)</a><br>
    <a>SMK Pancakarya Tangerang</a>
</footer>
</div>
</div>
</body> 
</html>