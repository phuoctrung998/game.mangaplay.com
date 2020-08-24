<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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



Auth::routes();

//frontend

Route::get('/', 'HomeController@index')->name('home');
Route::get('/nap-the', 'HomeController@napthe')->name('napthe');
Route::get('/su-kien', 'HomeController@sukien')->name('sukien');
Route::get('/tin-tuc', 'HomeController@tintuc')->name('tintuc');
Route::get('/thong-tin', 'HomeController@thongtin')->name('thongtin');

//viewpost
Route::get('/{slug}', 'HomeController@chitiet')->name('chitiet');

//admin
Route::prefix('admin')->group(function() {

            //dashboard
            Route::get('/dashboard', 'Admin\AdminController@show_dashboard')->name('dashboard')->middleware('checkadmin');


            //login.logout
            Route::get('/login', 'Admin\LoginController@getLogin')->name('admin.login');
            Route::post('/login', 'Admin\LoginController@postLogin')->name('admin.uplogin');
            //admin
            Route::get('/listadmin', 'Admin\AdminController@admin_list')->name('admin.manager.list')->middleware('checkadmin');
            //edit
            Route::get('/editadmin/{id}','Admin\AdminController@showFormEditAdmin')->middleware('checkadmin');
            Route::Post('/editadmin/{id}','Admin\AdminController@editadmin')->middleware('checkadmin');
            Route::get('/deleteadmin/{id}','Admin\AdminController@deleteadmin')->middleware('checkadmin');
            //add
            Route::get('/addadmin','Admin\AdminController@add_admin')->name('admin.manager.add')->middleware('checkadmin');
            Route::Post('/addadmin','Admin\AdminController@up_admin')->name('admin.manager.up')->middleware('checkadmin');

    //Post
    Route::prefix('post')->middleware('checkadmin')->group(function() {
            //add
            Route::get('/addpostcates','Admin\PostController@add_postcates')->name('admin.post.add');
            Route::Post('/addpostcates','Admin\PostController@up_postcates')->name('admin.post.up');
            Route::get('/addpost','Admin\PostController@add_post')->name('admin.post.addPost');
            Route::Post('/addpost','Admin\PostController@up_post')->name('admin.post.upPost');
            //list
            Route::get('/postlist', 'Admin\PostController@post_list')->name('admin.post.listPost');
            Route::get('/postcateslist', 'Admin\PostController@postcates_list')->name('admin.post.listPostcates');

            //edit
            Route::get('/editpost/{id}', 'Admin\PostController@showFormEditPost');
            Route::post('/editpost/{id}', 'Admin\PostController@editpost');
            Route::get('/deletepost/{id}', 'Admin\PostController@deletepost');

            Route::get('/editpostcates/{id}', 'Admin\PostController@showFormEditPostcates');
            Route::post('/editpostcates/{id}', 'Admin\PostController@editpostcates');
            Route::get('/deletepostcates/{id}', 'Admin\PostController@deletepostcates');

            //images
            Route::get('file-upload', 'Admin\PostController@fileUpload')->name('file.upload');
            Route::post('file-upload', 'Admin\PostController@fileUploadPost')->name('file.upload.post');


});

    //Slider
    Route::prefix('sliders')->middleware('checkadmin')->group(function() {
            //add
            Route::get('/addslidercates','Admin\SlidersController@add_slidercates')->name('admin.sliders.add');
            Route::post('/addslidercates','Admin\SlidersController@up_slidercates')->name('admin.sliders.up');
            Route::get('/addsliders','Admin\SlidersController@add_sliders')->name('admin.sliders.addSliders');
            Route::post('/addsliders','Admin\SlidersController@up_sliders')->name('admin.sliders.upSliders');
            //list
            Route::get('/sliderslist', 'Admin\SlidersController@sliders_list')->name('admin.sliders.listSliders');
            Route::get('/slidercateslist', 'Admin\SlidersController@slidercates_list')->name('admin.sliders.listSlidercates');

            //edit
            Route::get('/editsliders/{id}', 'Admin\SlidersController@showFormEditSliders');
            Route::post('/editsliders/{id}', 'Admin\SlidersController@editsliders');
            Route::get('/deletesliders/{id}', 'Admin\SlidersController@deletesliders');

            Route::get('/editslidercates/{id}', 'Admin\SlidersController@showFormEditslidercates');
            Route::post('/editslidercates/{id}', 'Admin\SlidersController@editslidercates');
            Route::get('/deleteslidercates/{id}', 'Admin\SlidersController@deleteslidercates');
});

    //Trade
    Route::prefix('trade')->middleware('checkadmin')->group(function() {
            //add
            Route::get('/addmoneymkt','Admin\TradeController@add_moneymkt')->name('admin.trade.add');
            Route::post('/addmoneymkt','Admin\TradeController@up_moneymkt')->name('admin.trade.up');
            Route::get('/addmkt','Admin\TradeController@add_mkt')->name('admin.trade.addMkt');
            Route::post('/addmkt','Admin\TradeController@up_mkt')->name('admin.trade.upMkt');
            //list
            Route::get('/mktlist', 'Admin\TradeController@mkt_list')->name('admin.trade.listMkt');
            Route::get('/moneymktlist', 'Admin\TradeController@moneymkt_list')->name('admin.trade.listMoneymkt');

            //edit
            Route::get('/editmkt/{id}', 'Admin\TradeController@showFormEditmkt');
            Route::post('/editmkt/{id}', 'Admin\TradeController@editmkt');
            Route::get('/deletemkt/{id}', 'Admin\TradeController@deletemkt');

            Route::get('/editmoneymkt/{id}', 'Admin\TradeController@showFormEditMoneymkt');
            Route::post('/editmoneymkt/{id}', 'Admin\TradeController@editmoneymkt');
            Route::get('/deletemoneymkt/{id}', 'Admin\TradeController@deletemoneymkt');
});


    //Giftcode
    Route::prefix('giftcode')->middleware('checkadmin')->group(function() {
            //add
            Route::get('/addgiftcodecates','Admin\GiftcodeController@add_giftcodecates')->name('admin.giftcode.add');
            Route::post('/addgiftcodecates','Admin\GiftcodeController@up_giftcodecates')->name('admin.giftcode.up');
            Route::get('/addgiftcode','Admin\GiftcodeController@add_giftcode')->name('admin.giftcode.addGiftcode');
            Route::post('/addgiftcode','Admin\GiftcodeController@up_giftcode')->name('admin.giftcode.upGiftcode');
            //list
            Route::get('/giftcodelist', 'Admin\GiftcodeController@giftcode_list')->name('admin.giftcode.listGiftcode');
            Route::get('/giftcodecateslist', 'Admin\GiftcodeController@giftcodecates_list')
            ->name('admin.giftcode.listGiftcodecates');

            //edit
            Route::get('/editgiftcode/{id}', 'Admin\GiftcodeController@showFormEditGiftcode');
            Route::post('/editgiftcode/{id}', 'Admin\GiftcodeController@editgiftcode');
            Route::get('/deletegiftcode/{id}', 'Admin\GiftcodeController@deletegiftcode');

            Route::get('/editgiftcodecates/{id}', 'Admin\GiftcodeController@showFormEditgiftcodecates');
            Route::post('/editgiftcodecates/{id}', 'Admin\GiftcodeController@editgiftcodecates');
            Route::get('/deletegiftcodecates/{id}', 'Admin\GiftcodeController@deletegiftcodecates');
});




    //User
    Route::prefix('user')->middleware('checkadmin')->group(function() {
            Route::get('/list', 'Admin\UserController@user_list')->name('admin.user.list');
            Route::get('/edit/{id}','Admin\UserController@showFormEditUser');
            Route::post('/edit/{id}','Admin\UserController@edit');
            Route::get('/delete/{id}','Admin\UserController@delete');
        });



});


