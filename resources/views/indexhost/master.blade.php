<!DOCTYPE html>
<html dir="rtl" lang="fa"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> {{ $tabTitle ?? '' }}</title>
    <link rel="canonical" href="">
    <meta name="description" content="{{$setting->description}}">
    <meta name="keywords" content="{{$setting->keyword}}">

    <meta name="application" content="test">

    <link href="{{asset('indexhost_files/main.css')}}" rel="stylesheet">
    <script type="text/javascript" id="sendinblue-js" async="" src="{{asset('indexhost_files/sa.js')}}"></script>
    <script type="text/javascript" async="" src="{{asset('indexhost_files/conversion_async.js')}}"></script>
    <script type="text/javascript" async="" src="{{asset('indexhost_files/analytics.js')}}"></script>
    <script type="text/javascript" async="" src="{{asset('indexhost_files/js')}}"></script><script async="" src="{{asset('indexhost_files/gtm.js')}}"></script>
    <script type="text/javascript" async="" src="{{asset('indexhost_files/ChatLink_003.ashx')}}"></script>
    <script src="{{asset('indexhost_files/b-icon.js')}}"></script>

<style>
    .header {
    background: url({{asset('indexhost_files/purple-bg.svg')}}) no-repeat 50%;
}

</style>


    <link href="{{asset('indexhost_files/media-query.css')}}"  rel="stylesheet">




    @yield('style')

</head>


<body class="{{ $calass_body ?? 'home-page-body home' }}" data-debug="False">



    <div class="go-top">
        <img src="{{asset('indexhost_files/top-button.png')}}" class="img-fluid" alt="Alternate Text">
    </div>






<div class="{{ $calass_index ?? '' }}">
@include('indexhost.layouts.navbar')
</div>


@yield('content')

@include('indexhost.layouts.footer')




@include('sweetalert::alert')

@yield('script')



<div>
        <script type="text/javascript" src="{{asset('indexhost_files/slider_002.js')}}"></script>
</div>

 <div>
        <script type="text/javascript" src="{{asset('indexhost_files/slider.js')}}"></script>
</div>
<div>
        <script type="text/javascript" src="{{asset('indexhost_files/wurfl.js')}}"></script>
</div>


<div>
        <script type="text/javascript" src="{{asset('indexhost_files/home-page.js')}}"></script>
</div>
<div id="gtx-trans" style="position: absolute; left: 937px; top: 363px;">
<div class="gtx-trans-icon">&nbsp;</div>
</div>


    <script src="{{asset('indexhost_files/main.js')}}"></script>

    <script type="text/javascript" src="{{asset('indexhost_files/site.js')}}"></script>




</body>
</html>
