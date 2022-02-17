<nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand">
         مدیریت<span> دامنه</span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">
        <li class="nav-item nav-category">اصلی</li>


        <li class="nav-item {{ isActive(['admin.dashboard']) }}">
          <a href="{{ route('admin.dashboard') }}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">داشبورد</span>
          </a>
        </li>

{{--
        <li class="nav-item  {{ isActive(['admin.dashboard' , 'admin.dashboard'])}} ">
            <a class="nav-link" data-toggle="collapse" href="#user" role="button" aria-expanded="false" aria-controls="user">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">مدیریت کاربران</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse {{ isShow(['admin.dashboard' , 'admin.dashboard'])}}   "  id="user">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.dashboard') }}" class="nav-link {{ isActive(['admin.dashboard']) }} ">ثبت کاربر </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.dashboard') }}" class="nav-link {{ isActive(['admin.dashboard']) }}  ">مشاهده کاربران</a>
                </li>
              </ul>
            </div>
          </li> --}}


          <li class="nav-item  {{ isActive(['admin.user.create' , 'admin.user.index'])}}   ">
            <a class="nav-link" data-toggle="collapse" href="#user" role="button" aria-expanded="false" aria-controls="user">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">مدیریت کاربران</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.user.create' , 'admin.user.index'])}}     "  id="user">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.user.create') }}" class="nav-link   {{ isActive(['admin.user.create']) }}  ">ثبت کاربر </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.user.index') }}" class="nav-link   {{ isActive(['admin.user.index']) }}  ">مشاهده کاربران</a>
                </li>
              </ul>
            </div>
          </li>



          <li class="nav-item  {{ isActive(['admin.faq.create' , 'admin.faq.index'])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#faq" role="button" aria-expanded="false" aria-controls="faq">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">سوالات متداول</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.faq.create' , 'admin.faq.index'])}}   "  id="faq">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.faq.create') }}" class="nav-link   {{ isActive(['admin.faq.create']) }}  ">ایجاد سوال</a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.faq.index') }}" class="nav-link   {{ isActive(['admin.faq.index']) }}  ">مشاهده سوالات متداول</a>
                </li>
              </ul>
            </div>
          </li>


          <li class="nav-item  {{ isActive(['admin.page.create' , 'admin.page.index'])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#page" role="button" aria-expanded="false" aria-controls="page">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">صفحات سایت </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.page.create' , 'admin.page.index'])}}   "  id="page">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.page.create') }}" class="nav-link   {{ isActive(['admin.page.create']) }}  ">ایجاد صفحه</a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.page.index') }}" class="nav-link   {{ isActive(['admin.page.index']) }}  ">مشاهده صفحات سایت</a>
                </li>
              </ul>
            </div>
          </li>



          <li class="nav-item  {{ isActive(['admin.setting.logo_management' , 'admin.setting.all_management' ,
           'admin.setting.txtdes_management' , 'admin.setting.finical', 'admin.setting.laws', 'admin.setting.getway_payment'])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#setting" role="button" aria-expanded="false" aria-controls="setting">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">تنظیمات سایت </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.setting.logo_management' , 'admin.setting.all_management'  , 'admin.setting.txtdes_management' ,
               'admin.setting.finical' , 'admin.setting.laws' , 'admin.setting.getway_payment'])}}   "  id="setting">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.setting.logo_management') }}" class="nav-link   {{ isActive(['admin.setting.logo_management']) }}  ">مدیریت لوگو و هدر </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.setting.all_management') }}" class="nav-link   {{ isActive(['admin.setting.all_management']) }}  "> تنظیمات سایت</a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.setting.txtdes_management') }}" class="nav-link   {{ isActive(['admin.setting.txtdes_management']) }}  ">   متن های پیش فرض </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.setting.finical') }}" class="nav-link   {{ isActive(['admin.setting.finical']) }}  ">تنظیمات مالی</a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.setting.laws') }}" class="nav-link   {{ isActive(['admin.setting.laws']) }}  ">قوانین سایت</a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.setting.getway_payment') }}" class="nav-link   {{ isActive(['admin.setting.getway_payment']) }}  ">تنظیمات درگاه پرداخت</a>
                </li>

              </ul>
            </div>
          </li>



          <li class="nav-item  {{ isActive(['admin.manegement.spotlites' , 'admin.manegement.comid_index'])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#manegement" role="button" aria-expanded="false" aria-controls="manegement">
                <i class="link-icon" data-feather="list"></i>
                <span class="link-title">مدیریت ایندکس   </span>
                <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.manegement.spotlites' , 'admin.manegement.comid_index'])}}   "  id="manegement">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.manegement.spotlites') }}" class="nav-link   {{ isActive(['admin.manegement.spotlites']) }}  ">مدیریت اسپوتلایتها</a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.manegement.comid_index' , ['first' ]) }}" class="nav-link   {{ isActive(['admin.manegement.comid_edit' , ['status'=>'first' , 'id'] ]) }}  "> امکانات اول </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.manegement.comid_index' , 'second') }}" class="nav-link   {{ isActive([ 'admin.manegement.comid_edit' , ['status'=>'second' , 'id'] ]) }}  "> امکانات دوم </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.manegement.comid_index' , 'coment') }}" class="nav-link   {{ isActive(['admin.manegement.comid_edit' , ['status'=>'coment' , 'id'] ]) }}  "> کامنت مشتریان  </a>
                </li>
              </ul>
            </div>
          </li>


          <li class="nav-item  {{ isActive([  'admin.content.domain.index' , 'admin.content.domain.edit'])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#contentdomain" role="button" aria-expanded="false" aria-controls="contentdomain">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">مدیریت دامنه</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow([  'admin.content.domain.index' , 'admin.content.domain.edit'])}}   "  id="contentdomain">
              <ul class="nav sub-menu">

                <li class="nav-item">
 <a href="{{ route('admin.content.domain.index') }}" class="nav-link   {{ isActive(['admin.content.domain.index' , 'admin.content.domain.edit']) }}  ">پسوند دامنه</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item  {{ isActive(['admin.content.document.index' , 'admin.content.document.edit'  , 'admin.content.document.create'  ])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#contentdocument" role="button" aria-expanded="false" aria-controls="contentdocument">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title"> مدیریت داکیومنت </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.content.document.index' , 'admin.content.document.edit'  , 'admin.content.document.create'    ])}}   "  id="contentdocument">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.content.document.create') }}" class="nav-link   {{ isActive(['admin.content.document.index' , 'admin.content.document.edit' ]) }}  ">ثبت داکیومنت جدید  </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.content.document.index') }}" class="nav-link   {{ isActive(['admin.content.document.index' , 'admin.content.document.edit' ]) }}  ">مشاهده داکیومنت ها  </a>
                </li>

              </ul>
            </div>
          </li>

          <li class="nav-item  {{ isActive(['admin.content.categoryapi.index' , 'admin.content.categoryapi.edit'  , 'admin.content.categoryapi.create'  ])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#categoryapi" role="button" aria-expanded="false" aria-controls="categoryapi">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">دسته بندی وب سرویس </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.content.categoryapi.index' , 'admin.content.categoryapi.edit'  , 'admin.content.categoryapi.create'    ])}}   "  id="categoryapi">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.content.categoryapi.create') }}" class="nav-link   {{ isActive(['admin.content.categoryapi.index' , 'admin.content.categoryapi.edit' ]) }}  ">ثبت دسته بندی وب سرویس  </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.content.categoryapi.index') }}" class="nav-link   {{ isActive(['admin.content.categoryapi.index' , 'admin.content.categoryapi.edit' ]) }}  ">مشاهده دسته بندی وب سرویس   </a>
                </li>

              </ul>
            </div>
          </li>


          <li class="nav-item  {{ isActive(['admin.content.webservice.index' , 'admin.content.webservice.edit'  ])}}  ">
            <a class="nav-link" data-toggle="collapse" href="#contentwebservice" role="button" aria-expanded="false" aria-controls="contentwebservice">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">مدیریت وب سرویس</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['admin.content.webservice.index' , 'admin.content.webservice.edit'  ])}}   "  id="contentwebservice">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('admin.content.webservice.index') }}" class="nav-link   {{ isActive(['admin.content.webservice.index' , 'admin.content.webservice.edit']) }}  ">مدیریت محتوا وب سرویس  </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('admin.content.webservice.create') }}" class="nav-link   {{ isActive(['admin.content.webservice.create'  ]) }}  ">ثبت محتوا وب سرویس   </a>
                </li>

              </ul>
            </div>
          </li>






      </ul>
    </div>
  </nav>
{{--

  <nav class="settings-sidebar">
    <div class="sidebar-body">
      <a href="#" class="settings-sidebar-toggler">
        <i data-feather="settings"></i>
      </a>
      <h6 class="text-muted">سایدبار : </h6>
      <div class="form-group border-bottom">
        <div class="form-check form-check-inline">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight"
              value="sidebar-light">
            روشن
          </label>
        </div>
        <div class="form-check form-check-inline">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark"
              value="sidebar-dark" checked>
            تیره
          </label>
        </div>
      </div>
      <div class="theme-wrapper">
        <h6 class="text-muted mb-2">تم روشن : </h6>
        <a class="theme-item active" href="../demo_1/dashboard-one.html">
          <img src="../assets/images/screenshots/light.jpg" alt="light theme">
        </a>
        <h6 class="text-muted mb-2">تم تیره : </h6>
        <a class="theme-item" href="../demo_2/dashboard-one.html">
          <img src="../assets/images/screenshots/dark.jpg" alt="light theme">
        </a>
      </div>
    </div>
  </nav>
 --}}
