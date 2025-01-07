<div class="loader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="spinner"></div>
        </div>
    </div>
</div>
<style>
    .main-nav .desk img {
        max-width: 50%;
    }
    .main-nav .desk .imga {
        width: 40%;
    }
    .gt {
        margin-left: 20px;
    }
    .main-nav .container {
        padding-right: 0px;
        padding-left: 0px;
    }
    .main-nav {
        background: #FFFFFF;
    }
    .gtmobile {
        display : none;
    }
    .gtweb {
        display : block;
    }
    @media only screen and (max-width: 767px) {
        .mobile-nav a {
            max-width: 50%;
        }
        .mobile-nav img {
            max-width: 55%;
        }
        .mean-container .mean-bar {
            background-color: #ffbe00;
        }
        .mean-container .mean-nav .navbar-nav {
            height: auto;
        }
        .gtmobile {
            display : block;
        }
        .gtweb {
            display : none;
        }
    }
    @media only screen and (min-device-width: 768px) and (max-device-width: 991px) {
    /*@media only screen and (max-width: 991px) {*/
        .mobile-nav .logo {
            top: 5px;
        }
        .mobile-nav a {
            max-width: 50%;
        }
        .mobile-nav img {
            max-width: 35%;
        }
        .mean-container .mean-bar {
            background-color: #ffbe00;
        }
        .mean-container .mean-nav .navbar-nav {
            height: auto;
        }
        .gtmobile {
            display : block;
        }
        .gtweb {
            display : none;
        }
    }
</style>

<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
  }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


    <!-- no need -->
<script>
    function myFunction(x) {
      if (x.matches) { // If media query matches
        //alert('hi');
        document.getElementById("gtmobile")
                .innerHTML +=
                `<div id="google_translate_element"></div>`;
      }
    }
    
    // Create a MediaQueryList object
    var x = window.matchMedia("(max-width: 1024px)")
    
    // Call listener function at run time
    myFunction(x);
    
    // Attach listener function on state changes
    x.addEventListener("change", function() {
      myFunction(x);
    });
</script> 
 <!-- no need -->
 
 
<div class="navbar-area fixed-top">
    <!--<div class="main-nav">
        <div class="container">
            <div id="google_translate_element"></div>
            <script type="text/javascript">
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({pageLanguage: 'en', autoDisplay: false}, 'google_translate_element');
                }
            </script>
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        </div>
    </div>-->
    
    
    <div class="mobile-nav">
        <a href="index.php" class="logo">
            <img src="assets/images/crestcrew-logo-head.png" alt="Logo">
        </a>
    </div>
    <div class="main-nav">
        <div class="container">
            
            <div class="row">
            <nav class="navbar desk navbar-expand-md navbar-light">
                <div class="col-md-3">
                <a class="navbar-brand imga" href="index.php">
                    <img src="assets/images/crestcrew-logo-head.png" alt="Logo">
<!--                    <img src="assets/images/crest-crew-logo.jpg" alt="Logo">-->
                </a>
                </div>
                <div class="col-md-7">
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="about-us.php" class="nav-link">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:;" class="nav-link dropdown-toggle">Products <i class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="fruits.php" class="nav-link">Fruits</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="vegetables.php" class="nav-link">Vegetables</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="spices.php" class="nav-link">Spices</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="beverages.php" class="nav-link">Beverages</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="contact-us.php" class="nav-link">Contact Us</a>
                            </li>
                        </ul>
                        <div class="side-nav">
                            <a class="nav-tel" href="tel:+918238938615">
                                <i class='bx bxs-phone-call'></i>
                                +91 82389 38615
                            </a>
                        </div>
                        <div class="side-nav gtmobile" id="gtmobile">
                            <!--<div id="google_translate_element"></div>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-2 gtweb" style="margin-left: 70px;">
                    <div id="google_translate_element"></div>
                </div>
            </nav>
            </div>
        </div>
    </div>
</div>