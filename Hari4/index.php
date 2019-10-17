<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script  src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    
    <title>Document</title>
    <?php
        include('config/config.php');
        // $query_select = "SELECT * FROM data_barang";
        // $select = mysqli_query($conn,$query_select);
        $query_join =  "SELECT nama_Barang, harga_Barang ,nama_Kategori FROM data_barang JOIN data_kategori ON data_barang.id_Kategori = data_kategori.id_Kategori";
        $join_select = mysqli_query($conn,$query_join);
        

        // $selects = mysqli_fetch_assoc($select);
        // var_dump($selects);
    ?>
</head>
<body>
    <table align="center" style="margin-top:100px" border="1" id="table_barang">
        <tr>
            <th>Nama Barang</th>
            <th>Nama Kategori</th>
            <th>Harga Barang</th>
        </tr>
        <?php while ($select = mysqli_fetch_assoc($join_select)) {?>
        <tr>
            <td><?= $select['nama_Barang']?></td>
            <td><?= $select['nama_Kategori']?></td>
            <td><?= $select['harga_Barang']?></td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="3" align="center"><a href="barang.php"><input type="submit" value="Tambah Barang" ><a href="form.php"><input type="submit" value="Tambah Kategori" >
            </td>
        </tr>
    </table>
    <form action="find_filter.php" method="GET">
        <table align="center" style="margin-top:30px" >
            <tr>
                <td><label for="find">Cari</label></td>
                <td><input type="text" name="find" id="find" placeholder="Barang"></td>
                <!-- <td><input type="submit" value="Search" name="fSubmit"></td> -->
            </tr>
            <tr>
                <td><label for="group">Group</label></td>
                <td><input type="text" name="group" id="group" placeholder="Kategori"></td>
                <!-- <td><input type="submit" value="Group" name="gSubmit"></td> -->
            </tr>
        </table>
    </form>
    <script>

        $(document).ready(function(){
        $('#find').keyup(function(event){
            var find_filter = $('#find').val();
            $.ajax({
                type: 'GET',
                url: 'find_filter.php?find_filter='+find_filter,
                data: 'find_filter='+find_filter,
                success: function(response){
                    $('#table_barang').html(response);
                }
            })
        })
    });

    </script>
</body>
</html>