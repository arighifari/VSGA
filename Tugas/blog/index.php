<!doctype html>
<html lang="en">

<head>
    <title>Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet"> -->
    
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
        include ('config/config.php') ;

        $query_post = ("SELECT * FROM tb_post");
        $post = mysqli_query($conn,$query_post);

      ?>
        <section class="site-section pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="owl-carousel owl-theme home-slider">
                            <div>
                                <a href="blog-single.php" class="a-block d-flex align-items-center height-lg" style="background-image: url('assets/images/img_1.jpg'); ">
                                    <div class="text half-to-full">
                                        <span class="category mb-5">Food</span>
                                        <div class="post-meta">

                                            <span class="author mr-2"><img src="assets/images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                                            <span class="mr-2">March 15, 2018 </span> &bullet;
                                            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>

                                        </div>
                                        <h3>How to Find the Video Games of Your Youth</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="blog-single.php" class="a-block d-flex align-items-center height-lg" style="background-image: url('assets/images/img_2.jpg'); ">
                                    <div class="text half-to-full">
                                        <span class="category mb-5">Travel</span>
                                        <div class="post-meta">

                                            <span class="author mr-2"><img src="assets/images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                                            <span class="mr-2">March 15, 2018 </span> &bullet;
                                            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>

                                        </div>
                                        <h3>How to Find the Video Games of Your Youth</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="blog-single.php" class="a-block d-flex align-items-center height-lg" style="background-image: url('assets/images/img_3.jpg'); ">
                                    <div class="text half-to-full">
                                        <span class="category mb-5">Sports</span>
                                        <div class="post-meta">

                                            <span class="author mr-2"><img src="assets/images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                                            <span class="mr-2">March 15, 2018 </span> &bullet;
                                            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>

                                        </div>
                                        <h3>How to Find the Video Games of Your Youth</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>


        </section>
        <!-- END section -->

        <section class="site-section py-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="mb-4">Latest Posts</h2>
                    </div>
                </div>
                <div class="row blog-entries">
                    <div class="col-md-12 col-lg-8 main-content">
                        <div class="row">
                            <?php while ($result = mysqli_fetch_assoc($post)) { ?>
                            <div class="col-md-6">
                                <a href="blog-single.php?idpost=<?= $result['id_post'] ?>" class="blog-entry element-animate" data-animate-effect="fadeIn">
                                    <img src="<?= $result['gambar'] ?>" alt="Image placeholder">
                                    <div class="blog-content-body">
                                        <div class="post-meta">
                                            <span class="mr-2"><?= $result['date'] ?></span> &bullet;
                                            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                        </div>
                                        <h2><?= $result['title'] ?></h2>
                                    </div>
                                </a>
                            </div>
                            <?php } ?>
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-12 text-center">
                                <nav aria-label="Page navigation" class="text-center">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">&lt;</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item"><a class="page-link" href="#">&gt;</a></li>
                                    </ul>
                                </nav>
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
                                <img src="assets/images/person_1.jpg" alt="Image Placeholder" class="img-fluid">
                                <div class="bio-body">
                                    <h2>David Craig</h2>
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
                                            <img src="assets/images/img_2.jpg" alt="Image placeholder" class="mr-4">
                                            <div class="text">
                                                <h4>How to Find the Video Games of Your Youth</h4>
                                                <div class="post-meta">
                                                    <span class="mr-2">March 15, 2018 </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <img src="assets/images/img_4.jpg" alt="Image placeholder" class="mr-4">
                                            <div class="text">
                                                <h4>How to Find the Video Games of Your Youth</h4>
                                                <div class="post-meta">
                                                    <span class="mr-2">March 15, 2018 </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <img src="assets/images/img_12.jpg" alt="Image placeholder" class="mr-4">
                                            <div class="text">
                                                <h4>How to Find the Video Games of Your Youth</h4>
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

</html>