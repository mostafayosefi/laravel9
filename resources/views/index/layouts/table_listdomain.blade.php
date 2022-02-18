
            <table class="table table-bordered "   >
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
                        <td>
                            <span class="elementor-icon-list-item" >
                                <span class="elementor-icon-list-icon"  style="color: #1be42f">
                    <i aria-hidden="true" class="fas fa-check"></i>						</span>
                            <span class="elementor-icon-list-text"> {{$admin->domain}}</span>

                        </span></td>

<td>

    <span class="elementor-icon-list-item" >
        <span class="elementor-icon-list-icon"  >
<i aria-hidden="true" class="fa fa-credit-card"></i>						</span>
    <span class="elementor-icon-list-text"> {{$admin->riyal}} ریال</span>

</span>




</td>


<td>

    <div class="elementor-widget-container">
        <div class="elementor-button-wrapper">
            <a href="{{route('user.domain.buy.post')}}" onclick="event.preventDefault();
            document.getElementById('buy-form').submit();"
                class="elementor-button-link elementor-button elementor-size-sm"
                role="button" style="background-color: #1be42f">
                <span class="elementor-button-content-wrapper">
                    <span class="elementor-button-text" >خرید</span>
                </span>

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
