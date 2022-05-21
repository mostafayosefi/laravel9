
    <header id="header" class="position-relative header header-bg">
        <div class="header-top" style="max-height: 181px;">
        <div class="container-fluid px-6">
        <div class="row align-items-center">
        <div class="col-6 text-right position-static">





@if(auth()->guard('user')->user())
            <a class="user btn-user home-page-topbar">
                <img class="img-fluid ml-1" src="{{asset('indexhost_files/login.svg')}}" alt="ورود" loading="lazy">
                 <span class="user-span">{{auth()->guard('user')->user()->name}}</span> <svg class="bi caret-icon mr-1" width="16" height="16" fill="currentColor">
                     <use xlink:href="{{asset('indexhost_files/bootstrap-icons.svg#chevron-down')}}"></use></svg> </a>


                     @else


            <a class="login btn-login home-page-topbar" href="#">
                <img class="img-fluid ml-1" src="{{asset('indexhost_files/login.svg')}}" alt="ورود" loading="lazy">
                <span class="login-span">ورود </span> <svg class="bi caret-icon mr-1" width="16" height="16" fill="currentColor">
                    <use xlink:href="{{asset('indexhost_files/bootstrap-icons.svg#chevron-down')}}"></use></svg> </a>

        @endif


        <div id="user-info" class="user-box">
            <ul class="">
                <li><a id="logout" class="login-span" href="{{route('user.dashboard.index')}}" target="_blank"  > مشاهده پنل </a></li>

            <li>
                <a href="{{ route('index.user.logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="text-danger">
                  <span>خروج</span>
                </a></li>



              <form id="logout-form" action="{{ route('index.user.logout') }}" method="POST"
                  class="d-none">
                  @csrf
              </form>




            </ul>
            </div>


        <div id="menu-login" class="login-box">
        <div class="container-fluid">
        <div class="row">
        <div class="col-md-4 user-box mb-4 mb-md-0">
        <div>
        <h5><svg class="bi"></svg> ورود</h5>
        <p>قبلا عضو شده اید؟ وارد شوید</p>
        </div>
        <a class="btn-cta_outline-sm"   href="{{route('index.user.login')}}" target="_blank" rel="noopener">ورود </a></div>
        <div class="col-md-4 user-box mb-4 mb-md-0">
        <div>
        <h5><svg class="bi"></svg> عضویت</h5>
        <p>کاربر جدید هستید؟ حساب کاربری جدید ایجاد کنید.</p>
        </div>
        <a class="btn-cta_outline-sm" href="{{route('index.user.register')}}" target="_self">عضویت </a></div>
        <div class="col-md-4 user-box mb-4 mb-md-0">
        <div>
        <h5><svg class="bi"></svg> پشتیبانی</h5>
        <p>برای تماس با پشتیبانی ایرانی نیک کلیک کنید.</p>
        </div>
        <a class="btn-cta_outline-sm" href="{{route('index.support')}}" target="_blank" rel="noopener"> تماس با ما   </a></div>
        </div>
        </div>
        </div>
        </div>

        <div class="col-6">
        <div class="header-top-actions d-flex justify-content-end align-items-center">
            <a id="basket-toggle" class="position-relative shopping-cart" href="#" style="display: block;">
                <span id="basket-count" class="badge badge-pill badge-warning d-none">0</span>
            <img class="img-fluid" src="{{asset('indexhost_files/shopping-cart.svg')}}" alt="" loading="lazy"></a>
        <div id="basket-box"><strong>سبد خرید</strong>
        <p class="basket-empty-message" style="display: none;">سبد خرید شما خالی می باشد</p>
        <ul class="list-group basket-body">
        <li style="display: none;">temp</li>
        </ul>
        <a id="basket-checkout" class="btn btn-small btn-success mt-2" href="#">مشاهده سفارش </a></div>
        <div id="stlivechat0">
            <a id="stlivechat0_online" class=""

            @if(auth()->guard('user')->user())
            href="{{route('user.ticket.index')}}"
            @else
            href="{{route('index.support')}}"
            @endif

            style="" target="" title="Chat with us!"><img src="{{asset('indexhost_files/sms.svg')}}"></a>
            <style>.ChatButtonSVG{width:70px;} .ChatButtonSVG img{width:70px;}</style></div>
        <a class="call" href="tel: {{$setting->tell}}"> <span class="d-none d-sm-inline">{{$setting->tell}}</span>
            <img class="img-fluid d-sm-none" src="{{asset('indexhost_files/call.svg')}}" alt="تماس با ما" loading="lazy"> </a></div>
        </div>



        </div>
        </div>
        </div>
        <div class="header-bottom"><nav class="navbar navbar-expand-lg">
        <div class="container-fluid justify-content-between"><button class="navbar-toggler p-0 ml-4 menu-opener" type="button" aria-label="Toggle navigation"> <img class="img-fluid" src="{{asset('indexhost_files/bars.svg')}}" alt="pic" loading="lazy"> </button> <a class="navbar-brand mr-0" title="#" href="#">
            <img class="img-fluid d-none d-sm-inline" src="{{$setting->logo}}" style="height: 45px;" alt="logo" loading="lazy">
            <img class="img-fluid d-sm-none" src="{{$setting->logo}}"  style="height: 45px;"  alt="logo" loading="lazy"> </a>
        <div id="navbarSupportedContent" class="collapse navbar-collapse menu-mobile mr-lg-5">
        <div class="overflow-y-auto custom-scrollbar">
        <div class="mx-lg-auto"><a class="d-block mb-4 close-menu d-lg-none" href="#">
             <img class="img-fluid" src="{{asset('indexhost_files/times.svg')}}" alt="خروج" loading="lazy"> </a>
        <ul class="navbar-nav px-0 mx-auto" id="menu-home">

            <li class="nav-item">
                <a class="nav-link menu-togglers toggle-submenu" href="{{route('index.home')}}">
                    صفحه نخست
                </a>
            </li>
                <li class="nav-item">
                    <a class="nav-link menu-togglers toggle-submenu" href="#">
                        <span class="menu-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                            </svg>
                        </span>
                         بررسی دامنه
                    </a>
                    <div class="submenu">
                        <div class="container-fluid">
                            <div class="row py-4 w-100">
                                <div class="col-12 col-lg-4 col-xl-3 mb-4 mb-lg-0 d-none d-xl-block">
                                    <div class="discribe-submenu">
                                        <strong> دامین یا دامنه </strong>
                                        <p class="mb-0">
                                            </p><p>چنانچه می خواهید برای موسسه
        خود سایت ایجاد نمایید اولین قدم ثبت یک نام برای سایت می باشد به این نام
        که به صورت انحصاری ثبت می گردد دامنه یا Domain می گویند هر نام از دو
        قسمت تشکیل شده است که با نقطه از یکدیگر جدا می شوند قسمت اول که قسمت
        اصلی نام بوده و می تواند نام موسسه یا نام محصول ویا هر نام دلخواه دیگر
        (به شرط آنکه قبلا توسط شخص دیگری ثبت نشده باشد) باشد و قسمت دوم که شناسه
         نام یا پسوند می باشد و با توجه به نوع سایت می توان آنرا انتخاب نمود.</p>
                                        <p></p>
                                    </div>
                                </div>

                                <div class="col-12 col-xl-9 pr-xl-5">



                                     <div class="row border-row">
                                             <div class="col-12 col-sm-4 col-md-3 col-xl-4 border-right-blue mb-4">
                                                <div class="submenu-links">
                                                    <strong>
                                                          دامین                                            </strong>
                                                    <ul>
                                                            <li>
                                                                <a href="{{route('index.check')}}" title="جستجوی دامنه" target=""> جستجوی دامنه </a>
                                                            </li>
                                                    </ul>
                                                </div>
                                            </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-submenu">
                            <a href="{{route('index.check')}}" title="جستجوی دامنه"> جستجوی دامنه </a>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link menu-togglers toggle-submenu" href="#">
                        <span class="menu-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                            </svg>
                        </span>
                        خدمات و سرویس ها
                    </a>
                    <div class="submenu">
                        <div class="container-fluid">
                            <div class="row py-4 w-100">
                                <div class="col-12 col-lg-4 col-xl-3 mb-4 mb-lg-0 d-none d-xl-block">
                                    <div class="discribe-submenu">
                                        <strong>   خدمات ایرانی نیک   </strong>
                                        <p class="mb-0">
                                            </p><p>
                                                ایرانی نیک با ارائه انواع مختلف سرویس میزبانی روی اینترنت متناسب با هر بودجه، امکان معرفی موسسه شما بر روی اینترنت را فراهم آورده است سرورهای پر سرعت ایرانی نیک جایگاه مناسبی برای سایت شما می باشند. در حال حاضر ایرانی نیک مجهز به چندین سرویس دهنده اختصاصی بوده و کلیه سرور ها در ایران و کانادا نگهداری می شوند ...
                                            </p>
                                        <p></p>
                                    </div>
                                </div>

                                <div class="col-12 col-xl-9 pr-xl-5">



                    @foreach ($listpages->chunk(3) as $chunk)
                                    <div class="row border-row">
                                        @foreach ($chunk as $key => $listpage)
                                            <div class="col-12 col-sm-4 col-md-3 col-xl-4 border-right-blue mb-4">
                                                <div class="submenu-links">
                                                    <strong>
        خدمات                                            </strong>
                                                    <ul>
                                                            <li>
                                                                <a href="{{ route('index.page', $listpage->title) }}" title="{{$listpage->title}}" target=""> {{$listpage->title}}</a>
                                                            </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-submenu">

                    @foreach ($listpages as $listpage)
                            <a href="{{ route('index.page', $listpage->title) }}" title="{{$listpage->title}}"> {{$listpage->title}}</a>
                            @endforeach
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link menu-togglers toggle-submenu" href="{{route('index.document.index')}}">
                           راهنمای وب سرویس
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-togglers toggle-submenu" href="{{route('index.faqs')}}">
                        سوالات متداول
                    </a>
                </li>


            <li class="nav-item">
                <a class="nav-link menu-togglers toggle-submenu" href="{{route('index.support')}}">
                    تماس با ما
                </a>
            </li>


        </ul>
        </div>
        </div>
        <div class="w-100 d-block d-lg-none pl-3"><a class="navbar-brand" href="#">
            <img class="img-fluid" src="{{asset('indexhost_files/iranHost-Logo.svg')}}" alt="logo" loading="lazy">
        </a></div>
    </div>

    </div>
    </nav></div>



    @yield('banner')


        </header>

