<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>POLYESTER STAPLE FIBER (PSF)</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

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
    <!-- Start Header-->
    <header class="top-navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/mainAr">
                    <h1><img src="images/logo2.png" alt="" width="150rem" height="100rem" /> معمل نيسان للألياف
                    </h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-factory"
                    aris-controls="navbars-rs-factory" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                &nbsp;&nbsp;&nbsp;
                <div class="collapse navbar-collapse" id="navbars-rs-factory">
                    <!-- Navigation Menu bar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/mainAr"><i class="fa fa-home"
                                    aria-hidden="true">&nbsp;</i>الرئيسيه</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#about"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>من
                                نحن</a>
                        </li>
                        <!--Drop Menu -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a"
                                data-toggle="dropdown">المنتجات</a>
                            <!--Drop-->
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="/psfAr">(PSF)المستقرة ألياف البولستر
                                </a>
                                <a class="dropdown-item" href="/petAr">(PET) قشور</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#news"><i class="fa fa-newspaper-o"
                                    aria-hidden="true">&nbsp;</i>الأخبار</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact"><i class="fa fa-phone" aria-hidden="true">&nbsp;</i>اتصل
                                بنا</a>
                        </li>
                    </ul>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">اللوحات</a>
                        <!--Drop-->
                    </li> --}}
                    <a class="top-navbar" href="/psf">
                        <i class="fa fa-language" aria-hidden="true" aria-setsize="50px"></i>
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb1">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>(PSF)ألياف البولستر المستقر</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->

    <!-- Start psf details psf 1 -->
    <div class="psf-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @foreach ($posts as $post)
                        @if ($post->post_Name == 'psf1')


                            <div class="heading-title text-center">
                                <h3 class="title">(PSF)<br> {{$post->title}}</h3>
                                <div class="psf-post__text">
                                    <p><b> </b>
                                        <br>
                                    </p>
                                </div>
                            </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-12">
                    <div class="psf-inner-details-page">
                        <div class="psf-inner-box">
                            <div class="side-psf-img">
                                @foreach ($images as $image)
                                    @if ($image->name == 'psf1')

                                        <img class="img-fluid" src="{{ asset('storage/image/' . $image->file_path) }}"
                                            alt="">
                            </div>
                            @endif
                            @endforeach

                            <div class="inner-psf-detail details-page">
                                <h3>
                                    {{ $post->text }}
                                </h3>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Start psf details psf 2 -->

    <div class="psf-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @foreach ($posts as $post)
                        @if ($post->post_Name == 'psf1')
                            <div class="heading-title text-center">
                                <h3 class="title"> {{ $post->title }}</h3>
                                <div class="psf-post__text">
                                    <p><b> </b>
                                        <br>
                                    </p>
                                </div>
                            </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-12">
                    <div class="psf-inner-details-page">
                        <div class="psf-inner-box">
                            @foreach ($images as $image)
                                @if ($image->name == 'psf2')
                                    <div class="side-psf-img">
                                        <img class="img-fluid" src="{{ asset('storage/image/' . $image->file_path) }}"
                                            alt="">
                                    </div>
                                @endif
                            @endforeach

                            <div class="inner-psf-detail details-page">
                                <h3>الوسائد - الوسائد - الألحفة - الألعاب - السترة - المرتبة - السجاد غير
                                    المنسوج -
                                    اللباد للسيارات ، اللباد السماعات ،
                                    المنسوجات الجغرافية ، الحشو متعدد الحشو ، أقمشة الترشيح وغيرها من الصوتيات
                                    أيضًا
                                </h3>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
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
    <!-- End Contact Section -->

    <!-- Footer Section -->
    <footer class="footer-area bg-f">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <h3>About Us</h3>
                    <p>نحن مصنع نيسان
                        لإنتاج الألياف الاصطناعية (البوليستر) تحت التأسيس مع البيئة و
                        موافقات التنمية الصناعية. لدينا خبرة طويلة في التجارة والتصنيع
                        طبيعي >> صفة
                        والألياف الاصطناعية ،
                        تمتد لأكثر من 30 عامًا ، وبدأنا الإجراءات والموافقات في عام 2019 لتأسيس a
                        مصنع على مساحة 13600
                        M2 الذي يحتوي على اثنين
                        خطوط الإنتاج. تم إنشاء المباني الإنشائية بنسبة 90٪ من الأولى
                        خط لمعالجة البلاستيك
                        عبوات بقدرة إنتاجية (3_2.5) طن / ساعة لغرض استخدامها فيها
                        السطر الثاني من
                        المصنع الذي هو المنتج. ألياف بوليستر نهائية بطاقة إنتاجية (40-50)
                        طن يوميا ، مثل الألياف
                        للاستخدامات الصناعية مثل التنجيد وخياطة اللحف والمنسوجات والأقمشة غير المنسوجة. و
                        مواد العزل الحراري و
                        العديد من الاستخدامات الأخرى.</p>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="col-lg-3 col-md-6">
                    <h3>Quick Links</h3>
                    <ul class="list-inline f-social">
                        <li class="list-inline-item"><a href="index.html"><i class="fa fa-home"
                                    aria-hidden="true">&nbsp;</i>الرئيسيه</a>&nbsp;
                        </li>
                        <br>
                        <li class="list-inline-item"><a href="#about"><i class="fa fa-user"
                                    aria-hidden="true">&nbsp;</i>من
                                نحن</a>&nbsp;
                        </li>
                        <br>
                        <li class="list-inline-item">
                            <a class="dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">المنتجات</a>
                            <!--Drop-->
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="POLYESTER STAPLE FIBER (PSF)AR.html">
                                    (PSF)</a>
                                <a class="dropdown-item" href="PET flakeAR.html">PET Flakes</a>
                            </div>
                        </li>
                        <br>
                        <li class="list-inline-item">
                            <a href="#news"><i class="fa fa-newspaper-o" aria-hidden="true">&nbsp;</i>الأخبار</a>&nbsp;
                        </li>
                        <br>
                        <li class="list-inline-item">
                            <a href="#contact"><i class="fa fa-phone" aria-hidden="true">&nbsp;</i>اتصلبنا</a>&nbsp;
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
                        <p class="company-name">جميع الحقوق محفوظه. &copy; 2021 <a href="#"><span>معمل نيسان
                                    للألياف</span></a> تصميم بواسطة : <a href="#"><span>Noora Ali</span></a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Back to Top -->
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
