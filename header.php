<?php $page = basename($_SERVER['PHP_SELF'])?>

<header class="section page-header">
        <!--RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-outer rd-navbar-collapse bg-gray-dark">
              <div class="rd-navbar-aside">
                <ul class="list-inline navbar-contact-list">
                  <li>
                    <div class="unit unit-spacing-xs align-items-center">
                      <div class="unit-left"><span class="icon text-middle fa-phone"></span></div>
                      <div class="unit-body"><a href="tel:+52 312 314 6309">+52 312 314 6309</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-xs align-items-center">
                      <div class="unit-left"><span class="icon text-middle fa-envelope"></span></div>
                      <div class="unit-body"><a href="mailto:atencionaclientes@tscomunicacion.com">atencionaclientes@tscomunicacion.com</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-xs align-items-center">
                      <div class="unit-left"><span class="icon text-middle fa-map-marker"></span></div>
                      <div class="unit-body"><a href="https://www.google.com/maps/place/TSCOM+tecnologia+en+sistemas+de+comunicacion/@19.2540234,-103.7269423,15z/data=!4m5!3m4!1s0x0:0xd6c949c3d443181e!8m2!3d19.2540075!4d-103.7269143">Rafaela Suárez #455 Col. Magisterial, Colima, México</a></div>
                    </div>
                  </li>
                </ul>
                <ul class="social-links">
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook" href="https://www.facebook.com/TscomMx/"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram" href="https://www.instagram.com/tscom_mx/"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-whatsapp" href="https://wa.me/523123028258?text=Hola.%20Me%20gustaría%20hablar%20con%20ustedes"></a></li>
                </ul>
              </div>
            </div>

            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!--RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!--RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!--RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand--><a class="brand" href="index.php"><img class="brand-logo-dark" src="images/tscom-logo-web.png" alt="" width="100" height="17"/><img class="brand-logo-light" src="images/logo-inverse-200x34.png" alt="" width="100" height="17"/></a>
                  </div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item <?php if($page == 'index.php'){ echo ' active';}?>"><a class="rd-nav-link" href="index.php">Inicio</a>
                      </li>
                      <li class="rd-nav-item <?php if($page == 'about.php'){ echo ' active';}?>"><a class="rd-nav-link" href="about.php">Nosotros</a>
                      </li>
                      <li class="rd-nav-item <?php if($page == 'services.php'){ echo ' active';}?>"><a class="rd-nav-link" href="services.php">Servicios</a>
                      </li>
                      <li class="rd-nav-item <?php if($page == 'contacts.php'){ echo ' active';}?>"><a class="rd-nav-link" href="contacts.php">Contacto</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>