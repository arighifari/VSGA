<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<img src="" alt="">
    <?php
        $bil1 = "3";
        $bil2 = 8;
        $kata = "Selamat Siang";

        for ($i=1; $i <= 5; $i++) { 
            if ($i%2 == 0) {
                echo $kata." Genap"."<br>";
            }
            else{
                echo $kata." Ganjil"."<br>";
            }
        }
        for ($i=1; $i <= 5; $i++) { 
            $kata .= $i;
        }

        echo $kata."<br>";
        $replace = str_replace("Siang","Pagi",$kata );
        echo $replace;

        $kata2 = "Selamat Siang Kelas VSGA";
        $pecah = explode(" ",$kata2);
        echo "<br>";
        echo $pecah[3];
        echo "<br>";
        $sambung = implode(" ",$pecah);
        echo $sambung;
        echo "<br>";

        for ($i=count($pecah)-1; $i >= 0; $i--) { 
            echo $pecah[$i]." ";
        }
    ?>
</body>
</html>