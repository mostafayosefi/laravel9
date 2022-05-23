@component('indexhost.layouts.content', [
    'title' => 'جستجوی دامنه',
    'tabTitle' => 'جستجوی دامنه',
    'breadcrumb' => [['title' => 'جستجوی دامنه', 'class' => 'active']],
    'calass_index' => 'search-domains',
    ])
    @slot('style')
    @endslot

    @slot('banner')
        @include('indexhost.layouts.banner', [
            'inpage' => 'textdeses',
            'mytext' => 'mytext',
            'id' => '7',
        ])
    @endslot


<style>
    .dot{
  color: #fcaf17 !important;
  font-family: Berlin;
  font-size: inherit;
  position: relative;
  left: 7px;
    }
</style>

    <div ng-view="" class="ng-scope">
        <whois class="ng-scope ng-isolate-scope">
            <div class="whois">
                <div class="container">


                    @if ($result)
                        @include('indexhost.layouts.table_listdomain', [
                            'checkdomains' => $resultdomain,
                        ])
                        @include('indexhost.layouts.table_listdomain', [
                            'checkdomains' => $checkdomains,
                        ])
                    @endif

                </div>
            </div>
        </whois>
    </div>







    <section id="domians-info" class="mid-menu">
        <div class="container">

            <div id="exTab2" class="row tabs domains-tab-box mt-3 mt-lg-0">

                @if($categorycontentdomains)

                <ul class="nav nav-tabs pr-0 domains-tab">
                @foreach ($categorycontentdomains as $key =>$categorycontentdomain )
                <li class="nav-item">
                    <a href="#{{$key}}a" class="nav-link fs-16 fs-xl-18 @if($key=='0')  active @endif "  data-toggle="tab">{{$categorycontentdomain->name}}</a>
                </li>
                @endforeach
                </ul>

                @endif


                @if($categorycontentdomains)
                <div class="domains-tab-result w-100 show">
                <div class="tab-content clearfix">

                    @foreach ($categorycontentdomains as $key =>$categorycontentdomain )
                    @if($categorycontentdomain->contentDomains)


                    <div class="tab-pane @if($key=='0')  active @endif " id="{{$key}}a">
                        <table     class="top-table table table-hover table-bordered table-responsive-md">
                            <tbody>



                    @foreach ($categorycontentdomain->contentDomains as  $contentDomain )



                            <tr class="plans-item">
                                <td class="item-title" scope="col" style="width: 140px;" >
                                    <div class="domain-type text-left"><strong class="tld fs-14 fs-xl-24">
                                        {{$contentDomain->name}} <span class="dot">.</span> </strong></div>
                                </td>
                                <td>
                                    <p class=" fs-14 fs-xl-16">{{$contentDomain->text}}</p>
                                </td>
                            </tr>






                    @endforeach


                </tbody>
            </table>
            </div>


                    @endif
                @endforeach

                </div>
                </div>
                @endif






            </div>








        </div>
    </section>



    <hr>


    @slot('script')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    @endslot
@endcomponent
