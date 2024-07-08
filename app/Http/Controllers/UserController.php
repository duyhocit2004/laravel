<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Dotenv\Parser\Value;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller {
  public function index() {
    $data = DB::table('users')->select('id','id_user','name','age','date_birday','sex','address')
    ->limit(2)
    ->get();
        return view('user.index',['profile'=>$data]) ;
  }
  public function create()
    {
      return view('user.AddUser');
    }
  public function edituser($id){
    $khachhang = Users::find($id);
    return view('user.EditUser',["title" => $khachhang]);
  }
  public function updateUser(Request $request, $id){
    
    $listuser = Users::find($id);
    $listuser->save();
   
    

    return redirect('/')->with('success', 'Cập nhập thành công');
  }
}
