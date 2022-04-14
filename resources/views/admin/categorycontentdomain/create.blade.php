  @component('admin.layouts.content', [
      'title' => 'دسته بندی پسوند دامنه  ',
      'tabTitle' => 'دسته بندی پسوند دامنه',
      'breadcrumb' => [['title' => 'دسته بندی پسوند دامنه', 'url' => route('admin.content.categorycontentdomain.create')], ['title' => 'دسته بندی پسوند دامنه',
      'class' => 'active']],
      ])


@slot('style')
<link rel="stylesheet" href="{{ asset('template/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
@endslot
      <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
              <div class="row flex-grow">




                  <div class="col-md-3 grid-margin stretch-card"></div>
                  <div class="col-md-6 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">

                              <div class="card-header card-header-border-bottom">
                                  <h4> دسته بندی پسوند دامنه </h4>
                              </div>

                              <br>


                              @include('admin.layouts.errors')


                              <form class="forms-sample" method="POST" action="{{ route('admin.content.categorycontentdomain.store') }}"
                                  enctype="multipart/form-data" onsubmit="return Validate(this);">
                                  @csrf
                                  <div class="row">

                                      <div class="col-sm-12">


                                          <div class="form-group">
                                              <label for="name">نام دسته پسوند دامنه</label>
                                              <input type="text" class="form-control" id="name" autocomplete="off"
                                                  placeholder=" نام دسته پسوند دامنه  " name="name" value="{{ old('name') }}">
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
                      <div class="col-md-3 grid-margin stretch-card"></div>
                  </div>





              </div>
          </div>




          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">لیست دسته بندی پسوند دامنه </h5>
                  <div class="table-responsive">

        @if($categorycontentdomains)
                    <table id="dataTableExample" class="table">
                      <thead>
                        <tr>
                          <th>ردیف</th>
                          <th>نام دسته بندی </th>
                          <th>تاریخ ایجاد</th>
                          <th>ویرایش</th>
                          <th>حذف</th>
                        </tr>
                      </thead>
                      <tbody>


        @foreach($categorycontentdomains as $key => $admin)
                        <tr>
                            <td>{{ $key + 1 }}</td>
        <td>{{$admin->name}}</td>
        <td>{{ date_frmat($admin->created_at) }}</td>
         <td>


        <a href="{{ route('admin.content.categorycontentdomain.edit', $admin) }}">
        <span class="btn btn-primary" >  <i data-feather="edit"></i></span>
        </a>


        </td>
        <td>
        @include('admin.layouts.table.modal', [$admin ,'route' => route('admin.content.categorycontentdomain.destroy', $admin) , 'myname' => $admin->name ])
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
