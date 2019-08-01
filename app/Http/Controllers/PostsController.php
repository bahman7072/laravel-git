<?php

namespace App\Http\Controllers;

use App\Events\PostViewEvent;
use App\Http\Requests\CreatePostRequest;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('user')->get();
        return view('posts.index', compact(['posts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
//        $this->validate($request, ['title' => 'required|max:2', 'description' => 'required'],
//            ['title.required' => 'لطفا عنوان مورد نظر خود را انتخاب کنید',
//            'title.max' => 'تعداد کارکترهای عنوان شما باید کمتر از 2 کارکتر باشد',
//            'description.required' => 'لطفا توضیحات مطلب نظر خود را وارد کنید']);
//        return $request->all();
        $post = new Post();

        if ($file = $request->file('file')){

//            $file->store('public/images');web

            $name = $file->getClientOriginalName();
            $file->move('images', $name);

            $post->path = $name;
        }

        $post->user_id = 1;
        $post->title = $request->title;
        $post->content = $request->description;
        $post->save();
        return view('posts.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        event(new PostViewEvent($post));
        return view('posts.show', compact(['post']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact(['post']));
        //Policy
        $user = Auth::user();
        if ($user->can('update', $post)){

        }else{
            return "شما اجازه دسترسی به ویرایش این پست را ندارین!";
        }

        //Allows
//        if (Gate::allows('edit-post', $post)){
//            return view('posts.edit', compact(['post']));
//        }else{
//            return "شما اجازه دسترسی به ویرایش این پست را ندارین!";
//        }

        //Denies
//        if (Gate::denies('edit-post', $post)){
//            return "شما اجازه دسترسی به ویرایش این پست را ندارین!";
//        }else{
//            return view('posts.edit', compact(['post']));
//        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->content = $request->description;
        $post->save();

        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('posts');
    }

    //My View Controller
//    public function myView($id, $name, $family){
////        return view('pages.myView')->with('id',$id);
//        return view('pages.myView', compact(['id', 'name', 'family']));
//    }
//
//    public function contact()
//    {
//        $people= ['Bahman','Mina','Iman','Alireza'];
//        return view('pages.contact', compact('people'));
//    }
//
//    public function insert()
//    {
//        DB::insert('insert into posts(title, content) values (?, ?)',['عنوان پست','محتویات پست']);
//    }
//
//    public function select()
//    {
//        $allPosts= DB::select('select * from posts');
//        return $allPosts;
//    }
//
//    public function updatePost()
//    {
//        $updatePost= DB::update('update posts set title="این پست آپدیت شده است" where id=?', [1]);
//    }
//
//    public function deletePost()
//    {
//        $deletedPost= DB::delete('delete from posts where id=?', [2]);
//    }
//
//    public function getAllPost()
//    {
////        $posts= Post::where('title','عنوان پست')-> orderBy('id','acd')->get();
//        $posts= Post::all();
//        return $posts;
//    }
//
//    public function savePost()
//    {
////        $post= new Post();
////
////        $post->title= 'پست شماره 1';
////        $post->content= 'محتویات پست شماره 1';
////
////        $post->save();
//
//        $post= Post::create(['title'=>'پست شماره 2', 'content'=>'محتویات پست شماره 2']);
//    }
//
//    public function newUpdatePost()
//    {
////        $post= Post::where('id', 6)->update(['title'=>'آپدیت پست شماره 2', 'content'=>'آپدیت محتویات پست شماره 2']);
//
//        $post= Post::findOrFail(6);
//
//        $post->title='پست شماره 2';
//        $post->content='محتویات پست شماره 2';
//
//        $post->save();
//    }
//
//    public function newDeletePost()
//    {
//        $post= Post::where('id', 7)->delete();
//
////        $post->delete();
//
////        $post= Post::destroy(3);    //Delete One Item
////        $post= Post::destroy([3,4]);    //Delete Many Item
//    }
//
//    public function workWhitTrash()
//    {
////        $post= Post::withTrashed()->get();       //Show all Post With Data Trash
//        $post= Post::onlyTrashed()->get();       //Show Only Trash Or Deleted Posts
//        return $post;
//    }
//
//    public function restorePost()
//    {
//        $post= Post::onlyTrashed()->where('id',5)->restore();        //Restore Data From Trash
//    }
//
//    public function forceDelete()
//    {
//        $post= Post::onlyTrashed()->where('id',7)->forceDelete();    //Delete Data For Ever Delete From Databese
//    }
}
