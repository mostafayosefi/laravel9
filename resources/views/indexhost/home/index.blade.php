@component('indexhost.layouts.content', [
    'title' => $mysetting->title,
    'tabTitle' => $mysetting->title,
    'breadcrumb' => [['title' => $mysetting->title, 'class' => 'active']],
    'calass_index' => 'search-domains',
    ])
    <style>
        .image_comid {
            width: 100px;
            margin-bottom: 2rem;
            margin-top: 1rem;
        }

        .image_comid1 {
            margin-bottom: .5rem;
            width: 100px;

        }

        .www {
            direction: ltr;
            padding: 5px 0;
            font-size: 1.5rem;
            letter-spacing: 3px;
            margin-right: .5rem;
            color: #adb5bd;
        }

    </style>



    @slot('banner')
        @foreach ($spotlites as $key => $spotlite)
            @if ($spotlite->id == '1')
                @include('indexhost.layouts.banner', [
                    'inpage' => 'spotlite',
                    'mytext' => $spotlite,
                    'id' => '7',
                ])
            @endif
        @endforeach
    @endslot

    <section id="domian-search">
        <div class="container">
            <div class="row row-reverse">
            </div>
        </div>
    </section>


 

    @foreach ($comidsfirst->chunk(3) as $chunk)
        <section id="services" class="services">
            <div class="container-fluid">
                <h2 class="section-titr text-center  fs-23 fs-lg-26 fs-xl-32">خدمات و سرویس های ما </h2>
                <div class="row justify-content-center">

                    @foreach ($chunk as $key => $comid)
                        <div class="col-lg-3 col-md-6 col-xs-12 d-flex plan-card align-items-stretch px-2 px-xl-3">
                            <div class="card">
                                <div class="card-body text-center"><img src="{{ asset($comid->image) }}"
                                        alt="{{ $comid->title }}" loading="lazy" class="image_comid">
                                    <h3 class="card-titr  fs-20 fs-xl-24"><strong>{{ $comid->title }}</strong></h3>
                                    <p class="card-text text-center fs-14 fs-xl-16" style="text-align: justify;">
                                        {{ $comid->text }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
    @endforeach





    @foreach ($spotlites as $key => $spotlite)
        @if ($spotlite->id == '2')
            <section id="services">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-last order-lg-first mt-4 mt-lg-0">
                            <div class="overlay-box-border">
                                @php echo $spotlite->text; @endphp
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex our-services col-img shrink-md"><img
                                src="{{ asset($spotlite->image) }}" alt="" loading="lazy"></div>
                    </div>
                </div>
            </section>
        @endif
    @endforeach



    <section id="features" class="mid-menu features-4col">
        <div class="container-fluid">
            <h2 class="section-titr text-center fs-23 fs-lg-26 fs-xl-32 px-4 px-sm-0">سایر خدمات ما</h2>
            @foreach ($comidssec->chunk(4) as $chunk)
                <div class="row">
                    @foreach ($chunk as $key => $comid)
                        <div class="col-lg-3 col-md-4 col-sm-6 feature-box features-box text-center">
                            <img class="align-self-center" src="{{ asset($comid->image) }}" alt="{{ $comid->title }}"
                                loading="lazy" class="image_comid1"> <strong
                                class="feature-item fs-14 fs-xl-16 d-block">{{ $comid->title }}</strong>
                        </div>
                    @endforeach
                </div>
            @endforeach

        </div>
    </section>




    @foreach ($spotlites as $key => $spotlite)
        @if ($spotlite->id == '3')
            <section id="information">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-12 text-left"><img src="{{ asset($spotlite->image) }}" alt=""
                                loading="lazy"></div>
                        <div class="col-lg-6 col-sm-12 mt-4 mt-lg-0">

                            @php echo $spotlite->text; @endphp
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endforeach




    <!-- ends first section -->
    <!-- starts first section -->
    <section id="sixth-section" class="full-height panel" data-section="4">
        <div class="container-fluid">
            <div class="row mx-0">
                <div class="w-100 customers-clip">
                    <div class="card customers card-body">
                        <div class="customers-header">
                            <h2 class="fs-23 fs-lg-26 fs-xl-32 text-center"> نظرات مشتریان </h2>
                        </div>
                        <div>
                            <div class="row justify-content-center align-items-center mb-4">

                            </div>
                        </div>
                        <div class="splide customer-slider splide--loop splide--ltr splide--draggable is-active"
                            id="splide01" style="visibility: visible;">
                            <div class="splide__arrows"><button class="splide__arrow splide__arrow--prev" type="button"
                                    aria-controls="splide01-track" aria-label="Go to last slide"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                                        <path
                                            d="M15.46 1.41547C15.46 0.524103 14.3834 0.077703 13.7537 0.707996L0.626552 13.8489C0.236232 14.2396 0.236231 14.8731 0.626551 15.2638L13.7537 28.4047C14.3834 29.035 15.46 28.5886 15.46 27.6972V14.5563V1.41547Z">
                                        </path>
                                    </svg></button><button class="splide__arrow splide__arrow--next" type="button"
                                    aria-controls="splide01-track" aria-label="Next slide"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                                        <path
                                            d="M15.46 1.41547C15.46 0.524103 14.3834 0.077703 13.7537 0.707996L0.626552 13.8489C0.236232 14.2396 0.236231 14.8731 0.626551 15.2638L13.7537 28.4047C14.3834 29.035 15.46 28.5886 15.46 27.6972V14.5563V1.41547Z">
                                        </path>
                                    </svg></button></div>
                            <div class="splide__track" dir="ltr" id="splide01-track">
                                <ul class="splide__list" dir="ltr" id="splide01-list"
                                    style="transform: translateX(-2356px);">


                                    @foreach ($coment as $comid)
                                        <li class="splide__slide splide__slide--clone" style="width: 589px;">
                                            <div class="review">
                                                <div class="d-flex align-items-center mb-2">
                                                    {{-- <img class="img-fluid" src="{{asset('indexhost_files/1.png')}}" alt="" loading="lazy"> --}}
                                                    <div class="d-flex flex-column">
                                                        <div>
                                                            <strong class="fs-16 fs-lg-20">{{ $comid->title }}
                                                            </strong><br>
                                                            <strong class="fs-12 fs-lg-15">{{ $comid->role }} </strong>
                                                        </div>
                                                        <div class="star-rates"><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="16" height="16" fill="#fcaf17"
                                                                class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="#fcaf17" class="bi bi-star-fill"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="#fcaf17" class="bi bi-star-fill"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="#fcaf17" class="bi bi-star-fill"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="#fcaf17" class="bi bi-star-fill"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                </path>
                                                            </svg></div>
                                                    </div>
                                                </div>
                                                <div class="fs-14 fs-xl-16 text-ellipsing">{{ $comid->text }}</div>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ends first section -->
    <!-- footer -->





    @foreach ($spotlites as $key => $spotlite)
        @if ($spotlite->id == '4')
            <section id="services2">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-img shrink-md z-index-minus-2">
                            <img src="{{ asset($spotlite->image) }}" alt="" loading="lazy">
                        </div>
                        <div class="col-lg-6">
                            <div class="overlay-box-bg-2">
                                @php echo $spotlite->text; @endphp

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endforeach





    <section id="sixth-section" class="full-height panel" data-section="4">
        <div class="container-fluid">
            <div class="row mx-0">
                <div class="w-100 customers-clip">
                    <div class="card customers card-body">
                        <div class="customers-header">
                            <h2 class="fs-23 fs-lg-26 fs-xl-32 text-center"> تماس با ما </h2>
                        </div>
                        <div>
                            <div class="row justify-content-center align-items-center mb-4">

                                <div class="banner">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-5 col-xs-12 banner-text">


                                                <p>جهت کسب اطلاعات بیشتر و درخواست خرید، فرم روبرو را تکمیل نمایید.
                                                    همکاران ما در اسرع وقت با شما تماس خواهند گرفت.</p>

                                            </div>
                                            <div class="col-lg-7 text-left">


                                                <div class="row mt-4 d-flex justify-content-center"
                                                    ng-show="!vm.showCompleteForm">
                                                    <div class="col">


                                                        @include('indexhost.layouts.form_errors')



                                                        <form    action="{{ route('index.support.post') }}" method="post">



 @csrf                                        <input type="hidden" name="from" value="index">


                        <div class="align-items-center">


                                <div class="">
                                 <div class="input-group py-2">
                                      <input type="text" class="form-control form-control-lg text-left"  value="{{ old('name') }}"
                                      placeholder="نام و نام خانوادگی" dir="ltr" name="name" required="required" >
                                       <label for="name"></label>
                                   </div>
                                </div>

                                <div class="">
                                 <div class="input-group py-2">
                                      <input type="text" class="form-control form-control-lg text-left"  value="{{ old('email') }}"
                                      placeholder="ایمیل" dir="ltr" name="email" required="required" >
                                       <label for="email"></label>
                                   </div>
                                </div>

                                <div class="">
                                 <div class="input-group py-2">
                                      <input type="text" class="form-control form-control-lg text-left"  value="{{ old('tell') }}"
                                      placeholder="شماره تماس" dir="ltr" name="tell" required="required" >
                                       <label for="tell"></label>
                                   </div>
                                </div>

                                <div class="">
                                 <div class="input-group py-2">
                                    <textarea
                                    class="form-control form-control-lg text-right"
                                    name="text"   rows="4" placeholder="پیام شما"
                                    required="required" aria-required="true"  dir="ltr">{{ old('text') }}</textarea>
                                       <label for="text"></label>
                                   </div>
                                </div>


                                <div class="">
                                    <div class="input-group py-2">
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                            </div>
                            </div>

                                                                <div class="mt-3">
                                                                    <button type="submit" class="btn-cta_register" >ثبت درخواست</button>  </div>
                                                            </div>
                                                        </form>




                                                    </div>
                                                </div><!-- ngIf: vm.showCompleteForm -->


                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endcomponent
