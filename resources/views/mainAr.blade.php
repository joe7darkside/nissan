<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nissan Factory for Fibers</title>
    <!-- favicon-->
    <link href="images/logo2.png" rel="icon">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap4 link -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- css file and icons stylesheet-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/custom.css">

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
                                <a class="dropdown-item" href="psfAr">(PSF)المستقرة ألياف البولستر
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a"
                            data-toggle="dropdown">اللوحات</a>
                        <!--Drop-->
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="/panel">لوحة الشرائح</a>
                            <a class="dropdown-item" href="/panels">لوحة الصور</a>
                            <a class="dropdown-item" href="/postsPanel">لوحة المشاركات</a>

                        </div>
                    </li>
                    <a class="top-navbar" href="/">
                        <i class="fa fa-language" aria-hidden="true" aria-setsize="50px"></i>
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <!--End Header-->



    <br>
    <br>
    <br>
    <br>




    <!--Slider section -->
    <div id="slides" class="cover-slides">
        <ul class="slides-container">
            @foreach ($slides as $slide)

                <li class="text-left">
                    <img src="{{ asset('storage/image/' . $slide->file_path) }}" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="m-b-20"><strong>مرحبا بكم في
                                        <br>معمل نيسان للألياف </strong></h1>
                                <p class="m-b-40"></p>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach

            {{-- <li class="text-left">
				<img src="images/bgabout.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"></strong></h1>
							<p class="m-b-40"></p>
						</div>
					</div>
				</div>
			</li> --}}
            {{-- <li class="text-left">
				<img src="images/Home3.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong></strong></h1>
							<p class="m-b-40">.</p>
						</div>
					</div>
				</div>
			</li> --}}
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div><!-- End slider Section-->




    <!--About Section-->
    <div class="about-section-box" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <div class="inner-column">
                        @foreach ($posts as $post)
                            @if ($post->post_Name == 'home1')

                                <h1><span>
                                        {{ $post->title }}
                                    </span></h1>
                                <h2> {{ $post->text }}</h2>
                            @endif

                        @endforeach


                    </div>
                </div>
                @foreach ($images as $image)
                    @if ($images->image == 'home1')

                        <div class="col-lg-6 col-md-6 col-sm-12"><img
                                src="{{ asset('storage/image/' . $image->file_path) }}" alt=""
                                class="img-fluid">&nbsp;
                        </div>
                    @endif
                    @if ($images->image == 'home2')

                        <div class="col-lg-6 col-md-6 col-sm-12"><img
                                src="{{ asset('storage/image/' . $image->file_path) }}" alt=""
                                class="img-fluid">&nbsp;
                        </div>
                    @endif

                    @if ($images->image == 'home3')

                        <div class="col-lg-6 col-md-6 col-sm-12"><img
                                src="{{ asset('storage/image/' . $image->file_path) }}" alt="" class="img-fluid">

                        </div>

                    @endif

                @endforeach

            </div>
        </div>
    </div>
    <!-- End Section -->




    <!--Start Gallery of Facyory-->
    <div class="gallery-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h1><strong><br>معمل نيسان للألياف </strong></h1>
                        <h2> المصنع مبني من الصفر والمصنع قيد الانشاء
                        </h2>
                    </div>
                </div>
            </div>
            <div class="tz-gallery">
                <div class="row">
                    @foreach ($images as $image)
                        @if ($images->image == 'g1')

                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <a class="lightbox" href="{{ asset('storage/image/' . $image->file_path) }}">
                                    <img class="img-fluid" src="{{ asset('storage/image/' . $image->file_path) }}"
                                        alt="Gallery Images">
                                </a>
                            </div>
                        @endif
                        @if ($images->image == 'g2')

                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <a class="lightbox" href="{{ asset('storage/image/' . $image->file_path) }}">
                                    <img class="img-fluid" src="{{ asset('storage/image/' . $image->file_path) }}"
                                        alt="Gallery Images">
                                </a>
                            </div>
                        @endif
                        @if ($image->name == 'g3')


                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <a class="lightbox" href="{{ asset('storage/image/' . $image->file_path) }}">
                                    <img class="img-fluid" src="{{ asset('storage/image/' . $image->file_path) }}"
                                        alt="Gallery Images">
                                </a>
                            </div>

                        @endif
                        @if ($images->name == 'g4')

                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <a class="lightbox" href="{{ asset('storage/image/' . $image->file_path) }}">
                                    <img class="img-fluid" src="{{ asset('storage/image/' . $image->file_path) }}"
                                        alt="Gallery Images">
                                </a>
                            </div>
                        @endif
                        @if ($image->name == 'g5')


                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <a class="lightbox" href="{{ asset('storage/image/' . $image->file_path) }}">
                                    <img class="img-fluid" src="{{ asset('storage/image/' . $image->file_path) }}"
                                        alt="Gallery Images">
                                </a>
                            </div>
                        @endif
                        @if ($images->image == 'g6')

                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <a class="lightbox" href="{{ asset('storage/image/' . $image->file_path) }}">
                                    <img class="img-fluid" src="{{ asset('storage/image/' . $image->file_path) }}"
                                        alt="Gallery Images">
                                </a>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!--End gallery -->




    <!--Start QT Section-->
    <div class="qt-box qt-background">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <p class="lead"> الحفاظ على بيئة جيدة من خلال جمع المواد البلاستيكية وأعادة التدويرها </p>
                    <span class="lead">معمل نيسان للألياف</span>
                </div>
            </div>
        </div>
    </div>
    <!-- End section-->











    <!-- News for custom-->
    <div class="custom-reviews-box" id="news">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2><strong class="text-warning text-uppercase">الأخبار</strong></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 mr-auto ml-auto text-center">
                    <div id="reviews" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner mt-4">
                            <div class="carousel-item text-center active">
                                <div class="img-box p-1 border  m-auto">

                                    <img class="d-block w-100 " src="" alt="">
                                    <video class="video" src="Video/Video1.mp4" width="100%" height="100%"
                                        autoplay></video>
                                </div>
                                <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">مراحل البناء</strong>
                                </h5>
                                <h6 class="text-dark m-0"></h6>
                                <p class="m-0 pt-3"></p>
                            </div>
                            <!--	<div class="carousel-item text-center">
       <div class="img-box p-1 border rounded-circle m-auto">
        <img class="d-block w-100 rounded-circle" src="" alt="">
       </div>
       <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase"></strong></h5>
       <h6 class="text-dark m-0"></h6>
       <p class="m-0 pt-3"></p>
      </div>
      <div class="carousel-item text-center">
       <div class="img-box p-1 border rounded-circle m-auto">
        <img class="d-block w-100 rounded-circle" src="" alt="">
       </div>
       <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase"></strong></h5>
       <h6 class="text-dark m-0"></h6>
       <p class="m-0 pt-3"></p>
      </div>-->
                        </div>
                        <a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">السابق</span>
                        </a>
                        <a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">التالي</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End section-->





    <!--Start QT maps-->
    <div class="qt1-box qt-background1">
        <div class="container1">
            <h1><span>موقع معمل نيسان للألياف</span></h1>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3338.724438976249!2d44.568529515192736!3d33.19509928084782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1557892839e1b093%3A0x1040bd1f923c67df!2z2YXYudmF2YQg2YbZitiz2KfZhiDZhNmE2KfZhNmK2KfZgSDYp9mE2LXZhtin2LnZitip!5e0!3m2!1sen!2siq!4v1615287061369!5m2!1sen!2siq"
                width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <!-- End section-->







    <!-- Contact Section-->
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
                                    aria-hidden="true">&nbsp;</i>من نحن</a>&nbsp;
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
    <!-- Animation -->
</body>

</html>
