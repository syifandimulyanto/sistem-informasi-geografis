<!DOCTYPE html>
<head>
    <title>Sistem Informasi Geografis Wisata Kota Batu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php echo frontend_asset_css('css/style.css'); ?>
    <?php echo frontend_asset_css('css/colors/main.css'); ?>
    <?php echo frontend_asset_css('maps/leaflet/dist/leaflet.css'); ?>
    <?php echo frontend_asset_css('maps/pancontrol/L.Control.Pan.css'); ?>
    <?php echo frontend_asset_js('scripts/jquery-2.2.0.min.js'); ?>
    <?php echo frontend_asset_js('scripts/jpanelmenu.min.js'); ?>
    <?php echo frontend_asset_js('scripts/chosen.min.js'); ?>
    <?php echo frontend_asset_js('scripts/slick.min.js'); ?>
    <?php echo frontend_asset_js('scripts/rangeslider.min.js'); ?>
    <?php echo frontend_asset_js('scripts/magnific-popup.min.js'); ?>
    <?php echo frontend_asset_js('scripts/waypoints.min.js'); ?>
    <?php echo frontend_asset_js('scripts/counterup.min.js'); ?>
    <?php echo frontend_asset_js('scripts/jquery-ui.min.js'); ?>
    <?php echo frontend_asset_js('scripts/tooltips.min.js'); ?>
    <?php echo frontend_asset_js('scripts/custom.js'); ?>
    <?php echo frontend_asset_js('scripts/switcher.js'); ?>
</head>
<body>
    <div id="wrapper">
        <header id="header-container">
            <div id="header">
                <div class="container">
                    <div class="left-side">
                        <div id="logo">
                            <a href="<?php echo frontend_url(); ?>"><img src="<?php echo frontend_asset_url('images/ayokebatu.png'); ?>" alt=""></a>
                        </div>
                        <div class="menu-responsive">
                            <i class="fa fa-reorder menu-trigger"></i>
                        </div>
                        <nav id="navigation" class="style-1">
                            <ul id="responsive">
                                <li>
                                    <a <?php if( @$menu == "home" ) echo "class='current'"; ?> href="<?php echo frontend_url(); ?>">Home</a>
                                </li>
                                <li>
                                    <a <?php if( @$menu == "search" ) echo "class='current'"; ?> href="<?php echo frontend_url('search'); ?>">Search</a>
                                </li>
                            </ul>
                            </ul>
                        </nav>
                        <div class="clearfix"></div>
                    </div>
                    <div class="right-side">
                        <div class="header-widget">
                            <a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><i class="sl sl-icon-login"></i> Sign In</a>
                        </div>
                    </div>
                    <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
                        <div class="small-dialog-header">
                            <h3>Sign In</h3>
                        </div>
                        <div class="sign-in-form style-1">
                            <ul class="tabs-nav">
                                <li class=""><a href="#tab1">Log In</a></li>
                                <li><a href="#tab2">Register</a></li>
                            </ul>
                            <div class="tabs-container alt">
                                <div class="tab-content" id="tab1" style="display: none;">
                                    <form method="post" class="login">
                                        <p class="form-row form-row-wide">
                                            <label for="username">Username:
                                                <i class="im im-icon-Male"></i>
                                                <input type="text" class="input-text" name="username" id="username" value="" />
                                            </label>
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label for="password">Password:
                                                <i class="im im-icon-Lock-2"></i>
                                                <input class="input-text" type="password" name="password" id="password"/>
                                            </label>
                                            <span class="lost_password">
                                                <a href="#" >Lost Your Password?</a>
                                            </span>
                                        </p>
                                        <div class="form-row">
                                            <input type="submit" class="button border margin-top-5" name="login" value="Login" />
                                            <div class="checkboxes margin-top-10">
                                                <input id="remember-me" type="checkbox" name="check">
                                                <label for="remember-me">Remember Me</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-content" id="tab2" style="display: none;">
                                    <form method="post" class="register">
                                        <p class="form-row form-row-wide">
                                            <label for="username2">Username:
                                                <i class="im im-icon-Male"></i>
                                                <input type="text" class="input-text" name="username" id="username2" value="" />
                                            </label>
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label for="email2">Email Address:
                                                <i class="im im-icon-Mail"></i>
                                                <input type="text" class="input-text" name="email" id="email2" value="" />
                                            </label>
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label for="password1">Password:
                                                <i class="im im-icon-Lock-2"></i>
                                                <input class="input-text" type="password" name="password1" id="password1"/>
                                            </label>
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label for="password2">Repeat Password:
                                                <i class="im im-icon-Lock-2"></i>
                                                <input class="input-text" type="password" name="password2" id="password2"/>
                                            </label>
                                        </p>
                                        <input type="submit" class="button border fw margin-top-10" name="register" value="Register" />
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="clearfix"></div>
        <?php echo $contents; ?>
        <?php if( @$footer != FALSE ): ?>
        <div id="footer" class="sticky-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <img class="footer-logo" src="<?php echo frontend_asset_url('images/ayokebatu.png'); ?>" alt="">
                        <br><br>
                        <p>Ayokebatu adalah portal wisata - wisata dan yang lain nya , yang bertujuan untuk mempermudah wisatawan yang ingin berkunjung ke Kota Wisata Batu</p>
                    </div>
                    <div class="col-md-4 col-sm-6 ">
                        <h4>Helpful Links</h4>
                        <ul class="footer-links">
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Sign Up</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Add Listing</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                        <ul class="footer-links">
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Our Partners</a></li>
                            <li><a href="#">How It Works</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>      
                    <div class="col-md-3  col-sm-12">
                        <h4>Contact Us</h4>
                        <div class="text-widget">
                            <span>JL. Bukit Berbunga no 15</span> <br>
                            Phone : <span>(0341) 591 - 102 </span><br>
                            E-Mail: <span> fanfandi17@gmail.com </span>
                        </div>
                        <ul class="social-icons margin-top-20">
                            <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                            <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                            <li><a class="vimeo" href="#"><i class="icon-vimeo"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyrights">© 2017 Ayokebatu. All Rights Reserved.</div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <div id="backtotop"><a href="#"></a></div>
    </div>
</body>
</html>