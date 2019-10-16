<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $bil1 = 14;
        $bil2 = 8;

        $hasil = $bil1 += $bil2;
        echo $hasil;
        echo "<br>";
        $hasil = $bil1 += $bil2;
        echo $hasil;
    ?>
</body>
</html>