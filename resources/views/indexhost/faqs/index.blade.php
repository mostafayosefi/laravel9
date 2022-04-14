@component('indexhost.layouts.content', [
    'title' => 'سوالات متداول   ',
    'tabTitle' => 'سوالات متداول   ',
    'breadcrumb' => [['title' =>'سوالات متداول   ', 'class' => 'active']],
    'calass_index' => 'search-domains',
    ])





<section id="faq" class="mid-menu">
    <div class="container-fluid">
        <h2 class="section-titr text-center fs-23 fs-lg-26 fs-xl-32">سوالات متداول  </h2>


@if($faqs)
        <div class="card-columns">

            @foreach($faqs as $key => $admin)

                <div class="card">
                    <h4 class="fs-20 fs-xl-24">
                        {{$admin->question}}
                    </h4>
                    <p class="fs-14 fs-xl-16"><p> {{$admin->answer}}< </p></p>
                </div>

                @endforeach


        </div>
@endif

    </div>
</section>

 
@endcomponent
