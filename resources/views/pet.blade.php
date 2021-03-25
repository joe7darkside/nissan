<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>PET Flakes</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/logo2.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/logo2.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!--========= Start Header=========-->
    <header class="top-navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <h1><img src="images/logo2.png" alt="" width="170rem" height="100rem" /> Nissan Factory for Fibers
                    </h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-factory"
                    aris-controls="navbars-rs-factory" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbars-rs-factory">
                    <!-- Navigation Menu bar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/"><i class="fa fa-home" aria-hidden="true">&nbsp;</i>Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/" id="about"><i class="fa fa-user"
                                    aria-hidden="true">&nbsp;</i>About
                                Us</a>
                        </li>
                        <!--Drop Menu -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a"
                                data-toggle="dropdown">Products</a>
                            <!--Drop-->
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="/psf">polyester Stable
                                    Fibers
                                    (PSF)</a>
                                <a class="dropdown-item" href="/pet">PET Flakes</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/" id="news"><i class="fa fa-newspaper-o"
                                    aria-hidden="true">&nbsp;</i>News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/" id="contact"><i class="fa fa-phone"
                                    aria-hidden="true">&nbsp;</i>Contact</a>
                    </ul>
                    <a class="top-navbar" href="/petAr">
                        <i class="fa fa-language" aria-hidden="true" aria-setsize="50px"></i>
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <!--End Header-->

    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>PET Flakes</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->

    <!-- Start pet -->
    <div class="pet-box">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="title">PET flake clear</h3>
                    <div class="blog-post__text">
                        <p><b> Size: 10-12-14 Mm</b>
                            <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-14 col-sm-6">
                    <div class="flake">
                        <div class="pic">
                            @foreach ($images as $image)
                                @if ($image->name == 'pet1')

                                    <img src="{{ asset('storage/image/' . $image->file_path) }}">
                                @endif

                            @endforeach

                            <ul class="social">
                                <li><a href="#"> <i class="fa fa-phone"></i></a></li>
                                <li><a href="#"> <i class="fa fa-whatsapp"></i></a></li>
                                <li><a href="#"> <i class="fa fa-envelope-o"></i></a></li>
                                <li><a href="https://www.facebook.com/Nissan-fiber-factory-PSF-100964322075381/"> <i
                                            class="fa fa-facebook"> </i> </a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-content">
                            @foreach ($posts as $post)
                                @if ($post->post_Name == 'pet1')

                                    <h3 class="title">{{ $post->title }}</h3>
                                    <span class="post"> {{ $post->text }}</span>
                                @endif

                            @endforeach

                        </div>
                    </div>
                </div>
                <br>
                <div class="col-md-14 col-sm-6">
                    <div class="flake">
                        <div class="pic">
                            @foreach ($images as $image)
                                @if ($image->name == 'pet2')

                                    <img src="{{ asset('storage/image/' . $image->file_path) }}">
                                @endif

                            @endforeach

                            <ul class="social">
                                <li><a href="#"> <i class="fa fa-phone"></i></a></li>
                                <li><a href="#"> <i class="fa fa-whatsapp"></i></a></li>
                                <li><a href="#"> <i class="fa fa-envelope-o"></i></a></li>
                                <li><a href="https://www.facebook.com/Nissan-fiber-factory-PSF-100964322075381/"> <i
                                            class="fa fa-facebook"> </i> </a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            @foreach ($posts as $post)
                                @if ($post->post_Name == 'pet2')

                                    <h3 class="title">{{ $post->title }}</h3>
                                    <span class="post"> {{ $post->text }}</span>
                                @endif

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End pet -->



    <!-- Contact Section -->
    <div class="contact-imfo-box" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-3 arrow-right">
                    <i class="fa fa-volume-control-phone"></i>
                    <div class="overflow-hidden">
                        <h4>Phone</h4>
                        <p class="lead">+964 772 555 5077</p>
                    </div>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <div class="col-md-3 arrow-right">
                    <i class="fa fa-whatsapp"></i>
                    <div class="overflow-hidden">
                        <h4>WhatsApp</h4>
                        <p class="lead">+964 790 190 6712</p>
                    </div>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <div class="col-md-3 arrow-right">
                    <i class="fa fa-wechat"></i>
                    <div class="overflow-hidden">
                        <h4>Wechat</h4>
                        <p class="lead">+964 772 555 5077</p>
                    </div>
                </div>
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="col-md-3 arrow-right">
                    <i class="fa fa-envelope"></i>
                    <div class="overflow-hidden">
                        <h4>Email</h4>
                        <p class="lead">info@nissan-fiber.com</p>
                    </div>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="col-md-4">
                    <i class="fa fa-map-marker"> </i>
                    <div class="overflow-hidden">
                        <h4>Location</h4>
                        <p class="lead">Iraq,Baghdad <br>
                            Nissan Factory for Industrial Fibers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Section --->






    <!-- Footer Section -->
    <footer class="footer-area bg-f">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <h3>About Us</h3>
                    <p>We are the Nissan Factory
                        for the production of synthetic fibers (polyester)under establishment with environmental and
                        industrial development approvals. We have a long experience in trading and manufacturing
                        natural
                        and synthetic fibers,
                        spanning more than 30 years.We started the procedures and approvals in 2019 to establish a
                        factory on an area of ​​13600
                        M2 that contains two
                        production lines. Building constructions have been established at a rate of 90% of the first
                        line for processing plastic
                        bottles with a production capacity of (3_2.5) tons per hour for the purpose of using them in
                        the second line of the
                        factory, which is the product. Final polyester fibers with a production capacity of (40-50)
                        tons per day, such as fibers
                        for industrial uses, such as upholstery, quilting, textiles and non-woven fabrics. And
                        thermal insulation materials and
                        many other uses.</p>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="col-lg-3 col-md-6">
                    <h3>Quick Links</h3>
                    <ul class="list-inline f-social">
                        <li class="list-inline-item"><a href="/"><i class="fa fa-home"
                                    aria-hidden="true">&nbsp;</i>Home</a>&nbsp;
                        </li>
                        <br>
                        <li class="list-inline-item"><a href="/"><i class="fa fa-user"
                                    aria-hidden="true">&nbsp;</i>About
                                Us</a>&nbsp;
                        </li>
                        <br>
                        <li class="list-inline-item">
                            <a class="dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Products</a>
                            <!--Drop-->
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="/psf">
                                    (PSF)</a>
                                <a class="dropdown-item" href="/pet">PET Flakes</a>
                            </div>
                        </li>
                        <br>
                        <li class="list-inline-item">
                            <a href="/"><i class="fa fa-newspaper-o" aria-hidden="true">&nbsp;</i>News</a>&nbsp;
                        </li>
                        <br>
                        <li class="list-inline-item">
                            <a href="/pet"><i class="fa fa-phone" aria-hidden="true">&nbsp;</i>Contact</a>&nbsp;
                        </li>
                    </ul>

                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="col-lg-3 col-md-6">
                    <h3>Contact information</h3>
                    <p class="lead"> <i class="fa fa-map-marker"> </i> &nbsp;Iraq,Baghdad <br>
                        Nissan Factory for Industrial Fibers</p>
                    <p class="lead"><a href="#"> <i class="fa fa-phone"> </i> &nbsp; +964 772 555 5077</a></p>
                    <p class="lead"><a href="#"> <i class="fa fa-wechat"> </i> &nbsp; +964 772 555 5077</a></p>
                    <p class="lead"><a href="#"> <i class="fa fa-whatsapp"> </i> &nbsp; +964 790 190 6712</a></p>
                    <p class="lead"><a href="#"> <i class="fa fa-envelope"> </i> &nbsp;info@nissan-fiber.com </a></p>
                    <p class="lead"><a href="https://www.facebook.com/Nissan-fiber-factory-PSF-100964322075381/"> <i
                                class="fa fa-facebook"> </i> &nbsp;Nissan fiber factory-PSF </a></p>
                </div>
            </div>
        </div>



        <!--copyright-->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="company-name">All Rights Reserved. &copy; 2021 <a href="#"><span> Nissan Factory for
                                    Fibers</span></a> Design
                            By : <a href="#"><span>Noora Ali</span></a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-level-up"
            aria-hidden="true"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
