  @component('custome.layouts.content', [
      'title' => 'ثبت اکانت جدید',
      'tabTitle' => 'ثبت اکانت جدید',
      'breadcrumb' => [['title' => 'لیست اکانت های من ', 'url' => route('user.contact.index')], ['title' => 'ثبت اکانت جدید',
      'class' => 'active']],
      ])

@include('index.layouts.elementor.txtdese', [ 'id' => '8' ])

@include('custome.contact.form_store', [ 'routecreate' => route('user.contact.store') , 'countries' => $countries  , 'user_id' => $user_id  ])





      @slot('script')
      @endslot
  @endcomponent
