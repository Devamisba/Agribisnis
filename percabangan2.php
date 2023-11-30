<?php
echo "soal 1";
echo"<br>";
    $angka =10;
    if ($angka >=0) {
        echo "Bilangan Positif.";
    }
echo "<br>";
echo "<hr>";
echo "soal 2";
echo "<br>";
echo "<br>";
$angka = 45;
if ($angka >= 40) {
    echo "Bilangan Genap.";
} else {
    echo "Bilangan Ganjil.";
}
echo "<br>";
echo "<hr>";
echo "soal 3";
echo "<br>";
echo "<br>";
$nilai = 100;
if ($nilai >= 100) {
    echo "Anda Luar Biasa.";
} elseif ($nilai >= 80) {
    echo "Anda Baik Baik Saja.";
} elseif ($nilai >= 60) {
    echo "Anda Perlu Belajar.";
} elseif ($nilai >= 40) {
    echo "Anda Perlu Banyak Belajar.";
}
echo "<br>";
echo "<hr>";
echo "soal 4";
echo "<br>";
echo "<br>";
$hari = "3";
switch ($hari) {
    case "1":
        echo "senin";
        break;
        case "2":
            echo "selasa";
            break;
            case "3":
                echo "Rabu";
                break;
                case "4":
                    echo "kamis";
                    break;
                    case "5":
                        echo "jumat";
                        break;
                        case "6":
                            echo "sabtu";
                            break;
                            case "7":
                                echo "minggu";
                                break;
                                default:
                                echo "hari tidak valid";
}
echo "<br>";
echo "<br>";
for($x=5;$x>=0;$x--) {
    for($y=5;$y>=$x;$y--) {
        echo "*";
    }
    echo "<br>"; 
}
echo "<p>Kode Program PHP - Piramida Bintang (5)</p>";
  echo "<pre>";
 
  $tinggi_piramida = 5;
  for($i = 1; $i <= $tinggi_piramida; $i++) {
    for($j = 1; $j <= $tinggi_piramida - $i; $j++) {
      echo " ";
    }
    for($k = 1; $k <= $i; $k++) {
      echo " *";
    }
    echo "<br>";
  }
 
  echo "</pre>";
  
?>