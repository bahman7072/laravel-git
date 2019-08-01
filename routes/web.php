<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/posts', 'PostsController@index');
//Route::post('/posts','PostsController@creat');

//Route::resource('/posts','PostsController');


//Route::get('/posts/{id?}','PostsController@index');
//Route::get('/my-view/{id}/{name}/{family}','PostsController@myView');
//Route::get('contact','PostsController@contact');
//
//Route::get('insert','PostsController@insert');
//Route::get('select','PostsController@select');
//Route::get('update','PostsController@updatePost');
//Route::get('delete','PostsController@deletePost');

//Route::get('posts','PostsController@getAllPost');
//Route::get('save-post','PostsController@savePost');
//Route::get('update-post','PostsController@newUpdatePost');
//Route::get('delete-post','PostsController@newDeletePost');
//Route::get('trash-data','PostsController@workWhitTrash');
//Route::get('restore-post','PostsController@restorePost');
//Route::get('force-delete-post','PostsController@forceDelete');

//Eloquent RelationShip

//One to One RelationShip

//Route::get('user/{id}/post', function (){
//    $user_post= \App\User::find(1)->post;
//    return $user_post;
//});
//
//Route::get('post/{id}/user', function ($id){
//    $post_user= \App\Post::find($id)->user;
//    return $post_user;
//});

//One to Many RelationShip
//Route::get('user/{id}/posts', function ($id){
//   $user_posts= \App\User::find($id)->posts;
////    return $user_posts;
//   foreach ($user_posts as $post){
//       echo $post->title;
//       echo "</br>";
//   }
//});

//Many to Many RelationShip
//Route::get('user/{id}/roles', function ($id){
//   $user= \App\User::find($id);
//   foreach ($user->roles as $role){
//       echo $role->name;
//       echo "</br>";
//   }
//});
//
//Route::get('user/pivot', function (){
//   $user= \App\User::find(1);
//   foreach ($user->roles as $role){
//       echo $role->pivot->created_at;
//       echo "</br>";
//    }
//});
//
//Route::get('role/{id}/users', function ($id){
//   $role=\App\Role::find($id);
//   foreach ($role->users as $user){
//       echo $user->name;
//       echo "</br>";
//   }
//});

//Has Many Trough RelationShip
//Route::get('user/country', function (){
//   $country= \App\Country::find(1);
//   foreach ($country->posts as $post){
//       echo $post->title;
//       echo "</br>";
//   }
//});


//Polymorphic RelationShip
//Route::get('user/photos', function (){
//   $user= \App\User::find(1);
//   foreach ($user->photos as $photo){
//       echo $photo->path;
//       echo "</br>";
//   }
//});
//Route::get('post/photos', function (){
//   $post= \App\Post::find(5);
//   foreach ($post->photos as $photo){
//       echo $photo->path;
//       echo "</br>";
//   }
//});
//Route::get('photo/{id}/post', function ($id){
//    $photo= \App\Photo::find($id);
//    return $photo->imageable;
//});
//
//
//Route::get('post/tags', function (){
//   $post= \App\Post::find(5);
//   foreach ($post->tags as $tag){
//       echo $tag->name;
//       echo "</br>";
//   }
//});
//Route::get('video/tags', function (){
//   $post= \App\Video::find(1);
//   foreach ($post->tags as $tag){
//       echo $tag->name;
//       echo "</br>";
//   }
//});
//Route::get('tag/{id}/posts', function ($id){
//    $tag= \App\Tag::find($id);
//    foreach ($tag->posts as $post){
//        echo $post->title;
//        echo "</br>";
//    }
//});

//CRUD One to Many RelationShip
//Route::get('create', function (){
//   $user= \App\User::find(1);
//   $post = new \App\Post();
//   $post->title = 'ایجاد یک پست با روش CRUD One to Many';
//   $post->content = 'توضیحات مربوط به پست CRUD';
////   $post->user_id = $user->id;
//   $user->posts()->save($post);
//});
//Route::get('read', function (){
//   $user = \App\User::find(1);
////   dd($user);
//   foreach ($user->posts as $post){
//       echo $post->title;
//       echo "</br>";
//   }
//});
//Route::get('update', function (){
//   $user = \App\User::find(1);
//   $user->posts()->whereId(9)->update(['title'=>'Update Title CRUD', 'content'=>'Update Content CRUD']);
//});
//Route::get('delete', function (){
//   $user = \App\User::find(1);
//   $user->posts()->whereId(9)->delete();
//});


//CRUD Many to Many RelationShip
//Route::get('create', function (){
//   $user = \App\User::find(1);
//   $role = new \App\Role();
//   $role->name = 'نویسنده';
//   $user->roles()->save($role);
//});
//Route::get('read', function (){
//   $user = \App\User::find(1);
//   foreach ($user->roles as $role){
//       echo $role->name;
//       echo "</br>";
//   }
//});
//Route::get('update', function (){
//   $user= \App\User::find(1);
//   if ($user->has('roles')){
//       foreach ($user->roles as $role){
//           if ($role->name == 'نویسنده'){
//               $role->name = 'پشتیبان';
//               $role->save();
//           }
//       }
//   }
//});
//Route::get('delete', function (){
//   $user = \App\User::find(1);
//   if($user->has('roles')){
//       foreach ($user->roles as $role){
//           if ($role->name == 'پشتیبان'){
//               $role->delete();
//           }
//       }
//   }
//});
//Route::get('detach', function (){
//   $user = \App\User::find(1);
//   $user->roles()->detach();
//});
//Route::get('attach', function (){
//   $user = \App\User::find(1);
//   $user->roles()->attach(2);
//});
//Route::get('sync', function (){
//   $user = \App\User::find(1);
//   $user->roles()->sync([1,2]);
//});

//CRUD Polymorphic RelationShip
//Route::get('create', function (){
//   $video = \App\Video::find(1);
//   $video->tags()->create(['name'=>'MorphVideo']);
//});
//Route::get('read', function (){
//   $video = \App\Video::find(1);
//   foreach ($video->tags as $tag){
//       echo $tag->name;
//       echo "</br>";
//   }
//});
//Route::get('update', function (){
//   $video = \App\Video::find(1);
//   $video->tags->where('id',3)->first()->update(['name'=>'پست جدید']);
//});
//Route::get('delete', function (){
//   $video = \App\Video::find(1);
//   $video->tags->where('id', 3)->first()->delete();
//});
//Route::get('detach', function (){
//   $video = \App\Video::find(1);
//   $video->tags()->detach();
//});
//Route::get('attach', function (){
//   $video = \App\Video::find(1);
//   $video->tags()->attach(1);
//});
//Route::get('sync', function (){
//   $video = \App\Video::find(1);
//   $video->tags()->sync([1,2]);
//});


//Form Routes


use Illuminate\Support\Facades\App;

Auth::routes(['verify' => true]);

//Route::get('/home', 'HomeController@index')->middleware(['auth', 'verified'])->name('home');

Route::middleware(['auth', 'verified'])->group(function (){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('posts', 'PostsController');
    Route::get('/');
});


Route::get('/admin', function (){
    echo 'Hello Admin';
})->middleware('isAdmin:مدیر');


//Fa Lang
Route::prefix('fa')->group(function (){
    App::setLocale('fa');
    Route::get('message', function (){
        return view('message');
    });
});

