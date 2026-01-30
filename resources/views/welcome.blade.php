
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Md Ashikur Rahman</title>

    <!--=====FAB ICON=======-->
    <link rel="shortcut icon" href="{{ secure_asset('assets/img/logo/fav-logo1.png') }}" type="image/x-icon">

    <!--===== CSS LINK =======-->
    <link rel="stylesheet" href="{{ secure_asset('assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/plugins/aos.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/plugins/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/plugins/owlcarousel.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/plugins/sidebar.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/plugins/slick-slider.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/main.css') }}">

    <!-- External CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- JS Plugins -->
    <script src="{{ secure_asset('assets/js/plugins/jquery-3-7-1.min.js') }}"></script>
</head>
<body class="body1">

<!--===== PRELOADER STARTS =======-->
<div id="preloader">
    <div id="loader"></div>
</div>
<!--===== PRELOADER ENDS =======-->
<div class="procus-cursor" style="transform: translate3d(calc(-50% + 1919px), calc(-50% + 787px), 0px);"></div>
<div class="procus-cursor2" style="left: 551px; top: 918px;"></div>
<!--===== PROGRESS STARTS=======-->
<div class="paginacontainer">
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>
</div>
<!--===== PROGRESS ENDS=======-->

<!--===== SIDEBAR STARTS=======-->
<div class="header-site-icon">
    <div class="slide-bar slide-bar1">
        <div class="sidebar-info">
            <div class="sidebar-logo">
                <a href="#">
                    <img src="{{secure_asset('assets/img/logo/logo2.png')}}" alt="logo" style="height: 100px;">
                </a>
                <div class="close-mobile-menu">
                    <a><i class="fa-solid fa-xmark"></i></a>
                </div>
            </div>
            <div class="sidebar-content">
                <ul>
                    <li><a href="#list-item-1">Home</a></li>
                    <li><a href="#list-item-2">About Us</a></li>
                    <li><a href="#list-item-3">service</a></li>
                    <li><a href="#list-item-4">Skill</a></li>
                    <li><a href="#list-item-5">Portfolio</a></li>
                    <li><a href="#list-item-6">Testimonial</a></li>
                    <li><a href="#list-item-7">Certification</a></li>
                    <li><a href="#list-item-8">Contact</a></li>
                </ul>
            </div>
            <div class="space32"></div>
            <div class="space16"></div>
            <div class="btn-area">
                <a href="javascript:void(0)" onclick="openMail()" class="vl-btn1">Get in touch now <img src="{{secure_asset('assets/img/icons/mail1.svg')}}" alt=""></a>
            </div>
            <div class="space40"></div>
            <div class="social-link-area">
                <h3 class="sidebar-heading">Social Links</h3>
                <ul>
                    <li>
                        <a href="https://www.facebook.com/ashik.razz.8490/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://www.linkedin.com/in/ashikur-rahman-1154793a2/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                    </li>
                </ul>
            </div>
            <div class="space40"></div>
        </div>
    </div>
</div>
<!--===== SIDEBAR ENDS STARTS=======-->

<!--=====HEADER START=======-->
<header>
    <div class="header-area homepage1 header header-sticky " id="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-elements">
                        <div class="site-logo">
                            <a href="#"><img src="{{secure_asset('assets/img/logo/logo1.png')}}" alt="" style="height: 100px;"></a>
                        </div>
                        <div class="btn-area d-lg-flex">
                            <a href="javascript:void(0)" class="vl-btn1" onclick="openMail()">
                                HIRE ME
                                <span>
                                    <img src="{{secure_asset('assets/img/icons/mail1.svg')}}" alt="">
                                </span>
                            </a>
                            <button class="hamburger_menu"><img src="{{secure_asset('assets/img/icons/bars-icons1.svg')}}" alt=""></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--=====HEADER END =======-->

<!--===== MAIN AREA STARTS =======-->
<div class="main-hero-area5 parallaxie">
    <video class="body-overlay"  muted="" autoplay="" loop="">
        <source src="{{secure_asset('assets/img/video/video5.mp4')}}" type="video/mp4">
    </video>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="personal-contact-box" data-aos="fade-right" data-aos-duration="1000">
                    <div id="list-example" class="list-group">
                        <a class="list-group-item list-group-item-action active" href="#list-item-1"><img src="{{secure_asset('assets/img/icons/home1.svg')}}" alt=""><span>Home</span></a>
                        <a class="list-group-item list-group-item-action" href="#list-item-2"><img src="{{secure_asset('assets/img/icons/home2.svg')}}" alt=""> <span>About Us</span></a>
                        <a class="list-group-item list-group-item-action" href="#list-item-3"><img src="{{secure_asset('assets/img/icons/home3.svg')}}" alt=""> <span>Our Service</span></a>
                        <a class="list-group-item list-group-item-action" href="#list-item-4"><img src="{{secure_asset('assets/img/icons/home4.svg')}}" alt=""> <span>My Skill</span></a>
                        <a class="list-group-item list-group-item-action" href="#list-item-5"><img src="{{secure_asset('assets/img/icons/home5.svg')}}" alt=""> <span>Portfolio</span></a>
                        <a class="list-group-item list-group-item-action" href="#list-item-6"><img src="{{secure_asset('assets/img/icons/home6.svg')}}" alt=""> <span>Testimonial</span></a>
                        <a class="list-group-item list-group-item-action" href="#list-item-7"><img src="{{secure_asset('assets/img/icons/home8.svg')}}" alt=""> <span>Our Blog</span></a>
                        <a class="list-group-item list-group-item-action m-0" href="#list-item-8"><img src="{{secure_asset('assets/img/icons/home7.svg')}}" alt=""> <span>Contact Us</span></a>
                    </div>
                    <div class="img1 image-anime reveal">
                        <img src="{{secure_asset('assets/img/all-images/hero/hero-img1.png')}}" alt="">
                    </div>
                    <div class="space18"></div>
                    <h3>Ashikur Rahman</h3>
                    <div class="space16"></div>
                    <p>Hi, I’m Ashik, a dedicated Web Designer/Web Developer with 2 years of experience creating meaningful digital experiences.</p>
                    <div class="space32"></div>
                    <ul>
                        <li><a href="https://www.facebook.com/ashik.razz.8490/" target="_blank"><img src="{{secure_asset('assets/img/icons/s-icon3.svg')}}" alt=""></a></li>
                        <li><a href="https://www.linkedin.com/in/ashikur-rahman-1154793a2/" target="_blank"><img src="{{secure_asset('assets/img/icons/s-icon4.svg')}}" alt=""></a></li>
                    </ul>
                    <div class="space44"></div>
                    <div class="btn-area1 text-center">
                        <a href="{{secure_asset('assets/img/all-images/hero/Resume - Ashikur Rahman.pdf')}}" download class="vl-btn1">Download Now <img src="{{secure_asset('assets/img/icons/download1.svg')}}" alt=""></a>
                    </div>
                    <div class="space32"></div>
                    <p>© {{ now()->year }} Ashik. All Rights Reserved.</p>
                </div>
            </div>
            <div class="col-lg-8">
                <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                    <!--===== HERO AREA STARTS =======-->
                    <div id="list-item-1">
                        <div class="hero-heading-area heading1">
                            <h5 data-aos="fade-left" data-aos-duration="800"><img src="{{secure_asset('assets/img/icons/sublogo1.svg')}}" alt="">Hi, I’m Ashik, Web designer & Web developer. </h5>
                            <div class="space24"></div>
                            <h1 data-aos="fade-left" data-aos-duration="900">Designing Intuitive </h1>
                            <div class="space24"></div>
                            <h1 class="head" data-aos="fade-left" data-aos-duration="1000">Experiences <span>Inspire</span></h1>
                            <div class="space24"></div>
                            <p data-aos="fade-left" data-aos-duration="1100">Your gateway to innovative design, seamless user experiences, and impactful solutions. Turning complex ideas into user-friendly designs. </p>
                            <div class="arrow" data-aos="fade-left" data-aos-duration="1200">
                                <a href="#">
                                    <img src="{{secure_asset('assets/img/elements/elements1.png')}}" alt="" class="elements1 keyframe5">
                                    <img src="{{secure_asset('assets/img/icons/arrow1.svg')}}" alt="" class="arrow1">
                                </a>

                                <div class="images">
                                    <img src="{{secure_asset('assets/img/all-images/others/others1.png')}}" alt="">
                                    <p>2k+ reviews <br> (4.90 of 5)</p>
                                </div>
                            </div>
                            <div class="space32"></div>
                            <div class="main-btn-area" data-aos="fade-up" data-aos-duration="1200">
                                <a href="#list-item-8">Lets Work Together <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <!--===== HERO AREA ENDS =======-->
                    <div class="space50"></div>
                    <div id="list-item-2">
                        <!--===== ABOUT AREA STARTS =======-->
                        <div class="about-section-area">
                            <div class="heading1">
                                <h5 data-aos="fade-left" data-aos-duration="800"><img src="{{secure_asset('assets/img/icons/sublogo1.svg')}}" alt="">About Us</h5>
                                <div class="space24"></div>
                                <h1 data-aos="fade-left" data-aos-duration="1000">Crafting Seamless</h1>
                                <div class="space24"></div>
                                <h1 class="head" data-aos="fade-left" data-aos-duration="1100">User <span>Experiences</span></h1>
                            </div>
                            <div class="space60"></div>
                            <div class="about-boxarea">
                                <div class="row">
                                    <div class="col-lg-12" data-aos="fade-left" data-aos-duration="1200">
                                        <div class="about-main-boxes">
                                            <h4>Ashikur Rahman</h4>
                                            <div class="space24"></div>
                                            <p>
                                                I’m a passionate web designer and web developer based in Bangladesh. I enjoy turning ideas into clean, responsive, and user-friendly web experiences. Since starting my journey in web development, I’ve focused on writing clear code, building practical solutions, and creating designs that feel simple and intuitive. I love learning new technologies, improving my craft, and working on meaningful projects. Whether it’s a personal project or a client solution, I always aim to deliver quality, performance, and reliability.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="900">
                                        <div class="about-boxes2">
                                            <img src="{{secure_asset('assets/img/icons/home2.svg')}}" alt="">
                                            <div class="content-area">
                                                <h4>Web Development</h4>
                                                <div class="space16"></div>
                                                <p>
                                                    I build responsive, user-friendly websites using modern web technologies, with a focus on performance, accessibility.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="about-boxes2">
                                            <img src="{{secure_asset('assets/img/icons/home3.svg')}}" alt="">
                                            <div class="content-area">
                                                <h4>Backend Systems</h4>
                                                <div class="space16"></div>
                                                <p>
                                                    Handle data, APIs, and server logic with a focus on security, scalability, and performance.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1100">
                                        <div class="about-boxes2">
                                            <img src="{{secure_asset('assets/img/icons/home4.svg')}}" alt="">
                                            <div class="content-area">
                                                <h4>Responsive Web Design</h4>
                                                <div class="space16"></div>
                                                <p>
                                                    Crafting designs  adapt seamlessly across all devices ensuring and  a  consistent user experience.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200">
                                        <div class="about-boxes2">
                                            <img src="{{secure_asset('assets/img/icons/home5.svg')}}" alt="">
                                            <div class="content-area">
                                                <h4>Database Management</h4>
                                                <div class="space16"></div>
                                                <p>I design and manage databases that ensure data integrity, performance, and secure access.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="soace20"></div>
                                    <div class="col-lg-6 col-md-6">
                                        <h3>Work Experience</h3>
                                        <div class="space32"></div>
                                        <div class="about-others-box" data-aos="zoom-in" data-aos-duration="900">
                                            <h4><a href="#">Self-Employed</a></h4><br>
                                            <p>Freelancer</p><br>
                                            <a href="#">2020 - 2022</a>
                                            <div class="space32"></div>

                                            <h4><a href="#">Internship</a></h4><br>
                                            <p>Winky Tech Limited</p><br>
                                            <a href="#">5 May 2025 - 31 Oct 2025</a>
                                            <div class="space32"></div>

                                            <h4><a href="#">Junior Software Engineer</a></h4><br>
                                            <p>Winky Tech Limited</p><br>
                                            <a href="#">01 Nov 2025 - 15 Jan 2026</a>
                                        </div>
                                        <div class="about-others-box text-center" data-aos="zoom-in" data-aos-duration="1000">
                                            <h4>Stay With Me </h4>
                                            <div class="space18"></div>
                                            <ul>
                                                <li><a href="https://www.facebook.com/ashik.razz.8490/" target="_blank"><img src="{{secure_asset('assets/img/icons/s-icon3.svg')}}" alt=""></a></li>
                                                <li><a href="https://www.linkedin.com/in/ashikur-rahman-1154793a2/" target="_blank"><img src="{{secure_asset('assets/img/icons/s-icon4.svg')}}" alt=""></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <h3>Education</h3>
                                        <div class="space32"></div>
                                        <div class="about-others-box" data-aos="zoom-in" data-aos-duration="1100">
                                            <h4><a href="#">Daffodil International University</a> </h4><br>
                                            <p>B.Sc. in Computing & Information System</p><br>
                                            <a href="#">2017 - 2023</a>
                                            <div class="space32"></div>

                                            <h4><a href="#">University of Asia Pacific</a> </h4><br>
                                            <p>B.Sc. in Pharmacy</p><br>
                                            <a href="#">2014 - 2017</a>
                                            <div class="space32"></div>

                                            <h4><a href="#">Milestone College</a> </h4><br>
                                            <p>HSC</p><br>
                                            <a href="#">2012 - 2014</a>
                                            <div class="space32"></div>
                                        </div>
                                    </div>
                                    <div class="space20"></div>
                                </div>
                            </div>
                        </div>
                        <!--===== ABOUT AREA ENDS =======-->
                    </div>

                    <div id="list-item-3">
                        <!--===== SERVICE AREA STARTS =======-->
                        <div class="service-section-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="service-header heading1">
                                            <h5 data-aos="fade-left" data-aos-duration="800"><img src="{{secure_asset('assets/img/icons/sublogo1.svg')}}" alt="">My Services</h5>
                                            <div class="space24"></div>
                                            <h2 data-aos="fade-left" data-aos-duration="1000">Elevating Brands</h2>
                                            <div class="space24"></div>
                                            <h2 class="head" data-aos="fade-left" data-aos-duration="1100">Intuitive <span>Design</span></h2>
                                            <div class="space50"></div>
                                            <div class="div" data-aos="fade-left" data-aos-duration="900">
                                                <div class="service-main-boxes" >
                                                    <h4>Web Development</h4>
                                                    <div class="space24"></div>
                                                    <p>
                                                        I build responsive, user-friendly websites using modern web technologies, with a focus on performance, accessibility.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="space30"></div>
                                            <div class="div" data-aos="fade-left" data-aos-duration="1000">
                                                <div class="service-main-boxes">
                                                    <h4>Backend Systems</h4>
                                                    <div class="space24"></div>
                                                    <p>
                                                        Handle data, APIs, and server logic with a focus on security, scalability, and performance.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="space30"></div>
                                            <div class="div" data-aos="fade-left" data-aos-duration="1100">
                                                <div class="service-main-boxes">
                                                    <h4>Responsive Web Design</h4>
                                                    <div class="space24"></div>
                                                    <p>
                                                        Crafting designs that adapt seamlessly across all devices, ensuring a consistent user experience.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="space30"></div>
                                            <div class="div" data-aos="fade-left" data-aos-duration="1200">
                                                <div class="service-main-boxes">
                                                    <h4>Database Management</h4>
                                                    <div class="space24"></div>
                                                    <p>
                                                        I design and manage databases that ensure data integrity, performance, and secure access.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--===== SERVICE AREA ENDS =======-->
                    </div>
                    <div class="space50"></div>
                    <div id="list-item-4">
                        <!--===== SKILL AREA STARTS =======-->
                        <div class="skill-section-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-gl-12">
                                        <div class="skill-header heading1">
                                            <h5 data-aos="fade-left" data-aos-duration="800"><img src="{{secure_asset('assets/img/icons/sublogo1.svg')}}" alt="">My Skill</h5>
                                            <div class="space24"></div>
                                            <h2 data-aos="fade-left" data-aos-duration="1000">The Technology and</h2>
                                            <div class="space24"></div>
                                            <h2 class="head" data-aos="fade-left" data-aos-duration="1100">Tools Behind <span>Design</span></h2>
                                            <h2 class="head" data-aos="fade-left" data-aos-duration="1100">& <span>Development</span></h2>
                                        </div>
                                        <div class="space80"></div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6" data-aos="zoom-out" data-aos-duration="900">
                                                <div class="skill-boxarea">
                                                    <div class="icons">
                                                        <img src="{{secure_asset('assets/img/icons/skill1.svg')}}" alt="">
                                                    </div>
                                                    <div class="space24"></div>
                                                    <div class="space16"></div>
                                                    <p>Laravel</p>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6" data-aos="zoom-out" data-aos-duration="1000">
                                                <div class="skill-boxarea">
                                                    <div class="icons">
                                                        <img src="{{secure_asset('assets/img/icons/skill2.svg')}}" alt="">
                                                    </div>
                                                    <div class="space24"></div>
                                                    <div class="space16"></div>
                                                    <p>PHP</p>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6" data-aos="zoom-out" data-aos-duration="1100">
                                                <div class="skill-boxarea">
                                                    <div class="icons">
                                                        <img src="{{secure_asset('assets/img/icons/skill3.svg'}}" alt="">
                                                    </div>
                                                    <div class="space24"></div>
                                                    <div class="space16"></div>
                                                    <p>Bootstrap</p>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6" data-aos="zoom-out" data-aos-duration="1200">
                                                <div class="skill-boxarea">
                                                    <div class="icons">
                                                        <img src="{{secure_asset('assets/img/icons/skill4.svg')}}" alt="">
                                                    </div>
                                                    <div class="space24"></div>
                                                    <div class="space16"></div>
                                                    <p>Tailwind CSS</p>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6" data-aos="zoom-out" data-aos-duration="1000">
                                                <div class="skill-boxarea">
                                                    <div class="icons">
                                                        <img src="{{secure_asset('assets/img/icons/skill5.svg')}}" alt="">
                                                    </div>
                                                    <div class="space24"></div>
                                                    <div class="space16"></div>
                                                    <p>JavaScript</p>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6" data-aos="zoom-out" data-aos-duration="11000">
                                                <div class="skill-boxarea">
                                                    <div class="icons">
                                                        <img src="{{secure_asset('assets/img/icons/skill6.svg')}}" alt="" class="Wordpress">
                                                    </div>
                                                    <div class="space24"></div>
                                                    <div class="space16"></div>
                                                    <p>AJAX & JQuery</p>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6" data-aos="zoom-out" data-aos-duration="11000">
                                                <div class="skill-boxarea">
                                                    <div class="icons">
                                                        <img src="{{secure_asset('assets/img/icons/skill7.svg')}}" alt="" class="Wordpress">
                                                    </div>
                                                    <div class="space24"></div>
                                                    <div class="space16"></div>
                                                    <p>MySql</p>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6" data-aos="zoom-out" data-aos-duration="11000">
                                                <div class="skill-boxarea">
                                                    <div class="icons">
                                                        <img src="{{secure_asset('assets/img/icons/skill8.svg')}}" alt="" class="Wordpress">
                                                    </div>
                                                    <div class="space24"></div>
                                                    <div class="space16"></div>
                                                    <p>PHPStorm</p>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6" data-aos="zoom-out" data-aos-duration="11000">
                                                <div class="skill-boxarea">
                                                    <div class="icons">
                                                        <img src="{{secure_asset('assets/img/icons/skill9.svg')}}" alt="" class="Wordpress">
                                                    </div>
                                                    <div class="space24"></div>
                                                    <div class="space16"></div>
                                                    <p>VSCode</p>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6" data-aos="zoom-out" data-aos-duration="11000">
                                                <div class="skill-boxarea">
                                                    <div class="icons">
                                                        <img src="{{secure_asset('assets/img/icons/skill10.svg')}}" alt="" class="Wordpress">
                                                    </div>
                                                    <div class="space24"></div>
                                                    <div class="space16"></div>
                                                    <p>DataGrip</p>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6" data-aos="zoom-out" data-aos-duration="11000">
                                                <div class="skill-boxarea">
                                                    <div class="icons">
                                                        <img src="{{secure_asset('assets/img/icons/skill11.svg')}}" alt="" class="Wordpress">
                                                    </div>
                                                    <div class="space24"></div>
                                                    <div class="space16"></div>
                                                    <p>Navicat</p>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6" data-aos="zoom-out" data-aos-duration="11000">
                                                <div class="skill-boxarea">
                                                    <div class="icons">
                                                        <img src="{{secure_asset('assets/img/icons/skill12.svg')}}" alt="" class="Wordpress">
                                                    </div>
                                                    <div class="space24"></div>
                                                    <div class="space16"></div>
                                                    <p>Canva</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--===== SKILL AREA ENDS =======-->
                    </div>
                    <div class="space30"></div>
                    <div id="list-item-5">
                        <!--===== PORTFOLIO AREA STARTS =======-->
                        <div class="portfolio-section-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="portfolio-header heading1">
                                            <h5 data-aos="fade-left" data-aos-duration="800"><img src="{{secure_asset('assets/img/icons/sublogo1.svg')}}" alt="">My Portfolio</h5>
                                            <div class="space24"></div>
                                            <h2 data-aos="fade-left" data-aos-duration="1000">Develop & Designs</h2>
                                            <div class="space24"></div>
                                            <h2 class="head" data-aos="fade-left" data-aos-duration="1100">Real <span>Results</span></h2>
                                        </div>
                                    </div>
                                    <div class="space50"></div>
                                    <div class="col-lg-12" data-aos="fade-left" data-aos-duration="1000">
                                        <div class="portfolio-boxarea click-here">
                                            <div class="img1">
                                                <a href="https://scholarlabfoundation.tech/" target="_blank">
                                                    <img src="{{secure_asset('assets/img/all-images/portfolio/SLab-1.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="space24"></div>
                                            <a href="https://scholarlabfoundation.tech/" target="_blank">Scholarlab Foundation - NGO Platform</a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6" data-aos="fade-left" data-aos-duration="1100">
                                        <div class="portfolio-boxarea2 click-here">
                                            <div class="img1">
                                                <a href="https://littleonlinemart.com/" target="_blank">
                                                    <img src="{{secure_asset('assets/img/all-images/portfolio/LOM-1.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="space24"></div>
                                            <a href="https://littleonlinemart.com/" target="_blank">Littles Online Mart - eCommers</a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6" data-aos="fade-left" data-aos-duration="1200">
                                        <div class="portfolio-boxarea2 click-here">
                                            <div class="img1">
                                                <a href="javascript:void(0)">
                                                    <img src="{{secure_asset('assets/img/all-images/portfolio/INV-1.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="space24"></div>
                                            <a href="javascript:void(0)">Inventory - Smart Trading</a>
                                        </div>
                                    </div>

                                    <div class="col-lg-12" data-aos="fade-left" data-aos-duration="1100">
                                        <div class="portfolio-boxarea click-here">
                                            <div class="img1">
                                                <a href="https://edpngo.org/" target="_blank">
                                                    <img src="{{secure_asset('assets/img/all-images/portfolio/EDP-1.png')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="space24"></div>
                                            <a href="https://edpngo.org/" target="_blank">EDP - NGO Platform</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--===== PORTFOLIO AREA ENDS =======-->
                    </div>
                    <div class="space30"></div>
                    <div id="list-item-6">
                        <!--===== TESTIMONIAL AREA STARTS =======-->
                        <div class="testimonial-section-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="testimonial-header heading1">
                                            <h5 data-aos="fade-left" data-aos-duration="900"><img src="{{secure_asset('assets/img/icons/sublogo1.svg')}}" alt="">Testimonial</h5>
                                            <div class="space24"></div>
                                            <h2 data-aos="fade-left" data-aos-duration="1000">What Client Says </h2>
                                            <div class="space24"></div>
                                            <h2 class="head" data-aos="fade-left" data-aos-duration="1100">About <span>  My Work</span></h2>
                                        </div>
                                        <div class="space60"></div>
                                    </div>
                                    <div class="col-lg-7 col-md-6" data-aos="zoom-in" data-aos-duration="900">
                                        <div class="testimonial-boxarea">
                                            <div class="list">
                                                <ul>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 20" fill="none">
                                                    <path d="M13.077 4.99278C13.077 6.16612 13.3836 7.15145 13.997 7.94878C14.4316 8.49812 15.0214 8.859 15.7663 9.03145C16.4996 9.20212 17.193 9.21412 17.8196 9.06878C18.033 10.3354 17.6863 11.6768 16.8063 13.0981C15.9245 14.5186 14.7876 15.5866 13.3956 16.3021L15.5036 19.3354C16.5703 18.8074 17.5836 18.1381 18.517 17.3288C19.4636 16.5194 20.3036 15.5888 21.0503 14.5368C21.797 13.4848 22.357 12.2968 22.717 10.9501C23.077 9.60345 23.177 8.23012 23.005 6.81678C22.781 4.95012 22.1783 3.45678 21.197 2.35011C20.2165 1.22923 18.9952 0.668781 17.533 0.668781C16.2463 0.668781 15.1783 1.05545 14.333 1.83945C13.4965 2.60745 13.0787 3.65989 13.0796 4.99678L13.077 4.99278ZM0.911625 4.99278C0.911625 6.16612 1.21829 7.15145 1.83162 7.94878C2.26718 8.50878 2.85696 8.87189 3.60096 9.03812C4.34763 9.20256 5.03207 9.21234 5.65429 9.06745C5.86762 10.3208 5.53429 11.6674 4.65162 13.0941C3.77163 14.5074 2.63563 15.5741 1.24363 16.2941L3.34629 19.3354C4.41385 18.8074 5.41829 18.1386 6.35962 17.3288C7.31482 16.5074 8.16322 15.5694 8.88496 14.5368C9.62629 13.4834 10.1783 12.2968 10.5383 10.9501C10.904 9.6045 11.0023 8.20023 10.8276 6.81678C10.6063 4.95012 10.0063 3.45678 9.02762 2.35011C8.04985 1.23723 6.83074 0.680782 5.37029 0.680782C4.0814 0.679005 3.01385 1.06878 2.16762 1.85011C1.33118 2.61811 0.912514 3.67056 0.911625 5.00745V4.99278Z" fill="white"/>
                                                </svg>
                                            </div>
                                            <div class="space20"></div>
                                            <p>"Working with Ashik was a game-changer for our brand. Their attention to detail and focus on creating a seamless user experience truly transformed our website. We’ve seen an incredible boost in user engagement and satisfaction."</p>
                                            <div class="space24"></div>
                                            <div class="mans-area">
                                                <div class="man">
                                                    <img src="{{secure_asset('assets/img/all-images/testimonials/sadhin.png')}}" alt="">
                                                </div>
                                                <div class="content">
                                                    <a href="#">Sadhin Hossain</a>
                                                    <p>Entrepreneur</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                                        <div class="testimonial-boxarea">
                                            <div class="list">
                                                <ul>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 20" fill="none">
                                                    <path d="M13.077 4.99278C13.077 6.16612 13.3836 7.15145 13.997 7.94878C14.4316 8.49812 15.0214 8.859 15.7663 9.03145C16.4996 9.20212 17.193 9.21412 17.8196 9.06878C18.033 10.3354 17.6863 11.6768 16.8063 13.0981C15.9245 14.5186 14.7876 15.5866 13.3956 16.3021L15.5036 19.3354C16.5703 18.8074 17.5836 18.1381 18.517 17.3288C19.4636 16.5194 20.3036 15.5888 21.0503 14.5368C21.797 13.4848 22.357 12.2968 22.717 10.9501C23.077 9.60345 23.177 8.23012 23.005 6.81678C22.781 4.95012 22.1783 3.45678 21.197 2.35011C20.2165 1.22923 18.9952 0.668781 17.533 0.668781C16.2463 0.668781 15.1783 1.05545 14.333 1.83945C13.4965 2.60745 13.0787 3.65989 13.0796 4.99678L13.077 4.99278ZM0.911625 4.99278C0.911625 6.16612 1.21829 7.15145 1.83162 7.94878C2.26718 8.50878 2.85696 8.87189 3.60096 9.03812C4.34763 9.20256 5.03207 9.21234 5.65429 9.06745C5.86762 10.3208 5.53429 11.6674 4.65162 13.0941C3.77163 14.5074 2.63563 15.5741 1.24363 16.2941L3.34629 19.3354C4.41385 18.8074 5.41829 18.1386 6.35962 17.3288C7.31482 16.5074 8.16322 15.5694 8.88496 14.5368C9.62629 13.4834 10.1783 12.2968 10.5383 10.9501C10.904 9.6045 11.0023 8.20023 10.8276 6.81678C10.6063 4.95012 10.0063 3.45678 9.02762 2.35011C8.04985 1.23723 6.83074 0.680782 5.37029 0.680782C4.0814 0.679005 3.01385 1.06878 2.16762 1.85011C1.33118 2.61811 0.912514 3.67056 0.911625 5.00745V4.99278Z" fill="white"/>
                                                </svg>
                                            </div>
                                            <div class="space20"></div>
                                            <p>"Ashik exceeded all expectations with their innovative designs and collaborative approach. Reality that perfectly resonates with our audience."</p>
                                            <div class="space24"></div>
                                            <div class="mans-area">
                                                <div class="man">
                                                    <img src="{{secure_asset('assets/img/all-images/testimonials/fahim.png')}}" alt="">
                                                </div>
                                                <div class="content">
                                                    <a href="#">Mohammad Fahim</a>
                                                    <p>SRL Group Bangladesh</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-5 col-md-6" data-aos="zoom-in" data-aos-duration="1100">
                                        <div class="testimonial-boxarea">
                                            <div class="list">
                                                <ul>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 20" fill="none">
                                                    <path d="M13.077 4.99278C13.077 6.16612 13.3836 7.15145 13.997 7.94878C14.4316 8.49812 15.0214 8.859 15.7663 9.03145C16.4996 9.20212 17.193 9.21412 17.8196 9.06878C18.033 10.3354 17.6863 11.6768 16.8063 13.0981C15.9245 14.5186 14.7876 15.5866 13.3956 16.3021L15.5036 19.3354C16.5703 18.8074 17.5836 18.1381 18.517 17.3288C19.4636 16.5194 20.3036 15.5888 21.0503 14.5368C21.797 13.4848 22.357 12.2968 22.717 10.9501C23.077 9.60345 23.177 8.23012 23.005 6.81678C22.781 4.95012 22.1783 3.45678 21.197 2.35011C20.2165 1.22923 18.9952 0.668781 17.533 0.668781C16.2463 0.668781 15.1783 1.05545 14.333 1.83945C13.4965 2.60745 13.0787 3.65989 13.0796 4.99678L13.077 4.99278ZM0.911625 4.99278C0.911625 6.16612 1.21829 7.15145 1.83162 7.94878C2.26718 8.50878 2.85696 8.87189 3.60096 9.03812C4.34763 9.20256 5.03207 9.21234 5.65429 9.06745C5.86762 10.3208 5.53429 11.6674 4.65162 13.0941C3.77163 14.5074 2.63563 15.5741 1.24363 16.2941L3.34629 19.3354C4.41385 18.8074 5.41829 18.1386 6.35962 17.3288C7.31482 16.5074 8.16322 15.5694 8.88496 14.5368C9.62629 13.4834 10.1783 12.2968 10.5383 10.9501C10.904 9.6045 11.0023 8.20023 10.8276 6.81678C10.6063 4.95012 10.0063 3.45678 9.02762 2.35011C8.04985 1.23723 6.83074 0.680782 5.37029 0.680782C4.0814 0.679005 3.01385 1.06878 2.16762 1.85011C1.33118 2.61811 0.912514 3.67056 0.911625 5.00745V4.99278Z" fill="white"/>
                                                </svg>
                                            </div>
                                            <div class="space20"></div>
                                            <p>The designs delivered by Ashik were intuitive and engaging, making a significant difference in how users interacted with our platform."</p>
                                            <div class="space24"></div>
                                            <div class="mans-area">
                                                <div class="man">
                                                    <img src="{{secure_asset('assets/img/all-images/testimonials/Sami Shafayat.jpg')}}" alt="">
                                                </div>
                                                <div class="content">
                                                    <a href="#">Sami Shafayat</a>
                                                    <p>Penta Global Limited.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-6" data-aos="zoom-in" data-aos-duration="1200">
                                        <div class="testimonial-boxarea">
                                            <div class="list">
                                                <ul>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 20" fill="none">
                                                    <path d="M13.077 4.99278C13.077 6.16612 13.3836 7.15145 13.997 7.94878C14.4316 8.49812 15.0214 8.859 15.7663 9.03145C16.4996 9.20212 17.193 9.21412 17.8196 9.06878C18.033 10.3354 17.6863 11.6768 16.8063 13.0981C15.9245 14.5186 14.7876 15.5866 13.3956 16.3021L15.5036 19.3354C16.5703 18.8074 17.5836 18.1381 18.517 17.3288C19.4636 16.5194 20.3036 15.5888 21.0503 14.5368C21.797 13.4848 22.357 12.2968 22.717 10.9501C23.077 9.60345 23.177 8.23012 23.005 6.81678C22.781 4.95012 22.1783 3.45678 21.197 2.35011C20.2165 1.22923 18.9952 0.668781 17.533 0.668781C16.2463 0.668781 15.1783 1.05545 14.333 1.83945C13.4965 2.60745 13.0787 3.65989 13.0796 4.99678L13.077 4.99278ZM0.911625 4.99278C0.911625 6.16612 1.21829 7.15145 1.83162 7.94878C2.26718 8.50878 2.85696 8.87189 3.60096 9.03812C4.34763 9.20256 5.03207 9.21234 5.65429 9.06745C5.86762 10.3208 5.53429 11.6674 4.65162 13.0941C3.77163 14.5074 2.63563 15.5741 1.24363 16.2941L3.34629 19.3354C4.41385 18.8074 5.41829 18.1386 6.35962 17.3288C7.31482 16.5074 8.16322 15.5694 8.88496 14.5368C9.62629 13.4834 10.1783 12.2968 10.5383 10.9501C10.904 9.6045 11.0023 8.20023 10.8276 6.81678C10.6063 4.95012 10.0063 3.45678 9.02762 2.35011C8.04985 1.23723 6.83074 0.680782 5.37029 0.680782C4.0814 0.679005 3.01385 1.06878 2.16762 1.85011C1.33118 2.61811 0.912514 3.67056 0.911625 5.00745V4.99278Z" fill="white"/>
                                                </svg>
                                            </div>
                                            <div class="space20"></div>
                                            <p>"From wireframes to the final product, Ashik brought creativity and functionality together beautifully. The final design not only looks fantastic but also works flawlessly across devices."
                                            </p>
                                            <div class="space24"></div>
                                            <div class="mans-area">
                                                <div class="man">
                                                    <img src="{{secure_asset('assets/img/all-images/testimonials/Rayhan.jpg')}}" alt="">
                                                </div>
                                                <div class="content">
                                                    <a href="#">Rayhan Biswas</a>
                                                    <p>Rink's</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--===== TESTIMONIAL AREA ENDS =======-->
                    </div>
                    <div class="space30"></div>
                    <div id="list-item-7">
                        <!--===== BLOG AREA STARTS =======-->
                        <div class="blog-section-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="blog-header heading1">
                                            <h5 data-aos="fade-left" data-aos-duration="900"><img src="{{secure_asset('assets/img/icons/sublogo1.svg')}}" alt="">My Certification</h5>
                                            <div class="space24"></div>
                                            <h2 data-aos="fade-left" data-aos-duration="1000">My Latest Certificate </h2>
                                            <div class="space24"></div>
                                            <h2 class="head" data-aos="fade-left" data-aos-duration="1200">of <span>Achievement</span></h2>
                                            <div class="space60"></div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="blog-boxarea">
                                                        <div class="img1 reveal">
                                                            <a href="javascript:void(0)"> <img src="{{secure_asset('assets/img/all-images/blog/CIS_Day.jpeg')}}" alt=""></a>
                                                        </div>
                                                        <div class="content-area">
                                                            <div class="space16"></div>
                                                            <a href="javascript:void(0)">Programming Contest on Daffodil International University </a>
                                                            <div class="space16"></div>
                                                            <ul>
                                                                <li><a href="javascript:void(0)"><img src="{{secure_asset('assets/img/all-images/blog/blog-img5.png')}}" alt="">Ashikur Rahman</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="blog-boxarea">
                                                        <div class="img1 reveal">
                                                            <a href="javascript:void(0)"><img src="{{secure_asset('assets/img/all-images/blog/blog-img2.jpg')}}" alt=""></a>
                                                        </div>
                                                        <div class="content-area">
                                                            <div class="space16"></div>
                                                            <a href="javascript:void(0)">Certified from goedu, Skill.jobs and HRDI</a>
                                                            <div class="space16"></div>
                                                            <ul>
                                                                <li><a href="javascript:void(0)"><img src="{{secure_asset('assets/img/all-images/blog/blog-img5.png')}}" alt="">Ashikur Rahman</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="blog-boxarea">
                                                        <div class="img1 reveal">
                                                            <a href="javascript:void(0)"> <img src="{{secure_asset('assets/img/all-images/blog/blog-img3.jpg')}}" alt=""></a>
                                                        </div>
                                                        <div class="content-area">
                                                            <div class="space16"></div>
                                                            <a href="javascript:void(0)">Certified from goedu, Skill.jobs and HRDI</a>
                                                            <div class="space16"></div>
                                                            <ul>
                                                                <li><a href="javascript:void(0)"><img src="{{secure_asset('assets/img/all-images/blog/blog-img5.png')}}" alt="">Ashikur Rahman</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="blog-boxarea">
                                                        <div class="img1 reveal">
                                                            <a href="javascript:void(0)"><img src="{{secure_asset('assets/img/all-images/blog/blog-img4.jpg')}}" alt=""></a>
                                                        </div>
                                                        <div class="content-area">
                                                            <div class="space16"></div>
                                                            <a href="javascript:void(0)">Certified from goedu, Skill.jobs and HRDI</a>
                                                            <div class="space16"></div>
                                                            <ul>
                                                                <li><a href="javascript:void(0)"><img src="{{secure_asset('assets/img/all-images/blog/blog-img5.png')}}" alt="">Ashikur Rahman</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="space30"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--===== BLOG AREA ENDS =======-->
                    </div>
                    <div class="space60"></div>
                    <div id="list-item-8">
                        <!--===== CONTACT AREA STARTS =======-->
                        <div class="contact-section-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="contact-heading heading1">
                                            <h5 data-aos="fade-left" data-aos-duration="900"><img src="{{secure_asset('assets/img/icons/sublogo1.svg')}}" alt="">Contact Me</h5>
                                            <div class="space24"></div>
                                            <h2 data-aos="fade-left" data-aos-duration="1000">Have Any Project in</h2>
                                            <div class="space24"></div>
                                            <h2 class="head" data-aos="fade-left" data-aos-duration="1100">Mind, <span>Lets Talk</span></h2>
                                        </div>
                                        <div class="space50"></div>
                                        <div class="contact-boxarea" data-aos="zoom-in" data-aos-duration="1000">
                                            <h3>Let’s Work Together!</h3>
                                            <div class="space12"></div>
                                            <form action="{{ route('contact.send') }}" method="POST" onsubmit="return showSuccess()">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="input-area">
                                                            <input type="text" name="name" placeholder="Full Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="input-area">
                                                            <input type="email" name="email" placeholder="Email Address" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="input-area">
                                                            <input type="number" name="phone" placeholder="Phone Number">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="input-area">
                                                            <input type="text" name="subject" placeholder="Subject" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="input-area">
                                                            <input type="text" name="budget" placeholder="Your Budget (optional)">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="input-area">
                                                            <textarea name="message" placeholder="Message" required></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="input-area">
                                                            <button type="submit" class="vl-btn1">Send <img src="{{secure_asset('assets/img/icons/mail1.svg')}}" alt=""></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="space50"></div>
                                        <div class="footer-area">
                                            <div class="btn-area1">
                                                <a href="#"><img src="{{secure_asset('assets/img/logo/logo1.png')}}" alt="" style="height: 100px;"></a>
                                            </div>
                                            <p>© {{ now()->year }} Ashik. All Rights Reserved.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--===== CONTACT AREA ENDS =======-->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--===== MAIN AREA STARTS =======-->


<!--===== JS SCRIPT LINK =======-->
<!-- jQuery (Toastr needs it!) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="{{secure_asset('assets/js/plugins/bootstrap.min.js')}}"></script>
<script src="{{secure_asset('assets/js/plugins/fontawesome.js')}}"></script>
<script src="{{secure_asset('assets/js/plugins/aos.js')}}"></script>
<script src="{{secure_asset('assets/js/plugins/counter.js')}}"></script>
<script src="{{secure_asset('assets/js/plugins/sidebar.js')}}"></script>
<script src="{{secure_asset('assets/js/plugins/magnific-popup.js')}}"></script>
<script src="{{secure_asset('assets/js/plugins/owlcarousel.min.js')}}"></script>
<script src="{{secure_asset('assets/js/plugins/nice-select.js')}}"></script>
<script src="{{secure_asset('assets/js/plugins/waypoints.js')}}"></script>
<script src="{{secure_asset('assets/js/plugins/slick-slider.js')}}"></script>
<script src="{{secure_asset('assets/js/plugins/gsap.min.js')}}"></script>
<script src="{{secure_asset('assets/js/plugins/ScrollTrigger.min.js')}}"></script>
<script src="{{secure_asset('assets/js/plugins/Splitetext.js')}}"></script>
<script src="{{secure_asset('assets/js/plugins/SmoothScroll.js')}}"></script>
<script src="{{secure_asset('assets/js/plugins/parallax.js')}}"></script>
<script src="{{secure_asset('assets/js/main.js')}}"></script>



<script>
function openMail() {
    const gmailUrl =
    "https://mail.google.com/mail/?view=cm&fs=1" +
    "&to=contact.ashik8490@gmail.com" +
    "&su=Basic%20Inquiry" +
    "&body=Hello%0D%0A";

    const mailtoUrl =
    "mailto:contact.ashik8490@gmail.com" +
    "?subject=Basic%20Inquiry" +
    "&body=Hello%0D%0A";

    // Try Gmail first
    const win = window.open(gmailUrl, "_blank");

    // If popup blocked or Gmail not usable → fallback
    setTimeout(() => {
        if (!win || win.closed) {
            window.location.href = mailtoUrl;
        }
    }, 500);
}
</script>

@if(session('success'))
<script>
toastr.success("{{ session('success') }}", "Success!", {
    closeButton: true,
    progressBar: true,
    timeOut: 5000
});
</script>
@endif



</body>
