 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== REMIXICON ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>IRON FITNESS</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="/index.php" class="nav__logo">
                    <img src="assets/img/logo-nav.png" alt="logo"> IRON FITNESS
                </a>

                <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                        <li class="nav__item">
                          <a href="/index.php" class="nav__link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="/aboutus.php" class="nav__link">About Us</a>
                          </li>
                          <li class="nav__item">
                            <a href="/contactus.php" class="nav__link active-link">Contact Us</a>
                          </li>
                          


                          <div class="nav__link" >
                            <a href="/registernow.php" class="nav__link">
                              Register Now
                            </a>
                          </div>
                    </ul>
                    <!--Close button-->
                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>

            <!-- Toggle button -->
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
            
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            
        <!--==================== FOOTER ====================-->
        <footer class="footer section" id="footer">
          <div class="footer__container container grid">
            <div>
              <h2 class="section__title-border">CONTACT</h2>
              <h2 class="section__title">INFORMATION</h2>
              <br>
              <p>Check with us on our social media or You can contact us to our telephone number.<br>We recommend you to visit us to our gym once.<br>For directions click below.</p>
              <br>
              <a href="https://goo.gl/maps/Cm7RMfs2UbfoGiUKA" target="_blank" class="button button__flex">
                Get Directions
              </a>
              
              
            </div>

            <div>
              <a>
                <i class="ri-phone-fill"></i>&nbsp  &nbsp Phone<hr>
                425345234
              </a>
              <br><br>
              <a>
                <i class="ri-mail-open-fill"></i>&nbsp  &nbsp E-mail<hr>
                abc@gmail.com
              </a>
              <br><br>
              <a>
                <i class="ri-map-pin-fill"></i>&nbsp &nbsp  Location<hr>
                Bangalore
              </a>
            </div>
            
            

          </div>
        </div> 
           <div class="container">
            <div class="footer__group">
              <ul class="footer__social">
                
                <a href="https://twitter.com/DeepRakesh0902" target="_blank" class="footer__social-link">
                  <i class="ri-twitter-fill"></i>
                </a>
                
              </ul>

              <span class="footer__copy">
                &#169; Copyright TeamResolute. All rights reserved<br>
                Check out my GitHub profile <a href="https://github.com/Deep0902" target="_blank">here</a>
              </span>
            </div>
           </div>
        </footer>

        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
          <i class="ri-arrow-up-line"></i>
        </a>

        <!--=============== SCROLLREVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>

        <!--=============== EMAIL JS ===============-->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

        
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>