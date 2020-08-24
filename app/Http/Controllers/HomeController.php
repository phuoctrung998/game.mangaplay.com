<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\PostModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');


        $sliders = DB::select('select * from sliders order by updated_at DESC');
        $hots = DB::select('select * from posts where is_hot = 1 order by updated_at DESC');
        $news = DB::select('select * from posts where post_cat_id = 1 order by updated_at DESC');
        $events = DB::select('select * from posts where post_cat_id = 2 order by updated_at DESC');

        view()->share('sliders',$sliders);
        view()->share('hots',$hots);
        view()->share('news',$news);
        view()->share('events',$events);

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    {

        return view('frontend.home');
    }
    public function napthe()
    {
        return view('frontend.trade');
    }
    public function sukien()
    {
        $posts = DB::select('select * from posts where post_cat_id = 2 order by updated_at DESC' );
        return view('frontend.event',['posts' => $posts]);

    }
    public function tintuc()
    {
        $posts = DB::select('select * from posts where post_cat_id = 1 order by updated_at DESC' );
        return view('frontend.news',['posts' => $posts]);
    }
    public function thongtin()
    {
        return view('frontend.infor');
    }

    public function chitiet(Request $req){
        $chitiet = PostModel::where('slug',$req->slug)->first();
    	return view('frontend.viewpost',compact('chitiet'));
    }

}
