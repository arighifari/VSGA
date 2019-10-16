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
                <td><label for="nilai">Nilai</label></td>
                <td>:</td>
                <td><input type="number" name="nilai" id="nilai"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>     
        </table>

    </form>
    <?php
    if (isset($_POST['submit'])) {
        $nilai = $_POST['nilai'];
        if( $nilai > 80 && $nilai <100 ){
            echo"Nilai Anda A";
        }
        elseif ($nilai > 70 && $nilai <80) {
            echo"AB";
        }
        elseif ($nilai > 65 && $nilai <70) {
            echo"B";            
        }
        elseif ($nilai > 60 && $nilai <65) {
            echo"BC";            
        }
        elseif ($nilai > 50 && $nilai <60) {
            echo"C";
        }
        elseif ($nilai > 40 && $nilai <50) {
            echo"D";
        }
        elseif ($nilai >= 0 && $nilai <40) {
            echo"E";
        }
        else{
            echo"ERROR";
        }
    }
    ?>
</body>
</html>