@component('index.layouts.content', [
    'title' => 'بررسی دامنه ',
    'tabTitle' => 'بررسی دامنه ',
    'breadcrumb' => [['title' => 'بررسی دامنه ', 'class' => 'active']],
    ])

@if(isShow(['index.check']))   @endif


<div data-elementor-type="wp-post" data-elementor-id="52" class="elementor elementor-52" data-elementor-settings="[]">
    <div class="elementor-inner">
        <div class="elementor-section-wrap">
            @include('index.layouts.elementor.warp', [ 'id' => '7' ])


            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-6d431d8 elementor-section-boxed elementor-section-height-default elementor-section-height-default default-style"
                data-id="6d431d8" data-element_type="section"
                data-settings="{&quot;rt_color_sets&quot;:&quot;default-style&quot;}">

                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">


                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9c06592"
                            data-id="9c06592" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-5cbd3b3 elementor-widget elementor-widget-rt-heading"
                                        data-id="5cbd3b3" data-element_type="widget"
                                        data-widget_type="rt-heading.default">
                                        <div class="elementor-widget-container">
                                            <div class="rt-heading-wrapper text-center">




                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-1720180 elementor-button-align-center elementor-widget elementor-widget-form"
                                        data-id="1720180" data-element_type="widget"
                                        data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}"
                                        data-widget_type="form.default">
                                        <div class="elementor-widget-container">
                                            @include('index.layouts.errors')

                                            @if(isShow(['index.check']))
                                            <form class="elementor-form" method="post" action="{{route('index.check.post')}}" >
                                                @elseif(isShow(['user.domain.check']))
                                                <form class="elementor-form" method="post" action="{{route('user.domain.check.post')}}" >

                                                @endif
@csrf
                                                <input type="hidden" name="status" value="52">

                                                <div class="elementor-form-fields-wrapper elementor-labels-above">



                                                    <div
                                                        class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-10 elementor-field-required">
                                                        <button type="submit"
                                                            class="elementor-button elementor-size-md">
                                                            جستجو
                                                        </button>
                                                    </div>


<input type="hidden" name="suffix"  value="com" />

@include('index.layouts.search_domain', [  'name' => $name   ])





                                                        <div
                                                            class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-tel elementor-col-{{ $name=='all' ? '70' : '50' }} elementor-field-required">
                                                        <input  type="text" name="domain"
                                                            id="form-field-tel"
                                                            class="elementor-field elementor-size-sm  elementor-field-textual"
                                                            placeholder="domain" required="required"
                                                            aria-required="true"
                                                            dir="ltr"   style="background: none repeat scroll 0 0 #d3d3d3;
                                                            border: 1px solid #9f9f9f;
                                                            border-radius: 0 10px 10px 0;
                                                            box-shadow: 0 0 5px #929292 inset;
                                                            cursor: pointer;
                                                            font-size: 17px;
                                                            font-weight: bold;
                                                            line-height: 43px;
                                                            padding: 0 10px;
                                                            position: relative;
                                                            width: 90px;">

                                                    </div>

                                                    <div
                                                    class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-tel elementor-col-20 elementor-field-required">
                                                    <span class="domain-in-01"  style="display: inline-block;
                                                    font-size: 17px;
                                                    font-weight: bold;
                                                    padding: 8px 10px 9px;
                                                    text-align: center;
                                                    width: 68px;
                                                    border: 1px solid #9f9f9f;
                                                    float: left;
                                                    margin-top: 1px;
                                                    border-radius: 6px 0 0 6px;
                                                    direction: ltr;
                                                    background: none repeat scroll 0 0 #d3d3d3;">www.</span>

                                                </div>


                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>
                </div>
            </section>













        </div>
    </div>
</div>







<div data-elementor-type="wp-post" data-elementor-id="52" class="elementor elementor-52" data-elementor-settings="[]">
    <div class="elementor-inner">
        <div class="elementor-section-wrap">


<section class="elementor-section elementor-top-section elementor-element elementor-element-df656de elementor-section-boxed elementor-section-height-default elementor-section-height-default default-style" data-id="df656de" data-element_type="section" data-settings="{&quot;rt_color_sets&quot;:&quot;default-style&quot;}">


    <div class="elementor-container elementor-column-gap-default">
    <div class="elementor-row">
    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-45c4135" data-id="45c4135" data-element_type="column">
    <div class="elementor-column-wrap">
    <div class="elementor-widget-wrap">
    </div>
    </div>
    </div>
    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-62e671f" data-id="62e671f" data-element_type="column">
    <div class="elementor-column-wrap elementor-element-populated">
    <div class="elementor-widget-wrap">
    <div class="elementor-element elementor-element-401cbbe elementor-widget elementor-widget-rt-pricing-table" data-id="401cbbe" data-element_type="widget" data-widget_type="rt-pricing-table.default">
    <div class="elementor-widget-container">
    <div id="" class="pricing_table compare " data-rt-animation-group="group">




            <div class="elementor-element elementor-element-e3e1989 elementor-widget elementor-widget-rt-pricing-table" data-id="e3e1989" data-element_type="widget" data-widget_type="rt-pricing-table.default">
                    <div class="elementor-widget-container">
                <div id="" class="pricing_table compare " data-rt-animation-group="group">








                    @if($result)


    <div id="" class="table_wrap highlight " data-rt-animate="animate" data-rt-animation-type="fadeInDown"><ul>
        <li class="caption">
       <div class="title"  style="color: #1be42f">دامنه {{session()->get('domain')}} موجود می باشد!
       <small style="color: #23dcdc">  &nbsp;</small>
       </div>
        </li>

               <li class="price">
                   <div>
                       <span> </span>
                   </div>
               </li>


       <li class="start_position">

        @include('index.layouts.table_listdomain', [  'checkdomains' => $resultdomain   ])




    </li>


       <li class="buy_position">&nbsp;</li>
       <li class="buy_position">دامنه های مشابه</li>

       <li class="start_position"  >


        @include('index.layouts.table_listdomain', [  'checkdomains' => $checkdomains   ])


       </li>

       </ul>
       </div>

    @endif




    @include('index.layouts.error_domain')










             </div>
             </div>
             </div>








             </div>
             </div>
             </div>
             </div>
             </div>
             </section>


            </div>
        </div>
    </div>







<div data-elementor-type="wp-page" data-elementor-id="2" class="elementor elementor-2" data-elementor-settings="[]">
    <div class="elementor-inner">
        <div class="elementor-section-wrap">


            <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-b01aaa0 elementor-section-boxed elementor-section-height-default elementor-section-height-default default-style"
                data-id="b01aaa0" data-element_type="section"
                data-settings="{&quot;rt_color_sets&quot;:&quot;default-style&quot;}">









      @foreach ($contentdomains->chunk(6) as $chunk)
      <div class="elementor-container elementor-column-gap-default">

      <div class="elementor-row">

          @foreach ($chunk as  $key => $contentdomain)


                        <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-55e0228"
                            data-id="55e0228" data-element_type="column"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-column-wrap elementor-element-populated">

                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-fd74f54 elementor-view-default elementor-widget elementor-widget-icon"
                                        data-id="fd74f54" data-element_type="widget" data-widget_type="icon.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-icon-wrapper">
                                                <div class="elementor-icon">
                                                    <img   src="{{ asset($contentdomain->image . '') }}" style="height: 60px"  />                                               </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="elementor-element elementor-element-8ca1bc4 elementor-widget elementor-widget-rt-heading"
                                        data-id="8ca1bc4" data-element_type="widget"
                                        data-widget_type="rt-heading.default">
                                        <div class="elementor-widget-container">
                                            <div class="rt-heading-wrapper text-center">
                                                <a
              @if (auth()->guard('user')->user())
               href="{{route('user.domain.check',$contentdomain->name )}}"
              @else
               href="{{route('index.check',$contentdomain->name )}}"
              @endif
                                                    target="_self">
                                                    <h2 class="   rt-heading" style="direction:ltr;"><span style="color: red; font_size: 24px; ">.</span>{{$contentdomain->name}} </h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
{{--

                                    <div class="elementor-element elementor-element-a4e999a elementor-widget elementor-widget-text-editor"
                                        data-id="a4e999a" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-text-editor elementor-clearfix">
                                                <p>{{$contentdomain->text}}</p>
                                            </div>
                                        </div>
                                    </div>

--}}

                                    <div class="elementor-element elementor-element-eb0c080 elementor-align-center elementor-widget elementor-widget-button"
                                        data-id="eb0c080" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a

              @if (auth()->guard('user')->user())
              href="{{route('user.domain.check',$contentdomain->name )}}"
             @else
             href="{{route('index.check',$contentdomain->name )}}"
             @endif
                                                    class="elementor-button-link elementor-button elementor-size-sm"
                                                    role="button">
                                                    <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-text">جستجو</span>
                                                    </span>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

@endforeach

                    </div>


                </div>
                    @endforeach


            </section>


        </div>
    </div>
</div>














    @slot('script')
    @endslot


@endcomponent
