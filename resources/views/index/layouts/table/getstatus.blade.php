
@if($type_name == 'status_wallet' )

@if($admin->status=='active')
<span  class="spanstatus spanstatus_success"> پرداخت شده   </span>
@elseif ($admin->status=='inactive')
<span   class="spanstatus spanstatus_warning"> منتظر پرداخت </span>
@else
<span class="badge badge-primary"> در دست بررسی</span>
@endif


@endif

@if($type_name == 'flag_wallet' )

@if($admin->flag=='inc')
<span  class="spanstatus spanstatus_success"> افزایش شارژ   </span>
@elseif ($admin->status=='dec')
<span   class="spanstatus spanstatus_warning"> خرید (کاهش شارژ) </span>
@else
<span class="badge badge-primary"> در دست بررسی</span>
@endif


@endif

@if($type_name == 'status_order' )

@if($admin->status !='rezerve')
<span  class="spanstatus spanstatus_success">   پرداخت شده </span>
@elseif ($admin->status=='rezerve')
<span   class="spanstatus spanstatus_warning">  منتظر پرداخت</span>
@else
<span class="badge badge-primary"> در دست بررسی</span>
@endif


@endif

