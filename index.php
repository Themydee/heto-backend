<?php
  require('includes/db.php');
  $query = "SELECT * FROM home,section_control,about,reservation,menu,social_media";
  $run = mysqli_query($db,$query);
  $user_data = mysqli_fetch_array($run);
?>


<!DOCTYPE html>
<html lang="en">

  <head>
    <link rel="shortcut icon" href="./assets/images/IMG-20210512-WA0051.jpg" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="assets/icofont/icofont.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>HetoCakes & Confectionaries</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="./assets/images/<?=$user_data['logo_pic']?>" width="70px">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                            
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 
                        </ul>        
                    
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4><?=$user_data['title']?></h4>
                            <h6><?=$user_data['subtitle']?></h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/IMG-20210512-WA0051.jpg" width="80%" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6><?=$user_data['about_title']?></h6>
                            <h2><?=$user_data['about_subtitle']?></h2>
                        </div>
                        <p></p>
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/images/IMG-20210512-WA0039.jpg" width="30px"alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/IMG-20210512-WA0035.jpg" width="30px" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/IMG-20210512-WA0040.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <p><?=$user_data['about_text']?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->
    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6><?=$user_data['reservation_title']?></h6>
                            <h2><?=$user_data['reservation_subtitle']?></h2>
                        </div>                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-lg-12">
                                <h4><?=$user_data['reservation_text1']?></h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="address" type="text" id="address" placeholder="Home Address*" required="">
                              </fieldset>
                            </div>
                    
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon"><a href="https://wa.me/%2b2349077034764?text=Hi%20Temidayo!%20I%20Just%20made%20an%20order%20from%20Heto%20Kindly%20confirm%20Thank%20You%20My%20Name%20Is"><?=$user_data['reservation_text2']?></a></button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Reservation Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6><?=$user_data['menu_title']?></h6>
                        <h2><?=$user_data['menu_subtitle']?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                          <li><a href='#tabs-1'><img src="assets/images/tab-icon-01.png" alt="">Cakes</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/<?=$user_data['cake1_img']?>" alt="">
                                                            <h4><?=$user_data['cake_1']?></h4>
                                                            <p><?=$user_data['cake1_text']?></p>
                                                            <div class="price">
                                                                <h6><?=$user_data['cake1_price']?></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                    <div class="tab-item">
                                                            <img src="assets/images/<?=$user_data['cake2_img']?>" alt="">
                                                            <h4><?=$user_data['cake_2']?></h4>
                                                            <p><?=$user_data['cake2_text']?></p>
                                                            <div class="price">
                                                                <h6><?=$user_data['cake2_price']?></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/<?=$user_data['cake3_img']?>" alt="">
                                                            <h4><?=$user_data['cake_3']?></h4>
                                                            <p><?=$user_data['cake3_text']?></p>
                                                            <div class="price">
                                                                <h6><?=$user_data['cake3_price']?></h6>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/<?=$user_data['cake4_img']?>" alt="">
                                                            <h4><?=$user_data['cake_4']?></h4>
                                                            <p><?=$user_data['cake4_text']?></p>
                                                            <div class="price">
                                                                <h6><?=$user_data['cake4_price']?></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>  
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** --> 
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li>
                                    <?php if ($user_data['twitter']!='') {?>
                                        <a href="https://twitter.com/<?=$user_data['twitter']?>">
                                        <i class="fa fa-twitter"></i></a>
                                        <?php
                                    }
                                        ?>
                                    
                                </li>
                                <li>
                                <?php if ($user_data['facebook']!='') {?>
                                        <a href="https://facebook.com/<?=$user_data['facebook']?>">
                                        <i class="fa fa-facebook"></i></a>
                                        <?php
                                    }
                                        ?>
                                </li>
                                <li>
                                <?php if ($user_data['instagram']!='') {?>
                                        <a href="https://instagram.com/<?=$user_data['twitter']?>">
                                        <i class="fa fa-instagram"></i></a>
                                        <?php
                                    }
                                        ?>
                                </li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img src="assets/images/white-logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>
                            
                        © <b> HetoCakes</b>  <b>2022</b> 
                                    
                        </p>
                    </div>
                </div>
                
            </div>
        </div>  
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>