@component('admin.layouts.content',[
    'title'=>'مشاهده پسوند دامنه ',
    'tabTitle'=>'مشاهده پسوند دامنه  ',
    'breadcrumb'=>[
            ['title'=>'مشاهده پسوند دامنه','class' => 'active']
    ]])



@slot('style')
<link rel="stylesheet" href="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
@endslot






<div class="row">
    <div class="col-12 col-xl-12 stretch-card">
        <div class="row flex-grow">


            <div class="col-md-3 grid-margin stretch-card">
            </div>


            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <div class="card-header card-header-border-bottom">
                            <h4> ایجاد پسوند جدید </h4>
                        </div>

                        <br>


                        @include('admin.layouts.errors')


                        <form class="forms-sample" method="POST" action="{{ route('admin.content.domain.store') }}"
                            enctype="multipart/form-data" onsubmit="return Validate(this);">
                            @csrf
                            <div class="row">

                                <div class="col-sm-12">


                                    <div class="form-group">
                                        <label for="name">نام پسوند</label>
                                        <input type="text" class="form-control" id="name" autocomplete="off" dir="ltr"
                                            placeholder=" نام پسوند  " name="name" value="{{ old('name') }}">
                                    </div>


                                    <div class="form-group">
                                        <label for="link">پسوند</label>
                                        <input type="text" class="form-control" id="link" autocomplete="off"
                                            placeholder=" برای مثال com  " name="link" value="{{ old('link') }}">
                                    </div>


                                    <div class="form-group">
                                        <label for="text"> توضیحات</label>
                                        <textarea class="form-control" id="text" autocomplete="off"
                                            placeholder="توضیحات" name="text" rows="8"
                                             >{{ old('text') }}</textarea>
                                    </div>

                                    <hr>
                                    <div class="form-group" >
                                    <label for="exampleInputUsername1"> آپلود عکس </label>
                                    <input type="file"     id="exampleInputUsername1" autocomplete="off"  name="image" >
                                    </div>


                                    <div class="card-footer">
                                         <button type="submit" class="btn btn-primary float-right">ثبت</button>
                                    </div>


                                </div>


                            </div>

                        </form>



                    </div>
                </div>
            </div>



            <div class="col-md-3 grid-margin stretch-card">
            </div>



        </div>
    </div>
</div>





<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">لیست پسوند دامنه ها </h6>
          <div class="table-responsive">

@if($contentdomains)
            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th>ردیف</th>
                  <th>پسوند دامنه</th>
                  <th>آیکن</th>
                  <th>ویرایش</th>
                  <th>وضعیت</th>
                  <th>حذف</th>
                </tr>
              </thead>
              <tbody>


@foreach($contentdomains as $key => $admin)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{$admin->name}}</td>
                    <td>   @include('admin.layouts.table.avatarnul', [  'avatarimage' => $admin->image , 'class'=>'profile-pic' , 'style' => 'height: 60px;width: 60px;'  ])
                    </td>
                  <td>


<a href="{{ route('admin.content.domain.edit', $admin) }}">
<span class="btn btn-primary" >  <i data-feather="edit"></i></span>
</a>


</td>

<td>

    @include('admin.layouts.table.statusacount', [$admin ,'route' =>
    route('admin.content.domain.status', $admin->id ) , 'myname' => ' پسوند دامنه '.$admin->name.' ' ])
</td>
<td>

@php $admin['title'] = $admin->name;  @endphp
@include('admin.layouts.table.modal', [$admin ,'route' => route('admin.content.domain.destroy', $admin) , 'myname' => $admin->name ])




</td>

                </tr>
@endforeach



              </tbody>
            </table>

@endif

          </div>
        </div>
      </div>
    </div>
  </div>







    @slot('script')
    <script src="{{ asset('template/assets/vendors/datatables.net/jquery.dataTables-ltr.js') }}"></script>
    <script src="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4-ltr.js') }}"></script>
    <script src="{{ asset('template/assets/js/data-table-ltr.js') }}"></script>
    @endslot
@endcomponent
