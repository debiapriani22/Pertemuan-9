<html>
	<body>
	<FORM ACTION="" METHOD="POST" NAME="input">	
	NIP = <input type="text" name="nip"><br>
	Nama Pegawai = <input type="text" name="pegawai"><br> 
	Gaji Pokok = <input type="int" name="gaji"><br>
	Bonus = <input type="int" name="bonus"><br>
	<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>

<?php
$nip = $pegawai = $gaji = $bonus = $tunjangan = $pajak = "";

$gaji = ((int) $gaji);
$bonus = ((int) $bonus);

echo "============================ <br>";
if (isset($_POST['nip'])){
    $nip = $_POST['nip'];
    echo "NIP: ". $nip. "</br>";
}
if (isset($_POST['pegawai'])){
    $pegawai = $_POST['pegawai'];
    echo "Nama Pegawai: ". $pegawai. "</br>";
}
echo "============================ <br>";
if (isset($_POST['gaji'])){
    $gaji = $_POST['gaji'];
    echo "Gaji pokok: ". $gaji. "</br>";
}
if (isset($_POST['bonus'])){
    $bonus = $_POST['bonus'];
    echo "Bonus: ". $bonus. "</br>";
}
echo "Tunjangan: ". 0.05 * $gaji. "</br>";
echo "Pajak: ". 0.1 * $gaji. "</br>";
echo "============================ <br>";
echo "Gaji yang harus dibayarkan Rp. " . ($gaji + $bonus + (0.05 * $gaji) + (0.1 * $gaji)). "</br>";
?>



//maaf pak, jika masih terdapat kekurangan, saya sudah semaksimal mungkin pak >_< , terima kasih pak//