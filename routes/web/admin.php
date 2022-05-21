<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\PageController;


use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ComidController;
use App\Http\Controllers\Admin\FetchController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\RenewController;
use App\Http\Controllers\Admin\SearchController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\Admin\WalletController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TextdesController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\SpotliteController;
use App\Http\Controllers\Admin\TransferController;
use App\Http\Controllers\Admin\NameserverController;
use App\Http\Controllers\Admin\CategoryapiController;
use App\Http\Controllers\Admin\ContentDomainController;
use App\Http\Controllers\Admin\GetwaypaymentController;
use App\Http\Controllers\Admin\CategorycontentdomainController;
use App\Http\Controllers\Admin\TraceApiController;

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

Route::get('/demo', [AdminController::class, 'admindemo'])->name('demo');
Route::get('/index', [AdminController::class, 'demoindex'])->name('index');




Route::prefix('user')
->name('user.')->group(function () {
    Route::get('/createuser', [UserController::class, 'create'])->name('create');
    Route::put('/create', [UserController::class, 'store'])->name('store');
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/{user}/edit', [UserController::class, 'edit'])->name('edit');
    Route::put('/{user}', [UserController::class, 'update'])->name('update');
    Route::put('/{user}/secret', [UserController::class, 'secret'])->name('secret');
    Route::delete('/', [UserController::class, 'destroy'])->name('destroy');
    Route::put('/{id}/status', [UserController::class, 'status'])->name('status');
    Route::put('/{id}/status/api', [UserController::class, 'status_api'])->name('status.api');
    Route::get('/{id}/login', [UserController::class, 'login'])->name('login');
});




/*
Verb          Path                        Action  Route Name
GET           /users                      index   users.index
GET           /users/create               create  users.create
POST          /users                      store   users.store
GET           /users/{user}               show    users.show
GET           /users/{user}/edit          edit    users.edit
PUT|PATCH     /users/{user}               update  users.update
DELETE        /users/{user}               destroy users.destroy

 */
Route::prefix('faq')
->name('faq.')->group(function () {
    Route::get('/indexfaq', [FaqController::class, 'index'])->name('index');
    Route::get('/createfaq', [FaqController::class, 'create'])->name('create');
    Route::post('/', [FaqController::class, 'store'])->name('store');
    Route::get('/{id}', [FaqController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [FaqController::class, 'edit'])->name('edit');
    Route::put('/{id}', [FaqController::class, 'update'])->name('update');
    Route::delete('/{id}', [FaqController::class, 'destroy'])->name('destroy');
});



Route::prefix('page')
->name('page.')->group(function () {
    Route::get('/indexpage', [PageController::class, 'index'])->name('index');
    Route::get('/createpage', [PageController::class, 'create'])->name('create');
    Route::post('/', [PageController::class, 'store'])->name('store');
    Route::get('/{id}', [PageController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [PageController::class, 'edit'])->name('edit');
    Route::put('/{id}', [PageController::class, 'update'])->name('update');
    Route::delete('/{id}', [PageController::class, 'destroy'])->name('destroy');
});


Route::prefix('setting')
->name('setting.')->group(function () {
    Route::get('/logo_management', [SettingController::class, 'logo_management'])->name('logo_management');
    Route::put('/logo_management', [SettingController::class, 'update_logo'])->name('update_logo');

    Route::get('/all_management', [SettingController::class, 'all_management'])->name('all_management');
    Route::put('/all_management', [SettingController::class, 'update_management'])->name('update_management');

    Route::get('/txtdes_management', [TextdesController::class, 'index'])->name('txtdes_management');
    Route::get('/txtdes_management/{id}/edit', [TextdesController::class, 'edit'])->name('txtdes_management_edit');
    Route::put('/txtdes_management/{id}', [TextdesController::class, 'update'])->name('txtdes_management_update');

    Route::get('/finical', [SettingController::class, 'finical'])->name('finical');
    Route::put('/finical', [SettingController::class, 'update_finical'])->name('update_finical');

    Route::get('/api_token', [SettingController::class, 'api'])->name('api');
    Route::put('/api_token', [SettingController::class, 'update_api'])->name('update_api');


    Route::get('/laws', [SettingController::class, 'laws'])->name('laws');
    Route::put('/laws', [SettingController::class, 'update_laws'])->name('update_laws');


    Route::get('/getway_payment', [GetwaypaymentController::class, 'index'])->name('getway_payment');
    Route::get('/getway_payment/{id}/edit', [GetwaypaymentController::class, 'edit'])->name('getway_payment_edit');
    Route::put('/getway_payment/{id}', [GetwaypaymentController::class, 'update'])->name('getway_payment_update');
    Route::put('/getway_payment/statuse/{status}/{id}', [GetwaypaymentController::class, 'status'])->name('getway_payment_status');
});




Route::prefix('manegement')
->name('manegement.')->group(function () {


    Route::get('/spotlites', [SpotliteController::class, 'index'])->name('spotlites');
    Route::get('/spotlites/{id}/edit', [SpotliteController::class, 'edit'])->name('spotlites_edit');
    Route::put('/spotlites/{id}', [SpotliteController::class, 'update'])->name('spotlites_update');


    Route::get('/comid/{status}'  , [ComidController::class, 'index'])->name('comid_index');
    Route::put('/comid/{status}'  , [ComidController::class, 'store'])->name('comid_store');
    Route::get('/comid/{status}/{id}/edit'  , [ComidController::class, 'edit'])->name('comid_edit');
    Route::put('/comid/{status}/{id}', [ComidController::class, 'update'])->name('comid_update');
    Route::delete('/comid/{status}/delete/{id}', [ComidController::class, 'destroy'])->name('comid_destroy');

});



Route::prefix('content')
->name('content.')->group(function () {

    Route::prefix('webservice')
    ->name('webservice.')->group(function () {

        Route::get('/', [ContentController::class, 'index'])->name('index');
        Route::get('/createwebservice', [ContentController::class, 'create'])->name('create');
        Route::post('/', [ContentController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [ContentController::class, 'edit'])->name('edit');
        Route::put('/{id}', [ContentController::class, 'update'])->name('update');
         Route::delete('/{id}', [ContentController::class, 'destroy'])->name('destroy');

    });



    Route::prefix('document')
    ->name('document.')->group(function () {

        Route::get('/', [DocumentController::class, 'index'])->name('index');
        Route::get('/createdocument', [DocumentController::class, 'create'])->name('create');
        Route::post('/', [DocumentController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [DocumentController::class, 'edit'])->name('edit');
        Route::put('/{id}', [DocumentController::class, 'update'])->name('update');
        Route::put('/{id}/status', [DocumentController::class, 'status'])->name('status');
        Route::delete('/{id}', [DocumentController::class, 'destroy'])->name('destroy');

    });

    Route::prefix('categoryapi')
    ->name('categoryapi.')->group(function () {

        Route::get('/', [CategoryapiController::class, 'index'])->name('index');
        Route::get('/createcategoryapi', [CategoryapiController::class, 'create'])->name('create');
        Route::post('/', [CategoryapiController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [CategoryapiController::class, 'edit'])->name('edit');
        Route::put('/{id}', [CategoryapiController::class, 'update'])->name('update');
        Route::put('/{id}/status', [CategoryapiController::class, 'status'])->name('status');
        Route::delete('/{id}', [CategoryapiController::class, 'destroy'])->name('destroy');

    });



Route::prefix('categorycontentdomain')
->name('categorycontentdomain.')->group(function () {
    Route::get('/createcategorycontent', [CategorycontentdomainController::class, 'create'])->name('create');
    Route::post('/', [CategorycontentdomainController::class, 'store'])->name('store');
    Route::get('/{id}', [CategorycontentdomainController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [CategorycontentdomainController::class, 'edit'])->name('edit');
    Route::put('/{id}', [CategorycontentdomainController::class, 'update'])->name('update');
    Route::delete('/{id}', [CategorycontentdomainController::class, 'destroy'])->name('destroy');
});


    Route::prefix('domain')
    ->name('domain.')->group(function () {
        Route::get('/', [ContentDomainController::class, 'index'])->name('index');
        Route::get('/create-contentdomain', [ContentDomainController::class, 'create'])->name('create');
        Route::post('/', [ContentDomainController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [ContentDomainController::class, 'edit'])->name('edit');
        Route::put('/{id}', [ContentDomainController::class, 'update'])->name('update');
        Route::put('/{id}/status', [ContentDomainController::class, 'status'])->name('status');
        Route::delete('/{id}', [ContentDomainController::class, 'destroy'])->name('destroy');



        Route::prefix('renew')->name('renew.')->group(function () {
            Route::post('/', [RenewController::class, 'store'])->name('store');
            Route::get('/index-renew', [RenewController::class, 'index'])->name('index');
            Route::get('/{id}/show-renew', [RenewController::class, 'show'])->name('show');
            Route::put('/{id}', [RenewController::class, 'update'])->name('update');
            Route::put('/{id}/status', [RenewController::class, 'status'])->name('status');
            Route::delete('/{id}', [RenewController::class, 'destroy'])->name('destroy');

        });


    });



});


Route::prefix('domain')
->name('domain.')->group(function () {



    Route::prefix('renew')->name('renew.')->group(function () {
        Route::post('/', [RenewController::class, 'store'])->name('store');
        Route::get('/index-renew', [RenewController::class, 'index'])->name('index');
        Route::get('/{id}/show-renew', [RenewController::class, 'show'])->name('show');
        Route::put('/{id}', [RenewController::class, 'update'])->name('update');
        Route::put('/{renew}/{status}/change_status', [RenewController::class, 'status'])->name('status');
        Route::delete('/{id}', [RenewController::class, 'destroy'])->name('destroy');

    });



Route::prefix('transfer')->name('transfer.')->group(function () {
    Route::get('/index-transfer', [TransferController::class, 'index'])->name('index');
    Route::get('/{id}/show-transfer', [TransferController::class, 'show'])->name('show');
    Route::put('/{id}', [TransferController::class, 'update'])->name('update');
    Route::put('/{id}/status', [TransferController::class, 'status'])->name('status');
    Route::delete('/{id}', [TransferController::class, 'destroy'])->name('destroy');


});


});



Route::prefix('nameserver')->name('nameserver.')->group(function () {

    Route::get('/index-nameserver', [NameserverController::class, 'index'])->name('index');
    Route::get('/{id}/show-nameserver', [NameserverController::class, 'show'])->name('show');
    Route::put('/{id}', [NameserverController::class, 'update'])->name('update');
    Route::delete('/{id}', [NameserverController::class, 'destroy'])->name('destroy');

});


Route::prefix('search')
->name('search.')->group(function () {
    Route::get('/', [SearchController::class, 'index'])->name('index');
});



Route::prefix('wallet')
->name('wallet.')->group(function () {

    Route::get('/', [WalletController::class, 'index'])->name('index');
    Route::get('/create_charge', [WalletController::class, 'create'])->name('create');
    Route::post('/', [WalletController::class, 'store'])->name('store');

});



Route::prefix('contact')
->name('contact.')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('index');
    Route::post('/contact', [ContactController::class, 'store'])->name('store');
    Route::get('/{contact}/show_contact', [ContactController::class, 'show'])->name('show');

});

Route::prefix('order')
->name('order.')->group(function () {
    Route::get('/', [OrderController::class, 'index'])->name('index');
    Route::get('/{id}/show_order', [OrderController::class, 'show'])->name('show');
    Route::put('/{id}/{status}/change_status', [OrderController::class, 'status'])->name('status');
    Route::delete('/{ticket}', [OrderController::class, 'destroy'])->name('destroy');


});



Route::prefix('ticket')
->name('ticket.')->group(function () {
    Route::get('/indexticket', [TicketController::class, 'index'])->name('index');
    Route::get('/{ticket}/chating', [TicketController::class, 'show'])->name('show');
    Route::put('/{ticket}', [TicketController::class, 'update'])->name('update');
    Route::delete('/{ticket}', [TicketController::class, 'destroy'])->name('destroy');
    Route::get('/close/{ticket}', [TicketController::class, 'status'])->name('close');
});




Route::prefix('trace')
->name('trace.')->group(function () {

    Route::get('/', [TraceApiController::class, 'index'])->name('index');

});





Route::prefix('fetch')
->name('fetch.')->group(function () {
    Route::get('/font/{value}', [FetchController::class, 'font'])->name('font');
});


