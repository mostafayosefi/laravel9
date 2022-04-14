@component('indexhost.layouts.content', [
    'title' => 'ورود کاربر',
    'tabTitle' => 'ورود کاربر',
    'breadcrumb' => [['title' => 'ورود کاربر', 'class' => 'active']],
    'calass_index' => 'domain',
    ])


<section id="domian-search">
    <div class="container">
        <div class="row row-reverse">






            <div class="row">
                <div class="col-lg-5 col-xs-12 banner-text">


                    @include('indexhost.layouts.txtdeses', [ 'id' => '2' ])



                </div>
                <div class="col-lg-7 text-right">


                    <div class="row mt-4 d-flex justify-content-center"
                        ng-show="!vm.showCompleteForm">
                        <div class="col">


                            @include('indexhost.layouts.form_errors')



                            <form    action="{{ route('index.user.login.post') }}" method="post">



@csrf                                        <input type="hidden" name="from" value="index">


<div class="align-items-center">



    <div class="">
     <div class="input-group py-2">
          <input type="text" class="form-control form-control-lg text-left"  value="{{ old('email') }}"
          placeholder="ایمیل" dir="ltr" name="email" required="required" >
           <label for="email"></label>
       </div>
    </div>

    <div class="">
     <div class="input-group py-2">
          <input type="password" class="form-control form-control-lg text-left"  value="{{ old('password') }}"
          placeholder="رمزعبور" dir="ltr" name="password" required="required" >
           <label for="tell"></label>
       </div>
    </div>


    <div class="">
        <div class="input-group py-2">
    {!! NoCaptcha::renderJs() !!}
    {!! NoCaptcha::display() !!}
</div>
</div>

                                    <div class="mt-3">
                                        <button type="submit" class="btn-cta_register" >  ورود</button>  </div>
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
