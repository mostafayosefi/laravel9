

@if($discriptionorders)

<div class="col-md-12">
<div class="card">
<div class="card-body">
<h6 class="card-title">تایم لاین</h6>
<div id="content">
  <ul class="timeline">
    @foreach ($discriptionorders as $discriptionorder )
    @if($discriptionorder->operator==$myoperator)

    <li class="event" data-date=" @if ($discriptionorder->by=='admin') مدیریت @else {{$discriptionorder->user->name}}   @endif"  >
        @if ($discriptionorder->flag=='active')
        <span class="badge badge-success"><h3> فعال شد</h3></span>
        @endif
        @if ($discriptionorder->flag=='inactive')
        <span class="badge badge-danger"><h3> غیرفعال شد</h3></span>
        @endif
        @if ($discriptionorder->flag=='offline')
        <span class="badge badge-primary"><h3> پرداخت آفلاین</h3></span>
        @endif
        @if ($discriptionorder->flag=='online')
        <span class="badge badge-primary"><h3> پرداخت آنلاین</h3></span>
        @endif
        @if ($discriptionorder->flag=='depo')
        <span class="badge badge-primary"><h3> پرداخت از شارژ حساب</h3></span>
        @endif

        @if ($discriptionorder->active=='0')
        <span class="badge">انجام نشد</span>
        @endif
      <p>{{$discriptionorder->text}}</p>
      <span class="badge">{{ date_frmat($discriptionorder->created_at) }}</span>
    </li>
    @endif
    @endforeach
  </ul>
</div>
</div>
</div>
</div>

@endif
