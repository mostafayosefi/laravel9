

      @slot('style')


      <style>
          .box{
          }
          .online{ height: 140px; }
          .offline{  }
          .depo{  }
      </style>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script>
      $(document).ready(function(){
          $("select.contact").change(function(){
              $(this).find("option:selected").each(function(){
                  var optionValue = $(this).attr("value");
                  if(optionValue){
                      $(".box").not("." + optionValue).hide();
                      $("." + optionValue).show();
                  } else{
                      $(".box").hide();
                  }
              });
          }).change();
      });
      </script>


<link rel="stylesheet" href="{{ asset('template/assets/vendors/select2/select2.min.css') }}">


<script>
    function fetch_select2(val){
        var val = document.getElementById("cat").value;$.ajax({
            type: 'get',
            url: '/fetch/timeexpire/{{$order->id}}/'+val+'',
        data: {get_option:val},
        success: function (response) {document.getElementById("catamrc").innerHTML=response; }
    });
        }
</script>


<script>
    function fetch_select3(val){
        var val = document.getElementById("payment").value;$.ajax({
            type: 'get',
            url: '/fetch/payment/{{$order->id}}/'+val+'',
        data: {get_option:val},
        success: function (response) {document.getElementById("view_payment").innerHTML=response;}
    });
        }
</script>




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
        <tr>
            <td>نام دامنه</td>
            <td> {{ $order->domain }}</td>
        </tr>
        <tr>
            <td>هزینه دامنه</td>
            <td>{{number_format($order->price)}} ريال</td>

        </tr>


        <tr>
            <td>تاریخ ثبت </td>
            <td>{{ date_frmat($order->created_at) }}</td>
        </tr>


        <tr>
            <td> انتخاب اکانت
                <div class="col-md-4">
                    @include('custome.contact.modal_create', [ 'route' => route('user.contact.store')  ])
                </div></td>
            <td>




                <form method="POST" action="{{$route}}"  enctype="multipart/form-data" onsubmit="return Validate(this);">
                    @csrf
                <div class="form-group row">



                    <div class="col-md-12">
                        <select name="contact_id" id="contact"
                        class="contact"
                        placeholder="" value="{{ old('contact_id') }}" aria-required="true" required>
                        <option value="">لطفا اکانت خود را انتخاب نمایید  </option>
                        @foreach ($contacts as $contact  )
                        <option value="{{$contact->id}}"
                       @if($order->order) {{($contact->id  == $order->order->contact_id ? 'selected' : '')}} @endif         >{{$contact->full_name}}</option>
                        @endforeach
                    </select>

                    </div>
                    </div>


                    @foreach ($contacts as $contact  )
                    <div class="{{$contact->id}} box" >
                        @include('custome.contact.form_show', [ $contact , 'oper' => 'order' ])
                    </div>
                    @endforeach

            </td>
        </tr>

        <tr>
            <td> تنظیمات nameserver  </td>
            <td  dir="ltr">

                @include('admin.layouts.errors')

                <div class="form-group row">
                    <div class="col-lg-3"> <label  class="{{ $errors->has('dns1') ? 'red' : '' }}"  ><span class="red">*</span>Name Server 1</label> </div>
                    <div class="col-lg-8"> <input class="form-control"  name="dns1"  id="dns1" type="text" placeholder="dns1.example.com"
                    @if ($order->dns1) value="{{ $order->dns1 }}"@else value="{{ old('dns1') }}" @endif>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-3"> <label  class="{{ $errors->has('dns2') ? 'red' : '' }}"  ><span class="red">*</span>Name Server 2</label> </div>
                    <div class="col-lg-8"> <input class="form-control"  name="dns2"  id="dns2" type="text" placeholder="dns2.example.com"
                    @if ($order->dns2) value="{{ $order->dns2 }}"@else value="{{ old('dns2') }}" @endif>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-3"> <label  class="{{ $errors->has('dns3') ? 'red' : '' }}"  >Name Server 3</label>  </div>
                    <div class="col-lg-8"> <input class="form-control"  name="dns3"  id="dns3" type="text" placeholder="dns3.example.com"
                    @if ($order->dns3) value="{{ $order->dns3 }}"@else value="{{ old('dns3') }}" @endif>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-3"> <label  class="{{ $errors->has('dns4') ? 'red' : '' }}"  >Name Server 4</label>  </div>
                    <div class="col-lg-8"> <input class="form-control"  name="dns4"  id="dns4" type="text" placeholder="dns4.example.com"
                    @if ($order->dns4) value="{{ $order->dns4 }}"@else value="{{ old('dns4') }}" @endif>
                    </div>
                </div>

            </td>

        </tr>



        <tr>
            <td>مشاهده Whois</td>
            <td>
                <div class="form-group">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="private" id="private" value="0" @if ($order->private=='0')  checked @endif >
                              قابل مشاهده
                        <i class="input-frame"></i></label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="private" id="private" value="1"  @if ($order->private=='1')  checked @endif >
                            غیرقابل مشاهده
                        <i class="input-frame"></i></label>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td> قابلیت تمدید اتوماتیک </td>
            <td>
                <div class="form-group">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="renew" id="renew" value="0" @if ($order->renew=='0')  checked @endif >
                              غیرقابل تمدید(اتوماتیک)
                        <i class="input-frame"></i></label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="renew" id="renew" value="1"  @if ($order->renew=='1')  checked @endif >
                            قابل تمدید(اتوماتیک)
                        <i class="input-frame"></i></label>
                    </div>
                </div>
            </td>
        </tr>




        <tr>
            <td> مدت زمان دامنه </td>
            <td>

                <div class="form-group row">
                    <input type="hidden" name="starttime" value="{{now()->format('Y-m-d');}}">
                    <div class="col-md-6">
                        <select name="years" id="cat"
                        placeholder="" value="{{$order->years}}" aria-required="true"  onchange="fetch_select2(this.value);"   required>
                        <option value="">لطفا مدت زمان استفاده از دامنه را وارد نمایید  </option>
                        @for ($x = 1; $x <= 10; $x++) {
                        <option value="{{$x}}"
                   {{($order->years  == $x ? 'selected' : '')}} >{{$x}} ساله</option>
                       @endfor
                    </select>
                    </div>
<div class="col-md-6">

<div  id="catamrc">
    @include('custome.fetch.expire_time', ['order' => $order ,'value' => $order->years ])
</div>

</div>
</div>
</td>
</tr>






        <tr>
            <td> وضعیت پرداخت</td>
            <td> @include('index.layouts.table.getstatus', ['admin' => $order ,'route' => ''
                ,'type_name' => 'status_order' ]) </td>
        </tr>

        @if ($order->status != 'active')
            <tr>
                <td>موجودی شارژ حساب من</td>
                <td> <span class="spanstatus spanstatus_primary">
                        {{ Mywallet(auth()->guard('user')->user()->id,'mycharge') }} ريال </span>
                </td>
            </tr>

            <tr>
                <td>پرداخت</td>
                @if($order->order)
                @php $payment = $order->order->payment;  @endphp
                @else
                @php $payment = $order;  @endphp
                @endif

                <td>


                        <div class="elementor-form-fields-wrapper elementor-labels-above"
                            style="padding-bottom: 30px;">
                            <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-40">
                                 <select name="type" id="payment" onchange="fetch_select3(this.value);"
                                    class="elementor-field elementor-size-sm  elementor-field-textual"
                                    placeholder="" value="{{$payment->type}}" aria-required="true">
                                    <option value="online"  >پرداخت آنلاین   </option>
                                    <option value="offline" >پرداخت آفلاین</option>
                                    <option value="depo" >پرداخت از شارژ حساب</option>
                                </select>




<div  id="view_payment">
    @include('custome.fetch.payment', ['order' => $order ,'value' => $payment->type ])
</div>



</div>

                            <input type="hidden" name="charge" value="{{Mywallet(auth()->guard('user')->user()->id,'mycharge')}}" />
                            <input type="hidden" name="price" value="{{number_format($order->price)}}" />
                            <input type="hidden" name="user_id" value="{{$order->user_id}}" />

@method('PUT')

                            <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-40">

                                <label> </label>

                    <div class="card-footer">

                                <button type="submit" class="btn btn-primary float-right">پرداخت</button>


                            </div>
                            </div>


                        </div>


                </td>
            </tr>
        @endif



    </tbody>
</table>


</form>


