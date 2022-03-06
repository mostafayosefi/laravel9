@if($order->starttime==Null) @php $starttime=now()->format('Y-m-d'); @endphp @else @php $starttime=$order->starttime; @endphp   @endif
@if($order->endtime==Null) @php $endtime=now()->addYears($value)->format('Y-m-d'); @endphp @else @php $endtime=$order->endtime; @endphp   @endif

<div class="row">
    <div class="col-md-12 grid-margin stretch-card"  >


            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>زمان شروع</th>
                        <th>زمان منقضی</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>میلادی </td>
                        <td>{{$starttime}}</td>
                        <td>{{$endtime}}</td>
                    </tr>
                    <tr>
                        <td>شمسی</td>
                        <td>{{date_frmat_ymd($starttime)}}</td>
                        <td>{{date_frmat_ymd($endtime)}}</td>
                     </tr>
                </tbody>

            </table>



        </div>
        </div>
