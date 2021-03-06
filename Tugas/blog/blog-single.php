`<!doctype html>
<html lang="en">
  <head>
    <title>Colorlib Wordify &mdash; Minimal Blog Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <div class="wrap">
    <?php
        include ('view/header.php') ;
        include ('config/config.php');
        $id = $_GET['idpost'];
        $post = "SELECT * FROM tb_post WHERE id_post='$id'";
        $posting = mysqli_query($conn,$post);
        $result = mysqli_fetch_assoc($posting);

        $user = $_SESSION['id'];
        $user_query = "SELECT * FROM tb_user WHERE email='$user'";
        $users = mysqli_query($conn,$user_query);
        $hasil_user = mysqli_fetch_assoc($users);

        $id_cat = "SELECT id_kategori FROM tb_post WHERE id_post='$id'";
        $cat = mysqli_query($conn,$id_cat);
        $category = mysqli_fetch_assoc($cat);
        $category = $category['id_kategori'];
        $cat_query = "SELECT * FROM tb_kategori WHERE id_kategori='$category'";
        $name_cat = mysqli_query($conn,$cat_query);
        $name_cats = mysqli_fetch_assoc($name_cat);
        
        $query_comment = "SELECT * FROM tb_komentar WHERE id_post='$id'";
        $comment = mysqli_query($conn,$query_comment);

        $query_email_comment = "SELECT email FROM tb_komentar WHERE id_post='$id'";
        $email_comment = mysqli_query($conn,$query_comment);
        $email_comments = mysqli_fetch_assoc($email_comment);
        $email_comments = $email_comments['email'];

        $query_user_comment = "SELECT * FROM tb_user WHERE email='$email_comments'";
        $user_comment = mysqli_query($conn,$query_user_comment);
        $user_comments = mysqli_fetch_assoc($user_comment);

        $count_query = "SELECT content,COUNT(*) as content FROM tb_komentar WHERE id_post='$id'";
        $count = mysqli_query($conn,$count_query);
        $counts = mysqli_fetch_assoc($count);

      ?>
    <section class="site-section py-lg">
      <div class="container">
        
        <div class="row blog-entries element-animate">

          <div class="col-md-12 col-lg-8 main-content">
            <img src="<?= $result['gambar'] ?>" alt="Image" class="img-fluid mb-5">
             <div class="post-meta">
                        <span class="author mr-2"><img src="<?= $hasil_user['foto'] ?>" alt="Colorlib" class="mr-2"> <?= $hasil_user['name'] ?></span>&bullet;
                        <span class="mr-2"><?= $result['date'] ?></span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
            <h1 class="mb-4"><?= $result['title'] ?></h1>
            <a class="category mb-5" href="#"><?= $name_cats['name'] ?></a>
           
            <div class="post-content-body">
              <p style="text-align: justify"><?= $result['content'] ?></p>
            </div>

            
            <div class="pt-5">
              <p>Categories:  <a href="#"><?= $name_cats['name'] ?></a>  Tags: <a href="#"><?= $result['tag'] ?></a></p>
            </div>


            <div class="pt-5">
              <h3 class="mb-5"><?= $counts['content'] ?> Comments</h3>
              <ul class="comment-list">
                <?php while ($comments = mysqli_fetch_assoc($comment)) { ?>
                <li class="comment">
                  <div class="vcard">
                    <img src="<?= $user_comments['foto'] ?>" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3><?= $user_comments['name'] ?></h3>
                    <div class="meta"><?= $result['date'] ?></div>
                    <p><?= $comments['content'] ?></p>
                    <p><a href="#" class="reply rounded">Reply</a></p>
                  </div>
                </li>
                <?php } ?>
              </ul>
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="controller/comment_conf.php" method="POST" class="p-5 bg-light">
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="hidden" name="id" class="form-control" id="email" value="<?= $id ?>" readonly>                    
                    <input type="email" name="email" class="form-control" id="email" value="<?= $_SESSION['id'] ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="message">Comment</label>
                    <textarea name="komentar" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" name="submit" value="Post Comment" class="btn btn-primary">
                  </div>

                </form>
              </div>
            </div>

          </div>

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">
            <div class="sidebar-box search-form-wrap">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <!-- END sidebar-box -->
            <div class="sidebar-box">
              <div class="bio text-center">
                <img src="assets/images/person_2.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="bio-body">
                  <h2>Craig David</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.</p>
                  <p><a href="#" class="btn btn-primary btn-sm rounded">Read my bio</a></p>
                  <p class="social">
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                  </p>
                </div>
              </div>
            </div>
            <!-- END sidebar-box -->  
            <div class="sidebar-box">
              <h3 class="heading">Latest Posts</h3>
              <div class="post-entry-sidebar">
                <ul>
                  <li>
                    <a href="">
                      <img src="assets/images/img_1.jpg" alt="Image placeholder" class="mr-4">
                      <div class="text">
                        <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                        <div class="post-meta">
                          <span class="mr-2">March 15, 2018 </span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <img src="assets/images/img_1.jpg" alt="Image placeholder" class="mr-4">
                      <div class="text">
                        <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                        <div class="post-meta">
                          <span class="mr-2">March 15, 2018 </span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <img src="assets/images/img_1.jpg" alt="Image placeholder" class="mr-4">
                      <div class="text">
                        <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                        <div class="post-meta">
                          <span class="mr-2">March 15, 2018 </span>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- END sidebar-box -->

            <div class="sidebar-box">
              <h3 class="heading">Categories</h3>
              <ul class="categories">
                <li><a href="#">Food <span>(12)</span></a></li>
                <li><a href="#">Travel <span>(22)</span></a></li>
                <li><a href="#">Lifestyle <span>(37)</span></a></li>
                <li><a href="#">Business <span>(42)</span></a></li>
                <li><a href="#">Adventure <span>(14)</span></a></li>
              </ul>
            </div>
            <!-- END sidebar-box -->

            <div class="sidebar-box">
              <h3 class="heading">Tags</h3>
              <ul class="tags">
                <li><a href="#">Travel</a></li>
                <li><a href="#">Adventure</a></li>
                <li><a href="#">Food</a></li>
                <li><a href="#">Lifestyle</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Freelancing</a></li>
                <li><a href="#">Travel</a></li>
                <li><a href="#">Adventure</a></li>
                <li><a href="#">Food</a></li>
                <li><a href="#">Lifestyle</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Freelancing</a></li>
              </ul>
            </div>
          </div>
          <!-- END sidebar -->

        </div>
      </div>
    </section>

    <footer class="site-footer">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-4">
              <h3>About Us</h3>
              <p class="mb-4">
                <img src="assets/images/img_1.jpg" alt="Image placeholder" class="img-fluid">
              </p>

              <p>Lorem ipsum dolor sit amet sa ksal sk sa, consectetur adipisicing elit. Ipsa harum inventore reiciendis. <a href="#">Read More</a></p>
            </div>
            <div class="col-md-6 ml-auto">
              <div class="row">
                <div class="col-md-7">
                  <h3>Latest Post</h3>
                  <div class="post-entry-sidebar">
                    <ul>
                      <li>
                        <a href="">
                          <img src="assets/images/img_6.jpg" alt="Image placeholder" class="mr-4">
                          <div class="text">
                            <h4>How to Find the Video Games of Your Youth</h4>
                            <div class="post-meta">
                              <span class="mr-2">March 15, 2018 </span> &bullet;
                              <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="">
                          <img src="assets/images/img_3.jpg" alt="Image placeholder" class="mr-4">
                          <div class="text">
                            <h4>How to Find the Video Games of Your Youth</h4>
                            <div class="post-meta">
                              <span class="mr-2">March 15, 2018 </span> &bullet;
                              <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="">
                          <img src="images/img_4.jpg" alt="Image placeholder" class="mr-4">
                          <div class="text">
                            <h4>How to Find the Video Games of Your Youth</h4>
                            <div class="post-meta">
                              <span class="mr-2">March 15, 2018 </span> &bullet;
                              <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                            </div>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-1"></div>
                
                <div class="col-md-4">

                  <div class="mb-5">
                    <h3>Quick Links</h3>
                    <ul class="list-unstyled">
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">Travel</a></li>
                      <li><a href="#">Adventure</a></li>
                      <li><a href="#">Courses</a></li>
                      <li><a href="#">Categories</a></li>
                    </ul>
                  </div>
                  
                  <div class="mb-5">
                    <h3>Social</h3>
                    <ul class="list-unstyled footer-social">
                      <li><a href="#"><span class="fa fa-twitter"></span> Twitter</a></li>
                      <li><a href="#"><span class="fa fa-facebook"></span> Facebook</a></li>
                      <li><a href="#"><span class="fa fa-instagram"></span> Instagram</a></li>
                      <li><a href="#"><span class="fa fa-vimeo"></span> Vimeo</a></li>
                      <li><a href="#"><span class="fa fa-youtube-play"></span> Youtube</a></li>
                      <li><a href="#"><span class="fa fa-snapchat"></span> Snapshot</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <p class="small">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | This template is made with <i class="fa fa-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
        </div>
      </footer>
      <!-- END footer -->

    </div>
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/jquery-migrate-3.0.0.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.stellar.min.js"></script>

    <script src="assets/js/main.js"></script>
  </body>
</html>`