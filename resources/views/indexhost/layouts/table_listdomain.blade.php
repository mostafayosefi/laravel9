 



@foreach ($checkdomains as $key => $admin)
<whois-free-result ng-show="!vm.hideFreeResult" ng-if="vm.mainStatus == 1" query="vm.searchedDomain"
domain="vm.mainTld" on-add="vm.add()" on-remove="vm.remove()"
on-check-registrar-id="vm.checkRegistrarId()" on-new-registrar-id="vm.newRegistrarId()"
class="ng-scope ng-isolate-scope">
<div class="media domain-status success mt-3">
    <div class="media-body">
        <div class="row1">
            <p class="mt-0 mb-1 domain-label ng-binding" ng-bind="vm.query">{{ $admin->domain }}</p>
            <span>دامنه شما آزاد می باشد، قبل از دیگران آن را سفارش دهید.</span>
        </div>
    </div>
    <div class="left-col align-self-center text-left btn-col">
        <price-domain-template cycle="vm.cycle" price="vm.price" discounted="vm.priceWithDiscount"
            class="ng-isolate-scope">
            <p class="price">
                <span class="period ng-binding" ng-bind="(vm.cycle) + ': '">سالیانه: </span>
                <!-- ngIf: vm.discounted && vm.discounted !== vm.price -->
                <b class="currency dc new-price ng-binding"
                    ng-bind="(vm.discounted | number | persianDigit)">{{ persian_number(number_format($admin->riyal)) }} </b>
                <span class="toman">ریال</span>
            </p>
        </price-domain-template><!-- ngIf: !vm.domain.added && !vm.domain.needRegistrarId -->
        <a class="btn-cta_add-basket"  href="{{ route('user.domain.buy.post', $admin->id) }}" onclick="event.preventDefault();
            document.getElementById('buy-form{{ $admin->id }}').submit();" > <svg
                class="bi ml-2" width="20" height="20" fill="currentColor">
                <use xlink:href="{{asset('indexhost_files/bootstrap-icons.svg#cart-plus-fill')}}"></use>
            </svg> افزودن به سبد خرید
        </a>


    </div>
</div>
</whois-free-result><!-- end ngIf: vm.mainStatus == 1 -->



<form id="buy-form{{ $admin->id }}"
    action="{{ route('user.domain.buy.post', $admin->id) }}" method="POST"
    class="d-none">
    @csrf
    <input type="hidden" name="domain" value="{{ $admin->domain }}" />
    <input type="hidden" name="price" value="{{ $admin->riyal }}" />
</form>


@endforeach
