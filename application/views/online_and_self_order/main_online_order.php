<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $info->site_title; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>assets_online_order/images/<?php echo $info->favicon; ?>" rel="icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>assets_online_order/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets_online_order/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets_online_order/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets_online_order/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets_online_order/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets_online_order/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets_online_order/css/jquery-ui.min.css" rel="stylesheet">
  <script src="<?php echo base_url(); ?>assets/POS/sweetalert2/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/POS/sweetalert2/dist/sweetalert.min.css">
  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>assets_online_order/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious - v2.0.2
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .baseColorTxt,
    #hero h2 span,
    .section-title h2 span,
    .nav-menu a:hover, .nav-menu .active > a, .nav-menu li:hover > a,
    .specials .nav-link:hover,
    .events .event-item h3,
    .events .event-item ul i,
    .testimonials .testimonial-item .stars,
    .contact .info i,
    #footer h3,
    #topbar i{
      color: <?php echo $info->base_color; ?>;
    }
    .events .owl-dot.active,
    .testimonials .owl-dot.active{
      background-color: <?php echo $info->base_color; ?> !important;
    }

    .baseColorBG,
    .nav-menu .book-a-table a,
    .book-a-table .php-email-form button[type="submit"],
    .contact .php-email-form button[type="submit"],
    .contact .info:hover i,
    .back-to-top i{
      background-color: <?php echo $info->base_color; ?>;
    }
    #hero .btn-menu, #hero .btn-book,
    .menu #menu-flters li,
    .ccBox{
      border: 2px solid <?php echo $info->base_color; ?>;
    }
    .events .event-item .price span {
      border-bottom: 2px solid <?php echo $info->base_color; ?>;
    }
    #hero .btn-menu:hover, #hero .btn-book:hover,
    .why-us .box:hover,
    .menu #menu-flters li:hover, .menu #menu-flters li.filter-active{
      background-color: <?php echo $info->base_color; ?>;
    }
    .about .play-btn{
      background: radial-gradient(<?php echo $info->base_color; ?> 50%, rgba(255, 176, 59, 0.4) 52%);
    }
    .why-us .box span{
      color: <?php echo $info->base_color; ?>;
      opacity: 0.6;
    }
    .specials .nav-link.active {
      color: <?php echo $info->base_color; ?>;
      border-color: <?php echo $info->base_color; ?>;
    }
    .borderBtn{
      border: 2px solid <?php echo $info->base_color; ?>;
      background-color: white;
      color: #333;
      transition: all 0.4s;
    }
    .borderBtn:hover{
      background-color: <?php echo $info->base_color; ?>;
      color: white;
    }
    .form-control:focus {
      border-color: <?php echo $info->base_color; ?>;
      box-shadow: 0 0 0 0.2rem rgba(255, 176, 59, 0.56);
    }
    @media (max-width: 992px){
      .specials .nav-link.active {
        color: #fff;
        background: <?php echo $info->base_color; ?>;
      }
    }
.error-msg{
        display:none; 
        padding: 0px;
        margin-bottom: 0px;
        color: red;
    } 
    .form_group{
      margin-bottom: 1px;
    }
    .error-msg p{
        margin-bottom: 0px;
    }
    .scanqr{
      border: none;
      outline: none;
      border-radius: 4px;
      padding: 5px 11px;
      font-size: 14px;
      color: black;
      font-weight: lighter;
      margin-top: 0px;
      opacity: 1;
      transition: opacity 0.4s;
      border: 2px solid <?php echo $info->base_color; ?>;
    }
 

  </style>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container text-right">

      <div class="dropdown myaccount" style="display: inline-block !important;">
        <a href="javascript:void(0)" class="text-white d-inline-block" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="icofont-user"></i> My Account
        </a>
        <div class="dropdown-menu acc" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item showMyOrder" href="#">My Orders</a>
          <a class="dropdown-item showChangePass" href="#">Change Password</a>
          <a class="dropdown-item showChangeProfile" href="#">Change Profile</a>
          <a class="dropdown-item logout" href="#" id="logout">
            <i class="icofont-login"></i> Logout</a>
        </div>
      </div>
    
      <a href="javascript:void(0)" class="text-white mx-3  openLogin loginarea">
        <i class="icofont-login"></i> Login</a>
      <i class="icofont-phone"></i> <?php echo $info->phone_number; ?>
      <i class="icofont-envelope icofont-rotate-180"></i> <?php echo $info->email; ?>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <!--<h1 class="text-light"><a href="index.html"><span>Delicious</span></a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="#"><img src="<?php echo base_url(); ?>assets_online_order/images/<?php echo $info->logo; ?>" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#specials">Specials</a></li>
          <li><a href="#events">Events</a></li>
          <li><a href="#chefs">Chefs</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="book-a-table text-center"><a href="#book-a-table">Order</a></li>
          <li><a class="openCartSlide" href="#menu"><i style="font-size: 20px;" class="icofont-cart-alt"></i> 
            <?php echo $setting_info->currency; ?><span id="totalPrice">0</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(assets/img/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown"><span>Delicious</span> Restaurant</h2>
                <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <div>
                  <a href="#menu" class="btn-menu animated fadeInUp scrollto">Order</a>
                  <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">book a table</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background: url(assets/img/slide/slide-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown">Lorem Ipsum Dolor</h2>
                <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <div>
                  <a href="#menu" class="btn-menu animated fadeInUp scrollto">Order</a>
                  <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">book a table</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background: url(assets/img/slide/slide-3.jpg);">
            <div class="carousel-background"><img src="assets/img/slide/slide-3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown">Sequi ea ut et est quaerat</h2>
                <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <div>
                  <a href="#menu" class="btn-menu animated fadeInUp scrollto">Order</a>
                  <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">book a table</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("assets/img/about.jpg");'>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
              <p class="font-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Whu Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2>Why choose <span>Our Restaurant</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box">
              <span>01</span>
              <h4>Lorem Ipsum</h4>
              <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>02</span>
              <h4>Repellat Nihil</h4>
              <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>03</span>
              <h4> Ad ad velit qui</h4>
              <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Whu Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Check our tasty <span>Menu</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Show All</li>
              <?php foreach ($foodCategory as  $value) { ?>
              <li data-filter=".filter-<?php echo $value->id; ?>">
                <?php echo $value->category_name; ?></li>
              <?php } ?>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 form-group">
            <input name="name" class="form-control" id="search" placeholder="Name or Code or Category or VEG or BEV" type="text">
            <div class="validate"></div>
          </div>
          <div class="col-md-2 form-group">
            <button type="button" class="borderBtn scanqr">Scan QR</button>
          </div>
        </div>
        <?php if($info->delivery_enable_disable=='delivery_enable'){
            $delivery_charge=$info->delivery_charge;
          }else{
            $delivery_charge=0;
          }  ?>
          <input type="hidden" name="delivery_charge" id="delivery_charge" value="<?php echo $delivery_charge; ?>">

        <div class="row menu-container">
          <div class="category_items">
          <?php foreach ($foodMenus as $row1) {
          $taxper=0;
          $taxs=json_decode($row1->tax_information); 
           foreach ($taxs as  $trow) {
            $taxper=$taxper+$trow->tax_field_percentage;
            } 
          ?>
          <div class="col-lg-6 menu-item  filter-<?php echo $row1->category_id; ?>">
            <div class="menu-content">
              <a href="#" class="baseColorTxt"><?php echo "$row1->name"; ?></a>
              <span><?php echo $setting_info->currency; ?><?php echo $row1->sale_price; ?></span>
            </div>
            <div class="menu-ingredients">
              <?php echo $row1->description; ?>
            </div>
            <button type="button" class="borderBtn cartBtn" id="<?php echo $row1->id; ?>" value="<?php echo $row1->id; ?>">Add to Cart</button>
            <input type="hidden" id="price_<?php echo $row1->id; ?>" value="<?php echo $row1->sale_price; ?>">
            <input type="hidden" id="name_<?php echo $row1->id; ?>" value="<?php echo $row1->name; ?>">
            <input type="hidden" id="taxpercent_<?php echo $row1->id; ?>" value="<?php echo $taxper; ?>">
          </div>
          <?php } ?>
          </div>
          <div class="category_items2">
            
          </div>
        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container">

        <div class="section-title">
          <h2>Check our <span>Specials</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">Modi sit est</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-2">Unde praesentium sed</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-3">Pariatur explicabo vel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-4">Nostrum qui quasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Architecto ut aperiam autem id</h3>
                    <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-1.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Et blanditiis nemo veritatis excepturi</h3>
                    <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                    <p class="font-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                    <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-3.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                    <p class="font-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                    <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-4.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                    <p class="font-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container">

        <div class="section-title">
          <h2>Organize Your <span>Events</span> in our Restaurant</h2>
        </div>

        <div class="owl-carousel events-carousel">

          <div class="row event-item">
            <div class="col-lg-6">
              <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Birthday Parties</h3>
              <div class="price">
                <p><span>$189</span></p>
              </div>
              <p class="font-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur
              </p>
            </div>
          </div>

          <div class="row event-item">
            <div class="col-lg-6">
              <img src="assets/img/event-private.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Private Parties</h3>
              <div class="price">
                <p><span>$290</span></p>
              </div>
              <p class="font-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur
              </p>
            </div>
          </div>

          <div class="row event-item">
            <div class="col-lg-6">
              <img src="assets/img/event-custom.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Custom Parties</h3>
              <div class="price">
                <p><span>$99</span></p>
              </div>
              <p class="font-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>Book a <span>Table</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Some photos from <span>Our Restaurant</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container">

        <div class="section-title">
          <h2>Our Proffesional <span>Chefs</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Master Chef</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Patissier</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Cook</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <div class="stars">
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <div class="stars">
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <div class="stars">
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <div class="stars">
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <div class="stars">
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Contact</span> Us</h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>
      </div>

      <div class="container mt-5">
        <div class="info-wrap my-4">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p><?php echo "$outlet_information->address"; ?></p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0" style="padding: 0px">
              <i class="icofont-clock-time icofont-rotate-90"></i>
              <h4>Open Hours:</h4>
              <p><?php $opening_closing_time=json_decode($info->opening_closing_time); 
               foreach ($opening_closing_time as  $value) {
                  if($value->status==1)
                  echo "$value->date_name: $value->o_time - $value->c_time<br>";
                } ?>
              </p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <p><?php echo $info->email; ?></p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-phone"></i>
              <h4>Call:</h4>
              <p><?php echo $info->phone_number; ?></p>
            </div>
          </div>
        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


<input type="hidden" id="csrf_name_" value="<?php echo $this->security->get_csrf_token_name(); ?>">
<input type="hidden" id="csrf_value_" value="<?php echo $this->security->get_csrf_hash(); ?>">
  <!-- Open Add To Cart Right Sidebar -->
  <div id="rightSidebarForAddToCart">
    <div class="content">
      <form action="#" id="theForm">
      <input type="hidden" id="csrf_name_1" name="csrf_name_">
      <input type="hidden" id="csrf_value_1" name="csrf_value_">
      <div class="addProductMeter text-center text-white baseColorBG">
        <a href="javascript:void(0)" class="text-white closeRightSidebarForAddToCart2">
          <i class="icofont-circled-right"></i>
        </a>
        <h3>Your Cart</h3>
      </div>

      <button type="button" class="closeRightSidebarForAddToCart baseColorBG"></button>
      <div class="showCartItem">

        <div class="productCartView">
          <ul class="list-unstyled cartbody">
            <div class="total-cart"  style="padding: 5px;text-align: center;">
              <span>Your cart is empty!</span>
            </div>
          </ul>
          
        </div>

      </div>

      <div class="btn2Box">
        <div class="ccBox">
          <div class="totalChargeBox p-2 d-flex justify-content-between align-items-center">
            <p class="m-0">  Tax: <?php echo $setting_info->currency; ?><span class="TotalTax">0</span></p>
            <input type="hidden" name="TotalTax" id="TotalTax">
            <p class="totalOfResult m-0">
              Delivery Charge: <?php echo $setting_info->currency; ?><span class="totalCharge">0</span></p>
              <input type="hidden" name="totalCharge" id="totalCharge">
          </div>
          <div class="countAndTotal p-2 d-flex justify-content-between align-items-center">
            <p class="m-0 "> <i data-feather="shopping-cart"></i> <span class="totalitem">0</span> Item</p>
            <input type="hidden" name="totalitem" id="totalitem">
            <p class="totalOfResult m-0">Total : <?php echo $setting_info->currency; ?>
            <span class="totalVal">0</span></p>
            <input type="hidden" name="sub_total" id="sub_total">
            <input type="hidden" name="totalVal" id="totalVal">
            <input type="hidden" name="order_type" id="order_type">
          </div>
        </div>
        <button type="button" class="placeOrder borderBtn">Place Order</button>
      </div>
     </form>
    </div>
  </div>


  <!--Show right side cart slide -->
  <a href="javascript:void(0)" class="showCardSlide">
    <div class="baseColorBG">
      <i class="icofont-ui-cart"></i>
      <p class="totalAddCart">0 item</p>
    </div>
    <p class="baseColorTxt">$<span class="totalVal">0</span></p>
  </a>

  <!--Modal Overlay-->
  <div class="overlayModal"></div>

  <!--Add Item modal-->
  <div id="addProductShow" class="cModal">
    <div class="modalContainer">
      <header class="modalHeader d-flex justify-content-between">
        <h2 class="modalTitle addMenuName"></h2>
        <button type="button" class="closeModal closeLoginModal">
          <i class="icofont-close-line"></i>
        </button>
      </header>
      <div class="modalBody">

        <div class="b">
          <span class="editQuantityTxt">Quantity</span>
          <div class="editResultBox">
            <button type="button" class="addDecress borderBtn">
              <i class="icofont-minus"></i>
            </button>
            <span class="editResult" id="addMenuQty">1</span>
            <button type="button" class="borderBtn addIncress">
              <i class="icofont-plus"></i>
            </button>
          </div>
          <span class="editItemTotal"><?php echo $setting_info->currency; ?> 
          <span id="addMenuSubTotalPrice">0.00</span></span>
          <input type="hidden" name="addMenuUnitPrice" id="addMenuUnitPrice" value="0">
          <input type="hidden" name="addMenuId" id="addMenuId" value="0">
          <input type="hidden" name="addModifierTotalUnitPrice" id="addModifierTotalUnitPrice" value="0">
          <input type="hidden" name="addTaxPercent" id="addTaxPercent" value="0">
        </div>
       <div class="modifierid">
        <div class="b">
          <span>Modifiers</span>
          <span><?php echo $setting_info->currency; ?> <span id="addModifierTotalPrice">0.00</span></span>

        </div>
        <div class="b modifier_area">
          
        </div>
        </div>
        <p class="totalItemResult">Total <?php echo $setting_info->currency; ?> <span id="addTotal">400</span></p>

        <div class="form-group">
          <label for="note" class="col-form-label">Note:</label>
          <textarea  id="addNote" name="addNote"></textarea>
        </div>
      </div>
      <div class="modalFooter">
        <button type="button" class="cartBtn2 borderBtn p-2 cartProduct">Add to Cart</button>
        <button type="button" class="cartBtn2 borderBtn p-2 mx-2 closeModal2">Cancel</button>
      </div>
    </div>
  </div>

  <!--Edit Item-->
  <div id="editProductShow" class="cModal" >
    <div class="modalContainer">
      <header class="modalHeader d-flex justify-content-between">
        <h2 class="modalTitle editMenuName" >Edit </h2>
        <button type="button" class="closeModal closeLoginModal">
           <i class="icofont-close"></i>
        </button>
      </header>
      <div class="modalBody">

        <div class="b">
          <span class="editQuantityTxt">Quantity</span>
          <div class="editResultBox">
            <button type="button" class="editDecress borderBtn">
              <i class="icofont-minus"></i>
            </button>
            <span class="editResult"  id="editMenuQty">1</span>
            <button type="button" class="editIncress borderBtn">
              <i class="icofont-plus"></i>
            </button>
          </div>
          <span class="editItemTotal"><?php echo $setting_info->currency; ?>
          <span  id="editMenuSubTotalPrice"></span></span>
          <input type="hidden" name="rowid" id="rowid" value="0">
          <input type="hidden" name="editMenuUnitPrice" id="editMenuUnitPrice" value="0">
          <input type="hidden" name="editMenuId" id="editMenuId" value="0">
          <input type="hidden" name="editModifierTotalUnitPrice" id="editModifierTotalUnitPrice" value="0">
          <input type="hidden" name="editTaxPercent" id="editTaxPercent" value="0">
        </div>
        <div class="modifierid2">
        <div class="b">
          <span>Modifiers</span>
          <span><?php echo $setting_info->currency; ?> <span id="editModifierTotalPrice">0.00</span></span>
        </div>

        <div class="b modifier_area2">
          

        </div>
      </div>
        <p class="totalItemResult">Total <?php echo $setting_info->currency; ?>
        <span  id="editTotal">0.00</span></p>
        <div class="form-group">
          <label for="note2" class="col-form-label">Note:</label>
          <textarea  id="editNote" name="editNote"></textarea>
        </div>
      </div>
      <div class="modalFooter">
        <button type="button" class="borderBtn p-2 cartBtn2 cartProduct2">Add to Cart</button>
        <button type="button" class="borderBtn p-2 cartBtn2 mx-2 closeModal2">Cancel</button>
      </div>
    </div>
  </div>

  <!--login Form-->
  <div id="loginModal" class="cModal">
    <div class="modalContainer">
      <header class="modalHeader d-flex justify-content-between">
        <h2 class="modalTitle">Login</h2>
        <button type="button" class="closeModal closeLoginModal"><i class="icofont-close"></i></button>
      </header>
      <div class="modalBody">
        <form action="#" method="post" class="row">
          <div class="form-group col-sm-12">
            <label for="loginNumber" class="col-form-label">Phone Number <span class="redStar">*</span></label>
            <input type="text" class="form-control" id="loginNumber" name="lphone">
            <div class="alert alert-error error-msg customer_lphone_err_msg_contnr">
                <p class="customer_lphone_err_msg"></p>
            </div>
          </div>
          <div class="form-group col-sm-12">
            <label for="loginPass" class="col-form-label">Password <span class="redStar">*</span></label>
            <input type="password" class="form-control" id="loginPass" name="lpassword">
            <div class="alert alert-error error-msg customer_lpassword_err_msg_contnr">
                <p class="customer_lpassword_err_msg"></p>
            </div>
          </div>
          <div class="col-sm-12 d-flex justify-content-between align-items-center">
            <button type="button" class="cartBtn2 borderBtn py-2 px-5" id="loginForm">Login</button>
            <a href="javascript:void(0)" class="showSignUp baseColorTxt">Sign Up</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!--sign up form-->
  <div id="signUpModal" class="cModal">
    <div class="modalContainer">
      <header class="modalHeader d-flex justify-content-between">
        <h2 class="modalTitle">Sing Up</h2>
        <button type="button" class="closeModal closeSignupModal"><i class="icofont-close"></i></button>
      </header>
      <div class="modalBody">
        <form action="index.html" method="post" class="row">

          <div class="form-group col-sm-12">
            <label for="signUpName" class="col-form-label">Name <span class="redStar">*</span></label>
            <input type="text" class="form-control" id="signUpName" name="cname">
            <div class="alert alert-error error-msg customer_name_err_msg_contnr">
                <p class="customer_name_err_msg"></p>
            </div>
          </div>
          <div class="form-group col-sm-12">
            <label for="signUpNumber" class="col-form-label">Phone Number <span class="redStar">*</span></label>
            <input type="text" class="form-control" id="signUpNumber" name="cphone">
            <div class="alert alert-error error-msg customer_phone_err_msg_contnr" style="padding: 5px !important;">
                <p class="customer_phone_err_msg"></p>
            </div>
          </div>

          <div class="form-group col-sm-12">
            <label for="signUpPass" class="col-form-label">Password <span class="redStar">*</span></label>
            <input type="password" class="form-control" id="signUpPass" name="password">
            <div class="alert alert-error error-msg customer_password_err_msg_contnr" style="padding: 5px !important;">
                <p class="customer_password_err_msg"></p>
            </div>
          </div>

          <div class="form-group col-sm-12">
            <label for="signUpAddress" class="col-form-label">Address <span class="redStar">*</span></label>
            <textarea class="form-control" id="signUpAddress" name="address"></textarea>
            <div class="alert alert-error error-msg customer_address_err_msg_contnr" style="padding: 5px !important;">
                <p class="customer_address_err_msg"></p>
            </div>
          </div>

          <div class="col-sm-12 d-flex justify-content-between align-items-center">
            <button type="button" class="cartBtn2 borderBtn py-2 px-5" id="signup">
            Sign up</button>
            <a href="javascript:void(0)" class="showLoginM baseColorTxt">Login</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  
  <!-- Change Password Modal -->
  <div id="changePassModal" class="cModal">
    <div class="modalContainer">
      <header class="modalHeader d-flex justify-content-between">
        <h2 class="modalTitle">Change Password</h2>
        <button type="button" class="closeModal closeChangepassModal"><i class="icofont-close"></i></button>
      </header>
      <div class="modalBody">
        <form>
          <div class="form-group">
            <label for="oldPass" class="col-form-label">Old Password <span class="redStar">*</span></label>
            <input type="password" class="form-control" id="oldPass" name="oldpass">
            <div class="alert alert-error error-msg customer_oldpass_err_msg_contnr">
                <p class="customer_oldpass_err_msg"></p>
            </div>
          </div>
          <div class="form-group">
            <label for="newPass" class="col-form-label">New Password <span class="redStar">*</span></label>
            <input type="password" class="form-control" id="newPass" name="newpass">
            <div class="alert alert-error error-msg customer_newpass_err_msg_contnr">
                <p class="customer_newpass_err_msg"></p>
            </div>
          </div>
          <div class="form-group">
            <label for="confirmPass" class="col-form-label">Confirm Password <span class="redStar">*</span></label>
            <input type="password" class="form-control" id="confirmPass" name="confirmpass">
            <div class="alert alert-error error-msg customer_confirmpass_err_msg_contnr">
                <p class="customer_confirmpass_err_msg"></p>
            </div>
          </div>
        </form>
      </div>
      <div class="modalFooter">
        <button type="button" class="cartBtn2 borderBtn py-2 px-5" id="changepassword">Submit</button>
        <button type="button" class="cartBtn2 borderBtn py-2 px-5 closeModal2">Cancel</button>
      </div>
    </div>
  </div>
  <!--Change Profile form-->
  <div id="changeProfileModal" class="cModal">
    <div class="modalContainer">
      <header class="modalHeader d-flex justify-content-between">
        <h2 class="modalTitle">Change Profile</h2>
        <button type="button" class="closeModal closeProModal"><i class="icofont-close"></i></button>
      </header>
      <div class="modalBody">
        <form action="index.html" method="post" class="row">

          <div class="form-group col-sm-12">
            <label for="signUpName" class="col-form-label">Name <span class="redStar">*</span></label>
            <input type="text" class="form-control" id="changeProUpName" name="chname">
            <div class="alert alert-error error-msg customer_chname_err_msg_contnr">
                <p class="customer_chname_err_msg"></p>
            </div>
          </div>
          <div class="form-group col-sm-12">
            <label for="changeProNumber" class="col-form-label">Phone Number <span class="redStar">*</span></label>
            <input type="text" class="form-control" id="changeProNumber" name="chphone">
            <div class="alert alert-error error-msg customer_chphone_err_msg_contnr">
                <p class="customer_chphone_err_msg"></p>
            </div>
          </div>

          <div class="form-group col-sm-12">
            <label for="changeProAddress" class="col-form-label">Address <span class="redStar">*</span></label>
            <textarea class="form-control" id="changeProAddress" name="chaddress"></textarea>
            <div class="alert alert-error error-msg customer_chaddress_err_msg_contnr">
                <p class="customer_chaddress_err_msg"></p>
            </div>
          </div>

          <div class="col-sm-12 d-flex justify-content-between align-items-center">
            <button type="button" class="cartBtn2 borderBtn py-2 px-5" id="changeProfile">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- My Orders Modal -->
  <div id="myOrderModal" class="cModal">
    <div class="modalContainer">
      <header class="modalHeader d-flex justify-content-between">
        <h2 class="modalTitle">My Orders</h2>
        <button type="button" class="closeModal closeLoginModal"><i class="icofont-close"></i></button>
      </header>
      <div class="modalBody">
        <div class="table-responsive">
          <table class="table table-borderless table-hover" id="ordertable">
            <thead>
            <tr>
              <th scope="col">SN</th>
              <th scope="col">Order No</th>
              <th scope="col">Order Type</th>
              <th scope="col">Date</th>
              <th scope="col">Amount</th>
              <th scope="col">Status</th>
              <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            
            


            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- When CLick Place Order -->
  <div id="showplaceOrderModal" class="cModal">
    <div class="modalContainer">
      <header class="modalHeader d-flex justify-content-between">
        <h2 class="modalTitle">Choose Place Order Options</h2>
        <button type="button" class="closeModal closePlaceOrderModal"><i class="icofont-close"></i></button>
      </header>
      <div class="modalBody">
        <div class="row">
          <a href="#" class="col-sm-12 col-md-4 dineIn b" onclick="return placeOrder(1)">
            <div class="innerBox">
              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <g>
                  <g>
                    <g>
                      <path d="M460.626,149.395v155.21h-63.664v-51.413h24.124v-58.625H282.737v-79.111H263.5v-13.478l31.671-10.686l-4.795-14.213
                            L263.5,86.146V66.128l31.671-10.686l-4.795-14.213L263.5,50.297v-14.82l-38.013-14.362l-5.302,14.031L248.5,45.844v18.503
                            l-26.876-9.067l-4.795,14.213L248.5,80.177v35.278h-19.237v79.111H90.914v58.625h24.124v51.413H51.374v-155.21H0v196.387v10.197
                            v134.643h15v-54.408h138v54.408h15V355.979v-10.197v-14.635l18.425-2.39l46.095,5.801v141.327h-32.206v15h32.206h46.961h32.206
                            v-15H279.48V333.977l46.643-5.227L344,331.091v14.69v10.197v134.643h15v-54.408h138v54.408h15V355.979v-10.197V149.395H460.626z
                            M396.962,209.567h9.124v28.625h-9.124V209.567z M244.263,130.456h23.475v64.111h-23.475V130.456z M105.914,238.192v-28.625
                            h9.124v28.625H105.914z M153,421.214H15v-65.234h138V421.214z M153,340.979H15V164.395h21.374v140.21H27.87v15h8.504h7.5h71.164
                            v18.413L153,333.092V340.979z M264.481,475.885L264.481,475.885H247.52V336.445l4.683,0.589l12.278-1.376V475.885z
                            M333.104,314.536v-39.222h-15.001v0.001v39.241l-58.349,6.539v-69.11h-15v68.994l-50.844-6.398v-18.17h-15v18.195l-48.872,6.34
                            V210.122h99.225h53.475h99.225v110.814L333.104,314.536z M497,421.214H359v-65.234h138V421.214z M497,340.979H359v-7.923
                            l37.962,4.972v-18.423h71.164h7.5h8.504v-15h-8.504v-140.21H497V340.979z" />
                      <rect x="178.91" y="227.49" width="15" height="59.742" />
                      <rect x="318.1" y="227.49" width="15" height="36.412" />
                    </g>
                  </g>
                </g>
              </svg>
              <p>Dine In</p>
            </div>
          </a>
          <a href="#" class="col-sm-12 col-md-4 takeAway b" onclick="return placeOrder(2)">
            <div class="innerBox">
              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <g>
                  <g>
                    <path d="M175.843,208.407H127.75c-4.15,0-7.515,3.365-7.515,7.515c0,4.15,3.365,7.515,7.515,7.515h16.532v56.611
                      c0,4.15,3.365,7.515,7.515,7.515c4.15,0,7.515-3.365,7.515-7.515v-56.611h16.532c4.15,0,7.515-3.365,7.515-7.515
                      C183.358,211.772,179.994,208.407,175.843,208.407z"/>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M254.705,276.686l-32.063-64.125c-2.714-5.431-10.728-5.432-13.442,0l-32.063,64.125
                      c-1.857,3.712-0.352,8.226,3.361,10.082c3.712,1.857,8.225,0.352,10.082-3.361l9.946-19.893h30.79l9.946,19.893
                      c1.954,3.909,6.978,5.319,10.692,3.018C255.21,284.409,256.416,280.107,254.705,276.686z M208.041,248.485l7.88-15.76l7.88,15.76
                      H208.041z"/>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M182.565,372.874l-32.063-64.125c-2.714-5.431-10.728-5.432-13.442,0l-32.063,64.125
                      c-1.857,3.712-0.352,8.226,3.361,10.082c3.711,1.858,8.225,0.351,10.082-3.361l9.946-19.893h30.79l9.946,19.893
                      c1.954,3.909,6.978,5.319,10.692,3.018C183.07,380.596,184.275,376.295,182.565,372.874z M135.9,344.673l7.88-15.76l7.88,15.76
                      H135.9z"/>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M350.893,372.874l-32.063-64.125c-2.714-5.431-10.728-5.432-13.442,0l-32.063,64.125
                      c-1.857,3.712-0.352,8.226,3.361,10.082c3.713,1.858,8.226,0.351,10.082-3.361l9.946-19.893h30.79l9.946,19.893
                      c1.954,3.909,6.978,5.319,10.692,3.018C351.398,380.596,352.604,376.295,350.893,372.874z M304.229,344.673l7.88-15.76l7.88,15.76
                      H304.229z"/>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M316.804,274.179l-32.743-26.194l32.743-26.195c3.24-2.592,3.766-7.321,1.173-10.563s-7.323-3.767-10.563-1.173
                      l-27.868,22.297v-16.428c0-4.15-3.365-7.515-7.515-7.515s-7.515,3.365-7.515,7.515v64.125c0,4.15,3.365,7.515,7.515,7.515
                      s7.515-3.365,7.515-7.515v-16.428l27.869,22.296c3.461,2.768,8.703,1.872,11.06-1.873
                      C320.484,280.851,319.745,276.532,316.804,274.179z"/>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M384.25,272.532h-32.564v-17.033h24.548c4.15,0,7.515-3.365,7.515-7.515c0-4.15-3.365-7.515-7.515-7.515h-24.548v-17.033
                      h32.564c4.15,0,7.515-3.365,7.515-7.515c0-4.15-3.365-7.515-7.515-7.515h-40.078c-4.15,0-7.515,3.365-7.515,7.515v64.125
                      c0,4.15,3.365,7.515,7.515,7.515h40.078c4.15,0,7.515-3.365,7.515-7.515C391.765,275.897,388.401,272.532,384.25,272.532z"/>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M274.67,305.073c-3.887-1.458-8.217,0.512-9.675,4.398l-16.594,44.25l-9.319-27.957c-1.011-3.034-3.932-5.138-7.129-5.138
                      c-3.198,0-6.118,2.105-7.129,5.138l-9.319,27.957l-16.594-44.25c-1.437-3.833-5.841-5.835-9.675-4.398s-5.835,5.84-4.398,9.675
                      l24.048,64.125c1.106,2.95,4.025,4.944,7.175,4.875c3.148-0.069,5.992-2.143,6.991-5.137l8.902-26.707l8.902,26.707
                      c1.004,3.011,3.888,5.108,7.06,5.138c3.122,0.029,6.009-1.952,7.105-4.876l24.047-64.125
                      C280.526,310.862,278.556,306.531,274.67,305.073z"/>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M413.611,306.796c-2.935-2.935-7.693-2.935-10.627,0l-26.749,26.749l-26.749-26.749c-2.935-2.935-7.693-2.935-10.627,0
                      c-2.935,2.935-2.935,7.693,0,10.627l29.861,29.861v28.951c0,4.15,3.365,7.515,7.515,7.515c4.15,0,7.515-3.365,7.515-7.515v-28.951
                      l29.861-29.861C416.546,314.488,416.546,309.73,413.611,306.796z"/>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M504.485,40.078H263.515v-9.018h240.971c4.15,0,7.515-3.365,7.515-7.515c0-4.15-3.365-7.515-7.515-7.515H263.515V7.515
                      C263.515,3.365,260.15,0,256,0s-7.515,3.365-7.515,7.515v8.517H7.515C3.365,16.031,0,19.396,0,23.546
                      c0,4.15,3.365,7.515,7.515,7.515h240.971v9.018H7.515C3.365,40.078,0,43.443,0,47.593s3.365,7.515,7.515,7.515h240.971v20.143
                      L51.936,185.318c-2.373,1.33-3.843,3.836-3.843,6.557v312.611c0,4.15,3.365,7.515,7.515,7.515h136.266
                      c4.15,0,7.515-3.365,7.515-7.515v-80.658h113.221v80.658c0,4.15,3.365,7.515,7.515,7.515h136.266c4.15,0,7.515-3.365,7.515-7.515
                      V323.799c0-4.15-3.365-7.515-7.515-7.515c-4.15,0-7.515,3.365-7.515,7.515v173.171H327.64v-80.658c0-4.15-3.365-7.515-7.515-7.515
                      h-128.25c-4.15,0-7.515,3.365-7.515,7.515v80.658H63.123V196.279L248.485,92.477v28.67c-13.786,3.381-24.047,15.837-24.047,30.651
                      c0,17.403,14.159,31.562,31.562,31.562s31.562-14.159,31.562-31.562c0-14.814-10.261-27.269-24.047-30.651v-28.67l185.362,103.803
                      v92.118c0,4.15,3.365,7.515,7.515,7.515c4.15,0,7.515-3.365,7.515-7.515v-96.523c0-2.72-1.47-5.227-3.843-6.557L263.515,75.251
                      V55.108h240.971c4.15,0,7.515-3.365,7.515-7.515S508.635,40.078,504.485,40.078z M272.532,151.796
                      c0,9.116-7.417,16.532-16.532,16.532s-16.532-7.416-16.532-16.532c0-6.409,3.673-11.965,9.018-14.707v14.707
                      c0,4.15,3.365,7.515,7.515,7.515s7.515-3.365,7.515-7.515V137.09C268.859,139.831,272.532,145.388,272.532,151.796z"/>
                  </g>
                </g>
                </svg>
              <p>Take Away</p>
            </div>

          </a>
          <a href="#" class="col-sm-12 col-md-4 delivery b" onclick="return placeOrder(3)">
            <div class="innerBox">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                <g id="Outline">
                  <g id="Layer_5_copy_3" data-name="Layer 5 copy 3">
                    <g>
                      <path
                        d="M11,26h6a3,3,0,0,0,3-3V21.816a2.982,2.982,0,0,0,0-5.632V15a3,3,0,0,0-3-3H11a3,3,0,0,0-3,3v1.184a2.982,2.982,0,0,0,0,5.632V23A3,3,0,0,0,11,26Zm6-2H11a1,1,0,0,1-1-1V22h8v1A1,1,0,0,1,17,24ZM11,14h6a1,1,0,0,1,1,1v1H10V15A1,1,0,0,1,11,14ZM9,18h1a1,1,0,0,0,2,0h1a1,1,0,0,0,2,0h1a1,1,0,0,0,2,0h1a1,1,0,0,1,0,2H9a1,1,0,0,1,0-2Z" />
                      <path
                        d="M35,56H29a2,2,0,0,1-2-2V51H39.36a1,1,0,0,0,.972-.769,12.031,12.031,0,0,1,7.052-8.308A1,1,0,0,0,48,41V35a1,1,0,0,0-2,0v5.351A14.041,14.041,0,0,0,38.593,49H34V41a1,1,0,0,0-2,0v8H27V47a7.008,7.008,0,0,0-7-7,12.945,12.945,0,0,0-3.7.543A12.91,12.91,0,0,1,24,38H35a3,3,0,0,0,0-6H27a3,3,0,0,0-3,3,2.966,2.966,0,0,0,.184,1H24a15.016,15.016,0,0,0-4.013.556L18,35.42V34h2a3,3,0,0,0,3-3V30h2a1,1,0,0,0,1-1V22a1,1,0,0,0-2,0v6H4V13a3,3,0,0,1,3-3H21a3,3,0,0,1,3,3v5a1,1,0,0,0,2,0V13a5.006,5.006,0,0,0-5-5H7a5.006,5.006,0,0,0-5,5V29a1,1,0,0,0,1,1H5v1a3,3,0,0,0,3,3H9v3a1,1,0,0,0,.4.8l3.773,2.83a15.152,15.152,0,0,0-2.31,3.135A13.064,13.064,0,0,0,8.479,47H5a1,1,0,0,0,0,2H7.636a12.89,12.89,0,0,0-.585,3H3a1,1,0,0,0,0,2h7.086a6.79,6.79,0,0,0,2.024,6H8a1,1,0,0,0,0,2h9a7.008,7.008,0,0,0,7-7,6.931,6.931,0,0,0-.086-1H25a4,4,0,0,0,4,4h6a1,1,0,0,0,0-2ZM26,35a1,1,0,0,1,1-1h8a1,1,0,0,1,0,2H27A1,1,0,0,1,26,35ZM7,31V30H21v1a1,1,0,0,1-1,1H8A1,1,0,0,1,7,31Zm4,3h5v2a1,1,0,0,0,.5.868l1.051.6a14.99,14.99,0,0,0-2.877,1.79L11,36.5ZM22,55a5,5,0,0,1-10,0,4.827,4.827,0,0,1,.114-1h2.07A2.966,2.966,0,0,0,14,55a3,3,0,0,0,6,0,2.966,2.966,0,0,0-.184-1h2.07A4.827,4.827,0,0,1,22,55Zm-4,0a1,1,0,1,1-1-1A1,1,0,0,1,18,55ZM9.045,52A11.015,11.015,0,0,1,20,42a5.006,5.006,0,0,1,5,5v5Z" />
                      <path
                        d="M54.821,43.412,52.2,29H56a4,4,0,0,0,0-8H49a2.993,2.993,0,0,0-2.859,2.141A2.981,2.981,0,0,0,46,28.816V32a1,1,0,0,0,2,0V29h2.165l1.092,6H51a1,1,0,0,0,0,2h.621l.182,1H51a1,1,0,0,0,0,2h1.167l.553,3.036C52.481,43.019,52.243,43,52,43A10.011,10.011,0,0,0,42,53a1,1,0,0,0,1,1h4.818a17.107,17.107,0,0,1-8,2H39a1,1,0,0,0,0,2h.82a19.028,19.028,0,0,0,5.53-.841A6.99,6.99,0,0,0,47.128,60H40a1,1,0,0,0,0,2H52a7.008,7.008,0,0,0,7-7,6.931,6.931,0,0,0-.086-1H61a1,1,0,0,0,1-1A10.012,10.012,0,0,0,54.821,43.412ZM56,23a2,2,0,0,1,0,4Zm-7,0h5v4H49.816a2.943,2.943,0,0,0-1.529-3.7A1,1,0,0,1,49,23Zm-2,2a1,1,0,1,1-1,1A1,1,0,0,1,47,25Zm6,30a1,1,0,1,1-1-1A1,1,0,0,1,53,55Zm4,0a4.991,4.991,0,0,1-9.76,1.483,19.22,19.22,0,0,0,1.82-.886A3,3,0,0,0,55,55a2.966,2.966,0,0,0-.184-1h2.07A4.827,4.827,0,0,1,57,55ZM44.062,52a8,8,0,0,1,15.876,0Z" />
                      <path
                        d="M48.4,48.2a1,1,0,0,0,1.2,1.6,4.051,4.051,0,0,1,4.794,0,1,1,0,1,0,1.2-1.6A6.083,6.083,0,0,0,48.4,48.2Z" />
                      <circle cx="29" cy="41" r="1" />
                      <circle cx="29" cy="44" r="1" />
                      <path d="M20,44H18a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Z" />
                      <path d="M20,48H16a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Z" />
                      <path d="M42,22a1,1,0,0,0-1-1H32a1,1,0,0,0,0,2h9A1,1,0,0,0,42,22Z" />
                      <path d="M35,17a1,1,0,0,0,1,1H46a1,1,0,0,0,0-2H36A1,1,0,0,0,35,17Z" />
                      <path d="M31,13h8a1,1,0,0,0,0-2H31a1,1,0,0,0,0,2Z" />
                      <path d="M40,28a1,1,0,0,0-1-1H34a1,1,0,0,0,0,2h5A1,1,0,0,0,40,28Z" />
                      <path d="M9,57a1,1,0,0,0-1-1H5a1,1,0,0,0,0,2H8A1,1,0,0,0,9,57Z" />
                      <path d="M3,44H8a1,1,0,0,0,0-2H3a1,1,0,0,0,0,2Z" />
                      <path d="M40,39h3a1,1,0,0,0,0-2H40a1,1,0,0,0,0,2Z" />
                      <path d="M36,42a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Z" />
                    </g>
                  </g>
                </g>
              </svg>
              <p>Delivery</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
<!--Take away code form-->
  <div id="takeawayModal" class="cModal">
    <div class="modalContainer">
      <header class="modalHeader d-flex justify-content-between">
        <h2 class="modalTitle">Take Away Order</h2>
        <button type="button" class="closeModal closeTakeModal"><i class="icofont-close"></i></button>
      </header>
      <div class="modalBody">
        <form action="index.html" method="post" class="row">

          <div class="form-group col-sm-12">
            <label for="signUpName" class="col-form-label">Enter Your Take Away Code <span class="redStar">*</span></label>
            <input type="text" class="form-control" id="takeawaycode" name="takeawaycode">
            <div class="alert alert-error error-msg takeawaycode_err_msg_contnr">
                <p class="takeawaycode_err_msg"></p>
            </div>
          </div>
         

          <div class="col-sm-12 d-flex justify-content-between align-items-center">
            <button type="button" class="cartBtn2 borderBtn py-2 px-5" id="checkTakeAwayCode">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  




  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3><?php echo $info->site_title; ?></h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="<?php echo $info->twitter_link; ?>" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="<?php echo $info->facebook_link; ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="<?php echo $info->pinterest_link; ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span><?php echo $info->site_title; ?></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

<style>
 

  </style>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>assets_online_order/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets_online_order/js/jquery-ui.min.js"></script>
  <script src="<?php echo base_url(); ?>assets_online_order/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets_online_order/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url(); ?>assets_online_order/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url(); ?>assets_online_order/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="<?php echo base_url(); ?>assets_online_order/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url(); ?>assets_online_order/vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url(); ?>assets_online_order/vendor/owl.carousel/owl.carousel.min.js"></script>
<?php 
$total_menus = count($foodMenus);
$i = 1;
$javascript_obects = "";


$description='';
foreach($foodMenus as $single_menus){
    $taxper=0;
    $taxs=json_decode($single_menus->tax_information); 
     foreach ($taxs as  $trow) {
      $taxper=$taxper+$trow->tax_field_percentage;
      } 
    $description=str_replace("'", " ", $single_menus->description);
    //this portion construct javascript objects, it is used to search item from search input
    if($total_menus==$i){
        $javascript_obects .= "{item_id:'".$single_menus->id."',item_code:'".$single_menus->code."',item_name:'".$single_menus->name."',sold_for:'".$single_menus->item_sold."',price:'".$single_menus->sale_price."',description:'".$description."',vat_percentage:'".$taxper."'}";
    }else{
        $javascript_obects .= "{item_id:'".$single_menus->id."',item_code:'".$single_menus->code."',item_name:'".$single_menus->name."',sold_for:'".$single_menus->item_sold."',price:'".$single_menus->sale_price."',description:'".$description."',vat_percentage:'".$taxper."'},";
    }
    //increasing always with the number of loop to check the number of menus
    $i++;       
}

 ?>
<script type="text/javascript"> 
  
  var order_type=0;
  var deletedRow=[];
  var logincheck=2;
  <?php if($this->session->userdata('customer_id')!=''){  ?>
    logincheck=1;
  <?php } ?>
  var rowid=0;
  var baseURL='<?php echo base_url(); ?>';
  var currency='<?php echo $setting_info->currency; ?>';
  var delivery_enable_disable='<?php echo $info->delivery_enable_disable; ?>';
  var dine_in_enable_disable='<?php echo $info->dine_in_enable_disable; ?>';
  var take_away_enable_disable='<?php echo $info->take_away_enable_disable; ?>';

</script>
  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>assets_online_order/js/main.js"></script>
  <script src="<?php echo base_url(); ?>assets_online_order/js/custom.js"></script>
<script type="text/javascript">
  window.items = [<?php echo $javascript_obects;?>];
  function search(nameKey, myArray){
    var foundResult=new Array();
    for (var i=0; i < myArray.length; i++) {
        // if (myArray[i].item_name === nameKey) {
        //     return myArray[i];
        // }
        if (myArray[i].item_name.toLowerCase().includes(nameKey.toLowerCase()) || myArray[i].item_code.toLowerCase().includes(nameKey.toLowerCase())) {
            foundResult.push(myArray[i]);
        }
    }
    return foundResult.sort( function(a, b) {
      return parseInt(b.sold_for)-parseInt(a.sold_for);
    });
    //this is comment. it could be used if we want to sort this collection of object by item_name or anything else
    // return foundResult.sort( predicateBy("item_name") );
}

  if(logincheck==1){ 
  $(".myaccount").show();
  $(".loginarea").hide();
  }else{ 
  $(".myaccount").hide();
  $(".loginarea").show();
  }
  ////////////////////////////////////
$(document).ready(function(){
  //when anything is searched
  $("#search").on('keyup', function (e) {
    // if (e.keyCode == 13) {
    var searched_string = $(this).val().trim();
    var foundItems = searchItemAndConstructGallery(searched_string);
    var searched_category_items_to_show = '';
    for (var key in foundItems) {
      if (foundItems.hasOwnProperty(key)) {


searched_category_items_to_show += '<div class="col-lg-6 menu-item search_items">';
searched_category_items_to_show += '<div class="menu-content">';
searched_category_items_to_show += '<a href="#" class="baseColorTxt">' + foundItems[key].item_name + '</a>';
searched_category_items_to_show += '<span>'+currency+' '  + foundItems[key].price + '</span>';
searched_category_items_to_show += '</div>';
searched_category_items_to_show += '<div class="menu-ingredients">' + foundItems[key].description + '</div>';

searched_category_items_to_show += '<button type="button" class="borderBtn cartBtn" id="' + foundItems[key].item_id + '" value="' + foundItems[key].item_id + '">Add to Cart</button>';
searched_category_items_to_show += '<input type="hidden" id="price_' + foundItems[key].item_id + '" value="' + foundItems[key].price + '">';
searched_category_items_to_show += '<input type="hidden" id="name_' + foundItems[key].item_id + '" value="' + foundItems[key].item_name + '">';
searched_category_items_to_show += '<input type="hidden" id="taxpercent_' + foundItems[key].item_id + '" value="' + foundItems[key].vat_percentage + '">';
searched_category_items_to_show += '</div>';

      }
    }
    $('.category_items').hide('1000');
    $('.search_items').remove();
    $(".menu-container").prepend(searched_category_items_to_show);
    // }
  });


  $('.placeOrder').on('click',function(){
   if(logincheck==1){ 
    var numRows=$(".cartbody li").length;
    if(numRows<1){
      swal({
          title: "Alert!",
          text: "Cart is empty!",
          confirmButtonText: 'OK',
          confirmButtonColor: '#b6d6f6'
        });
    }else{
      $("#showplaceOrderModal").fadeIn(333);
      $('.overlayModal').fadeIn(333);
    }
   }else{ 
        swal({
          title: "Alert!",
          text: "Please first login!!!",
          confirmButtonText: 'OK',
          confirmButtonColor: '#b6d6f6'
        });
   }
  });
  /////////////////////////////////
  $("#checkTakeAwayCode").click(function(){
  var takeawaycode = $('input[name=takeawaycode]').val();
  var error = 0;
  if(takeawaycode == '') {
        error = 1;
        var cl1 = ".takeawaycode_err_msg";
        var cl2 = ".takeawaycode_err_msg_contnr";
        $(cl1).text("The Take Away Code field is required!");
        $(cl2).show(200).delay(6000).hide(200,function(){
        });
  } else {
    $('input[name=takeawaycode]').css('border', '1px solid #ccc');
  }
  if(error == 0) {
    $.ajax({
      url:baseURL+'Order/checkTakeAwayCode',
      method:"GET",
      data: {
        takeawaycode:takeawaycode
      },
      success:function(data){
        data=JSON.parse(data);
        if(data.chk=='YES'){
          $('.closeTakeModal').click();
          orderSubmit();
        }else{
          swal({
            title: "Alert!",
            text: "Code Doesn't match!!",
            confirmButtonText: 'OK',
            confirmButtonColor: '#b6d6f6'
          });
        }        
      }
    });
  }

});
  

});
////////////
function searchItemAndConstructGallery(searchedValue){      
      var resultObject = search(searchedValue, window.items);
      return resultObject;
  }



/////////////////////PLace Order select fuction////
function placeOrder(placevar){
  order_type=placevar;
  
  if(placevar==2){ 
    if(take_away_enable_disable=='take_away_enable'){
      $('.closePlaceOrderModal').click();
     $("#takeawayModal").fadeIn(333);
     $('.overlayModal').fadeIn(333); 
    }else{
      swal({
          title: "Alert!",
          text: "Sorry that we are not accepting take away order!!!",
          confirmButtonText: 'OK',
          confirmButtonColor: '#b6d6f6'
        });
    }
    
  }

  
}
///////////////////////////////////////////////
////////////Order Submit Function////////////
function orderSubmit(){
  var TotalTax = $('.TotalTax').html();
  $("#TotalTax").val(TotalTax);
  var totalCharge = $('.totalCharge').html();
  $("#totalCharge").val(totalCharge);
  var totalitem = $('.totalitem').html();
  $("#totalitem").val(totalitem);
  var totalVal = $('.totalVal').html();
  $("#totalVal").val(totalVal);
  var csrf_name_ = $('#csrf_name_').val();
  $("#csrf_name_1").val(csrf_name_);
  var csrf_value_ = $('#csrf_value_').val();
  $("#csrf_value_1").val(csrf_value_);
  $("#order_type").val(order_type);
  $.ajax({
    url: baseURL + "Order/add_sale_by_ajax",
    method: "POST",
    data:$('#theForm').serialize(),
        success: function (response) {
      if (response> 0) {
        $(".cartbody").empty();
        $(".totalitem").empty();
        $(".totalitem").html(0.00);
        $(".totalAddCart").html('0 Items');
        $(".TotalTax").empty();
        $(".TotalTax").html(0.00);
        $(".totalVal").empty();
        $(".totalVal").html(0.00);
        $("#totalPrice").html(0.00);
        $("#totalCharge").html(0.00);
        var cartbody ='<div class="total-cart"  style="padding: 5px;text-align: center;">';
        cartbody +='<span>Your cart is empty!</span></div>';
        $(".cartbody").html(cartbody);
        swal({
            title: "Alert!",
            text: "Your order submit successfully.",
            confirmButtonText: 'OK',
            confirmButtonColor: '#b6d6f6'
          });
      }
    },
    error: function () {
      swal({
            title: "Alert!",
            text: "Your order submit failed!!",
            confirmButtonText: 'OK',
            confirmButtonColor: '#b6d6f6'
          });
    }
  });



}
</script>

</body>
</html>