<nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand">
         داشبورد<span> کاربر</span>
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
          <a href="{{ route('user.dashboard.index') }}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">داشبورد</span>
          </a>
        </li>



        <li class="nav-item  {{ isActive(['user.contact.create' , 'user.contact.index'])}}   ">
            <a class="nav-link" data-toggle="collapse" href="#contact" role="button" aria-expanded="false" aria-controls="contact">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">مدیریت اکانت های من</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['user.contact.create' , 'user.contact.index'])}}     "  id="contact">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('user.contact.create') }}" class="nav-link   {{ isActive(['user.contact.create']) }}  ">ثبت اکانت جدید </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('user.contact.index') }}" class="nav-link   {{ isActive(['user.contact.index']) }}  ">مشاهده اکانت های من</a>
                </li>
              </ul>
            </div>
          </li>

        <li class="nav-item  {{ isActive(['user.ssl.create' , 'user.ssl.index'])}}   ">
            <a class="nav-link" data-toggle="collapse" href="#ssl" role="button" aria-expanded="false" aria-controls="ssl">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">مدیریت خدمات Ssl</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['user.ssl.create' , 'user.ssl.index'])}}     "  id="ssl">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('user.ssl.create') }}" class="nav-link   {{ isActive(['user.ssl.create']) }}  "> ثبت درخواست گواهیSsl </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('user.ssl.index') }}" class="nav-link   {{ isActive(['user.ssl.index']) }}  ">مشاهده درخواستهای گواهی</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item  {{ isActive(['user.domain.check.custome' , 'user.domain.check.custome'])}}   ">
              <a class="nav-link" data-toggle="collapse" href="#domain" role="button" aria-expanded="false" aria-controls="domain">
                <i class="link-icon" data-feather="list"></i>
                <span class="link-title">مدیریت دامنه های من</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse  {{ isShow(['user.domain.check.custome' , 'user.domain.check.custome'])}}     "  id="domain">
                <ul class="nav sub-menu">
                  <li class="nav-item">
   <a href="{{ route('user.domain.check.custome') }}" class="nav-link   {{ isActive(['user.domain.check.custome']) }}  ">ثبت دامنه جدید </a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item  {{ isActive(['user.order.show' , 'user.order.index'])}}   ">
                <a class="nav-link" data-toggle="collapse" href="#order" role="button" aria-expanded="false" aria-controls="order">
                  <i class="link-icon" data-feather="list"></i>
                  <span class="link-title">مدیریت سفارش های من</span>
                  <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse  {{ isShow(['user.order.show' , 'user.order.index'])}}     "  id="order">
                  <ul class="nav sub-menu">
                    <li class="nav-item">
     <a href="{{ route('user.order.index') }}" class="nav-link   {{ isActive(['user.order.index']) }}  ">مشاهده سفارش های من</a>
                    </li>
                  </ul>
                </div>
              </li>



        <li class="nav-item  {{ isActive(['user.finical.index' , 'user.finical.index'])}}   ">
            <a class="nav-link" data-toggle="collapse" href="#finical" role="button" aria-expanded="false" aria-controls="finical">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">مدیریت مالی    </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['user.finical.index' , 'user.finical.index'])}}     "  id="finical">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('user.finical.index') }}" class="nav-link   {{ isActive(['user.finical.index']) }}  ">مشاهده صورتحساب     </a>
                </li>
              </ul>
            </div>
          </li>


        <li class="nav-item  {{ isActive(['user.finical.wallet.create' , 'user.finical.wallet.index'])}}   ">
            <a class="nav-link" data-toggle="collapse" href="#wallet" role="button" aria-expanded="false" aria-controls="wallet">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">مدیریت کیف پول من   </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['user.finical.wallet.create' , 'user.finical.wallet.index'])}}     "  id="wallet">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('user.finical.wallet.create') }}" class="nav-link   {{ isActive(['user.finical.wallet.create']) }}  ">افزایش موجودی   </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('user.finical.wallet.index') }}" class="nav-link   {{ isActive(['user.finical.wallet.index']) }}  ">      مشاهده تراکنش ها</a>
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
