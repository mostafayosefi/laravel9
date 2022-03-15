

      @slot('style')





<link rel="stylesheet" href="{{ asset('template/assets/vendors/select2/select2.min.css') }}">



@endslot







<table class="table table-bordered">
    <thead>
        <tr>
            <th>
                #
            </th>
            <th>

            </th>
        </tr>
    </thead>

    <tbody>

        @include('admin.layouts.errors')


        <form method="POST" action="{{$route}}"  enctype="multipart/form-data" onsubmit="return Validate(this);">
            @csrf
        @if($aroue=='admin')
        <tr>
           <td>کاربر</td>
           <td> {{ $transfer->user->name }}</td>
       </tr>
        @endif


        <tr>
            <td>نام دامنه</td>
            <td> {{ $transfer->domain }}</td>
        </tr>




        <tr>
            <td>مشاهده Whois</td>
            <td>
                <div class="form-group">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="private" id="private" value="0" @if (old('private', $transfer->private) == '0')  checked @endif
                            @if (($transfer->status == 'active')||($transfer->status == 'waiting')) disabled @endif >
                              قابل مشاهده
                        <i class="input-frame"></i></label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="private" id="private" value="1"   @if (old('private', $transfer->private) == '1')  checked @endif
                            @if (($transfer->status == 'active')||($transfer->status == 'waiting')) disabled @endif >
                            غیرقابل مشاهده
                        <i class="input-frame"></i></label>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td> قابلیت تمدید اتوماتیک </td>
            <td>
                <div class="form-group" disabled >
                    <div class="form-check">
                        <label class="form-check-label">
                            <input  type="radio" class="form-check-input" name="renew" id="renew" value="0"  @if (old('renew', $transfer->renew) == '0')  checked @endif
                            @if (($transfer->status == 'active')||($transfer->status == 'waiting')) disabled @endif >
                              غیرقابل تمدید(اتوماتیک)
                        <i class="input-frame"></i></label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="renew" id="renew" value="1"  @if (old('renew', $transfer->renew) == '1')  checked @endif
                            @if (($transfer->status == 'active')||($transfer->status == 'waiting')) disabled @endif >
                            قابل تمدید(اتوماتیک)
                        <i class="input-frame"></i></label>
                    </div>
                </div>
            </td>
        </tr>



        <tr>
            <td>کد امنیتی انتقال دامنه  </td>
            <td>

                <label  class="{{ $errors->has('auth') ? 'red' : '' }}"  >    کد AUTH </label>
                <input id="auth" class="form-control" name="auth" type="password"  value="{{old('auth')}}"   required="required"  style="height: 50px;">


            </td>
        </tr>


        <input type="hidden" name="domain" value="{{$transfer->domain}}"  />


@method('PUT')








        @if($aroue=='user')

        <tr>

            <td>عملیات انتقال دامنه   </td>
            <td>


                @if (($transfer->status != 'active'))
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary float-right">انتقال دامنه</button>
                </div>
                @endif
            </td>
        </tr>
        @endif




         <tr>
            <td> وضعیت انتقال</td>
            <td>

 @include('index.layouts.table.getstatus', ['admin' => $transfer ,'route' => ''
   ,'type_name' => 'status_domain' ])





</td>
        </tr>



    </form>







    </tbody>
</table>
