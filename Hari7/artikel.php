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
    $query = "SELECT * FROM artikel";
    $select = mysqli_query($conn,$query);
?>
  
</head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="artikel.php">Artikel</a>
        </li>
        </ul>
    </div>
    </nav>

    <center><button style="margin-top:30px;margin-bottom:30px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add Artikel
    </button></center>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Artikel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="controller/artikel_insert.php" method="post">
        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Judul Artikel</label>
          <input type="text" name="judul" placeholder="Judul Artikel" id="defaultForm-email" class="form-control validate">
        </div>

        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Isi Artikel</label><br>
          <textarea class="form-control" name="isi" placeholder="Isi Artikel" id="exampleFormControlTextarea1" rows="10"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Submit" name="submit">
        <input type="submit" class="btn btn-secondary" data-dismiss="modal" value="Close" name="close">        
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal -->


    <?php while ($selects = mysqli_fetch_assoc($select)) { ?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><?= $selects['judul']?></h1>
            <!-- <p class="lead">Jumbo helper text</p> -->
            <hr class="my-2"> 
            <p><?= $selects['isi']?></p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="" role="button" data-toggle="modal" data-target="#modalupdate">Edit</a>
                <a class="btn btn-danger btn-lg" href="" role="button">Delete</a>
            </p>
        </div>
    </div>
    <?php } ?>

    <div class="modal fade" id="modalupdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Artikel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="controller/artikel_insert.php" method="post">
        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Judul Artikel</label>
          <input type="text" name="judul" placeholder="Judul Artikel" id="defaultForm-email" class="form-control validate">
        </div>

        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Isi Artikel</label><br>
          <textarea class="form-control" name="isi" placeholder="Isi Artikel" id="exampleFormControlTextarea1" rows="10"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Submit" name="submit">
        <input type="submit" class="btn btn-secondary" data-dismiss="modal" value="Close" name="close">        
      </div>
      </form>
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>