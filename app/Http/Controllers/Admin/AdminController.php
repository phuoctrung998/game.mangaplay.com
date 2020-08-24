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
use App\Model\AdminModel;
use App\Model\AddadminModel;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;



class AdminController extends Controller
{


    public function show_dashboard()
    {
        return view('admin/dashboard');
    }


    //admin
    public function admin_list()
    {
        $users = DB::select('select * from admins');
        return view('admin.manager.list',['users' => $users]);
    }
    public function showFormEditAdmin($id)
    {
        $item= AdminModel::find($id);
        $data['user'] = $item;
        return view('admin.manager.edit',$data);
    }

    public function editadmin($id,Request $request)
    {
        $input = $request->all();
        $item = AdminModel::find($id);
        $item->name = $input['name'];
        $item->email = $input['email'];
        $item->save();
        return redirect()->route('admin.manager.list');
    }


    public function deleteadmin($id)
    {
        $item = AdminModel::find($id);
        $item->delete();
        return redirect()->route('admin.manager.list');
    }
    public function add_admin()
    {
        return view('admin.manager.add');
    }
    public function up_admin(Request $request)
    {
        $input = $request->all();
        $item = new AddadminModel();
        $item->name = $input['name'];
        $item->email = $input['email'];
        $item->password = bcrypt($input['password']);

        $item->save();
        return redirect()->route('admin.manager.list');
    }
    //user

}
