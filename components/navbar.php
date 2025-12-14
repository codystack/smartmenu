        <?php
            $currentPage = basename($_SERVER['PHP_SELF'], ".php"); 
        ?>
        <header class="tf-header-d10">
            <div class="container-d10-new">
                <div class="header-inner">
                    <a href="./" class="d10-logo ps-3">
                        <img loading="lazy" width="30" height="30" src="./assets/images/smartmenu-icon-dark.svg" alt="Logo">
                    </a>
                    <div class="header-center">
                        <nav class="box-navigation">
                            <ul class="box-nav-menu">
                                <li class="menu-item">
                                    <a href="how-it-works" class="item-link <?= ($currentPage === 'how-it-works') ? 'active' : '' ?>">
                                        How it works
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pricing" class="item-link <?= ($currentPage === 'pricing') ? 'active' : '' ?>">
                                        Pricing
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="faq" class="item-link <?= ($currentPage === 'faq') ? 'active' : '' ?>">
                                        FAQ's
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="https://shop.smartmenu.africa" target="_blank" class="item-link">
                                        Shop
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-right d-flex align-items-center gap-12">
                        <a href="contact.html" class="tf-btn-d10">
                            <span class="text_btn fw-medium">
                                Get Started
                            </span>
                            <span class="icon">
                                <i class="icon-angle-right-solid"></i>
                            </span>
                        </a>
                        <a href="#mobileMenu" data-bs-toggle="offcanvas" class="btn-mobile-menu-d10 d-lg-none">
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>

        </header>


        <!-- Mobile Menu -->
        <div class="offcanvas offcanvas-start canvas-mb cv-mb-d10" id="mobileMenu">
            <div class="canvas-header">
                <a href="#" class="logo-site">
                    <img loading="lazy" width="124" height="20" src="./assets/images/logo/logo-mobile.svg" alt="Logo">
                </a>
                <span class="icon-close-popup" data-bs-dismiss="offcanvas">
                    <i class="icon-close"></i>
                </span>
            </div>
            <div class="canvas-body">
                <div class="mb-content-top">
                    <ul class="nav-ul-mb" id="wrapper-menu-navigation"></ul>
                </div>
            </div>
            <div class="canvas-bottom">
                <ul class="mb-social">
                    <li>
                        <a href="https://www.facebook.com/" target="_blank" class="social-link">
                            <i class="icon-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/" target="_blank" class="social-link">
                            <i class="icon-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://x.com/" target="_blank" class="social-link">
                            <i class="icon-twitter-x"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.tiktok.com/" target="_blank" class="social-link">
                            <i class="icon-linkin"></i>
                        </a>
                    </li>
                </ul>
                <div class="tf-list justify-content-center">
                    <a href="#" class="text-black fw-medium letter-space-2 text-body-4">Privacy Policy
                    </a>
                    <a href="#" class="text-black fw-medium letter-space-2 text-body-4">Terms of use
                    </a>
                </div>
            </div>
        </div>
        <!-- /Mobile Menu -->