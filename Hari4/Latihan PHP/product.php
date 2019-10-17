<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
$barang = array(array("barang"=>"ps4","kategori"=>"game console","harga"=>4500000),
array("barang"=>"iphone X","kategori"=>"phone","harga"=>7500000),
array("barang"=>"vivo v14","kategori"=>"phone","harga"=>3500000),
array("barang"=>"nintendo switch","kategori"=>"game console","harga"=>4100000));

?>
<body>
    <form action="" method="GET">
        <table border='1' cellpadding='0' cellspacing='0'>
            <tr>
                <th>Barang</th>
                <th>Kategori</th>
                <th>Harga</th>
            </tr>
            <?php foreach ($barang as $row) { ?>
            <tr>
                <td name="barang"><input type="hidden" name="barang" value="<?= $row["barang"] ?>"> <?= $row["barang"] ?> </td>
                <td name="kategori"><input type="hidden" name="kategori" value="<?= $row["kategori"] ?>"> <?= $row["kategori"] ?></td>
                <td name="harga"><input type="hidden" name="harga" value="<?= $row["harga"] ?>"> <?= $row["harga"] ?></td>
            <?php } ?>
            </tr>            
        </table>
        <table>
            <tr>
                <td><label for="find">Cari</label></td>
                <td><input type="text" name="find" id="find" placeholder="Barang"></td>
                <td><input type="submit" value="Search" name="fSubmit"></td>
            </tr>
            <tr>
                <td><label for="group">Group</label></td>
                <td><input type="text" name="group" id="group" placeholder="Kategori"></td>
                <td><input type="submit" value="Group" name="gSubmit"></td>
            </tr>
        </table>
    </form>


</body>
    <?php 
        echo "<table border='1' cellpadding='0' cellspacing='0'>";
        echo "<tr><td> Barang </td><td> Kategori </td><td> Harga </td></tr>";
        if(isset($_GET['fSubmit']) && $_GET['find']!=""){
        // echo "<table border='1' cellpadding='0' cellspacing='0'>";
        // echo "<tr><td> Barang </td><td> Kategori </td><td> Harga </td></tr>";
            $cari=$_GET['find'];
            foreach($barang as $row){
                if(strstr($row["barang"],$cari)){
                    echo "<tr bgcolor='yellow'><td>".$row["barang"]."</td><td>".$row["kategori"]
                        ."</td><td>".$row['harga']."</td></tr>";
                }
                else{
                    echo "<tr><td>".$row["barang"]."</td><td>".$row["kategori"]
                        ."</td><td>".$row['harga']."</td></tr>";
                }
            }            
        }else if(isset($_GET['gSubmit']) && $_GET['group']!=""){
            $total=0;
            $group=$_GET['group'];
            foreach($barang as $row){
                if(strstr($row["kategori"],$group)){
                    echo "<tr bgcolor='yellow'><td>".$row["barang"]."</td><td>".$row["kategori"]
                        ."</td><td>".$row['harga']."</td></tr>";
                    $total+=$row['harga'];
                }
                else{
                    echo "<tr><td>".$row["barang"]."</td><td>".$row["kategori"]
                        ."</td><td>".$row['harga']."</td></tr>";
                }
            }
            echo "<tr><td colspan='2' align='right'>Total : </td><td>".$total."</td></tr>";
            
        }else{
            
            // echo "Isi Data Kategori atau Nama Barang";
            foreach($barang as $row){
                echo "<tr><td>".$row["barang"]."</td><td>".$row["kategori"]."</td><td>".$row['harga']."</td></tr>";
            }
            
        }
    
        echo "</table>";
    ?>
</html>