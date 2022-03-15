@component('custome.layouts.content',[
    'title'=>'داشبورد من ',
    'tabTitle'=>'داشبورد من',
    'breadcrumb'=>[
            ['title'=>'داشبورد من','class' => 'active']
    ]])



@slot('style')




 @endslot




 <div class="row">
    <div class="col-12 col-xl-12 stretch-card"   >
      <div class="row flex-grow">
        <div class="col-md-4 grid-margin stretch-card">
@include('custome.dashboard.card', [  'icon_card' => 'user'    , 'count_card' => count_dashboard($dash_id,'contact') , 'title_card' => 'اکانت های من' , 'desc_card' => 'اکانت' ,
'route_create' => route('user.contact.create') ,  'route_index' => route('user.contact.index') , 'new_card' => '' ])
        </div>
        <div class="col-md-4 grid-margin stretch-card">
@include('custome.dashboard.card', [  'icon_card' => 'hard-drive'    , 'count_card' => count_dashboard($dash_id,'domain')  , 'title_card' => 'دامنه های من' , 'desc_card' => 'دامنه' ,
'route_create' => route('user.domain.check.custome') ,  'route_index' => route('user.domain.basket.index') , 'new_card' => '' ])
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            @include('custome.dashboard.card', [  'icon_card' => 'check-square'    , 'count_card' => count_dashboard($dash_id,'renew')  , 'title_card' => 'درخواستهای تمدید دامنه' , 'desc_card' => 'درخواست تمدید ' ,
'route_create' => route('user.domain.renew.create') ,  'route_index' => route('user.domain.renew.index') , 'new_card' => '' ])
        </div>
      </div>
    </div>
  </div>


 <div class="row">
    <div class="col-12 col-xl-12 stretch-card"   >
      <div class="row flex-grow">


        <div class="col-md-4 grid-margin stretch-card">
            @include('custome.dashboard.card', [  'icon_card' => 'check-square'    , 'count_card' => count_dashboard($dash_id,'transfer')  , 'title_card' => 'درخواستهای انتقال دامنه' , 'desc_card' => 'درخواست انتقال دامنه ' ,
'route_create' => route('user.domain.transfer.create') ,  'route_index' => route('user.domain.transfer.index') , 'new_card' => '' ])
        </div>

        <div class="col-md-4 grid-margin stretch-card">
            @include('custome.dashboard.card', [  'icon_card' => 'check-square'    , 'count_card' => count_dashboard($dash_id,'nameserver')  , 'title_card' => 'درخواستهای تغییر نیم سرور' , 'desc_card' => 'درخواست تغییر نیم سرور ' ,
'route_create' => route('user.nameserver.create') ,  'route_index' => route('user.nameserver.index') , 'new_card' => '' ])
        </div>


        <div class="col-md-4 grid-margin stretch-card">
@include('custome.dashboard.card', [  'icon_card' => 'mail'    , 'count_card' => count_dashboard($dash_id,'ticket')  , 'title_card' => 'تیکت های من' , 'desc_card' => 'تیکت' ,
'route_create' => route('user.ticket.create') ,  'route_index' => route('user.ticket.index') , 'new_card' =>    count_dashboard($dash_id,'ticket')." تیکت جدید"   ])
        </div>
        </div>
        </div>
        </div>



    @slot('script')
    <script src="{{ asset('template/assets/js/dashboard.js') }}"></script>
    @endslot
@endcomponent
