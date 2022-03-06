
@if ($value=='offline')


<br>
<br>
<div class="form-group">
<label for="exampleFormControlTextarea1">توضیحات پرداخت آفلاین  </label>
<textarea class="form-control" name="textUser" id="exampleFormControlTextarea1" rows="5">@if($order->order){{$order->order->payment->textUser}}@endif</textarea>
</div>

@endif
