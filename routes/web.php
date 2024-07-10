<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NurseryController;
use App\Http\Controllers\PlantController;
use Illuminate\Support\Facades\Route;

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



Route::get('/blank_page', function () {
    return view('blank');
});
Route::get('/', [AdminController::class, 'index']);
Route::get('register', [AdminController::class, 'register']);
Route::get('/dashboard', [AdminController::class, 'admin_dashboard']);
Route::post('sigup', [AdminController::class, 'sigup'])->name('sigup.Addsign');
Route::post('/signin', [AdminController::class, 'make_login']); 
Route::get('/loginnursery', [NurseryController::class, 'nursarysigup']);
Route::get('sign_up_nursery', [NurseryController::class, 'Sign_Up']);
Route::post('/nurserysignin', [NurseryController::class, 'nursery_login']); 
Route::post('sigupN', [NurseryController::class, 'sigupInsert'])->name('sigupN.Addsign');
Route::get('add_nursery', [AdminController::class, 'addnursery']);
Route::get('/logout', [AdminController::class,'logout'])->name('logout');
Route::get('/logout', [NurseryController::class,'logout'])->name('logout');
Route::post('nursery', [AdminController::class, 'nurseryInsert'])->name('nursery.Addnursery');
Route::get('list_nursery', [NurseryController::class, 'list_nursery']);
Route::get('/logout', [NurseryController::class,'logout'])->name('logout');
Route::get('admin_nursery', [AdminController::class, 'list_admin']);
Route::get('category', [CategoryController::class, 'addcategory'])->name('category.addcategory');
Route::post('categries', [CategoryController::class, 'add'])->name('category.addcategory');
Route::get('plant', [PlantController::class, 'addplant'])->name('plant.addplant');
Route::post('plants', [PlantController::class, 'Insertplant'])->name('plant.addplant');
Route::get('list_plant', [PlantController::class, 'list_plant']);
Route::get('list_category', [CategoryController::class, 'list_category'])->name('category.addcategory');
Route::delete('delete-category/{id}',[CategoryController::class,'deletecategory']);
Route::get('list_plant/{id}',[PlantController::class,'deleteplants']);
Route::get('statusplant/{id}', [AdminController::class, 'status']);
Route::delete('delete-nursery/{id}',[AdminController::class,'deleteNursery']);
Route::get('edit/{id}',[CategoryController::class,'Edit']);