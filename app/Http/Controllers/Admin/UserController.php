<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Admin;//user model can kiem tra
use Auth; //use thư viện auth
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Database\Eloquent\Collection;
use Session;
use Route;
use App\Model\UserModel;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;



class UserController extends Controller
{

    //user
    public function user_list()
    {
        $users = DB::select('select * from users');
        return view('admin.users.list',['users' => $users]);
    }

    public function showFormEditUser($id)
    {
        $item= UserModel::find($id);
        $data['user'] = $item;
        return view('admin.users.edit',$data);
    }
    public function edit($id,Request $request)
    {
        $input = $request->all();
        $item = UserModel::find($id);
        $item->name = $input['name'];
        $item->email = $input['email'];
        $item->save();
        return redirect()->route('admin.user.list');
    }
    public function delete($id)
    {
        $item = UserModel::find($id);
        $item->delete();
        return redirect()->route('admin.user.list');
    }
}
