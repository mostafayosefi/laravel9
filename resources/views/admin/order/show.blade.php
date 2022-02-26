  @component('admin.layouts.content', [
      'title' => 'مشاهده سفارش دامنه',
      'tabTitle' => 'مشاهده سفارش دامنه',
      'breadcrumb' => [['title' => 'مشاهده سفارش دامنه   ', 'url' => route('admin.order.index')], ['title' => 'اطلاعت سفارش',
      'class' => 'active']],
      ])


@slot('style')
@endslot

      <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
              <div class="row flex-grow">


                  <div class="col-md-1 grid-margin stretch-card">
                  </div>


                  <div class="col-md-10 grid-margin stretch-card">



                    <div class="card">
                        <div class="card-body">

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>

                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td> کاربر  </td>
                                        <td> {{ $order->user->name }}</td>
                                    </tr>

                                    <tr>
                                        <td>  اکانت</td>
                                        <td> {{ $order->contact->full_name }}</td>
                                    </tr>

                                    <tr>
                                        <td>نام دامنه</td>
                                        <td> {{ $order->domain }}</td>
                                    </tr>
                                    <tr>
                                        <td>هزینه دامنه</td>
                                        <td> {{ $order->price }} ريال</td>
                                    </tr>


                                    <tr>
                                        <td>تاریخ ثبت </td>
                                        <td>{{ date_frmat($order->created_at) }}</td>
                                    </tr>

                                    <tr>
                                        <td> وضعیت پرداخت</td>
                                        <td> @include('index.layouts.table.getstatus', ['admin' => $order ,'route' => ''
                                            ,'type_name' => 'status_order' ]) </td>

                                    </tr>


                        </tbody>
                    </table>









{{--



                              <div class="card-header card-header-border-bottom">
                                  <h4>اطلاعات اکانت کاربر </h4>
                              </div>



                              <div class="row" >
                                <div class="col-8 col-xl-8 ">
                            <ul class="list-group">
                                <li class="list-group-item active">  {{  $contact->nikname }} </li>
                                <li class="list-group-item  "> {{  $contact->nikname }} </li>

                              </ul>
                            </div>
                            <div class="col-4 col-xl-4  ">
                                <ul class="list-group">
                                    <li class="list-group-item  active"> هزینه دلاری</li>
                                    <li class="list-group-item  "> {{  $contact->nikname }} </li>
                                </ul>
                            </div>
                            </div>



                            <div class="row" >
                                <div class="col-12 col-xl-12 ">
                            <ul class="list-group">
                                <li class="list-group-item active"> کاربر :  {{  $contact->user->name }} </li>
                              </ul>
                            </div>
                            </div>


 --}}



</div>
</div>

                  </div>



                  <div class="col-md-1 grid-margin stretch-card">
                  </div>



              </div>
          </div>
      </div>













      @slot('script')
      @endslot
  @endcomponent
