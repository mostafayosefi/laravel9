<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\User\SslController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\Index\IndexController;
use App\Http\Controllers\User\WalletController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\FinicalController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\MyDomainController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\CaptchaServiceController;
use App\Http\Controllers\Index\DocumentController;
use App\Http\Controllers\Service\DomainController;
use App\Http\Controllers\Index\LoginuserController;
use App\Http\Controllers\User\NameserverController;
use App\Http\Controllers\Index\SitemapXmlController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ConfirmPasswordController;

Route::namespace('Auth')->prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
    Route::get('/logout', [AdminAuthController::class, 'logout'])->name('adminLogout');
    });

    Route::prefix('user')->name('user.')->middleware([ 'userauth'])->group(function () {

        Route::resource('nameserver', NameserverController::class);

    });




        Route::namespace('Index')->name('index.')->group(function () {
            Route::get('/', [IndexController::class, 'index'])->name('home');
            Route::get('/service/{title}', [IndexController::class, 'page'])->name('page');
            Route::get('/contact-us', [IndexController::class, 'support'])->name('support');
            Route::post('/contact-us', [IndexController::class, 'supportPost'])->name('support.post');
            Route::get('/user/register', [LoginuserController::class, 'register'])->name('user.register');
            Route::post('/user/register', [LoginuserController::class, 'store'])->name('user.register.post');
            Route::get('/user/login', [LoginuserController::class, 'login'])->name('user.login');
            Route::post('/user/login', [LoginuserController::class, 'authenticate'])->name('user.login.post');
            Route::post('/user/logout', [LoginuserController::class, 'logout'])->name('user.logout');
            Route::get('/sitemap.xml', [SitemapXmlController::class, 'sitemap']);

            Route::get('/faqs', [IndexController::class, 'faqs'])->name('faqs');



            Route::prefix('webservice')->name('document.')->group(function () {
                Route::get('/{myurl?}', [DocumentController::class, 'index'])->name('index');
            });

            //domain

            Route::get('/check_domain/{name?}', [MyDomainController::class, 'CheckDomain'])->name('check');
            Route::post('/check_domain', [MyDomainController::class, 'CheckDomainPost'])->name('check.post');


        });



        Route::prefix('user')->namespace('User')->name('user.')->middleware([ 'userauth'])->group(function () {

            Route::prefix('panel')->name('panel.')->group(function () {
                Route::get('/', [IndexController::class, 'panel'])->name('index');
            });


            //profile
            Route::prefix('profile')->name('profile.')->group(function () {
                Route::get('/', [ProfileController::class, 'index'])->name('index');
                Route::get('/show', [ProfileController::class, 'show'])->name('show');
                Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
                Route::put('/update', [ProfileController::class, 'update'])->name('update');
                Route::get('/secret', [ProfileController::class, 'secret'])->name('secret');
            });





            //domain
            Route::prefix('domain')->name('domain.')->group(function () {
                Route::get('/', [MyDomainController::class, 'index'])->name('index');
                Route::get('/check_domain/{name?}', [MyDomainController::class, 'CheckDomain'])->name('check');
                Route::post('/check_domain', [MyDomainController::class, 'CheckDomainPost'])->name('check.post');

                Route::post('/buy', [MyDomainController::class, 'BuyPost'])->name('buy.post');
            });


            Route::prefix('order')->name('order.')->group(function () {
                Route::get('/', [OrderController::class, 'index'])->name('index');
                Route::get('/{id}', [OrderController::class, 'show'])->name('show');
                Route::put('/{id}', [OrderController::class, 'payment'])->name('payment');
                Route::delete('/{id}', [OrderController::class, 'destroy'])->name('destroy');


            });

            Route::prefix('contact')->name('contact.')->group(function () {
                Route::get('/', [ContactController::class, 'index'])->name('index');
                Route::get('/create', [ContactController::class, 'create'])->name('create');
                Route::post('/', [ContactController::class, 'store'])->name('store');
                Route::get('/{id}', [ContactController::class, 'show'])->name('show');
                Route::get('/{id}/edit', [ContactController::class, 'edit'])->name('edit');
                Route::put('/{id}', [ContactController::class, 'update'])->name('update');
                Route::delete('/{id}', [ContactController::class, 'destroy'])->name('destroy');
                Route::get('/{id}/default', [ContactController::class, 'default'])->name('default');

            });




            Route::prefix('ssl')->name('ssl.')->group(function () {

                Route::get('/', [SslController::class, 'index'])->name('index');


            });



            Route::prefix('finical')->name('finical.')->group(function () {
                Route::get('/', [FinicalController::class, 'index'])->name('index');


                     Route::prefix('wallet')->name('wallet.')->group(function () {
                        Route::get('/', [WalletController::class, 'index'])->name('index');
                        Route::get('/create', [WalletController::class, 'create'])->name('create');
                        Route::post('/', [WalletController::class, 'store'])->name('store');


                      });

            });







        });



Route::get('/reload-captcha', [CaptchaServiceController::class, 'reloadCaptcha']);


 //Clear route cache
 Route::get('/route-cache', function() {
    Artisan::call('route:cache');
    return 'Routes cache cleared';
});

//Clear config cache
Route::get('/config-cache', function() {
    Artisan::call('config:cache');
    return 'Config cache cleared';
});

// Clear application cache
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return 'Application cache cleared';
});

// Clear view cachee
Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    return 'View cache cleared';
});

// Clear cache using reoptimized class
Route::get('/optimize-clear', function() {
    Artisan::call('optimize:clear');
    return 'View cache cleared';
});

// composer dump-autoload
Route::get('/updateapp', function() {

    exec('composer dump-autoload');
    echo 'composer dump-autoload complete';
});
