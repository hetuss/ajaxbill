<?php
  
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
 
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>'auth'],function (){ 
// Route::get('show','BillController@showbill')->name('bill');
// Route::get('insertdata','BillController@insert')->name('add.bill');
// Route::post('storebill','BillController@storedata')->name('store.bill'); 
Route::get('editdata/{id}','AjaxController@editbill')->name('edit.bill');
Route::post('updatedata','AjaxController@updatebill')->name('update.bill');
Route::get('delete/data{id}','AjaxController@deletebill')->name('delete.bill');
Route::get('detailspage{id}','AjaxController@detailspage')->name('detailspage.bill');

 

//to store id

Route::get('clientget{id}','AjaxController@client')->name('detailspage');
Route::post('client','AjaxController@storeclient')->name('storeclient');

Route::get('editdetail{id}','AjaxController@editdetail')->name('edit.details');
Route::post('updatedetail','AjaxController@updatedetails')->name('update.details');
Route::get('deletedetails{id}','AjaxController@deletedetails')->name('delete.details');

Route::get('pdf/{id}','AjaxController@generatepdf')->name('pdf');

  

// ajax
Route::resource('ajax-postssss', 'AjaxController');



Route::resource('ajax-posts', 'AjaxPostController');

// logout
 Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
});

// Admin module End
Auth::routes();













