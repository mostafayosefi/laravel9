

    <!-- footer -->
    <footer id="footer" class="footer">
        <div class="footer-contents">


    <div class="content-row footer_contents footer-info-bar fullwidth">
    <div class="content-row-wrapper d-lg-flex align-items-right default text-sm-right default">


     <div class="top-bar-left d-flex align-items-right">
     <div id="nav_menu-5" class="topbar-widget widget widget_nav_menu">
     <div class="menu-sub-header-container"><ul id="menu-sub-header" class="menu">













    <li   class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-888"><a href="{{route('index.home')}}">صفحه نخست</a></li>


    @if(auth()->guard('user')->user())
     <li   class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-888"><a href="{{route('user.panel.index')}}">پنل کاربری</a></li>
    @else
    <li   class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-888"><a href="{{route('index.user.register')}}">ثبت نام</a></li>
    <li   class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-888"><a href="{{route('index.user.login')}}">ورود</a></li>
    @endif

    <li   class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-888"><a href="{{route('index.document.index')}}">راهنمای وب سرویس</a></li>
    <li   class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-888"><a href="{{route('index.faqs')}}">سوالات متداول</a></li>
    <li   class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-888"><a href="{{route('index.support')}}">تماس با ما</a></li>


    </ul></div></div>		</div>






    <div class="copyright"> {{$setting->fcopy}}

        <a referrerpolicy="origin" target="_blank" href="https://trustseal.enamad.ir/?id=274739&amp;Code=K1FGFjhdUENn7QRttm8w">

            <img class="img-fluid"  src="{{asset('indexhost_files/enemad.png')}}"  alt="اینماد ایرانی نیک" width="90" loading="lazy"  id="K1FGFjhdUENn7QRttm8w">        </a>
 <br>


    </div>
    <div class="footer-info-right">
    <ul class="social_media inline-list">



    <li class="instagram"><a class="ui-icon-instagram" target="_blank" href="instagram" title="Instagram" rel="nofollow"><span>اینستاگرام  TiTlE  </span></a></li>
    <li class="linkedin"><a class="ui-icon-linkedin" target="_blank" href="linkedin" title="Linkedin" rel="nofollow"><span>لینکدین  TiTlE  </span></a></li>

    <li class="telegram"><a class="ui-icon-telegram" target="_blank" href="telegram" title="Telegram" rel="nofollow"><span>تلگرام  TiTlE  </span></a></li>




    </ul></div></div></div></div></footer><!-- / end #footer -->
