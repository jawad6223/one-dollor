 <!-- PAGE HEADER -->
 <header class="header header_menu-right header_fixed container-fluid js-header-sticky" id="page-header" data-arts-theme-text="dark" data-arts-header-sticky-theme="bg-white" data-arts-header-logo="primary" data-arts-header-sticky-logo="primary" data-arts-header-overlay-theme="light" data-arts-header-overlay-background="#ffffff">
        <!-- top bar -->
        <div class="header__container header__controls">
          <div class="row justify-content-between align-items-center">
            <!-- logo -->
            <div class="col-auto header__col header__col-left"><a class="logo" href="#" >
                <div class="logo__wrapper-img">
                 <img class="logo__img-primary" src="{{asset('public/assets1/img/assets/projects/card.png')}}" alt="Rhye HTML5 Template" style="height:70px;width:100px;">
                  <img class="logo__img-secondary" src="img/general/logo-white.svg" alt="Rhye HTML5 Template" height="20">
                </div></a>
            </div>
            <!-- - logo -->
            <!-- burger icon -->
            <div class="col-auto header__col">
              <div class="header__burger" id="js-burger" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.7" data-arts-cursor-magnetic="data-arts-cursor-magnetic" data-arts-cursor-hide-native="true">
                <div class="header__burger-line"></div>
                <div class="header__burger-line"></div>
                <div class="header__burger-line"></div>
              </div>
            </div>
            <!-- - burger icon -->
            <!-- "back" button for submenu nav -->
            <div class="header__overlay-menu-back" id="js-submenu-back">
              <div class="arrow arrow-left js-arrow arrow_mini" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
                <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
                </svg>
                <div class="arrow__pointer arrow-left__pointer"></div>
                <div class="arrow__triangle"></div>
              </div>
            </div>
            <!-- - "back" button for submenu nav -->
          </div>
        </div>
        <!-- - top bar -->
        <!-- fullscreen overlay container -->
        <div class="header__wrapper-overlay-menu container-fluid container-fluid_paddings">
          <!-- fullscreen menu -->
          <div class="header__wrapper-menu">
            <ul class="menu-overlay js-menu-overlay">
              <li class="menu-item-has-children"><a class="h2" href="{{url('/')}}" data-pjax-link="overlayMenu">
                  <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">HOME</div></a>
              </li>
              <!-- <li class="menu-item-has-children"><a class="h2" href="#" data-pjax-link="overlayMenu">
                  <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">ABOUT</div></a>
              </li> -->

              <li class="menu-item-has-children"><a class="h2" href="{{url('keep')}}" data-pjax-link="overlayMenu">
                  <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">KEEP CREDIT  </div></a>
              </li>
             
              <li class="menu-item-has-children"><a class="h2" href="{{url('repair')}}" data-pjax-link="overlayMenu">
                  <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">REPAIR  CREDIT</div></a>
              </li>
              <li class="menu-item-has-children"><a class="h2" href="{{url('build')}}" data-pjax-link="overlayMenu">
                  <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">BUILD CREDIT </div></a>
              </li>
              <li class="menu-item-has-children"><a class="h2"  data-pjax-link="overlayMenu">
                  
              <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Credit Education</div></a>
              
              <ul class="sub-menu">
                           <li class="menu-item-has-children">
                                <a class="h3"  data-pjax-link="overlayMenu" href="{{url('basic')}}">
                                  <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Credit Basics</div>
                                </a>
                            </li> 
                            <li class="menu-item-has-children">
                                <a class="h3" href="{{url('identity')}}" data-pjax-link="overlayMenu">
                                  <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Identity & Safety</div>
                                </a>
                            </li> 
                             <li class="menu-item-has-children">
                                <a class="h3" href="{{url('mange')}}" data-pjax-link="overlayMenu">
                                  <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Mange you Money </div>
                                </a>
                            </li> 
                            <li class="menu-item-has-children">
                                <a class="h3" href="{{url('life')}}" data-pjax-link="overlayMenu">
                                  <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Life Events </div>
                                </a>
                            </li> 
                             
                        </ul>
            
            </li>

              <li class="menu-item-has-children"><a class="h2" href="{{url('contact')}}" data-pjax-link="overlayMenu">
                  <div class="menu-overlay__item-wrapper split-text js-split-text" data-split-text-type="lines">Get In Touch</div></a>
              </li>
            </ul>
          </div>
          <!-- - fullscreen menu -->
          <!-- fullscreen widgets -->
          <div class="header__wrapper-overlay-widgets">
            <div class="row">
              <!-- widget TEXT -->
              <div class="col-lg-4 header__widget">
                <div class="header__widget-title small-caps js-split-text split-text" data-split-text-type="lines">Contacts</div>
                <div class="header__widget-content js-split-text split-text" data-split-text-type="lines">
                  <p>info@850th.com  </a><br>+1 305-988-9666</p>
                </div>
              </div>
              <!-- - widget TEXT -->
              <!-- widget TEXT -->
              <div class="col-lg-4 header__widget">
                <div class="header__widget-title small-caps js-split-text split-text" data-split-text-type="lines">Office</div>
                <div class="header__widget-content js-split-text split-text" data-split-text-type="lines">
                  <p>South Florida
                  </p>
                </div>
              </div>
              <!-- - widget TEXT -->
              <!-- widget TEXT -->
              <div class="col-lg-4 header__widget">
                <div class="header__widget-title small-caps js-split-text split-text" data-split-text-type="lines">Want to Work with Me?</div>
                <div class="header__widget-content js-split-text split-text" data-split-text-type="lines">
                  <p><a href="{{url('contact')}}">Get in Touch</a><br>
                  </p>
                </div>
              </div>
              <!-- - widget TEXT -->
            </div>
          </div>
          <!-- - fullscreen widgets -->
        </div>
        <!-- - fullscreen overlay container -->
      </header>