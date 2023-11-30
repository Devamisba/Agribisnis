<?php
$nama = " Deva Misba ";
echo "Nama saya adalah" . $nama;
echo "<br>";
$umur = 16;
echo "Umurku " . $umur;
echo "<br>";
echo "Selamat datang, saya $nama dan saya berumur $umur";
echo "<br>";
$nama_barang = " Kasur";
echo "Nama Barang: " . $nama_barang;
echo "<br>";
$harga_barang = 510000;
echo "Harga barang: " . $harga_barang;
echo "<br>";
$is_valid = true;
if ($is_valid) {
    echo "Barang tersedia";
} else {
        echo "Barang tidak tersedia";
    }
echo"<br>";
echo"<hr>";
echo "Soal 1:";
$angka1 = "8";
echo"<br>";
echo "Angka 1 = " . $angka1;
$angka2 = "2";
echo"<br>";
echo "Angka 2 = " . $angka2;
echo"<br>";
$hasil= $angka1+$angka2;
echo "Hasil Pertambahan = " . $hasil;
echo"<br>";
$hasil= $angka1-$angka2;
echo"Hasil Pengurangan = " . $hasil;
echo"<br>";
$hasil= $angka1*$angka2;
echo "Hasil Perkalian = " . $hasil;
echo"<br>";
$hasil= $angka1/$angka2;
echo "Hasil Pembagian = " . $hasil;
echo "<br>";
$hasil= $angka1%$angka2;
echo "Hasil Modulus= " . $hasil;
echo "<br>";
echo "<br>";
echo"Soal 2:";
echo "<br>";
$x = 10;
echo "x= " . $x;
echo "<br>";
$x += 5;
echo "x= " . $x;
echo"<br>";
$x -= 3;
echo "x= " . $x;
echo"<br>";
echo"<br>";
echo"Soal 3:";
echo"<br>";
$nilai1 =8;
echo "Nilai 1= " . $nilai1;
echo"<br>";
$nilai2 =4;
echo "Nilai 2= " . $nilai2;
echo "<br>";
$hasilp= $nilai1 > $nilai2;
echo "Hasil = " . $hasilp;
echo"<br>";
echo"<br>";
echo"Soal 4:";
$benar = true;
$salah = false; 

echo "<br>";
echo "Bila Variabel Sama Apakah Benar? ";
echo "<br>";
if ($benar&&$salah) {
    echo "Benar";
} else{
    echo " Salah ";
}
echo "<br>";
echo "Bila Variabel Beda Apakah Benar? ";
echo "<br>";
if ($benar||$salah){
    echo "Benar";
} else{
    echo " Salah ";
}
echo "<br>";
$x =11;
$y =14;
if ($x!==$y){
    echo $x;
} else {
    echo "halo";
};
echo"<br>";
echo"<br>";
echo"Soal 5:";
$hitung = 5;
$hitung++; 
echo "<br>";
echo "Nilai hitung setelah di-increment: " . $hitung . "<br>";
$hitung--; 
echo "Nilai hitung setelah di-decrement: " . $hitung;
echo"<br>";
echo"<br>";
echo"Soal 6:";
$nama_depan = "Deva ";
    $nama_belakang = "Misba ";

    $nama_lengkap = $nama_depan . " " . $nama_belakang;
    echo "<br>";
    echo "Nama lengkap: " . $nama_lengkap;
    echo"<br>";
    echo"<br>";
    echo"Soal 7:";
    $a = 12;
    $b = 19;
$rata_rata = ($a + $b) / 2;
    echo "<br>";
    echo "Rata-rata dari $a dan $b adalah: " . $rata_rata . "<br>";

    $lebih_besar_dari_5 = $rata_rata > 5;
    echo "Apakah rata-rata lebih besar dari 5? " . ($lebih_besar_dari_5 ? "Ya" : "Tidak");
    echo"<br>";
    echo"<hr>";