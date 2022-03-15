@component('admin.layouts.content',[
    'title'=>'مدیریت انتقال دامنه ',
    'tabTitle'=>'مدیریت انتقال دامنه',
    'breadcrumb'=>[
            ['title'=>'مدیریت انتقال دامنه','class' => 'active']
    ]])



@slot('style')
<link rel="stylesheet" href="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('template/assets/fonts/feather-font/css/iconfont.css') }}">

 @endslot





 <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">لیست درخواستهای انتقال دامنه</h6>
          <div class="table-responsive">

@if($transfers)
            <table id="dataTableExample" class="table">
              <thead>
                <tr>

                    <th>  ردیف </th>
                    <th>  کاربر  </th>
                    <th>  دامنه  </th>
                     <th>  تاریخ ثبت سفارش </th>
                    <th> مشاهده</th>
                    <th> حذف</th>

                </tr>
              </thead>
              <tbody>


@foreach($transfers as $key => $admin)
                <tr>
                    <td>{{ $key + 1 }}</td>

                    <td>{{$admin->user->name}}  </td>

<td>{{$admin->domain}}  </td>
 <td>{{ date_frmat($admin->created_at) }}</td>


<td> <a href="{{ route('admin.domain.transfer.show', $admin) }}"> @include('index.layouts.table.getstatus', [$admin ,'route' => ''  ,'type_name' => 'status_domain'   ]) </a> </td>



        <td>
            @php $admin['title'] = $admin->domain;  @endphp
            @include('admin.layouts.table.modal', [$admin ,'route' => route('admin.domain.transfer.destroy', $admin) , 'myname' => 'حذف سفارش انتقال دامنه '.$admin->domain ])
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
