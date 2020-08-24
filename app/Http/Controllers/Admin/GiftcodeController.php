<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Admin;
use Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Database\Eloquent\Collection;
use Session;
use Route;
use App\Model\AddGiftcodecatesModel;
use App\Model\GiftcodeModel;
use App\Model\AddGiftcodeModel;
use App\Model\GiftcodecatesModel;


use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class GiftcodeController extends Controller
{

    public function add_giftcode()
    {
        $cates = DB::select('select * from giftcode_cates');
        return view('admin.giftcode.giftcode',['cates' => $cates]);
    }
    public function up_giftcode(Request $request)
    {
        $input = $request->all();
        $item = new AddgiftcodeModel();
        $item->giftcode = $input['giftcode'];
        $item->status = $input['status'];
        $item->member_id = $input['member_id'];
        $item->giftcode_cate_id= $input['giftcode_cate_id'];

        $item->save();
        return redirect()->route('admin.giftcode.listGiftcode');
    }

    //view
    public function giftcode_list()
    {
        $codes = DB::select('select * from giftcode');
        return view('admin.giftcode.giftcode_list',['codes' => $codes]);
    }

    //edit
    public function showFormEditGiftcode($id)
    {
        $cates = DB::select('select * from giftcode_cates');

        $item= GiftcodeModel::find($id);
        $data['code'] = $item;
        return view('admin.giftcode.giftcode_edit',$data,['cates' => $cates]);
    }
    public function editgiftcode($id,Request $request)
    {

        $input = $request->all();
        $item = GiftcodeModel::find($id);
        $item->giftcode = $input['giftcode'];
        $item->status = $input['status'];
        $item->member_id = $input['member_id'];
        $item->giftcode_cate_id= $input['giftcode_cate_id'];
        $item->save();

        return redirect()->route('admin.giftcode.listGiftcode');
    }

    public function deletegiftcode($id)
    {
        $item = GiftcodeModel::find($id);
        $item->delete();
        return redirect()->route('admin.giftcode.listGiftcode');
    }
    //cates
    public function add_giftcodecates()
    {
        return view('admin.giftcode.giftcodecates');
    }
    public function up_giftcodecates(Request $request)
    {
        $input = $request->all();
        $item = new AddgiftcodecatesModel();
        $item->name = $input['name'];
        $item->code = $input['code'];
        $item->status = $input['status'];
        $item->flag_home = $input['flag_home'];

        $item->save();
        return redirect()->route('admin.giftcode.listGiftcodecates');
    }

    //view
    public function giftcodecates_list()
    {
        $cates = DB::select('select * from giftcode_cates');
        return view('admin.giftcode.giftcodecates_list',['cates' => $cates]);
    }

    //edit

    public function showFormEditgiftcodecates($id)
    {
        $item= giftcodecatesModel::find($id);
        $data['user'] = $item;
        return view('admin.giftcode.giftcodecates_edit',$data);
    }

    public function editgiftcodecates($id,Request $request)
    {
        $input = $request->all();
        $item = GiftcodecatesModel::find($id);
        $item->name = $input['name'];
        $item->code = $input['code'];
        $item->status = $input['status'];
        $item->flag_home = $input['flag_home'];
        $item->save();

        return redirect()->route('admin.giftcode.listGiftcodecates');
    }

    public function deletegiftcodecates($id)
    {
        $item = giftcodecatesModel::find($id);
        $item->delete();
        return redirect()->route('admin.giftcode.listGiftcodecates');
    }


    //create

}

