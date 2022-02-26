@component('custome.layouts.content',[
    'title'=>'سفارش های من ',
    'tabTitle'=>'سفارش های من',
    'breadcrumb'=>[
            ['title'=>'سفارش های من','class' => 'active']
    ]])



@slot('style')
<link rel="stylesheet" href="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('template/assets/fonts/feather-font/css/iconfont.css') }}">

 @endslot







<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">سفارش های من</h6>
          <div class="table-responsive">

@if($orders)
            <table id="dataTableExample" class="table">
              <thead>
                <tr>

                    <th>  ردیف </th>
                    <th>  نام دامنه </th>
                    <th>  هزینه </th>
                    <th> تاریخ ثبت </th>
                    <th> وضعیت</th>
                    <th> مشاهده</th>
                    <th> حذف</th>

                </tr>
              </thead>
              <tbody>


@foreach($orders as $key => $admin)
                <tr>
                    <td>{{ $key + 1 }}</td>


                    <td>{{$admin->domain}}</td>
                    <td>{{number_format($admin->price)}} ريال</td>
                    <td>{{ date_frmat($admin->created_at) }}</td>
                    <td>{{$admin->status}}</td>

 <td>
    <a href="{{ route('user.order.show', $admin) }}">
        <span class="btn btn-primary" >  <i data-feather="eye"></i></span>
        </a>

</td>


        <td>
                    @if($admin->status=='rezerve')

             @include('admin.layouts.table.modal', [$admin ,'route' => route('user.order.destroy', $admin) , 'myname' => 'حذف سفارش '.$admin->domain ])

        @else
        -
        @endif
        </td>



                </tr>
@endforeach



              </tbody>
            </table>

@endif

          </div>
        </div>
      </div>
    </div>
  </div>







    @slot('script')

    <script src="{{ asset('template/assets/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('template/assets/vendors/datatables.net/jquery.dataTables-ltr.js') }}"></script>
    <script src="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4-ltr.js') }}"></script>
    <script src="{{ asset('template/assets/js/data-table-ltr.js') }}"></script>
    @endslot
@endcomponent
