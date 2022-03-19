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
{{--
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
          </li> --}}

          <li class="nav-item  {{ isActive([ 'user.domain.check.custome', 'user.domain.basket.index', 'user.domain.basket.show'])}}   ">
              <a class="nav-link" data-toggle="collapse" href="#domain" role="button" aria-expanded="false" aria-controls="domain">
                <i class="link-icon" data-feather="list"></i>
                <span class="link-title">خدمات خرید دامنه  </span>
                <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse  {{ isShow([ 'user.domain.check.custome', 'user.domain.basket.index', 'user.domain.basket.show'])}}     "  id="domain">
                <ul class="nav sub-menu">

                  <li class="nav-item">
   <a href="{{ route('user.domain.check.custome') }}" class="nav-link   {{ isActive(['user.domain.check.custome']) }}  ">ثبت دامنه جدید </a>
                  </li>


                  <li class="nav-item">
                    <a href="{{ route('user.domain.basket.index') }}" class="nav-link   {{ isActive(['user.domain.basket.index']) }}  ">مشاهده سفارش دامنه    </a>
                  </li>

                </ul>
              </div>
            </li>

          <li class="nav-item  {{ isActive([ 'user.domain.renew.create', 'user.domain.renew.index', 'user.domain.renew.show'])}}   ">
              <a class="nav-link" data-toggle="collapse" href="#renew" role="button" aria-expanded="false" aria-controls="renew">
                <i class="link-icon" data-feather="list"></i>
                <span class="link-title">خدمات تمدید دامنه    </span>
                <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse  {{ isShow([ 'user.domain.renew.create', 'user.domain.renew.index', 'user.domain.renew.show'])}}     "  id="renew">
                <ul class="nav sub-menu">
                  <li class="nav-item">
   <a href="{{ route('user.domain.renew.create') }}" class="nav-link   {{ isActive(['user.domain.renew.create']) }}  "> تمدید دامنه </a>
                  </li>
                  <li class="nav-item">
   <a href="{{ route('user.domain.renew.index') }}" class="nav-link   {{ isActive(['user.domain.renew.index' , 'user.domain.renew.show']) }}  "> مدیریت تمدید دامنه </a>
                  </li>
                </ul>
              </div>
            </li>



          <li class="nav-item  {{ isActive([ 'user.domain.transfer.create', 'user.domain.transfer.index', 'user.domain.transfer.show'])}}   ">
              <a class="nav-link" data-toggle="collapse" href="#transfer" role="button" aria-expanded="false" aria-controls="transfer">
                <i class="link-icon" data-feather="list"></i>
                <span class="link-title">خدمات انتقال دامنه    </span>
                <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse  {{ isShow([ 'user.domain.transfer.create', 'user.domain.transfer.index', 'user.domain.transfer.show'])}}     "  id="transfer">
                <ul class="nav sub-menu">
                  <li class="nav-item">
   <a href="{{ route('user.domain.transfer.create') }}" class="nav-link   {{ isActive(['user.domain.transfer.create']) }}  "> انتقال دامنه </a>
                  </li>
                  <li class="nav-item">
   <a href="{{ route('user.domain.transfer.index') }}" class="nav-link   {{ isActive(['user.domain.transfer.index' , 'user.domain.transfer.show']) }}  "> مدیریت انتقال دامنه </a>
                  </li>
                </ul>
              </div>
            </li>



          <li class="nav-item  {{ isActive([ 'user.nameserver.create', 'user.nameserver.index', 'user.nameserver.show'])}}   ">
              <a class="nav-link" data-toggle="collapse" href="#nameserver" role="button" aria-expanded="false" aria-controls="nameserver">
                <i class="link-icon" data-feather="list"></i>
                <span class="link-title">خدمات تغییر نیم سرور    </span>
                <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse  {{ isShow([ 'user.nameserver.create', 'user.nameserver.index', 'user.nameserver.show'])}}     "  id="nameserver">
                <ul class="nav sub-menu">
                  <li class="nav-item">
   <a href="{{ route('user.nameserver.create') }}" class="nav-link   {{ isActive(['user.nameserver.create']) }}  "> تغییر نیم سرور   </a>
                  </li>
                  <li class="nav-item">
   <a href="{{ route('user.nameserver.index') }}" class="nav-link   {{ isActive(['user.nameserver.index' , 'user.nameserver.show']) }}  "> مدیریت تغییر نیم سرور </a>
                  </li>
                </ul>
              </div>
            </li>


{{--

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
 --}}

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




          <li class="nav-item  {{ isActive(['user.ticket.create' , 'user.ticket.index'])}}   ">
            <a class="nav-link" data-toggle="collapse" href="#ticket" role="button" aria-expanded="false" aria-controls="ticket">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">مدیریت تیکت ها  </span>
              @include('index.layouts.table.getstatus', [ 'route' => ''  ,'type_name' => 'count_read_ticket'   ,'number' => $count_ticket_unread_user   ])

              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse  {{ isShow(['user.ticket.create' , 'user.ticket.index'])}}     "  id="ticket">
              <ul class="nav sub-menu">
                <li class="nav-item">
 <a href="{{ route('user.ticket.create') }}" class="nav-link   {{ isActive(['user.ticket.create']) }}  ">ایجاد تیکت جدید     </a>
                </li>
                <li class="nav-item">
 <a href="{{ route('user.ticket.index') }}" class="nav-link   {{ isActive(['user.ticket.index']) }}  "> مشاهده تیکت های من
     @include('index.layouts.table.getstatus', [ 'route' => ''  ,'type_name' => 'count_read_ticket'   ,'number' => $count_ticket_unread_user   ])
    </a>
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
