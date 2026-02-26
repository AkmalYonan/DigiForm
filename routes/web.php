<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminSettingController;
use App\Http\Controllers\FiturController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
Route::get('/911-confirm-OkdeiekimfnelmwdLIwdjoijdoijlmfeoijoijmdwlkmdiojinindauyfdaytdjhbDHBuyGDuigakjndDuiknaUODNAWDKjnkjlnADkljnDWLKAJUDbaliubwdauiwbdKUBJDKUWBdaiuwdiUABWDjkbWdbkjbWDiDBKJwdbnKudWUIOBdKJBNWdkUABwdiuwbdkJBWDIUdbWKJdbKWjdbawuidbaiwbd', [App\Http\Controllers\Secret911Controller::class, 'showView'])->name('ak47');

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('indexUtama');
// Route::get('/home', function () {
//     return view('index');
// })->name('indexUtama');


Route::get('/verify-account', [App\Http\Controllers\HomeController::class, 'verifyaccount'])->name('verifyAccount');
Route::post('/verifyotp', [App\Http\Controllers\HomeController::class, 'useractivation'])->name('verifyotp');
Route::get('/resend-otp', [App\Http\Controllers\HomeController::class, 'resendOtp'])->name('resend.otp');
Route::get('/result/{namaPasangan}/{encrypted}', [App\Http\Controllers\HomeController::class, 'result'])->name('result-order');
Route::get('/debug-db', function () {
    try {
        DB::connection()->getPdo();
        return response()->json([
            'status' => 'Connected to MySQL!',
            'database' => DB::connection()->getDatabaseName(),
            'driver' => DB::connection()->getConfig('driver'),
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'Error',
            'message' => $e->getMessage()
        ], 500);
    }
});



Route::middleware(['auth', 'verifiedUser'])->group(function () {
    Route::get('/template', function () {
        return view('home.template');
    })->name('hometemplate');
    Route::get('/account', function () {
        return view('home.account');
    })->name('homeaccount');

    //order
    Route::get('/order', [OrderController::class, 'index'])->name('homeorder');
    Route::post('/order-pesan', [OrderController::class, 'pesan'])->name('order-pesan');
    Route::get('/order-edit', [OrderController::class, 'edit'])->name('order-edit');
    Route::post('/order-update', [OrderController::class, 'ubah'])->name('order-update');
    Route::post('/preview-order', [OrderController::class, 'preview'])->name('preview-order');
    Route::post('/confirm-order', [OrderController::class, 'confirm'])->name('confirm-order');

    //template
    Route::get('/template-amara', [HomeController::class, 'tempAmara'])->name('temp_amara');
    Route::get('/template-amartha', [HomeController::class, 'tempAmartha'])->name('temp_amartha');
    Route::get('/template-prima', [HomeController::class, 'tempPrima'])->name('temp_prima');
    Route::get('/template-arta', [HomeController::class, 'tempArta'])->name('temp_arta');
    Route::get('/template-yonans', [HomeController::class, 'tempYonans'])->name('temp_yonans');
    Route::get('/template-dawa', [HomeController::class, 'tempDawa'])->name('temp_dawa');
    Route::get('/template-emim', [HomeController::class, 'tempEmim'])->name('temp_emim');


    Route::get('/account', [AccountController::class, 'showProfile'])->name('homeaccount');
    Route::post('/account/editAccount', [AccountController::class, 'editAccount'])->name('account-editAccount'); //Baru Usernamenya doang

    Route::get('/pricelist', [HomeController::class, 'priceList'])->name('homepricelist');

    //ACCOUNT
    Route::get('/account/changeplan', [HomeController::class, 'changePlan'])->name('homechangeplan');
    Route::get('/account/orderhistory', [HomeController::class, 'orderHistory'])->name('homeorderhistory');
});

//ADMIN DISINI
Route::middleware(['auth', 'verifiedUser', 'checkAdmin'])->group(function () {
    //INDEX
    Route::get('/dashboard-admin', [AdminController::class, 'index'])->name('admindashboard');
    Route::get('/dashboard/admin-viewPesan', [AdminController::class, 'viewPesanan'])->name('admin-viewPesan');
    Route::put('/dashboard/admin-updateStatus/{id}', [AdminController::class, 'updateStatus'])->name('admin-updateStatus');
    Route::get('/dashboard/admin-viewPesan/{data:id}', [AdminController::class, 'detailPesanan']);
    Route::delete('/dashboard/admin-deletePesan/{id}', [AdminController::class, 'deletePesan'])->name('admin-deletePesan');
    Route::put('/dashboard/admin-updateMapsakad/{id}', [AdminController::class, 'updateMapsUserAkad'])->name('updateMapsUserAkad');
    Route::put('/dashboard/admin-updateMapsresepsi/{id}', [AdminController::class, 'updateMapsUserResepsi'])->name('updateMapsUserResepsi');


    //ADMIN USER
    Route::get('/dashboard/admin-user', [AdminController::class, 'viewUser'])->name('admin-user');
    Route::put('/dashboard/update-paket-user/{id}', [AdminController::class, 'updatePaket'])->name('update-paket-user');
    Route::put('/dashboard/update-level-user/{id}', [AdminController::class, 'updateLevel'])->name('update-level-user');
    Route::delete('/dashboard/delete-user/{id}', [AdminController::class, 'deleteUser'])->name('delete-user');


    //ADMIN CRUD PAKET
    Route::get('/dashboard/admin-addpaket', [PaketController::class, 'index'])->name('admin-addpaket');
    Route::post('/dashboard/store-paket', [PaketController::class, 'store'])->name('store-paket');
    Route::get('/dashboard/edit-paket/{id}', [PaketController::class, 'edit'])->name('edit-paket');
    Route::put('/dashboard/update-paket/{id}', [PaketController::class, 'update'])->name('update-paket');
    Route::delete('/dashboard/delete-paket/{id}', [PaketController::class, 'delete'])->name('delete-paket');

    //ADMIN CRUD FITUR
    Route::get('/dashboard/admin-addfitur', [FiturController::class, 'index'])->name('admin-addfitur');
    Route::post('/dashboard/store-fitur', [FiturController::class, 'store'])->name('store-fitur');
    Route::get('/dashboard/edit-fitur/{id}', [FiturController::class, 'edit'])->name('edit-fitur');
    Route::put('/dashboard/update-fitur/{id}', [FiturController::class, 'update'])->name('update-fitur');
    Route::delete('/dashboard/delete-fitur/{id}', [FiturController::class, 'delete'])->name('delete-fitur');

    //ADMIN CRUD TEMPLATE
    Route::get('/dashboard/admin-addtemplate', [TemplateController::class, 'index'])->name('admin-addtemplate');
    Route::post('/dashboard/store-template', [TemplateController::class, 'store'])->name('store-template');
    Route::get('/dashboard/edit-template/{id}', [TemplateController::class, 'edit'])->name('edit-template');
    Route::put('/dashboard/update-template/{id}', [TemplateController::class, 'update'])->name('update-template');
    Route::delete('/dashboard/delete-template/{id}', [TemplateController::class, 'delete'])->name('delete-template');

    //ADMIN CRUD LEVEL
    Route::get('/dashboard/admin-addlevel', [LevelController::class, 'index'])->name('admin-addlevel');
    Route::post('/dashboard/store-level', [LevelController::class, 'store'])->name('store-level');
    Route::get('/dashboard/edit-level/{id}', [LevelController::class, 'edit'])->name('edit-level');
    Route::put('/dashboard/update-level/{id}', [LevelController::class, 'update'])->name('update-level');
    Route::delete('/dashboard/delete-level/{id}', [LevelController::class, 'delete'])->name('delete-level');

    //SETTING PAKET - FITUR
    Route::get('/dashboard/setting-paketTemplate', [AdminSettingController::class, 'viewSettingPaketTemplate'])->name('admin-settingPaketTemplate');
    Route::get('/dashboard/setting-paketFitur', [AdminSettingController::class, 'viewSettingPaketFitur'])->name('admin-settingPaketFitur');

    Route::patch('/dashboard/setting-paket-template', [AdminSettingController::class, 'updatePaketTemplate'])->name('admin-updatedetailTemplate');
    Route::patch('/dashboard/setting-paket-fitur', [AdminSettingController::class, 'updatePaketFitur'])->name('admin-updatedetailFitur');


    Route::put('/update-noHp', [AdminSettingController::class, 'updateHp'])->name('admin-settingHp');
    Route::put('/update-emailAdmin', [AdminSettingController::class, 'updateEmail'])->name('admin-settingEmail');
    Route::post('/paket-change', [AdminSettingController::class, 'paketChange'])->name('paket-change');
});
