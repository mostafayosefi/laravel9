
          <div class="table-responsive">

                         <table id="dataTableExample" class="table">
                          <thead>
                            <tr>
                                <th>  ردیف </th>
                                <th>  نام دامنه </th>
                                <th>  هزینه دامنه </th>
                                <th>  خرید دامنه </th>

                            </tr>
                          </thead>
                          <tbody>






                    @foreach ( $checkdomains as  $key => $admin)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td> {{$admin->domain}} </td>

<td>
 {{$admin->riyal}} ریال
 <i data-feather="credit-card"></i>  
</span>




</td>


<td>

    <div class="elementor-widget-container">
        <div class="elementor-button-wrapper">
            <a href="{{route('user.domain.buy.post')}}" onclick="event.preventDefault();
            document.getElementById('buy-form').submit();"  class="btn btn-success">
                خرید <i data-feather="shopping-cart"></i>
            </a>
        </div>


        <form id="buy-form" action="{{ route('user.domain.buy.post') }}" method="POST"
        class="d-none">
        @csrf
        <input type="hidden" name="domain" value="{{$admin->domain}}" />
        <input type="hidden" name="price" value="{{$admin->riyal}}" />
    </form>

    </div>
</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
