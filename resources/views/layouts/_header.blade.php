<header>

    <div class="sp-container headspace">
        <div class="head1">
            <div class="head1-logo">
                <div class="logo"><a href="{{ route('home') }}">
                        <img src="{{ asset('images/logo.svg') }}"></a></div>
            </div>
            <div class="head1-search">
                <div class="space-search">
                    <nav>
                        <div class="nav-wrapper">
                            <form>
                                <div class="input-field">
                                    <input id="search" class="truncate" type="search" placeholder="Search" required>
                                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                    <i class="material-icons">close</i>
                                </div>
                            </form>
                        </div>
                    </nav>
                </div></div>
            <div class="clearfix"></div>
        </div>
        <div class="head-mob-3">
            <div class="menu-icon">
                <a href="#" data-target="slide-out" class="sidenav-trigger"> <i class="material-icons">menu</i></a>
            </div>
            <div class="mob-space-search">
                <a href="#" id="mb-ser-show"><i class="material-icons">search</i></a>
            </div>
            <div class="signin-btn">
                <div class="space-flat-btn">
                    <a href="signin.php" class="waves-effect waves-gold btn-flat">Sign In</a>
                </div>
            </div>




        </div>
        <!--    <div class="menu3">-->
        <div class="head2">

            <div class="menu-icon">
                <a href="#" data-target="slide-out" class="sidenav-trigger"> <i class="material-icons">menu</i></a>
            </div>
            <a href="myaccount.php">
                <div class="profile-dp">
                    <h3>A</h3>
                    <!--<img src="images/dp.jpg">-->
                </div>


            </a>




            <a href="notification.php">
                <div class="width-mob-33">
                    <div class="horn">
                        <div class="horn-count">9</div>
                        <div class="horn-icon"><i class="icon-horn"></i></div>
                    </div>
                </div>
            </a>

            <a href="myaccount.php">
                <div class="width-mob-33">
                    <div class="icon-account"><i class="material-icons">person</i></div>
                </div>

            </a>

            <a href="myload.php">
                <div class="width-mob-33">
                    <div class="myload-ico">
                        <h4>Myload <span>12</span></h4>
                        <div class="myload-count-mob pulse">7</div>
                        <i class="icon-my-load"></i>
                    </div>
                </div>
            </a>
            <a href="index.php">
                <div class="width-mob-33">
                    <div class="icon-home"><i class="material-icons">home</i></div>
                </div>

            </a>

            <!--
                    <div class="signin-btn">
                        <div class="space-flat-btn">
                          <a class="waves-effect waves-gold btn-flat">Sign In <i class="zmdi zmdi-arrow-right"></i></a>
                        </div>
                    </div>
            -->


            <div class="clearfix"></div>
        </div>
        <!--    </div>    -->

        <div class="clearfix"></div>
    </div>
</header>
<div class="space-sidemenu">
    <ul id="slide-out" class="sidenav">
        <div class="space-user-view">
            <img src="images/bg-logo.svg">
            <a href="myaccount.php">
                <div class="inuser">

                    <div class="profile-dp">
                        <h3>A</h3>
                        <img src="images/dp.jpg">
                    </div>
                    <div class="clearfix"></div>

                    <div class="inuser-txt">
                        <h4>John Doe</h4>
                        <h5>jdandturk@gmail.com</h5>
                    </div>

                </div>
            </a>
        </div>

        <li><a class="waves-effect waves-gold" href="#">About Us</a></li>

        <ul class="collapsible collapsible-accordion">
            <li>
                <a class="collapsible-header waves-effect waves-gold">Browse Products <i class="material-icons">keyboard_arrow_down</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="products.php">Hot Offers</a></li>
                        <li><a href="products.php">Cement</a></li>
                        <li><a href="products.php">Steel</a></li>
                        <li><a href="products.php">Sand</a></li>
                        <li><a href="products.php">Hollow Bricks</a></li>
                        <li><a href="products.php">Interlock</a></li>
                        <li class="bdr-none"><a href="products.php">Aggregate</a></li>
                    </ul>
                </div>
            </li>
        </ul>

        <li><a class="waves-effect waves-gold" href="#">FAQ</a></li>
        <li><a class="waves-effect waves-gold" href="#">Privacy & Policies</a></li>
        <li><a class="waves-effect waves-gold" href="#">Contact Us</a></li>
        <li><a class="waves-effect waves-gold redmenu modal-trigger" href="#logout">Log Out</a></li>
        <ul id='dropdown1'>
        </ul>

    </ul>
</div>	