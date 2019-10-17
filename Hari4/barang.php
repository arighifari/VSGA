<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtha=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
        include('config/config.php');
        $query_select = "SELECT * FROM data_kategori";
        $select = mysqli_query($conn,$query_select);
        // $selects = mysqli_fetch_assoc($select);
        // var_dump($selects);
    ?>
</head>
<body>
    <form action="form_barang.php" method="post">
        <table align="center" style="margin-top:100px">
            <tr>
                <td><label for="kategori">Nama Kategori</label></td>
                <td>:</td>
                <td> <select name="kategori" id="">
                     <?php while ($selects = mysqli_fetch_assoc($select)) {?>
                        <option value="<?= $selects['id_Kategori']?>"><?= $selects['nama_Kategori']?></option>
                     <?php } ?>
                     </select>
                </td>
            </tr>
            <tr>
                <td><label for="barang">Nama Barang</label></td>
                <td>:</td>
                <td><input type="text" name="barang" id="barang" placeholder="Nama Barang"></td>
            </tr>
            <tr>
                <td><label for="harga">Harga Barang</label></td>
                <td>:</td>
                <td><input type="text" name="harga" id="harga" placeholder="Harga Barang"></td>
            </tr>
            <tr>
                <td colspan="3" align="right"><input style="margin-top:20px" type="submit" value="Submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>