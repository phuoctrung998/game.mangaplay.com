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
use App\AddSlidercateModel;
use App\Model\SlidersModel;
use App\Model\AddslidersModel;
use App\Model\SlidercatesModel;


use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;



class SlidersController extends Controller
{


    //create
    public function add_sliders()
    {
        $sliders = DB::select('select * from slider_cates');

        return view('admin.sliders.sliders',['sliders' => $sliders]);
    }

    public function up_sliders(Request $request)
    {
        $item = new AddslidersModel();
        $request->validate([
            'images' => 'required|mimes:pdf,xlx,csv,png,jpg',
        ]);
        $path="/uploads/images/slider/";
        $fileName = time().'.'.$request->images->extension();
        $request->images->move(public_path($path), $fileName);

        $item->images = $path.$fileName;

        $input = $request->all();

        $item->name = $input['name'];
        $item->slider_cate_id = $input['slider_cate_id'];

        $item->url= $input['url'];
        $item->description = $input['description'];
        $item->sort = $input['sort'];
        $item->status = $input['status'];

        $item->save();
        return redirect()->route('admin.sliders.listSliders');
    }

    //view
    public function sliders_list()
    {
        $sliders = DB::select('select * from sliders');
        return view('admin.sliders.sliders_list',['sliders' => $sliders]);
    }

    //edit
    public function showFormEditSliders($id)
    {
        $sliders = DB::select('select * from slider_cates');
        $item= SlidersModel::find($id);
        $data['slider'] = $item;
        return view('admin.sliders.sliders_edit',$data,['sliders' => $sliders]);
    }
    public function editsliders($id,Request $request)
    {
        $item = SlidersModel::find($id);

        $request->validate([
            'images' => 'required|mimes:pdf,xlx,csv,png,jpg',
        ]);
        $path="/uploads/images/slider/";
        $fileName = time().'.'.$request->images->extension();
        $request->images->move(public_path($path), $fileName);

        $item->images = $path.$fileName;
        $input = $request->all();

        $item->name = $input['name'];
        $item->slider_cate_id = $input['slider_cate_id'];

        $item->url= $input['url'];
        $item->description = $input['description'];
        $item->sort = $input['sort'];
        $item->status = $input['status'];
        $item->save();

        return redirect()->route('admin.sliders.listSliders');
    }

    public function deletesliders($id)
    {
        $item = SlidersModel::find($id);
        $item->delete();
        return redirect()->route('admin.sliders.listSliders');
    }


    //cates

    public function add_slidercates()
    {
        return view('admin.sliders.slider_cates');
    }
    public function up_slidercates(Request $request)
    {
        $input = $request->all();
        $item = new AddSlidercateModel();
        $item->name = $input['name'];
        $item->codes = $input['codes'];
        $item->status = $input['status'];


        $item->save();
        return redirect()->route('admin.sliders.listSlidercates');
    }

    //view
    public function slidercates_list()
    {
        $cates = DB::select('select * from slider_cates');
        return view('admin.sliders.slidercates_list',['cates' => $cates]);
    }

    //edit

    public function showFormEditslidercates($id)
    {
        $item= slidercatesModel::find($id);
        $data['user'] = $item;
        return view('admin.sliders.slidercates_edit',$data);
    }

    public function editslidercates($id,Request $request)
    {
        $input = $request->all();
        $item = SlidercatesModel::find($id);
        $item->name = $input['name'];
        $item->codes = $input['codes'];
        $item->status = $input['status'];
        $item->save();

        return redirect()->route('admin.sliders.listSlidercates');
    }

    public function deleteslidercates($id)
    {
        $item = slidercatesModel::find($id);
        $item->delete();
        return redirect()->route('admin.sliders.listSlidercates');
    }
}
