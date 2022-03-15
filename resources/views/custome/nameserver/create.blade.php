  @component('custome.layouts.content', [
      'title' => 'تغییر نیم سرور ',
      'tabTitle' => 'تغییر نیم سرور ',
      'breadcrumb' => [['title' => 'لیست درخواستهای تغییر نیم سرور       ', 'url' => route('user.nameserver.index')], ['title' => 'تغییر نیم سرور    ',
      'class' => 'active']],
      ])

@include('index.layouts.elementor.txtdese', [ 'id' => '10' ])


<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">تغییر Nameserver   </h6>

                <form class="forms-sample" method="POST"  action="{{route('user.nameserver.store')}}" style="direction: ltr;"
                enctype="multipart/form-data" onsubmit="return Validate(this);">
                @csrf


                @include('admin.layouts.errors')

                    <div class="form-group row">
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-8">
                            <label  class="{{ $errors->has('domain') ? 'red' : '' }}"  >    دامنه </label>
                            <input id="domain" class="form-control" name="searchdomain" type="text"  value="{{old('domain')}}"   required="required"  style="height: 50px;">

                            <div class="card-footer">
                                <button type="submit"  class="btn btn-primary btn-lg">بررسی تغییر نیم سرور    </button>
                           </div>

                        </div>
                        <div class="col-md-2">

                        </div>
                    </div>







                </form>







            </div>
        </div>
    </div>
</div>





      @slot('script')
      @endslot
  @endcomponent
