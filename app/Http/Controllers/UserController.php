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
    // tạo đối tượng
    // $data = new Controller ;
    // $data->name = $request->input('name');
    // $data->age = $request->input('age');
    // $data->date_birday = $request->input('date_birtday');
    // $data->sex = $request->input('sex');
    // $data->address = $request->input('address');
  public function create()
    {
      return view('user.AddUser');
    }
  public function edituser($id){
    $khachhang = Users::find($id);
    return view('user.EditUser',["title" => $khachhang]);
  }
  public function updateuser(Request $request, $id){
    $users = $request->all();
    var_dump($users);
    // $data = Users::find($id);
    // $data -> name = ;
   
    

    return redirect('/')->with('success', 'Cập nhập thành công');
  }
}
