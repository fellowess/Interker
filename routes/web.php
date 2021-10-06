<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChangePass;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ServiceController;
use App\Models\Contact;
use App\Models\Multipic;
use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/', function () {
    $brands = DB::table('brands')->get();
    $abouts = DB::table('home_abouts')->latest()->first();
    $images = Multipic::all(); //Ez ugyanaz mint az előzőek, csak nem QueryBuilderrel, hanem a Modellel
    $services = Service::all();

    return view('home', compact('brands', 'abouts', 'images', 'services'));
});

Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang.switch');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact-asdaf', [ContactController::class, 'index'])->name("con");

// Category Controller
Route::get('/category/all', [CategoryController::class, 'AllCat'])->name("all.category");
Route::post('/category/add', [CategoryController::class, 'AddCat'])->name("store.category");

Route::get('/category/edit/{id}', [CategoryController::class, 'Edit']);
Route::post('/category/update/{id}', [CategoryController::class, 'Update']);

Route::get('/softdelete/category/{id}', [CategoryController::class, 'SoftDelete']);
Route::get('/pdelete/category/{id}', [CategoryController::class, 'PDelete']);

Route::get('/category/restore/{id}', [CategoryController::class, 'Restore']);

// BrandController
Route::get('/brand/all', [BrandController::class, 'AllBrand'])->name("all.brand");
Route::post('/brand/add', [BrandController::class, 'AddBrand'])->name("store.brand");

Route::get('/brand/edit/{id}', [BrandController::class, 'Edit']);
Route::post('/brand/update/{id}', [BrandController::class, 'Update']);

Route::get('/brand/delete/{id}', [BrandController::class, 'Delete']);

// Multi Image Route
Route::get('/multi/image', [BrandController::class, 'MultiPic'])->name("multi.image");
Route::post('/multi/add', [BrandController::class, 'StoreImg'])->name("store.image");


// Admin All Route
Route::get('/home/slider', [HomeController::class, 'HomeSlider'])->name("home.slider");
Route::get('/add/slider', [HomeController::class, 'AddSlider'])->name("add.slider");
Route::post('/store/slider', [HomeController::class, 'StoreSlider'])->name("store.slider");

// Home About Us
Route::get('/home/about', [AboutController::class, 'HomeAbout'])->name("home.about");
Route::get('/add/about', [AboutController::class, 'AddAbout'])->name("add.about");
Route::post('/store/about', [AboutController::class, 'StoreAbout'])->name("store.about");
Route::get('/about/edit/{id}', [AboutController::class, 'EditAbout']);
Route::post('/update/abouthome/{id}', [AboutController::class, 'UpdateAbout']);
Route::get('/about/delete/{id}', [AboutController::class, 'DeleteAbout']);

// Portfolio Route
Route::get('/portfolio', [AboutController::class, 'Portfolio'])->name('portfolio');


// Admin Contact Page Route
Route::get('/admin/contact', [ContactController::class, 'AdminContact'])->name('admin.contact');
Route::get('/admin/add/contact', [ContactController::class, 'AdminAddContact'])->name("add.contact");
Route::post('/admin/store/contact', [ContactController::class, 'AdminStoreContact'])->name("store.contact");
Route::get('/admin/message', [ContactController::class, 'AdminMessage'])->name("admin.message");

// Admin Service Page Route
Route::get('/admin/service', [ServiceController::class, 'AdminService'])->name('admin.service');
Route::get('/admin/add/service', [ServiceController::class, 'AdminAddService'])->name("add.service");
Route::post('/admin/store/service', [ServiceController::class, 'AdminStoreService'])->name("store.service");

// Home Contact Page Route
Route::get('/contact', [ContactController::class, 'Contact'])->name('contact');
Route::post('/contact/form', [ContactController::class, 'ContactForm'])->name("contact.form");


// Admin change password and User profile Route
Route::get('/user/password', [ChangePass::class, 'ChangePassword'])->name('change.password');
Route::post('/user/password/update', [ChangePass::class, 'UpdatePassword'])->name('password.update');

Route::get('/user/profile', [ChangePass::class, 'ProfileUpdate'])->name('profile.update');
Route::post('/user/profile/update', [ChangePass::class, 'UpdateUserProfile'])->name('update.user.profile');


// Multi Language Route
Route::get('/language/hu', [AboutController::class, 'Hungarian'])->name('language.hungarian');
Route::get('/language/en', [AboutController::class, 'English'])->name('language.english');
Route::get('/language/fr', [AboutController::class, 'French'])->name('language.french');
Route::get('/language/it', [AboutController::class, 'Italian'])->name('language.italian');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // $users = User::all();
    //$users = DB::table('users')->get();

    return view('admin.index');
})->name('dashboard');

Route::get('/user/logout', [BrandController::class, 'Logout'])->name('user.logout');
