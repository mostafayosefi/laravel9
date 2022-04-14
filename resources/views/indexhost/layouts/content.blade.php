@extends('indexhost.master')
@section('content')
        <!-- begin::page-header -->
            {{-- @include('indexhost.layouts.breadcrumb',['breadcrumb'=>$breadcrumb,'title'=>$title]) --}}
        <!-- end::page-header -->

        <!-- begin::view errors -->
        <!-- end::view errors -->
        {{ $slot }}
@endsection

@section('style')
    {{ $style ?? '' }}
@endsection
@section('banner')
    {{ $banner ?? '' }}
@endsection

@section('script')
    {{ $script ?? '' }}
@endsection
