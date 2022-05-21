
<section id="footer" class="full-height panel d-flex align-items-end" data-section="5">
    <div class="w-100">
    <div class="container-fluid">
    <div class="row">
    <div class="col-12 col-sm-6 col-lg-5 enamads">

        {{-- <a referrerpolicy="origin" target="_blank" href="https://trustseal.enamad.ir/?id=269117&amp;Code=dZG0BcDPulrlSm6USxI2">
    <img referrerpolicy="origin" src="https://Trustseal.eNamad.ir/logo.aspx?id=269117&amp;Code=dZG0BcDPulrlSm6USxI2" alt="" style="cursor:pointer" id="dZG0BcDPulrlSm6USxI2"></a> --}}

    <a  target="_blank" href="https://trustseal.enamad.ir/?id=269117&amp;Code=dZG0BcDPulrlSm6USxI2">
        <img class="img-fluid"  src="{{asset('indexhost_files/enemad.png')}}"  alt="اینماد ایرانی نیک" width="70" loading="lazy"  id="dZG0BcDPulrlSm6USxI2"> </a>


        {{-- <a href="#"> <img class="img-fluid" src="{{asset('indexhost_files/enemad.png')}}" alt="اینماد ایرانی نیک" width="70" loading="lazy"> </a> --}}
        <a href="#"> <img class="img-fluid" src="{{asset('indexhost_files/melat.svg')}}" alt="به پرداخت ملت" loading="lazy"> </a></div>
    </div>
    </div>
    <div class="footer">
    <div class="container-fluid">
    <div class="row">
    <div class="col-12 col-lg-5">
    <div class="footer-content footer-border d-flex flex-column">
    <div class="pl-5 d-xxxl-block"><strong class="fs-16 fs-lg-20">درباره ما</strong>
    <p class="text-justify fs-14 fs-xl-16">{{$setting->discription}} </p>
    </div>
    <div class="socials order-2 order-xxxl-1">
        <a href="{{$setting->instagram}}" target="_blank" rel="noopener"> <img class="img-fluid" src="{{asset('indexhost_files/insta.svg')}}" alt="لینک اینستاگرام ایرانی نیک " loading="lazy"> </a>
        <a href="{{$setting->facebook}}" target="_blank" rel="noopener"> <img class="img-fluid" src="{{asset('indexhost_files/facebook.svg')}}" alt="لینک فیسبوک ایرانی نیک" loading="lazy"> </a>
        <a href="#" target="_blank" rel="noopener"> <img class="img-fluid" src="{{asset('indexhost_files/linkdin.svg')}}" alt="لینک لیندکدین ایرانی نیک" loading="lazy"> </a>
        <a href="{{$setting->telegram}}" target="_blank" rel="noopener"> <img class="img-fluid" src="{{asset('indexhost_files/teleg.svg')}}" alt="لینک تلگرام ایرانی نیک" loading="lazy"> </a>
         <a href="{{$setting->twitter}}" target="_blank" rel="noopener"> <img class="img-fluid" src="{{asset('indexhost_files/twitter.svg')}}" alt="لینک تویتر ایرانی نیک" loading="lazy"> </a>
         <a href="#" target="_blank" rel="noopener"> <img class="img-fluid" src="{{asset('indexhost_files/aparat.svg')}}" alt="لینک آپارات ایرانی نیک" loading="lazy"> </a></div>
    <div class="contact order-1 order-xxxl-2"><strong class="fs-16 fs-lg-20">ارتباط با ما</strong>
    <div><span class="fs-14 fs-xl-16"> <img class="img-fluid ml-3" src="{{asset('indexhost_files/location.svg')}}" alt="آدرس" loading="lazy">{{$setting->address}}</span></div>
    <div class="mb-2"><img class="img-fluid ml-3" src="{{asset('indexhost_files/phone.svg')}}" alt="تلفن تماس" loading="lazy"> <a class="fs-14 fs-xl-16" href="tel: 02183305"> {{$setting->tell}} </a>  </div>
    <div class="mb-2"><a class="fs-14 fs-xl-16"> <img class="img-fluid ml-3" src="{{asset('indexhost_files/fax.svg')}}" alt="شماره فکس" loading="lazy"> {{$setting->tell}} </a></div>
    </div>
    <div class="row justify-content-center mt-4 d-xxxl-none order-3">&nbsp;</div>
    </div>
    </div>
    <div class="col-12 col-lg-7 mt-5 mt-lg-0">
    <div class="row mx-0 footer-links">
    <div class="col-6 col-md-4 col-4 px-0">
    <div class="mb-3"><strong class="fs-16 fs-lg-20">صفحات داخلی</strong>
    <ul>
    <li><a class="fs-14 fs-xl-16" href="{{route('index.home')}}"> خانه </a></li>
    <li><a class="fs-14 fs-xl-16" href="{{route('index.document.index')}}"> راهنمای وب سرویس </a></li>
    <li><a class="fs-14 fs-xl-16" href="{{route('index.faqs')}}"> سوالات متداول </a></li>
    <li><a class="fs-14 fs-xl-16" href="{{route('index.support')}}">تماس با ما</a></li>
    </ul>
    </div>
    </div>
    <div class="col-6 col-md-4 col-4 px-0">

        <div><strong class="fs-16 fs-lg-20">محیط کاربر </strong>
            <ul>

    @if(auth()->guard('user')->user())
    <li><a class="fs-14 fs-xl-16" href="{{route('user.panel.index')}}">پنل کاربر </a></li>
    @else
    <li><a class="fs-14 fs-xl-16" href="{{route('index.user.login')}}">ورود </a></li>
    <li><a class="fs-14 fs-xl-16" href="{{route('index.user.register')}}">   ثبت نام </a></li>

    @endif

            </ul>
            </div>
    </div>
    <div class="col-6 col-md-4 col-4 px-0">

        <div><strong class="fs-16 fs-lg-20">خدمات ایرانی نیک   </strong>
            <ul>

                @foreach ($listpages as $listpage)
            <li><a class="fs-14 fs-xl-16" href="{{ route('index.page', $listpage->title) }}">{{$listpage->title}} </a></li>
            @endforeach
            </ul>
            </div>

    </div>


    </div>
    <hr class="divider">
    <div class="row footer-links footer-links2 mx-0 ml-lg-n4 mr-lg-4">
        <div class="pl-5 d-xxxl-block"><strong class="fs-16 fs-lg-20">درباره ما</strong>
            <p class="text-justify fs-14 fs-xl-16">{{$setting->description}} </p>
            </div>
    </div>
    <div class="row mt-4 d-none d-xxxl-flex">&nbsp; </div>
    </div>
    </div>
    </div>
    <small class="mb-0 copyright">{{$setting->fcopy}} </small></div>

    </div>
    </section>
