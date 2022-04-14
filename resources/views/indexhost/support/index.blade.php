@component('indexhost.layouts.content', [
    'title' => 'تماس با ما ',
    'tabTitle' => 'تماس با ما ',
    'breadcrumb' => [['title' =>'تماس با ما ', 'class' => 'active']],
    'calass_index' => 'domain',
    ])


<section id="domian-search">
    <div class="container">
        <div class="row row-reverse">






            <div class="row">
                <div class="col-lg-4 col-xs-12 banner-text">


                    @include('indexhost.layouts.txtdeses', [ 'id' => '4' ])



                </div>
                <div class="col-lg-8 text-right">


                    <div class="row mt-4 d-flex justify-content-center"
                        ng-show="!vm.showCompleteForm">
                        <div class="col">


                            @include('indexhost.layouts.form_errors')




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
</section>



@endcomponent
