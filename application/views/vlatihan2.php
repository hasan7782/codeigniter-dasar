<h3>Penjumlahan 2 bilangan</h3>
<?php 
//echo $a." + ".$b." = ".$c;
echo "a = ".$a."<br>";
echo "b = ".$b."<br>";
echo "Hasil penjumlahan = ".$c;
echo "<br>Looping a - b<br>";
for($i=$a;$i<=$b;$i++)
	echo $i." ";

echo "<br><br>";
echo "<a href='".base_url()."index.php/utama'>Kembali ke Halaman Utama</a>";
?>