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
use App\Model\AddpostModel;
use App\Model\AddpostcatesModel;
use App\Model\PostModel;
use App\Model\PostcatesModel;
use CKSource\CKFinder\Command\MoveFiles;
use Cviebrock\EloquentSluggable\Service\SlugService;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    //post

    //create
    public function add_post()
    {

        $posts = DB::select('select * from post_cates');

        return view('admin.post.post',['posts' => $posts]);
    }
    public function up_post(Request $request)
    {
        $item = new AddpostModel();

        $request->validate([
            'images' => 'required|mimes:pdf,xlx,csv,png,jpg',
        ]);
        $path="/uploads/images/post/";
        $fileName = time().'.'.$request->images->extension();
        $request->images->move(public_path($path), $fileName);

        $item->images = $path.$fileName;

        $input = $request->all();

        $item->name = $input['name'];
        $item->cate_id = $input['cate_id'];
        $item->post_cat_id = $input['post_cat_id'];
        $item->is_hot = $input['is_hot'];

        $item->meta_title = $input['meta_title'];
        $item->meta_description = $input['meta_description'];
        $item->quote = $input['quote'];
        $item->body = $input['body'];
        $item->is_timer = $input['is_timer'];
        $item->timer = $input['timer'];

        $item->save();

        return redirect()->route('admin.post.listPost');
    }

    //view
    public function post_list()
    {

        $posts = DB::select('select * from posts');
        return view('admin.post.post_list',['posts' => $posts]);
    }

    //edit
    public function showFormEditPost($id)
    {
        $posts = DB::select('select * from posts');
        $postcates = DB::select('select * from post_cates');
        $item= PostModel::find($id);
        $data['post'] = $item;
        return view('admin.post.post_edit',$data,['postcates' => $postcates],['posts' => $posts]);
    }
    public function editpost($id,Request $request)
    {
        $item = PostModel::find($id);

        $request->validate([
            'images' => 'required|mimes:pdf,xlx,csv,png,jpg',
        ]);
        $path="/uploads/images/post/";
        $fileName = time().'.'.$request->images->extension();
        $request->images->move(public_path($path), $fileName);

        $item->images = $path.$fileName;

        $input = $request->all();

        $item->name = $input['name'];
        $item->cate_id = $input['cate_id'];
        $item->post_cat_id = $input['post_cat_id'];
        $item->is_hot = $input['is_hot'];

        $item->meta_title = $input['meta_title'];
        $item->meta_description = $input['meta_description'];
        $item->quote = $input['quote'];
        $item->body = $input['body'];
        $item->slug = $input['slug'];
        $item->is_timer = $input['is_timer'];
        $item->timer = $input['timer'];

        $item->save();


        return redirect()->route('admin.post.listPost');
    }

    public function deletepost($id)
    {
        $item = PostModel::find($id);
        $item->delete();
        return redirect()->route('admin.post.listPost');
    }


    //postcates

     //create
    public function add_postcates()
    {
        return view('admin.post.post_cates');
    }
    public function up_postcates(Request $request)
    {

        $item = new AddpostcatesModel();

        $request->validate([
            'images' => 'required|mimes:pdf,xlx,csv,png,jpg',
        ]);
        $path="/uploads/images/post/";
        $fileName = time().'.'.$request->images->extension();
        $request->images->move(public_path($path), $fileName);

        $item->images = $path.$fileName;

        $input = $request->all();

        $item->name = $input['name'];
        $item->parent_id = $input['parent_id'];
        $item->meta_title = $input['meta_title'];
        $item->meta_description = $input['meta_description'];


        $item->save();
        return redirect()->route('admin.post.listPostcates');
    }

    //view
    public function postcates_list()
    {
        $posts = DB::select('select * from post_cates');
        return view('admin.post.postcates_list',['posts' => $posts]);
    }

    //edit

    public function showFormEditPostcates($id)
    {
        $item= PostcatesModel::find($id);
        $data['post'] = $item;
        return view('admin.post.postcates_edit',$data);
    }
    public function editpostcates($id,Request $request)
    {
        $item = PostcatesModel::find($id);

        $request->validate([
            'images' => 'required|mimes:pdf,xlx,csv,png,jpg',
        ]);
        $path="/uploads/images/post/";
        $fileName = time().'.'.$request->images->extension();
        $request->images->move(public_path($path), $fileName);

        $item->images = $path.$fileName;

        $input = $request->all();

        $item->name = $input['name'];
        $item->parent_id = $input['parent_id'];
        $item->meta_title = $input['meta_title'];
        $item->meta_description = $input['meta_description'];
        $item->save();

        return redirect()->route('admin.post.listPostcates');
    }

    public function deletepostcates($id)
    {
        $item = PostcatesModel::find($id);
        $item->delete();
        return redirect()->route('admin.post.listPostcates');
    }


}

