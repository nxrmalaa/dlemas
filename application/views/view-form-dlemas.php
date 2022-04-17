<!DOCTYPE html>
<html lang="en"> 
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Siswa</title> 
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
    <form action="<?= base_url('dlemas/cetak'); ?>" method="post"> 
        <table> 
            <tr> 
                <th colspan="3"> <h3>FORM INPUT DATA SISWA</h3> </th> 
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
                <input type="text" name="nama" id="nama"> 
            </td> 
        </tr> 
        <tr> 
            <th>NIS</th> 
        <td>:</td> 
        <td> <input type="text" name="nis" id="nis"> 
    </td> 
</tr> 
<tr>
    <th>Kelas</th>
    <td>:</td>
    <td><input type="text" name="kelas" id="kelas"></td>
</tr>
<tr>
    <th>Jenis Kelamin</th>
    <td>:</td>
    <td>
        <input type="radio" name="jenisKelamin" id="jenisKelamin" value="Laki-Laki">
        <label for="jenisKelamin">Laki-Laki</label>
        <input type="radio" name="jenisKelamin" id="jenisKelamin" value="Perempuan">
        <label for="jenisKelamin">Perempuan</label>
    </td>
</tr>
<tr>
    <th>Tempat Lahir</th>
    <td>:</td>
    <td><input type="text" name="tempatLahir" id="tempatLahir"></td>
</tr>
<tr>
    <th>Tanggal Lahir</th>
    <td>:</td>
    <td><input type="date" name="tanggalLahir" id="tanggalLahir"></td>
</tr>
<tr>
    <th>Alamat Lengkap</th>
    <td>:</td>
    <td><textarea name="alamat" id="alamat" cols="30" rows="5"></textarea></td>
</tr>
<tr> 
    <th>Agama</th> 
    <td>:</td> <td> 
        <select name="agama" id="agama"> 
            <option value="pilih" align="center">--Pilih--</option> 
            <option value="islam">Islam</option> 
            <option value="protestan">Protestan</option> 
            <option value="katholik">Katholik</option>
            <option value="budha">Bundha</option> 
            <option value="hindu">Hindu</option> 
            <option value="khonghucu">Khonghucu</option> 
        </select> 
    </td> 
</tr>
<tr> 
                <td colspan="3">
                <hr> 
            </td> 
            </tr>  
<tr>
</tr>
<tr> 
            <td colspan="3" align="center"> 
                <input type="submit" value="Submit"> 
            </td>
</tr> 
        </table> 
    </form> 
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