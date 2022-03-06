



@if($orders)
<table id="dataTableExample" class="table">
  <thead>
    <tr>
        <th>  ردیف </th>
        <th>  نام دامنه </th>
        <th>  هزینه </th>
        <th> تاریخ ثبت </th>
        <th> وضعیت</th>
         <th> حذف</th>
    </tr>
  </thead>
  <tbody>


@foreach($orders as $key => $admin)
@if($tablee=='order')
@php
$admin=$admin->domain;
@endphp
@endif


@if($tablee=='order')
@php $route_show=route('user.order.show', $admin->order->id);
$route_destroy=route('user.order.destroy', $admin->order->id);  @endphp
@elseif($tablee=='basket')
@php $route_show=route('user.basket.show', $admin->id);
 $route_destroy=route('user.basket.destroy', $admin->id);  @endphp
@endif

    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{$admin->domain}}</td>
        <td>{{number_format($admin->price)}} ريال</td>
        <td>{{ date_frmat($admin->created_at) }}</td>
<td> <a href="{{$route_show}}"> @include('index.layouts.table.getstatus', [$admin ,'route' => ''  ,'type_name' => 'status_domain'   ]) </a> </td>

<td>
@if($admin->status=='rezerve')
@include('admin.layouts.table.modal', [$admin ,'route' => $route_destroy , 'myname' => 'حذف سفارش '.$admin->domain ])
@else
-
@endif
</td>



    </tr>
@endforeach



  </tbody>
</table>

@endif
