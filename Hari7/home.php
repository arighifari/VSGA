<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Table with Add and Delete Row Feature</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<link rel="stylesheet" href="assets/css/style_home.css">
<?php
    include('config/config.php');
    $query = "SELECT * FROM user";
    $select = mysqli_query($conn,$query);
?>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="artikel.php">Artikel</a>
      </li>
    </ul>
  </div>
</nav>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2> Profile <b>Details</b></h2></div>
                    <div class="col-sm-4">
                        <a name="update" id="update" class="btn btn-info add-new" href="index.php" role="button"> <i class="fa fa-plus"></i>Add New</a>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Place Of Birth</th>
                        <th>Jenis Kelamin</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($selects = mysqli_fetch_assoc($select)) { ?>
                    <tr>
                        <td><?= $selects['id'] ?></td>
                        <td><img src="<?= $selects['foto'] ?>" alt="" style="width:150px;height: 100px"></td>
                        <td><?= $selects['nama'] ?></td>
                        <td><?= $selects['tempat_lahir'] ?></td>
                        <td><?= $selects['jenis_kelamin'] ?></td>
                        <td>
                            <button >Delete</button>
                            <a  class="edit" title="Edit" href="form_update.php?id=<?= $selects['id']?>" data-toggle="tooltip"><i class="material-icons"></i></a>
                            <a  onclick="hapus()" href="controller/profile_delete.php?id=<?= $selects['id']?>" class="delete" title="Delete"  data-toggle="tooltip"><i class="material-icons"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- <script>

        function hapus() {
            swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});
    }
    </script> -->
    
</body>
</html>                            