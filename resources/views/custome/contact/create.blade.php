  @component('custome.layouts.content', [
      'title' => 'ثبت اکانت جدید',
      'tabTitle' => 'ثبت اکانت جدید',
      'breadcrumb' => [['title' => 'لیست اکانت های من ', 'url' => route('user.contact.index')], ['title' => 'ثبت اکانت جدید',
      'class' => 'active']],
      ])

@include('index.layouts.elementor.txtdese', [ 'id' => '8' ])

@include('custome.contact.form_store', [ 'route' => route('user.contact.store') , 'countries' => $countries  ])





      @slot('script')
      @endslot
  @endcomponent
