
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./assets/images/1x/favicon.png">
    <title>DesignprosUSA</title>
    <link rel="stylesheet" href="./assets/pages/css/main.css">
    <link rel="stylesheet" href="./assets/CDN/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="./assets/CDN/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/CDN/swiper.css">
    <link rel="stylesheet" href="text-effect.css">
    <script src="./assets/CDN/jquerry.js"></script>
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        section.parallax-background-section {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }

        .nine-section.img-div.nomove6.position-relative {
            height: 110vh;
            }

        .img-div-size {
            height: 100vh;
        }

        .pbe-1 {
            background: url(https://images.unsplash.com/photo-1640270914397-2103d0a16eeb?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MTcwNTk2MQ&ixlib=rb-1.2.1&q=85);
        }

        .pbe-2 {
            background: url(https://images.unsplash.com/photo-1641273272565-c779149efd6d?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MTcwNjAzMg&ixlib=rb-1.2.1&q=85);
        }

        .pbe-3 {
            background: url(https://images.unsplash.com/photo-1640270914397-2103d0a16eeb?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MTcwNTk2MQ&ixlib=rb-1.2.1&q=85);
        }

        .pbe-4 {
            background: url(https://images.unsplash.com/photo-1641273272565-c779149efd6d?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MTcwNjAzMg&ixlib=rb-1.2.1&q=85);
        }

        .parallax-background-element {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            z-index: -1;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }


        .activeTab {
            background: #121FCF;
            background: linear-gradient(to right, #1c75bc 11%, #da1c5c 32%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-family: SFUIText-Bold !important;
            font-size: 52px;
        }
    </style>
</head>

<body>
    <div class="main-div">
        <div class="navigation lg-screen-navbar">
            <nav class="navbar navbar-expand-lg color" id="navbarHeader">
                <div class="container">
                    <a class="navbar-brand" href="../../index.php">
                        <div class="d-flex align-items-center">
                            <div class="logoImage">
                                <img src="./assets/images/1x/Logo.png" alt="" />
                            </div>
                        </div>
                    </a>
                    <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fa fa-bars nav-fonts" aria-hidden="true"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" id="home" aria-current="page" href="./index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="about" href="./assets/pages/aboutus.php">About Us</a>
                            </li>
                            <li class="nav-item dropdown" id="myDropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./assets/pages/content-write.php">Content Writing</a></li>
                                    <li><a class="dropdown-item" href="./assets/pages/ecommerce.php">Ecommerce</a></li>
                                    <li><a class="dropdown-item" href="./assets/pages/businessTrading.php">Business Treading</a></li>
                                    <li><a class="dropdown-item" href="./assets/pages/digital-marketing.php">Digital Marketing</a></li>
                                    <li><a class="dropdown-item" href="./assets/pages/digital-services.php">Digital Services</a></li>
                                    <li><a class="dropdown-item" href="./assets/pages/media.php">Social Media Marketing</a></li>
                                    <li><a class="dropdown-item" href="./assets/pages/mvp-dev.php">MVP Development</a></li>
                                    <li> <a class="dropdown-item" href="javascrip:void(0)"> App Development &raquo; </a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item" href="./assets/pages/app-development-android.php">Android Application</a></li>
                                            <li><a class="dropdown-item" href="./assets/pages/app-development-cross.php">Cross Platform Application</a></li>
                                            <li><a class="dropdown-item" href="./assets/pages/app-development-desktop.php">Desktop Application</a></li>
                                            <li><a class="dropdown-item" href="./assets/pages/app-development-react.php">React Application</a></li>
                                            <li><a class="dropdown-item" href="./assets/pages/flutter.php">Flutter Application</a></li>
                                            <li><a class="dropdown-item" href="./assets/pages/native.php">Native Application</a></li>
                                            <li><a class="dropdown-item" href="./assets/pages/web-app.php">Web Application</a></li>
                                        </ul>
                                    </li>
                                    <li> <a class="dropdown-item" href="javascrip:void(0)"> Animation & Designing &raquo; </a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item" href="./assets/pages/Cstm-g-design.php">Custom Graphic Design</a></li>
                                            <li><a class="dropdown-item" href="./assets/pages/logo-design.php">Logo Design</a></li>
                                            <li><a class="dropdown-item" href="./assets/pages/vedio-ani.php">Video Animation</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="home" aria-current="page" href="./assets/pages/portfolio.php">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="home" aria-current="page" href="./assets/pages/testimonials.php">Testimonials</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="home" aria-current="page" href="./assets/pages/blogs.php">Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact" href="./assets/pages/contactUs.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Side navbar START -->
      <!-- ================================== SIDE NAVBAR ON MOBILE SCREENS =============================== -->
      <header class="mobile-screen-nav fixed-top">
        <div id="main-content"></div>
        <div id="btn">
          <div id="top"></div>
          <div id="middle"></div>
          <div id="bottom"></div>
        </div>
        <div id="box">
          <div id="logo-container mx-auto">
            <a class="navbar-brand" href="./index.php">
                <img src="./assets/images/1x/Logo.png" alt="logo-image">
            </a>
          </div>
  
          <div id="items">
            <div class="item">
              <a
                class="nav-link active"
                aria-current="page"
                href="../../index.php"
                >Home</a
              >
            </div>
            <div class="item">
              <a class="nav-link" href="./assets/pages/aboutus.php">About Us</a>
            </div>
            <!-- <div class="dropdown"> -->
              <button class="dropbtn dropbtn1  paddLi">Services &raquo;</button>
              <div id="myDropdown" class="dropdown-content dropdown-content1 dopMenupadd">
                <a href="./assets/pages/content-write.php" class="link-dark rounded"
                  >Content Writing</a
                >
                <a href="./assets/pages/ecommerce.php" class="link-dark rounded">Ecommerce</a>
                <a href="./assets/pages/businessTrading.php" class="link-dark rounded"
                  >Business Trading</a
                >
                <a class="link-dark rounded" href="./assets/pages/crm-dev.php"
                  >CRM Development</a
                >
                <a class="link-dark rounded" href="./assets/pages/digital-marketing.php"
                  >Digital Marketing</a
                >
                <a class="link-dark rounded" href="./assets/pages/digital-services.php"
                  >Digital Services</a
                >
                <a class="link-dark rounded" href="./assets/pages/media.php"
                  >Social Media Marketing</a
                >
                <a class="link-dark rounded" href="./assets/pages/social-media.php"
                  >Social Media Management</a
                >
                <a class="link-dark rounded" href="./assets/pages/seo-agency.php"
                  >SEO Agency</a
                >
                <a class="link-dark rounded" href="./assets/pages/mvp-dev.php"
                  >MVP Development</a
                >
                <!-- ---Apps--- -->
                <button class="dropbtn dropbtn2">
                  App Development &raquo;
                </button>
                <div id="myDropdown" class="dropdown-content dropdown-content2">
                  <a
                    class="link-dark rounded"
                    href="./assets/pages/app-development-android.php"
                    >Android Application</a
                  >
                  <a class="link-dark rounded" href="./assets/pages/app-development-cross.php"
                    >Cross Platform Application</a
                  >
                  <a
                    class="link-dark rounded"
                    href="./assets/pages/app-development-desktop.php"
                    >Desktop Application</a
                  >
                  <a class="link-dark rounded" href="./assets/pages/app-development-react.php"
                    >React Application</a
                  >
                  <a class="link-dark rounded" href="./assets/pages/flutter.php"
                    >Flutter Application</a
                  >
                  <a class="link-dark rounded" href="./assets/pages/native.php"
                    >Native Application</a
                  >
                  <a class="link-dark rounded" href="./assets/pages/web-app.php"
                    >Web Application</a
                  >
                </div>
                <button class="dropbtn dropbtn3">Animations and Designs &raquo;
                </button>
                <div id="myDropdown" class="dropdown-content dropdown-content3">
                  <a class="link-dark rounded" href="./assets/pages/Cstm-g-design.php"
                    >Custom Graphic Design</a
                  >
                  <a class="link-dark rounded" href="./assets/pages/logo-design.php"
                    >Logo Design</a
                  >
                  <a class="link-dark rounded" href="./assets/pages/vedio-ani.php"
                    >Video Animation</a
                  >
                  <a class="link-dark rounded" href="./assets/pages/animated-video.php"
                    >Animated Video</a
                  >
                  <a class="link-dark rounded" href="./assets/pages/graphic-design.php"
                    >Graphic Design</a
                  >
                </div>
              </div>
            <!-- </div> -->
            <div class="item">
              <a class="nav-link" href="./assets/pages/portfolio.php">Portfolio</a>
            </div>
            <div class="item">
              <a class="nav-link" href="./assets/pages/testimonials.php">Testimonials</a>
            </div>
            <div class="item">
              <a class="nav-link" href="./assets/pages/blogs.php">Blogs</a>
            </div>
            <div class="item">
              <a class="nav-link" href="./assets/pages/contactUs.php">Contact Us</a>
            </div>
          </div>
        </div>
      </header>
    </div>

    <!-- Side navbar END -->
    <div class="scrollbar-container" data-scrollbar style="overflow: hidden; height: 100vh;" id="main-scrollbar">
        <!-- Head navbar  START-->
        <section class="img-div1 img-div position-relative">
            <header class="headerImage" id="gradient">
                <div class="first-section-content text-center">
                    <div class="power d-flex align-items-center d-flex flex-row align-items-center justify-content-center">
                        <h1>Digital</h1>
                        <div class="wrapper">
                            <p class="Powerhouse">Powerhouse</p>
                        </div>
                    </div>
                    <p>We Create Digital Success Stories, Not Just Digital Products</p>
                    <a href=""><button class="main-transparnet">CONTACT US</button></a>
                </div>
            </header>
        </section>
        <!-- Head navbar  ENd-->
        <section class="parallax-background-section">
            <div class="parallax-background-element pbe-1">
                <section class="second-section">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="second-sec-right-content">
                                    <span>INTRODUCTION</span>
                                    <h1>Creating <br> Technological <br> Solutions </h1>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="second-section-content">
                                    <p>
                                        Design Pros USA is a digital powerhouse with a proven track record of
                                        success in
                                        graphic
                                        design, marketing, and app development. At Design Pros USA, we are committed
                                        to
                                        providing you with creative design solutions tailored to your specific
                                        needs—whether
                                        it's a logo, website, app, or marketing.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <section>

            <div class="core-services">

                <div class="services d-flex justify-content-between">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="third-section-content mt2">
                                    <h1>Core Services</h1>
                                    <p>We are a Digital Powerhouse that guarantees <br>
                                        you generate more of all three.</p>
                                </div>
                                <div class="tabs-div mt3">
                                    <div class="tabs-div">
                                        <div class="tab">
                                            <button id="activeHover" class="tablinks tabs-content btns"
                                                onmouseover="openCity(event, 'London');toggleVisibility('Menu1');">
                                                <h2 id="firstActive">Website Development</h2>
                                            </button>
                                        </div>
                                        <div class="tabcontent show" id="Menu1">
                                            <p>From idea to reality, we can create fully functional
                                                <br> apps for your business.
                                            </p>
                                            <div class="tabs-inner-btns">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <button>Web Apps</button>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <button>CMS Website</button>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <button>eCommerce Solutions</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabs-div">
                                        <div class="tab">
                                            <button class="tablinks tabs-content btns2"
                                                onmouseover="openCity(event, 'Paris');toggleVisibility('Menu2')">
                                                <h2>App Development</h2>
                                            </button>

                                        </div>
                                        <div class="tabcontent" id="Menu2">
                                            <p>From idea to reality, we can create fully functional
                                                <br> apps for your business.
                                            </p>
                                            <div class="tabs-inner-btns">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <button>iOS App Development</button>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <button>Android App Development</button>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <button>Flutter App Development</button>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <button>React App Development</button>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <button>Cross Platform App</button>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <button>Native Apps</button>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <button>Web Apps</button>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <button>Desktop Apps</button>
                                                    </div>

                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabs-div">
                                        <div class="tab">
                                            <button class="tablinks tabs-content btns3"
                                                onmouseover="openCity(event, 'Tokyo');toggleVisibility('Menu3');">
                                                <h2>Animation and Designing</h2>
                                            </button>
                                        </div>
                                        <div class="tabcontent" id="Menu3">
                                            <p>From idea to reality, we can create fully functional
                                                <br> apps for your business.
                                            </p>
                                            <div class="tabs-inner-btns">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <button>Logo Design</button>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <button>Graphic Design</button>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <button>Custom Graphic Design</button>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <button>Video Editing</button>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <button>Animated Video</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabs-div">
                                        <div class="tab">
                                            <button class="tablinks tabs-content btns4"
                                                onmouseover="openCity(event, 'india');toggleVisibility('Menu4');"
                                                onclick="">
                                                <h2>Digital Marketing</h2>
                                            </button>
                                        </div>
                                        <div class="tabcontent htm" id="Menu4">
                                            <p>From idea to reality, we can create fully functional
                                                <br> apps for your business.
                                            </p>
                                            <div class="tabs-inner-btns">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <button>Social Media Management</button>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <button>Social Media Marketing</button>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <button>SEO Services</button>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <button>Content Development</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="third-back-sect">
                                    <div id="London" class="site-content show tabcontent2 Create1">
                                        <h1>Website Development</h1>
                                        <p>From idea to reality, we can create fully functional
                                            apps for your business. </p>
                                        <div class="site-img mt9 site-img1">
                                            <img src="./assets/images/1x/web dev1.png" alt="">
                                        </div>
                                    </div>
                                    <div id="Paris" class="site-content tabcontent2 Create2">
                                        <h1>App Development</h1>
                                        <p>From idea to reality, we can create fully functional
                                            apps for your business. </p>
                                        <div class="site-img mt9 site-img2">
                                            <img src="./assets/images/1x/app-mockup.png" alt="">
                                        </div>
                                    </div>
                                    <div id="Tokyo" class="site-content tabcontent2 Create3">
                                        <h1>Animation and Designing</h1>
                                        <p>From idea to reality, we can create fully functional
                                            apps for your business. </p>
                                        <div class="site-img mt9 site-img3">
                                            <img src="./assets/images/1x/animation.png" alt="">
                                        </div>
                                    </div>
                                    <div id="india" class="site-content tabcontent2 Create4">
                                        <h1>Digital Marketing</h1>
                                        <p>From idea to reality, we can create fully functional
                                            apps for your business. </p>
                                        <div class="site-img mt9 site-img4">
                                            <img src="./assets/images/1x/digital marketing.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <section class="fourth-section img-div2 mt-5 nomove img-div1">
            <div class="process-flow position-relative">
                <div class="container">
                    <div class="blur-text position-absolute">
                        <h1 class="h-1">Process Flow</h1>
                    </div>
                    <!-- Swiper -->
                    <div class="swiper mySwiper s2 position-relative" data-id="s2">
    
                        <div id='testiSwiper' class="swiper-wrapper">
                            <div class="swiper-slide slide1">
                                <div class="container">
                                    <div class="row mt2 align-items-center">
                                        <div class="col-lg-6">
                                            <div class="text-effect">
                                                <!-- Select the text in the preview and type in your own -->
                                                <h1 class="neon" data-text="01" contenteditable>01</h1>
                                                <div class="gradient"></div>
                                                <div class="spotlight"></div>
                                            </div>
                                            <div class="ball-img">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="ball-section-content">
                                                <h1 class="">Idea</h1>
                                                <p class="mt1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                                    sed
                                                    diam
                                                    nonummy nibh
                                                    euismod
                                                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                                    enim ad
                                                    minim
                                                    veniam,
                                                    quis
                                                    nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                                                    ex
                                                    ea commodo
                                                    consequat.
                                                </p>
                                            </div>
                                        </div>
    
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide2">
                                <div class="container">
                                    <div class="row mt2 align-items-center">
                                        <div class="col-lg-6">
                                            <div class="text-effect">
                                                <!-- Select the text in the preview and type in your own -->
                                                <h1 class="neon" data-text="02" contenteditable>02</h1>
                                                <div class="gradient"></div>
                                                <div class="spotlight"></div>
                                            </div>
                                            <div class="ball-img">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="ball-section-content">
                                                <h1>Idea</h1>
                                                <p class="mt1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                                    sed
                                                    diam
                                                    nonummy nibh
                                                    euismod
                                                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                                    enim ad
                                                    minim
                                                    veniam,
                                                    quis
                                                    nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                                                    ex
                                                    ea commodo
                                                    consequat.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide3">
                                <div class="container">
                                    <div class="row mt2 align-items-center">
                                        <div class="col-lg-6">
                                            <div class="text-effect">
                                                <!-- Select the text in the preview and type in your own -->
                                                <h1 class="neon" data-text="03" contenteditable>03</h1>
                                                <div class="gradient"></div>
                                                <div class="spotlight"></div>
                                            </div>
                                            <div class="ball-img">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="ball-section-content">
                                                <h1>Idea</h1>
                                                <p class="mt1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                                    sed
                                                    diam
                                                    nonummy nibh
                                                    euismod
                                                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                                    enim ad
                                                    minim
                                                    veniam,
                                                    quis
                                                    nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                                                    ex
                                                    ea commodo
                                                    consequat.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide4">
                                <div class="container">
                                    <div class="row mt2 align-items-center">
                                        <div class="col-lg-6">
                                            <div class="text-effect">
                                                <!-- Select the text in the preview and type in your own -->
                                                <h1 class="neon" data-text="04" contenteditable>04</h1>
                                                <div class="gradient"></div>
                                                <div class="spotlight"></div>
                                            </div>
                                            <div class="ball-img">
                                             </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="ball-section-content">
                                                <h1>Idea</h1>
                                                <p class="mt1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                                    sed
                                                    diam
                                                    nonummy nibh
                                                    euismod
                                                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                                    enim ad
                                                    minim
                                                    veniam,
                                                    quis
                                                    nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                                                    ex
                                                    ea commodo
                                                    consequat.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
                            <div class="swiper-slide slide5">
                                <div class="container">
                                    <div class="row mt2 align-items-center">
                                        <div class="col-lg-6">
                                            <div class="text-effect">
                                                <!-- Select the text in the preview and type in your own -->
                                                <h1 class="neon" data-text="05" contenteditable>05</h1>
                                                <div class="gradient"></div>
                                                <div class="spotlight"></div>
                                            </div>
                                            <div class="ball-img">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="ball-section-content">
                                                <h1>Idea</h1>
                                                <p class="mt1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                                    sed
                                                    diam
                                                    nonummy nibh
                                                    euismod
                                                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                                    enim ad
                                                    minim
                                                    veniam,
                                                    quis
                                                    nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                                                    ex
                                                    ea commodo
                                                    consequat.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide slide6">
                                <div class="container">
                                    <div class="row mt2 align-items-center">
                                        <div class="col-lg-6">
                                            <div class="text-effect">
                                                <!-- Select the text in the preview and type in your own -->
                                                <h1 class="neon" data-text="06" contenteditable>06</h1>
                                                <div class="gradient"></div>
                                                <div class="spotlight"></div>
                                            </div>
                                            <div class="ball-img"></div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="ball-section-content">
                                                <h1>Idea</h1>
                                                <p class="mt1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                                    sed
                                                    diam
                                                    nonummy nibh
                                                    euismod
                                                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                                    enim ad
                                                    minim
                                                    veniam,
                                                    quis
                                                    nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                                                    ex
                                                    ea commodo
                                                    consequat.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                        <!-- navigation buttons -->
                        <div id="nextBut" class="swiper-button-next"></div>
                        <div id="prevBut" class="swiper-button-prev"></div>
                    </div>
    
                </div>
            </div>
           

        </section>
        <section>
            <div class="sales">
                <div class="tech-circle5 position-relative">
                    <div class="container">
                        <div class="d-flex justify-content-center getmore-btn">
                            <a href="">
                                <button type="button" class="btn">
                                    GET MORE
                                </button>
                            </a>
                        </div>
                        <div class="scroll-container1">
                            <div class="head1 text-center ">
                                <span class="tag tag1 h-1">Sales</span><br />
                                <span class="tag tag2 h-1">Leads</span><br />
                                <span class="tag tag3 h-1 back-white nomovo">Revenue</span><br />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- ================================== PORTFOLIO =============================== -->
        <section class="nomove1">
            <div class="tech-circle6 position-relative ">

                <div class="portfolio">
                    <div class="container">
                        <div class="blur-text position-absolute mt-5">
                            <h1 class="h-1 nomovo portofolio">Portfolio</h1>
                        </div>
                        <div class="text-center content1">
                            <span>Portfolio</span>
                            <p class="p1">Branding Is at the Core of Everything We Do. Experience Holistic Brand
                                Development With Us!
                            </p>
                        </div>
                    </div>
                    <!-- ================================== FILTER GALLERY =============================== -->

                    <div class="filter-gallery">
                        <div class="container ">
                            <div class="row">
                                <div class="d-flex justify-content-center">
                                    <div class="gallery_product col-lg-6 filter hdpe screen1">
                                        <div class="">
                                            <!-- <img src="./assets/images/ui1.png" class="img-responsive"> -->
                                        </div>
                                    </div>

                                    <div class="gallery_product col-lg-6 filter sprinkle screen2">
                                        <div class="">
                                            <!-- <img src="./assets/images/ui2.png" class="img-responsive"> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="gall-btns mt-5">
                                    <div align="center">

                                        <button class="btn btn-default filter-button active"
                                            data-filter="all">All</button>
                                        <button class="btn btn-default filter-button"
                                            data-filter="hdpe">Branding</button>
                                        <button class="btn btn-default filter-button" data-filter="sprinkle">Web &
                                            Development</button>
                                        <button class="btn btn-default filter-button"
                                            data-filter="spray">Animation</button>
                                        <button class="btn btn-default filter-button"
                                            data-filter="irrigation">Logo</button>
                                    </div>
                                    <br />
                                </div>
                                <div class="load-more text-center">
                                    <div class="">
                                        <div class="collapse" id="collapseExample">
                                            <h3 class="h-3 mt-3">Web Development</h3>
                                        </div>
                                    </div>
                                    <div class="show-more pb-4 from-left">
                                        <a class="btn type3" data-bs-toggle="collapse" href="#collapseExample"
                                            role="button" aria-expanded="false" aria-controls="collapseExample">
                                            LOAD MORE <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tech-circle7">
                </div>


            </div>
        </section>

        <section class="parallax-background-section nomove2">
            <div class="parallax-background-element nomovo">
                <section class="seven-section">
                    <div class="row">
                        <div class="col-lg-6 for-remove-padding">
                            <div class="black-frog-back-img">
                                <div class="black-frog-img">
                                    <img src="./assets/images/1x/black-img.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 position-relative">
                            <div class="black-frog-content">
                                <div class="for-content-position">
                                    <h1>33 Black Frog</h1>
                                    <p>Andre Ferguson (our client) wanted to honor his father(Eddie Ferguson) by
                                        getting
                                        a
                                        short
                                        high-quality animation video created about the life story of an ex-marine
                                        frogman
                                        who
                                        overcomes challenges while being an integral part of the US navy seals.</p>
                                    <!-- load more -->
                                    <div class="load-more">
                                        <div class="">
                                            <div class="collapse" id="collapseExample">
                                                <p class="h-3 mt-3">Realtors
                                                    register so they can find their preferred jobs.</p>
                                            </div>
                                        </div>
                                        <!-- load more button -->
                                        <div class="  show-more2 show-more pb-4">
                                            <a class="btn" data-bs-toggle="collapse" href="#collapseExample"
                                                role="button" aria-expanded="false" aria-controls="collapseExample">
                                                LOAD MORE <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                </section>
            </div>
        </section>
        <section class="parallax-background-section nomove3">
            <div class="parallax-background-element nomovo">
                <section class="seven-section">
                    <div class="row">
                        <div class="col-lg-6 position-relative">
                            <div class="black-frog-content for-2-position">
                                <div class="for-content-position">
                                    <h1>Clean to Close</h1>
                                    <p>The client wanted a portal to be created that would let Realtor's and
                                        Cleaner's
                                        dreams
                                        come true. This platform allows for ease of access on both sides, meaning
                                        whoever
                                        visits
                                        will find the house clean! The portal on the website should let cleaners and
                                        Realtors
                                        register so they can find their preferred jobs.</p>
                                    <!-- load more -->
                                    <div class="load-more">
                                        <div class="">
                                            <div class="collapse" id="collapseExample">
                                                <p class="h-3 mt-3">Realtors
                                                    register so they can find their preferred jobs.</p>
                                            </div>
                                        </div>
                                        <!-- load more button -->
                                        <div class="show-more pb-4 show-more2">
                                            <a class="btn" data-bs-toggle="collapse" href="#collapseExample"
                                                role="button" aria-expanded="false" aria-controls="collapseExample">
                                                LOAD MORE <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 for-remove-padding">
                            <div class="black-right-back-img">
                                <div class="black-right-img">
                                    <img src="./assets/images/1x/right-inner-img.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>


        <div class="col-lg-12 mt2 position-relative nomove4">
            <div class="view-more nomovo">
                <a href=""><button>VIEW MORE</button></a>
            </div>
        </div>
        <section class="eight-section mt6 img-div testimo position-relative nomove5">
            <div class="blur-text position-absolute mt-5">
                <h1 class="h-1 nomovo">Testimonials</h1>
            </div>
            <div class="nomovo">

                <div class="Testimonial-heading">
                    <h1>Testimonials</h1>
                </div>
            </div>
            <div class="swiper-main-div">
                <!-- SWIPER SLIDER -->
                <div class="container">
                    <div class="wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s">
                        <div class="our-clients">
                            <div
                                class="container nomovo position-relative our-clients d-flex flex-wrap justify-content-evenly">
                                <!-- Swiper -->
                                <div class="swiper mySwiper s1">
                                    <div class="swiper-wrapper">
                                        <!-- first row -->
                                        <div class="swiper-slide ">
                                            <div class="card text-center mt-3">
                                                <!-- <h5 class="card-title py-3">John Smith</h5> -->
                                                <div class="video-box-width">
                                                    <a href="javascript:void(0)" id="video1" class="popup-btn"
                                                        data-video="./assets/video/file2.mp4" data-bs-toggle="modal"
                                                        data-bs-target="#videoModal2">
                                                        <div class="video-box">
                                                            <video id="background-video"
                                                                class="position-relative myvideos" loop muted>
                                                                <source src="./assets/video/file2.mp4" type="video/mp4">
                                                            </video>
                                                            <div class="overlay">
                                                                <div class="play-font">
                                                                    <i class="fa fa-play" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Lorem ipsum dolor sit amet, consectetuer
                                                                        adipiscing elit, sed
                                                                        diam nonummy nibh euismod </p>
                                                                    <h1>
                                                                        John Smith
                                                                    </h1>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>


                                        <!-- second card -->
                                        <div class="swiper-slide">
                                            <div class="card text-center mt-3">
                                                <!-- <h5 class="card-title py-3">John Smith</h5> -->
                                                <div class="video-box-width">
                                                    <a href="javascript:void(0)" id="video1" class="popup-btn"
                                                        data-video="./assets/video/file.mp4" data-bs-toggle="modal"
                                                        data-bs-target="#videoModal">
                                                        <div class="video-box">
                                                            <video id="background-video"
                                                                class="position-relative myvideos" loop muted>
                                                                <source src="./assets/video/file.mp4" type="video/mp4">
                                                            </video>
                                                            <div class="overlay">
                                                                <div class="play-font">
                                                                    <i class="fa fa-play" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Lorem ipsum dolor sit amet, consectetuer
                                                                        adipiscing elit, sed
                                                                        diam nonummy nibh euismod </p>
                                                                    <h1>
                                                                        John Smith
                                                                    </h1>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>


                                        <!-- third card -->
                                        <div class="swiper-slide">
                                            <div class="card text-center mt-3">
                                                <!-- <h5 class="card-title py-3">John Smith</h5> -->
                                                <div class="video-box-width">
                                                    <a href="javascript:void(0)" id="video1"
                                                        class="popup-btn containers"
                                                        data-video="./assets/file2.mp4" data-bs-toggle="modal"
                                                        data-bs-target="#videoModal3">
                                                        <div class="video-box">
                                                            <video id="background-video"
                                                                class="position-relative myvideos" loop muted>
                                                                <source src="./assets/video/file2.mp4" type="video/mp4">
                                                            </video>
                                                            <div class="overlay">
                                                                <div class="play-font">
                                                                    <i class="fa fa-play" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Lorem ipsum dolor sit amet, consectetuer
                                                                        adipiscing elit, sed
                                                                        diam nonummy nibh euismod </p>
                                                                    <h1>
                                                                        John Smith
                                                                    </h1>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>

                                        <!-- first row -->
                                        <div class="swiper-slide">
                                            <div class="card text-center mt-3">
                                                <!-- <h5 class="card-title py-3">John Smith</h5> -->
                                                <div class="video-box-width">
                                                    <a href="javascript:void(0)" id="video1" class="popup-btn"
                                                        data-video="./assets/video/file2.mp4" data-bs-toggle="modal"
                                                        data-bs-target="#videoModal2">
                                                        <div class="video-box">
                                                            <video id="background-video"
                                                                class="position-relative myvideos" loop muted>
                                                                <source src="./assets/video/file2.mp4" type="video/mp4">
                                                            </video>
                                                            <div class="overlay">
                                                                <div class="play-font">
                                                                    <i class="fa fa-play" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Lorem ipsum dolor sit amet, consectetuer
                                                                        adipiscing elit, sed
                                                                        diam nonummy nibh euismod </p>
                                                                    <h1>
                                                                        John Smith
                                                                    </h1>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>


                                        <!-- second card -->
                                        <div class="swiper-slide">
                                            <div class="card text-center mt-3">
                                                <div class="video-box-width">
                                                    <a href="javascript:void(0)" id="video1" class="popup-btn"
                                                        data-video="./assets/video/file.mp4" data-bs-toggle="modal"
                                                        data-bs-target="#videoModal">
                                                        <div class="video-box">
                                                            <video id="background-video"
                                                                class="position-relative myvideos" loop muted>
                                                                <source src="./assets/video/file.mp4" type="video/mp4">
                                                            </video>
                                                            <div class="overlay">
                                                                <div class="play-font">
                                                                    <i class="fa fa-play" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Lorem ipsum dolor sit amet, consectetuer
                                                                        adipiscing elit, sed
                                                                        diam nonummy nibh euismod </p>
                                                                    <h1>
                                                                        John Smith
                                                                    </h1>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>


                                        <!-- third card -->
                                        <div class="swiper-slide">
                                            <div class="card text-center mt-3">
                                                <div class="video-box-width">
                                                    <a href="javascript:void(0)" id="video1"
                                                        class="popup-btn containers"
                                                        data-video="./assets/file2.mp4" data-bs-toggle="modal"
                                                        data-bs-target="#videoModal3">
                                                        <div class="video-box">
                                                            <video id="background-video"
                                                                class="position-relative myvideos" loop muted>
                                                                <source src="./assets/video/file2.mp4"
                                                                    type="video/mp4">
                                                            </video>
                                                            <div class="overlay">
                                                                <div class="play-font">
                                                                    <i class="fa fa-play" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Lorem ipsum dolor sit amet, consectetuer
                                                                        adipiscing elit, sed
                                                                        diam nonummy nibh euismod </p>
                                                                    <h1>
                                                                        John Smith
                                                                    </h1>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>


                                            </div>

                                        </div>
                                    </div>


                                </div>
                                <!-- navigation buttons -->
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="nine-section img-div nomove6 position-relative">
            <div class="container nomovo">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-heading mt2">
                            <h1>
                                WELL, <br>
                                ENOUGH <br>
                                CHITCHAT. <br>
                                LET’S GET TO <br>
                                WORK! <br>
                            </h1>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <input type="text" placeholder="Full Name">
                            <input type="email" placeholder="Email">
                            <input type="text" placeholder="Country">
                            <input type="text" placeholder="Contact No.">
                            <!-- <input type="text" placeholder="Service"> -->
                            <select name="cars" id="cars" aria-placeholder="Service">
                                <option selected disabled value="Service">Service</option>
                                <option value="Website Development">Website Development</option>
                                <option value="App Development">App Development</option>
                                <option value="Animation and Designing">Animation and Designing</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                            </select>
                            <textarea name="" placeholder="Message" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div>
                            <a href=""><button class="main-transparnet sendBtn">SEND</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header">
                <div id='containerCST'>
                    <canvas id="canvas">
                    </canvas>
                </div>
                <svg width="100%" height="55%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave">
                    <defs></defs>
                    <path id="feel-the-wave" d="" />
                </svg>
                <svg width="100%" height="55%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave">
                    <defs></defs>
                    <path id="feel-the-wave-two" d="" />
                </svg>
            </div>
        </section>


        <!--======================================= Footer ==========================================-->
        <section class="footer footer1">
            <div class="container pt-5 pb-5 footer-cont">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-image"><a href=""><img src="./assets/images/1x/footerlogo.png" alt=""></a>
                        </div>
                        <div class="d-flex justify-content-start footer-link">
                            <div class="p-2"><i class="fa-solid fa-phone p"></i></div>
                            <div class="p-2"><a href="tel:+18323186222" target="_blank">+18323186222</a></div>
                        </div>
                        <div class="d-flex justify-content-start footer-link">
                            <div class="p-2"><i class="fa-regular fa-envelope"></i></div>
                            <div class="p-2 "><a href="https://designprosusa.com/" class="text-lowercase"
                                    target="_blank">sales@designprosusa.com</a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start footer-link">
                            <div class="p-2"><i class="fa-solid fa-location-dot"></i></div>
                            <div class="p-2"><a href="https://g.page/363-North-Belt-3662?share" target="_blank">363
                                    North Sam Houston Parkway East Greater
                                    Greenpoint , Suite 1100 Houston TX,USA 77060</a></div>
                        </div>
                        <div class="d-flex justify-content-start footer-link">
                            <div class="p-2"></div>
                            <div class="p-2 get text-uppercase">Get Location</div>
                        </div>
                        <div class="d-flex justify-content-start footer-link">
                            <div class="p-2"></div>
                            <div class="p-2"><a href="https://g.page/363-North-Belt-3662?share" target="_blank"><img
                                        src="./assets/images/1x/location-pin.png" alt=""></a></div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <ul class="footer-link ">
                            <p class="footer-para">Pages</p>
                            <li><a href="./index.php">home</a></li>
                            <li><a href="./assets/pages/aboutus.php">about us </a></li>
                            <li><a href="./assets/pages/services.php">services</a></li>
                            <li><a href="./assets/pages/portfolio.php">portfolio</a></li>
                            <li><a href="./assets/pages/testimonials.php">testimonials</a></li>
                            <li><a href="./assets/pages/blogs.php">blogs</a></li>
                            <li><a href="./assets/pages/contactUs.php">contact us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <ul class="footer-services">
                            <p class="footer-para">services</p>
                            <li><a href="./assets/pages/web">website development</a></li>
                            <li><a href="./assets/pages/app">app development</a></li>
                            <li><a href="./assets/pages/animated-video.php">animation and designing</a></li>
                            <li><a href="./assets/pages/digital-marketing.php">digital marketing</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <ul class="footer-services">
                            <p class="footer-para">Social</p>
                            <div class="d-flex footer-icon socialIxon">
                                <div class="icons-div">
                                    <a href="javascript:void(0);">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </div>
                                <div class="icons-div">
                                    <a href="javascript:void(0);">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                                <div class="icons-div">
                                    <a href="javascript:void(0);">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </div>
                                <div class="icons-div">
                                    <a href="javascript:void(0);">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center ">
                            <a href="javascript:void(0);" target="_blank">
                                <span class="for-theme-link pt-3">
                                    @2022 82 digital LLC DBA Design Pros USA | All rights resvered. <span
                                        class="footer-span">&nbsp; Terms and Conditions | Privacy Policy</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <div class="cito ball"></div>

    </div>

    <section class="video-inner-modal-section">
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg  position-relative">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="button-position"> <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button></div>
                        <video controls width="100%">
                            <source src="./assets/video/file.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="videoModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <video controls width="100%">
                            <source src="./assets/video/file2.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="videoModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <video controls width="100%">
                            <source src="./assets/video/file2.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="./assets/CDN/swiper.js"></script>
    <script src="./assets/pages/js/three.js"></script>
    <script src="./assets/pages/js/particles.js"></script>
    <!-- stats.js lib -->
    <script src="./assets/pages/js/threeorg.js"></script>
    <script src="./assets/CDN/jquerry.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/gsap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/ScrollTrigger.js"></script>
    <script src="./assets/pages/js/tweenmax.js"></script>
    <script src="./assets/pages/js/smoothscrollbar.js"></script>
 
    <script src="./assets/pages/js/scrollTrigger.js"></script>
    <!-- wavify -->
    <script src="https://rawgit.com/peacepostman/wavify/master/wavify.js"></script>
    <script src="https://rawgit.com/peacepostman/wavify/master/jquery.wavify.js"></script>
    <script id="rendered-js">
        var wave1 = $('#feel-the-wave').wavify({
            height: 80,
            bones: 4,
            amplitude: 60,
            color: '#0000ff73',
            speed: .15
        });


        var wave2 = $('#feel-the-wave-two').wavify({
            height: 60,
            bones: 3,
            amplitude: 40,
            color: '#ff00006e',
            speed: .25
        });
    </script>

    <script src="./assets/pages/js/particle.js"></script>
    <script src="./assets/CDN/jquerry.js"></script>
    <script src="./assets/pages/js/text-effect.js"></script>

    <script src="./assets/CDN/bootstrap/js/bootstrap.min.js"></script>
    <script src="./assets/pages/js/fluid.js"></script>
    <script src="./assets/pages/js/main.js"></script>
    <script src="./assets/pages/js/demo.js"></script>

    <script>
        $(document).ready(function () {
            $("#btn").on('click',()=>{
                if ($("#box").hasClass("active")) {
                console.log("hello");
                $(".scrollbar-container").addClass('disabledScroll')
                setTimeout(() => {
                    $('.disabledScroll').removeClass('scrollbar-container');
                },500);
            }
            else{
                $('.disabledScroll').addClass('scrollbar-container');
                setTimeout(() => {
                    $(".scrollbar-container").removeClass('disabledScroll')
                }, 500);
            }
            })
            $(".Create1").show();
            $(".Create2").hide();
            $(".Create3").hide();
            $(".Create4").hide();
            $("#firstActive").addClass("activeTab")
        });
        $("#activeHover").hover(function () {
            $("#firstActive").removeClass("activeTab")
        })
        $(document).ready(function () {
            $("body").on("click", ".btns", function () {
                $(".Create1").show();
            });
            $("body").on("click", ".btns2", function () {
                $(".Create2").show();
            });
            $("body").on("click", ".btns3", function () {
                $(".Create3").show();
            });
            $("body").on("click", ".btns4", function () {
                $(".Create4").show();
            });
        });

        $(function () {
            $(".video").click(function () {
                var theModal = $(this).data("target"),
                    videoSRC = $(this).attr("data-video"),
                    videoSRCauto = videoSRC + "";
                $(theModal + ' source').attr('src', videoSRCauto);
                $(theModal + ' video').load();
                $(theModal + ' button.close').click(function () {
                    $(theModal + ' source').attr('src', videoSRC);
                });
            });
        });
    </script>
</body>

</html>