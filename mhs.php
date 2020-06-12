<html>
<body>

    <table border="1" cellpadding="1">
<tr>
 <td>NIM</td>
<td><?php echo $_POST["nim"]; ?></td>
</tr>
<tr>
<td>Nama</td>
<td><?php echo $_POST["nama"]; ?></td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td><?php echo $_POST["kelamin"]; ?></td>
</tr>
<td>Alamat</td>
<td><?php echo $_POST["ALAMAT"]; ?></td>
</tr>
<tr>
    <td>Program Studi</td>
    <td><?php echo $_POST["prodi"]; ?></td>
</tr>
<tr>
<td>Bahasa Pemograman yang di sukai</td>
<td><?php if (isset( $_POST['cek'])) {
    $cek=$_POST['cek'];
    echo "";
    for ($i=0; $i < count($cek) ; $i++){
        echo $cek[$i]."<br>";
    }
}
?></td>
</tr>
</table>
</body>
</html>