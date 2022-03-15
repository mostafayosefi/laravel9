
@component('admin.layouts.content',[
    'title'=>'داشبورد',
    'tabTitle'=>'داشبورد',
    'breadcrumb'=>[
            ['title'=>'داشبورد', 'url' => route('admin.dashboard')]
    ]])




<div class="row">
    <div class="col-12 col-xl-12 stretch-card"   >
      <div class="row flex-grow">
        <div class="col-md-4 grid-margin stretch-card">
@include('custome.dashboard.card', [  'icon_card' => 'user'    , 'count_card' => count_dashboard('all','contact') , 'title_card' => 'اکانت های کاربران' , 'desc_card' => 'اکانت' ,
'route_create' => '' ,  'route_index' => route('admin.contact.index') , 'new_card' => '' ])
        </div>
        <div class="col-md-4 grid-margin stretch-card">
@include('custome.dashboard.card', [  'icon_card' => 'hard-drive'    , 'count_card' => count_dashboard('all','domain')  , 'title_card' => 'دامنه های کاربران' , 'desc_card' => 'دامنه' ,
'route_create' => '' ,  'route_index' => route('admin.order.index') , 'new_card' => '' ])
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            @include('custome.dashboard.card', [  'icon_card' => 'check-square'    , 'count_card' => count_dashboard('all','renew')  , 'title_card' => 'درخواستهای تمدید دامنه' , 'desc_card' => 'درخواست تمدید ' ,
'route_create' => '' ,  'route_index' => route('admin.domain.renew.index') , 'new_card' => '' ])
        </div>
      </div>
    </div>
  </div>


 <div class="row">
    <div class="col-12 col-xl-12 stretch-card"   >
      <div class="row flex-grow">


        <div class="col-md-4 grid-margin stretch-card">
            @include('custome.dashboard.card', [  'icon_card' => 'check-square'    , 'count_card' => count_dashboard('all','transfer')  , 'title_card' => 'درخواستهای انتقال دامنه' , 'desc_card' => 'درخواست انتقال دامنه ' ,
'route_create' => '' ,  'route_index' => route('admin.domain.transfer.index') , 'new_card' => '' ])
        </div>

        <div class="col-md-4 grid-margin stretch-card">
            @include('custome.dashboard.card', [  'icon_card' => 'check-square'    , 'count_card' => count_dashboard('all','nameserver')  , 'title_card' => 'درخواستهای تغییر نیم سرور' , 'desc_card' => 'درخواست تغییر نیم سرور ' ,
'route_create' => '' ,  'route_index' => route('admin.nameserver.index') , 'new_card' => '' ])
        </div>


        <div class="col-md-4 grid-margin stretch-card">
@include('custome.dashboard.card', [  'icon_card' => 'mail'    , 'count_card' => count_dashboard('all','ticket') , 'title_card' => 'تیکت های کاربران' , 'desc_card' => 'تیکت' ,
'route_create' => '' ,  'route_index' => route('admin.ticket.index') , 'new_card' =>    count_dashboard('all','ticket')." تیکت جدید"    ])
        </div>
        </div>
        </div>
        </div>



    @slot('script')
    <script src="{{ asset('template/assets/js/dashboard.js') }}"></script>
    @endslot
@endcomponent
