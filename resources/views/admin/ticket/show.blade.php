  @component('admin.layouts.content', [
      'title' => 'مشاهده تیکت',
      'tabTitle' => ' مشاهده تیکت',
      'breadcrumb' => [['title' => 'مشاهده تیکت های کاربران', 'url' => route('admin.ticket.index')], ['title' => ' مشاهده تیکت ',
      'class' => 'active']],
      ])


      <div class="row">

        <div class="page-content">




            <div class="row chat-wrapper">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row position-relative">
                      <div class="col-lg-4 chat-aside border-lg-left">
                        <div class="aside-content">





    <div class="aside-body">
    <ul class="list-group">


     <li class="list-group-item"> <i data-feather="calendar"></i>   تاریخ ایجاد تیکت :    {{ date_frmat($ticket->created_at) }}</li>

     <li class="list-group-item"> <i data-feather="user"></i> ایجاد کننده تیکت    :  {{$ticket->user->name}} </li>


     <li class="list-group-item"> <i data-feather="check-circle"></i>  وضعیت تیکت :

@php $admin = $ticket ; @endphp
@include('index.layouts.table.getstatus', [$admin  ,'route' => ''  ,'type_name' => 'status_ticket'   ])

     </li>




     @if($ticket->status!='close')

     <li class="list-group-item">
          <a href="{{ route('admin.ticket.close', $ticket) }}">
    <div class="badge badge-danger"><i class="icon-sm  fa fa-lock  text-warning ml-2   "></i>&nbsp;&nbsp;بستن تیکت</div> </a>   </li>

@endif




    </ul>



                          </div>
                        </div>
                      </div>




                      <div class="col-lg-8 chat-content">
                        <div class="chat-header border-bottom pb-2">
                          <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                              <i data-feather="corner-up-left" id="backToChatList"
                                class="icon-lg ml-2 mr-n2 text-muted d-lg-none"></i>
                              <figure class="mb-0 ml-2">
      @include('admin.layouts.table.avatar', [ 'avatarimage' => $ticket->user->image , 'class'=>'img-sm rounded-circle' , 'style' => ''  ])

                                <div class="status online"></div>
                                <div class="status online"></div>
                              </figure>
                              <div>
                                <p>{{$ticket->user->name}}</p>
                                <p class="text-muted tx-13">کاربر</p>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="chat-body">
                          <ul class="messages">



@foreach ($ticket->messages as $admin)
@if($admin->arou=='user')
<li class="message-item friend">
    @include('admin.layouts.table.avatar', [ 'avatarimage' => $ticket->user->image , 'class'=>'img-xs rounded-circle' , 'style' => ''  ])
                              <div class="content">
                               <div class="message">
                                 <div class="bubble">
                                   <p>{{$admin->text}}</p>
                                 </div>
    <span>{{ date_frmat($admin->created_at) }}</span>
                               </div>
                             </div>
                           </li>
@endif
@if($admin->arou=='admin')

<li class="message-item me">
    @include('admin.layouts.table.avatar', [ 'avatarimage' => '' , 'class'=>'img-xs rounded-circle' , 'style' => ''  ])
                              <div class="content">
                                <div class="message">
                                  <div class="bubble">
                                    <p>{{$admin->text}}</p>
                                </div>
     <span> {{ date_frmat($admin->created_at) }} </span>
                                </div>
                              </div>
                            </li>
@endif

@endforeach





                          </ul>
                        </div>
                        <div class="chat-footer d-flex">

                          <form class="search-form flex-grow ml-2"   action="{{ route('admin.ticket.update', $ticket) }}"  method="post">

                            @csrf
                            <div class="input-group">
                              <input type="text" class="form-control rounded-pill" id="chatForm" placeholder="لطفا پیام خود را تایپ نمایید" name="text"  >

                              @method('PUT')

                              <button type="submit" class="btn btn-primary btn-icon rounded-circle">
                              <i data-feather="send"></i>
                            </button>
                          </div>


                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

      </div>













      @slot('script')
      <script src="{{ asset('template/assets/js/chat.js') }}"></script>

      @endslot
  @endcomponent
