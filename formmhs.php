<html>
<body>

<form action="mhs.php" method="post">

NIM : <input type="text" name="nim"><br>
Nama : <input type="text" name="nama"><br>
Jenis Kelamin : <BR>
<input type=RADIO name="kelamin" value="L"> Laki-Laki
<input type=RADIO name="kelamin" value="P"> Perempuan <BR>
Alamat : <BR> 
<TEXTAREA NAME="ALAMAT" ROWS=W COLS=50>  </TEXTAREA> <BR>
Program Studi : 
<SELECT NAME="prodi">
<OPTION VALUE="Sistem Informasi">Sistem Informasi
<OPTION VALUE="Fisika">Fisika
<OPTION VALUE="Biologi">Biologi
<OPTION VALUE="Matematika">Matematika
</SELECT>
<br> Bahasa Pemrograman yang dikuasai : <BR>
<input type=checkbox name="cek[]" value="PASCAL/DELPHI">PASCAL/DELPHI<br>
<input type=checkbox name="cek[]" value="C/C++">C/C++<br>
<input type=checkbox name="cek[]" value="Visual Basic">Visual Basic<br>

<input type=submit value="Kirim!"><br>

</form>

</body>
</html>