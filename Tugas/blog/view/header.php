    <?php
        session_start();

        include ('config/config.php');

        $cat = "SELECT * FROM tb_kategori";
        $cat_hasil = mysqli_query($conn,$cat);
        // include('../config/config.php');
        // $result=mysqli_query($conn,"SELECT * FROM videos");
    ?>
      <header role="banner">
        <div class="top-bar">
          <div class="container">
            <div class="row">
            <?php if(isset($_SESSION['nama'])){ ?>
              <div class="col-9 social">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="category.php" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hello, <?=$_SESSION['nama']?></a>
                  <div class="dropdown-menu" style="color:black;" aria-labelledby="dropdown05">
                    <a class="dropdown-item" style="color:black;" href="category.php">Profile</a>
                    <a class="dropdown-item" style="color:black;" href="controller/logout_conf.php">Logout</a>
                  </div>
                </li>
              </ul>
              </div>
              <?php }
              else {
              ?>
              <div class="col-9 social">
                <a href="login.php"><span class="fa fa-user"> Login</span></a>
              </div>
              <?php } ?>
              <div class="col-3 search-top">
                <!-- <a href="#"><span class="fa fa-search"></span></a> -->
                <form action="#" class="search-top-form">
                  <span class="icon fa fa-search"></span>
                  <input type="text" id="s" placeholder="Type keyword to search...">
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="container logo-wrap">
          <div class="row pt-5">
            <div class="col-12 text-center">
              <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
              <h1 class="site-logo"><a href="index.php">Wordify</a></h1>
            </div>
          </div>
        </div>
        
        <nav class="navbar navbar-expand-md  navbar-light bg-light">
          <div class="container">
            
           
            <div class="collapse navbar-collapse" id="navbarMenu">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="category.php" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown05">
                    <?php while ($cats = mysqli_fetch_assoc($cat_hasil)) { ?>
                    <a class="dropdown-item" href="category.php"><?= $cats['name'] ?></a>
                    <?php } ?>
                  </div>
                </li>
              <?php if(isset($_SESSION['nama'])){ ?>
                <li class="nav-item">
                  <a class="nav-link" href="post_article.php">Post An Article</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="post_kategori.php">Post A Category</a>
                </li>
              <?php } ?>
              </ul>
              
            </div>
          </div>
        </nav>
      </header>
