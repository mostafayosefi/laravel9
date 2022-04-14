  @component('admin.layouts.content', [
      'title' => ' ویرایش دسته بندی پسوند دامنه',
      'tabTitle' => ' ویرایش دسته بندی پسوند دامنه ',
      'breadcrumb' => [['title' => 'لیست دسته بندی های پسوند دامنه ', 'url' => route('admin.content.categorycontentdomain.create')], ['title' => 'ویرایش دسته بندی پسوند دامنه  ',
      'class' => 'active']],
      ])




      <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
              <div class="row flex-grow">

                <div class="col-md-3 grid-margin stretch-card"></div>
                <div class="col-md-6 grid-margin stretch-card">
                      <div class="card">
                          <div class="card-body">
                              <div class="card-header card-header-border-bottom">
                                  <h4>ویرایش دسته بندی پسوند </h4>
                              </div>
                              <br>
                              @include('admin.layouts.errors')
                              <form class="forms-sample" method="POST" action="{{ route('admin.content.categorycontentdomain.update', $categorycontentdomain) }}"
                                  enctype="multipart/form-data" onsubmit="return Validate(this);">
                                  @csrf
                                  <div class="row">
                                      <div class="col-sm-12">

                                          <div class="form-group">
                                              <label for="name">نام گروه پسوند</label>
                                              <input type="text" class="form-control" id="name" autocomplete="off"
                                                  placeholder=" نام گروه پسوند  " name="name" value="{{$categorycontentdomain->name}}">
                                          </div>

                                          @method('PUT')

                                          <div class="card-footer">
                                              <a href="{{ route('admin.content.categorycontentdomain.create') }}" class="btn btn-danger">بازگشت</a>
                                              <button type="submit" class="btn btn-primary float-right">ویرایش</button>
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













  @endcomponent
