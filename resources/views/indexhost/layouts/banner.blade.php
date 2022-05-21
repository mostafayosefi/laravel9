
<div class="banner">
    <div class="container-fluid">


    @if($inpage=='spotlite')
    <div class="row">
    <div class="col-lg-7 col-xs-12 banner-text">
        @php
            echo $mytext->text;
        @endphp

@if($mytext->id=='1')
<div class="banner-buttons">
        @if(auth()->guard('user')->user())
        <a class="btn-cta_banner btn-cta_banner-1" href="{{route('index.check')}}" data-target="plans">خرید  </a>
        @else
        <a class="btn-cta_banner btn-cta_banner-1" href="{{route('index.user.register')}}" data-target="plans">ثبت نام</a>
        <a class="btn-cta_banner btn-cta_banner-2" href="{{route('index.user.login')}}" data-target="pivot">ورود</a>
        @endif
 </div>
 @endif
    </div>

    <div class="col-lg-5 text-left">
        <img class="header-img"   src="{{asset('indexhost_files/index7.png')}}" alt="" loading="lazy">
    </div>
    </div>
    @endif



    {{-- textdeses --}}

    @if($inpage=='textdeses')
    @foreach ($textdeses as $textdese )
    @if($textdese->id==$id)
    @if($id=='7')
    <div class="row row-reverse pb-4">
        <div class="col-lg-12 col-xs-12 banner-text pb-0 pt-4">
        <h1 class="fs-25 fs-md-35 fs-xl-40"><strong>جستجوی دامنه</strong></h1>
        </div>
        <div class="col-lg-8 offset-lg-2">
        <p class="text-center fs-14 fs-xl-16">نام دامنه‌، باید <strong>ساده</strong>، <strong>کوتاه</strong> و <strong>قابل فهم</strong> باشد.</p>


        @if(isShow(['index.check']))
        <form method="post" action="{{route('index.check.post')}}" >
            @elseif(isShow(['user.domain.check']))
            <form  method="post" action="{{route('user.domain.check.post')}}" >

            @endif
            @csrf



        <div class="domain-selector d-flex justify-content-center">
        <div class="input-group-append"><button class="btn btn-primary cta btn-search-domain " title="نمایش پیام موقت" type="submit"> <svg class="bi" width="20" height="20" fill="currentColor">
            <use xlink:href="{{ asset('indexhost_files/bootstrap-icons.svg#search') }}"></use></svg> </button></div>
        <input class="domain-text form-control form-control-lg text-left" dir="ltr" name="searchdomain" required type="text"
        placeholder="دامین مورد نظر را وارد کنید"    onkeyup="this.value=this.value.toLowerCase()" > <span class="www">www.</span></div>
        </form></div>
        </div>

    @else

    <div class="row">
    <div class="col-lg-7 col-xs-12 banner-text">
            @php
            echo $textdese->text;
            @endphp
        </div>
        <div class="col-lg-5 text-left">
        <img class="header-img"   src="{{asset('indexhost_files/index7.png')}}" alt="" loading="lazy">
        </div>
        </div>

    @endif
    @endif
    @endforeach
    @endif





    </div>
</div>
