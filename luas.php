<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
        <table>
            <tr>
                <td><label for="x">Alas</label></td>
                <td>:</td>
                <td><input type="number" name="x" id="x"></td>
            </tr>
            <tr>
                <td><label for="y">Tinggi</label></td>
                <td>:</td>
                <td><input type="number" name="y" id="y"></td>
            </tr>
            <tr>
                <td><label for="r">Jari-jari</label></td>
                <td>:</td>
                <td><input type="number" name="r" id="r"></td>
            </tr>
            <tr>
                <td><label for="jenis">Jenis</label></td>
                <td>:</td>
                <td>
                    <input type="radio" name="jenis" id="jenis" value="segitiga">Segitiga
                    <input type="radio" name="jenis" id="jenis" value="persegi">Persegi
                    <input type="radio" name="jenis" id="jenis" value="lingkaran">lingkaran</td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>     
        </table>
    </form>
</body>

<?php

    $angka_awal = 0;
    $angka_sekarang = 1;

    echo $angka_awal." ".$angka_sekarang;

    for ($a=0; $a < 10 ; $a++) { 
        $output = $angka_sekarang + $angka_awal;
        echo " $output ";
        $angka_awal = $angka_sekarang;
        $angka_sekarang = $output;
    }
    if (isset($_POST['submit'])) {
        $luas = 0;
        $keliling = 0;
        $phi = pi();
        $x = $_POST['x'];
        $r = $_POST['r'];
        $y = $_POST['y'];
        

        if (isset($_POST['jenis'])) {
            if($_POST['jenis'] == 'segitiga'){
                $luas = 0.5 * $x * $y;
                $keliling = 3 * $x ;
                echo "<br>"."Luas Segitiga = ".$luas."<br>"."Keliling Segitiga = ". $keliling; 
            }
            if($_POST['jenis'] == 'lingkaran'){
                $luas = pi() * pow($r,2) ;
                $keliling = 2 * pi() * $r*2;
                echo "<br>"."Luas Lingkaran = ".$luas."<br>"."Keliling Lingkaran = ". $keliling; 
                }
            if($_POST['jenis'] == 'persegi'){
            $luas = pow($x,2);
            $keliling = 4 * $x;
            echo "<br>"."Luas Persegi = ".$luas."<br>"."Keliling Persegi = ". $keliling; 
            }
        }
    }

?>
</html>