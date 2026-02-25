<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Controllers\Admin\AdminActivityController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return redirect()->route('my_dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';


Route::get('/all-listing', [ListingController::class, 'index'])->name('listing.index');
Route::get('/all-sales', [ListingController::class, 'allSales'])->name('listing.sales');
Route::get('/all-rent', [ListingController::class, 'allRent'])->name('listing.rent');
Route::get('/all-rent-to-own', [ListingController::class, 'allRentToOwn'])->name('listing.all-rent-to-own');
Route::get('/all-project', [ListingController::class, 'allProject'])->name('listing.project');
Route::get('/home', [ListingController::class, 'home'])->name('home');
Route::get('/', [ListingController::class, 'home'])->name('home2');
Route::get('details/{id}', [DashboardController::class, 'show'])->name('listing.details');


Route::prefix('provider')->middleware('auth')->group(function () {
    // dashboard links
    Route::get('/create_new', [DashboardController::class, 'create'])->name('listing.create');
    Route::post('/create', [DashboardController::class, 'store'])->name('listing.store');
    Route::post('/persist', [DashboardController::class, 'store']);
    
    Route::put('edit/{id}', [DashboardController::class, 'edit']);
    Route::put('index/{id}', [DashboardController::class, 'update']);
    Route::delete('index/{id}', [DashboardController::class, 'destory']);
    Route::get('my_project', [DashboardController::class, 'myProject'])->name('myProject');
    Route::get('my-dashboard', [DashboardController::class, 'dashboard'])->name('my_dashboard');
    Route::get('profile', [ProfileController::class, 'create'])->name('user_profile');
    Route::post('create-profile', [ProfileController::class, 'createProfile'])->name('create_profile');

    
});

    Route::prefix('vendor')->group(function () {
        Route::get('/login', [AuthController::class, 'showVendorLogin'])->name('vendor.login');
        Route::get('/register', [AuthController::class, 'showVendorRegister'])->name('vendor.register');
        Route::post('/login', [AuthController::class, 'loginVendor'])->name('vendor_login');
    });

    Route::prefix('investor')->group(function () {
        Route::get('/login', [AuthController::class, 'showInvestorLogin'])->name('investor.login');
        Route::get('/register', [AuthController::class, 'showInvestorRegister'])->name('investor.register');
        Route::post('/login', [AuthController::class, 'loginInvestor']);
    });

    Route::prefix('admin')->group(function () {
        Route::get('/login', [AuthController::class, 'showAdminLogin'])->name('admin.login');
        Route::post('/admin-login', [AuthController::class, 'loginAdmin'])->name('login.admin');
        Route::get('/register', [AuthController::class, 'showAdminRegister'])->name('admin.register');
        Route::get('/dashboard', [AdminDashboardController::class, 'adminDashboardStat'])->name('admin.dashboard');
        Route::get('all-projects', [AdminActivityController::class, 'getAllProject'])->name('get_all_project');
    });

    Route::prefix('client')->group(function () {
        Route::get('/login', [AuthController::class, 'showClientLogin'])->name('client.login');
        Route::post('/login', [AuthController::class, 'loginClient']);
    });

    // Vendor login
    Route::get('vendor/login', [AuthController::class, 'showVendorLogin'])->name('vendor.login');
    Route::post('vendor/login', function (LoginRequest $request) {
        return app(AuthController::class)->handleLogin($request, 'vendor');
    })->name('vendor.login.post');

    // Investor login
    Route::get('investor/login', [AuthController::class, 'showInvestorLogin'])->name('investor.login');
    Route::post('investor/login', function (LoginRequest $request) {
        return app(AuthController::class)->handleLogin($request, 'investor');
    })->name('investor.login.post');

    // Admin login
    Route::get('admin/login', [AuthController::class, 'showAdminLogin'])->name('admin.login');
    Route::post('admin/login', function (LoginRequest $request) {
        return app(AuthController::class)->handleLogin($request, 'admin');
    })->name('admin.login.post');

    // Client login
    Route::get('client/login', [AuthController::class, 'showClientLogin'])->name('client.login');
    Route::post('client/login', function (LoginRequest $request) {
        return app(AuthController::class)->handleLogin($request, 'client');
    })->name('client.login.post');

    // Route::get('/vendor/dashboard', [VendorDashboardController::class, 'index'])->name('vendor.dashboard')->middleware('auth');
    // Route::get('/investor/dashboard', [InvestorDashboardController::class, 'index'])->name('investor.dashboard')->middleware('auth');
    // Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard')->middleware('auth');
    // Route::get('/client/dashboard', [ClientDashboardController::class, 'index'])->name('client.dashboard')->middleware('auth');


Route::get('admin', [AdminDashboardController::class, 'adminDashboardStat'])->name('admin-dashboard')->middleware('auth');



Route::get('logging', function(){
    return view ('authentication.login');
});