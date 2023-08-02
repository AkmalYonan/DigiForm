<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminSettingController;
use App\Http\Controllers\FiturController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('indexUtama');
// Route::get('/home', function () {
//     return view('index');
// })->name('indexUtama');


Route::get('/verify-account', [App\Http\Controllers\HomeController::class, 'verifyaccount'])->name('verifyAccount');
Route::post('/verifyotp', [App\Http\Controllers\HomeController::class, 'useractivation'])->name('verifyotp');
Route::get('/resend-otp', [App\Http\Controllers\HomeController::class, 'resendOtp'])->name('resend.otp');



Route::middleware(['auth', 'verifiedUser'])->group(function () {
    // Route::get('/home', function () {
    //     return view('index');
    // })->name('indexUtama');
    Route::get('/template', function () {
        return view('home.template');
    })->name('hometemplate');
    Route::get('/account', function () {
        return view('home.account');
    })->name('homeaccount');

    //order
    Route::get('/order', [OrderController::class, 'index'])->name('homeorder');
    Route::post('/order-pesan', [OrderController::class, 'pesan']);

    //template
    Route::get('/template-amara', [HomeController::class, 'tempAmara'])->name('temp_amara');
    Route::get('/template-amartha', [HomeController::class, 'tempAmartha'])->name('temp_amartha');
    Route::get('/template-prima', [HomeController::class, 'tempPrima'])->name('temp_prima');
    Route::get('/template-arta', [HomeController::class, 'tempArta'])->name('temp_arta');
    Route::get('/template-yonans', [HomeController::class, 'tempYonans'])->name('temp_yonans');
    Route::get('/template-dawa', [HomeController::class, 'tempDawa'])->name('temp_dawa');


    Route::get('/account', [AccountController::class, 'showProfile'])->name('homeaccount');
    Route::post('/account/change-password', 'AccountController@changePassword')->name('account.change_password'); //BELUM JADI

    Route::get('/pricelist', [HomeController::class, 'priceList'])->name('homepricelist');
    Route::get('/changeplan', [HomeController::class, 'changePlan'])->name('homechangeplan');
});

//ADMIN DISINI
Route::middleware(['auth', 'verifiedUser', 'checkAdmin'])->group(function () {
    //INDEX
    Route::get('/dashboard-admin', [AdminController::class, 'index'])->name('admindashboard');
    Route::get('/admin-viewPesan', [AdminController::class, 'viewPesanan'])->name('admin-viewPesan');
    Route::get('/admin-viewPesan/{data:id}', [AdminController::class, 'detailPesanan']);


    //ADMIN USER
    Route::get('/admin-user', [AdminController::class, 'viewUser'])->name('admin-user');
    Route::put('/update-paket-user/{id}', [AdminController::class, 'updatePaket'])->name('update-paket-user');

    //ADMIN CRUD PAKET
    Route::get('/admin-addpaket', [PaketController::class, 'index'])->name('admin-addpaket');
    Route::post('/store-paket', [PaketController::class, 'store'])->name('store-paket');
    Route::get('/edit-paket/{id}', [PaketController::class, 'edit'])->name('edit-paket');
    Route::put('/update-paket/{id}', [PaketController::class, 'update'])->name('update-paket');
    Route::delete('/delete-paket/{id}', [PaketController::class, 'delete'])->name('delete-paket');

    //ADMIN CRUD FITUR
    Route::get('/admin-addfitur', [FiturController::class, 'index'])->name('admin-addfitur');
    Route::post('/store-fitur', [FiturController::class, 'store'])->name('store-fitur');
    Route::get('/edit-fitur/{id}', [FiturController::class, 'edit'])->name('edit-fitur');
    Route::put('/update-fitur/{id}', [FiturController::class, 'update'])->name('update-fitur');
    Route::delete('/delete-fitur/{id}', [FiturController::class, 'delete'])->name('delete-fitur');

    //ADMIN CRUD TEMPLATE
    Route::get('/admin-addtemplate', [TemplateController::class, 'index'])->name('admin-addtemplate');
    Route::post('/store-template', [TemplateController::class, 'store'])->name('store-template');
    Route::get('/edit-template/{id}', [TemplateController::class, 'edit'])->name('edit-template');
    Route::put('/update-template/{id}', [TemplateController::class, 'update'])->name('update-template');
    Route::delete('/delete-template/{id}', [TemplateController::class, 'delete'])->name('delete-template');

    //SETTING PAKET - FITUR
    // Route::get('/setting-paket', [AdminSettingController::class, 'index'])->name('setting-paket');
    Route::put('/update-noHp', [AdminSettingController::class, 'updateHp'])->name('admin-settingHp');
    Route::put('/update-emailAdmin', [AdminSettingController::class, 'updateEmail'])->name('admin-settingEmail');
});
