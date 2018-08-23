<?php
use Illuminate\Support\Facades\Input;
use App\User;

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

Route::get('/', function () {
    return view('welcome');
});



//Route::get('/searchUser/{request}' , 'HomePageController@searchUser');

Route::get('/visitor', 'HomePageController@visitor');


Route::group(['middleware'=>['auth']],function(){
	Route::get('/posts', 'PostController@index');

	Route::get('index', 'HomePageController@index');

Route::get('/lost', 'PostController@lost');
Route::get('/found', 'PostController@found');

Route::post('/search', 'PostController@search');


Route::get('/posts/{id}','PostController@show');

Route::post('/posts/store','PostController@store');

Route::get('/UserProfile/{id}','ProfileController@show_profile');

Route::post('/profile/{id}/EditProfile','ProfileController@EditProfile');



Route::get('/posts/{id}/edit','PostController@edit');

Route::post('/posts/update','PostController@update');

Route::post('/posts/destroy','PostController@destroy');

Route::post('posts/rate','PostController@rate');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/posts/{id}/mark','PostController@mark');


Route::get('/adminconfirm', 'PostController@indexAdmin');
Route::get('/approve/{id}',[ 'uses' => 'PostController@approve','as'   => 'apfun']);
Route::get('/reject/{id}',[ 'uses' => 'PostController@reject','as'   => 'rejfun']);


Route::get('/news','NewsController@indexNews');
Route::post('/news/add','NewsController@add');
Route::get('/news/{id}/editnews','NewsController@editnews');
Route::post('/newss/{id}/updatenews','NewsController@updatenews');
Route::get('/deleteNews/{id}','NewsController@deleteNews');


Route::get('/message/{id}','messageController@index');
Route::post('/message/send','messageController@send');


Route::get('/messages/view','messageController@viewAllMessages');



Route::get('/users', 'HomePageController@get_users');
Route::get('/deleteUser/{id}', 'HomePageController@deleteUser');

Route::any('/search',function(){
	$q = Input::get ( 'q' );
	$user = User::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->orWhere('id','LIKE',$q)->get();
	if(count($user) > 0)
		return view('content.user_details')->withDetails($user)->withQuery ( $q );
	else return view ('content.user_details')->withMessage('No Details found. Try to search again !');
});


});

Auth::routes();