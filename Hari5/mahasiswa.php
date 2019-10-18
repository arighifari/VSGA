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

        $query  = "SELECT * FROM data_mahasiswa";
        $select = mysqli_query($conn,$query);
    ?>
    <style>
    /* .table {
        margin: auto;
        width: 50% !important; 
        } */
    </style>

  </head>
  <body>
      <h1 style="text-align: center">Data Mahasiswa</h1>

      <div class="row d-flex justify-content-center">
        <div class="col-md-6">          
            <table  style="text-align: left" class="table table-striped table-inverse table-responsive">
                <thead class="thead-inverse">
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Pilihan</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php while ($selects = mysqli_fetch_assoc($select)) { ?>
                        <tr>
                            <td scope="row"><?= $selects['nim_Mahasiswa'] ?></td>
                            <td><?= $selects['nama_Mahasiswa']?></td>
                            <td><?= $selects['jenis_Kelamin']?></td>
                            <td><a name="update" id="update" class="btn btn-primary" href="form_update.php?nim=<?= $selects['nim_Mahasiswa']?>" role="button">UPDATE</a> 
                                <a name="delete" id="delete" class="btn btn-danger" href="controller/delete.php?nim=<?= $selects['nim_Mahasiswa']?>" role="button">DELETE</a>                                 
                                 </td>
                        </tr>
                        <?php } ?>
                    </tbody>
            </table>
            <a name="tambah" id="tambah" class="btn btn-primary" href="form_tambah.php" role="button">Tambah Mahasiswa</a>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>