<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
    <?php
        include('config/config.php');
        $nim = $_GET['nim'];

        $query  = "SELECT * FROM data_mahasiswa WHERE nim_Mahasiswa='$nim'";
        $select = mysqli_query($conn,$query);
        $tampil = mysqli_fetch_assoc($select);
    ?>
  </head>
  <body>
    <h1 style="text-align: center">Input Mahasiswa</h1>
    <form action="controller/update.php" method="post">
        <table align="center" style="margin-top:50px">
            <tr>
                <td><label for="id">ID</label></td>
                <td>:</td>
                <td><input type="number" name="id" id="id" value="<?= $tampil['id_Mahasiswa'] ?>" readonly></td>
            </tr>
            <tr>
                <td><label for="nim">NIM</label></td>
                <td>:</td>
                <td><input type="number" name="nim" id="nim" placeholder="NIM MAHASISWA" value="<?= $tampil['nim_Mahasiswa'] ?>"></td>
            </tr>
            <tr>
                <td><label for="nama">Nama Mahasiswa</label></td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" placeholder="NAMA MAHASISWA" value="<?= $tampil['nama_Mahasiswa'] ?>"></td>
            </tr>
            <tr>
                <td><label for="jenis">Jenis Kelamin</label></td>
                <td>:</td>
                </td>
                <td><input type="radio" name="jenis" id="jenis" value="Laki-Laki" selected <?php if ($tampil['jenis_Kelamin']=="Laki-Laki") { echo 'checked="checked"';} ?>>Laki-Laki
                    <input type="radio" name="jenis" id="jenis" value="perempuan" <?php if ($tampil['jenis_Kelamin']=="Perempuan") { echo 'checked="checked"';} ?>>Perempuan </td>
            </tr>
            <tr>
                <td colspan="3" align="right"><input class="btn btn-primary" style="margin-top:20px" type="submit" value="Submit" name="submit"></td>
            </tr>
        </table>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>