
@if ($value=='offline')
<br>
@include('index.layouts.elementor.txtalert', [ 'id' => '14' ])

<br>
@if ($oper=='order')
<div class="form-group">
<label for="exampleFormControlTextarea1">توضیحات پرداخت آفلاین  </label>
<textarea class="form-control" name="textUser" id="exampleFormControlTextarea1" rows="5" @if (($order->status == 'active')||($order->status == 'waiting')) disabled @endif >@if($order->order){{$order->order->payment->textUser}}@endif</textarea>
</div>
@endif

@if ($oper=='renew')
<div class="form-group">
<label for="exampleFormControlTextarea1">توضیحات پرداخت آفلاین  </label>
<textarea class="form-control" name="textUser" id="exampleFormControlTextarea1" rows="5" @if (($order->status == 'active')||($order->status == 'waiting')) disabled @endif >@if($order){{$order->payment->textUser}}@endif</textarea>
</div>
@endif


@if ($oper=='transfer')
<div class="form-group">
<label for="exampleFormControlTextarea1">توضیحات پرداخت آفلاین  </label>
<textarea class="form-control" name="textUser" id="exampleFormControlTextarea1" rows="5" @if (($order->status == 'active')||($order->status == 'waiting')) disabled @endif >@if($order->payment){{$order->payment->textUser}}@endif</textarea>
</div>
@endif


@endif

