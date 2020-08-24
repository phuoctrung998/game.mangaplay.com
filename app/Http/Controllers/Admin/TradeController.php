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
use App\Model\AddmktModel;
use App\Model\AddMktmoneyModel;
use App\Model\MktModel;
use App\Model\MoneyModel;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class TradeController extends Controller
{
    public function add_moneymkt()
    {
        return view('admin.trade.moneymkt');
    }
    public function up_moneymkt(Request $request)
    {
        $input = $request->all();
        $item = new AddMktmoneyModel();
        $item->source = $input['source'];
        $item->money = $input['money'];

        $item->save();
        return redirect()->route('admin.trade.listMoneymkt');
    }

    //view
    public function moneymkt_list()
    {
        $moneymkt = DB::select('select * from moneymkt');
        return view('admin.trade.moneymkt_list',['moneymkt' => $moneymkt]);
    }

    //edit

    public function showFormEditmoneymkt($id)
    {
        $item= MoneyModel::find($id);
        $data['user'] = $item;
        return view('admin.trade.moneymkt_edit',$data);
    }

    public function editmoneymkt($id,Request $request)
    {
        $input = $request->all();
        $item = MoneyModel::find($id);
        $item->source = $input['source'];
        $item->money = $input['money'];

        $item->save();

        return redirect()->route('admin.trade.listMoneymkt');
    }

    public function deletemoneymkt($id)
    {
        $item = MoneyModel::find($id);
        $item->delete();
        return redirect()->route('admin.trade.listMoneymkt');
    }


    //create
    public function add_mkt()
    {
        return view('admin.trade.mkt');
    }
    public function up_mkt(Request $request)
    {
        $input = $request->all();
        $item = new AddmktModel();
        $item->source = $input['source'];
        $item->member_id = $input['member_id'];
        $item->username = $input['username'];
        $item->action = $input['action'];


        $item->save();
        return redirect()->route('admin.trade.listMkt');
    }

    //view
    public function mkt_list()
    {
        $mkt = DB::select('select * from mkt');
        return view('admin.trade.mkt_list',['mkt' => $mkt]);
    }

    //edit
    public function showFormEditmkt($id)
    {
        $item= MktModel::find($id);
        $data['user'] = $item;
        return view('admin.trade.mkt_edit',$data);
    }
    public function editmkt($id,Request $request)
    {
        $input = $request->all();
        $item = MktModel::find($id);
        $item->source = $input['source'];
        $item->member_id = $input['member_id'];
        $item->username = $input['username'];
        $item->action = $input['action'];
        $item->save();

        return redirect()->route('admin.trade.listMkt');
    }

    public function deletemkt($id)
    {
        $item = MktModel::find($id);
        $item->delete();
        return redirect()->route('admin.trade.listMkt');
    }
}

