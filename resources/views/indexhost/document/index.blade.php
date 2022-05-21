@component('indexhost.layouts.content', [
    'title' => 'وب سرویس',
    'tabTitle' => 'وب سرویس',
    'breadcrumb' => [['title' => 'وب سرویس', 'class' => 'active']],
    'calass_index' => 'domain-helper',
    'calass_body' => 'lock-scroll',
    ])


<style>
    .pre {
    box-sizing: border-box;
    width: 100%;
    padding: 0;
    margin: 0;
    overflow: auto;
    overflow-y: hidden;
    font-size: 12px;
    line-height: 20px;
    background-color: #130000;
    border: 1px solid #777;
    padding: 10px;
    color: rgb(252, 252, 252);
    direction: ltr;
    }</style>

<section id="schedule" class="pt-0">
    <div class="container-fluid">
    <div class="row justify-content-center">
    <div class="col-12 order-last order-lg-first mt-4 mt-lg-0">
    <div class="card card-body">

        <?php echo $txtdese->text; ?>

    </div>
    </div>




    </div>
    </div>
    </section>


    <div class="sticky-menu mb-5">
    <div class="container-fluid">








    <div class="row">
    <div class="col-sm-9">


<ul class="nav">

    @foreach ($documents as $document)
    <li class="nav-item"><a class="sticky-link nav-link fs-16 fs-xl-18" href="#{{$document->documentname}}"> {{$document->documentname}}</a></li>
    @endforeach

</ul>

    </div>
    <div class="col-sm-3 text-left hidden-sm-down">
        <a class="btn-cta_vip-offer" href="">
            <svg class="bi close-icon d-inline" width="20" height="20" fill="currentColor">
            </svg>   وب سرویس </a></div>
    </div>


    </div>
    </div>

    @foreach ($documents as $document)

    <section id="{{$document->documentname}}" class="mid-menu">
        <div class="container">
        <div class="row align-items-center mb-4">

           <h1 style="padding-block: 20px;"> {{$document->documentname}} </h1>



@foreach ($document->categoryapis as $categoryapi)
@foreach ($categoryapi->textwebservices as $textwebservice)

    <hr>

    <div class="container-fluid">
        <div class="row justify-content-center">
        <div class="col-12 order-last order-lg-first mt-4 mt-lg-0">
        <div class="card card-body">

            @php
            echo $textwebservice->text;
            @endphp

<h2>{{$textwebservice->title}}</h2>


<br>
<pre class="pre">{{$textwebservice->link}}</pre>
        </div>
        </div>
        </div>
        </div>





    @endforeach
    @endforeach




        </div>
        </div>
    </section>


    @endforeach



@slot('script')


@endslot



@endcomponent
