<?php

use php3_wd18317\env;
use resources\views\user\AddUser;
use resources\views\sanpham\index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SanPhamController;

//CRUD USER
use App\Http\Controllers\productController;
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

// Route::get('/', function () {
    
//     return view('welcome');
// });
//sử dụng Route để con trỏe đến View
// Route::get('/hello', function () {
//     return view('xinchao');
// });

// Route::view('hello','xinchao');

//truyền dữ lệu sang view

// Route::get('/hello', function () {
//     $title = "sao đẹp trai bằng em";
//     $text = "hehehehehe";
//     return view('xinchao' , ['title'=> $title ,'text' => $text]);
// });

// Route::view('hello','xinchao',['title'=> "xin chào mèo báo" ,'text' => "tôi là đàm trúc"]);

// taọ 1 route trỏ đến 1 hàng trong controller 

//hiện danh sách người dùng,thêm người dùng,chỉnh sửa người dùng


    Route::get('/',[UserController::class,'index']);
    Route::get('/user',[UserController::class,'index']);

    Route::get('/user/AddUser',[UserController::class,'create']);
    Route::post('/user/AddUser',[UserController::class,'store']);

    Route::get('chinh_sua_khach_hang/{id}',[UserController::class,'edituser'])->name('users.edit');
    Route::post('cap_nhat_khach_hang/{id}',[UserController::class, 'updateUser'])->name('users.update');

