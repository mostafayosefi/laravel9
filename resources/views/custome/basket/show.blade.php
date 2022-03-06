  @component('custome.layouts.content', [
    'title'=>'سبدخرید من ',
    'tabTitle'=>'سبدخرید من',
      'breadcrumb' => [['title' => 'لیست سبدخرید من ', 'url' => route('user.basket.index')], ['title' => 'مشاهده سبدخریدمن  ',
      'class' => 'active']],
      ])


      <div class="row">



@if($order == Null)
@include('admin.errors.404')
@elseif($order != Null)

          <div class="col-12 col-xl-12 stretch-card">
              <div class="row flex-grow">
                  <div class="col-md-12 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">
                              <div class="card-header card-header-border-bottom">
                                  <h4>مشاهده سفارش </h4>
                              </div>
<br>

@include('custome.order.table_show', [ 'route' => route('user.basket.store', $order) ,   $order  , $contacts , 'tablee' => 'basket'])

                          </div>
                      </div>
                  </div>
                  <div class="col-md-12 grid-margin stretch-card">
                  </div>
              </div>
          </div>
          @endif
      </div>

      @slot('script')
      @endslot
  @endcomponent
