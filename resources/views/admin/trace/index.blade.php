@component('admin.layouts.content',[
    'title'=>'مشاهده گزارش های Api ',
    'tabTitle'=>'مشاهده گزارش های Api ',
    'breadcrumb'=>[
            ['title'=>'مشاهده گزارش های Api ','class' => 'active']
    ]])



@slot('style')
<link rel="stylesheet" href="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
@endslot



<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">لیست گزارشهای Api </h6>
          <div class="table-responsive">

@if($trace_apis)
            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th>ردیف</th>
                  <th>ip</th>
                  <th>تاریخ عملیات</th>
                  <th>نام عملیات</th>
                  <th>وضعیت</th>
                </tr>
              </thead>
              <tbody>


@foreach($trace_apis as $key => $admin)
                <tr>
                    <td>{{ $key + 1 }}</td>
<td>{{$admin->ip}}</td>
<td>{{ date_frmat($admin->created_at) }}</td>
<td>{{  $admin->operator }}</td>
<td>{{ getStatusEmployerPackage($admin->status) }}</td>


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
    <script src="{{ asset('template/assets/vendors/datatables.net/jquery.dataTables-ltr.js') }}"></script>
    <script src="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4-ltr.js') }}"></script>
    <script src="{{ asset('template/assets/js/data-table-ltr.js') }}"></script>
    @endslot
@endcomponent
