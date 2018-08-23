<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\News;

class HomePageController extends Controller
{
    public function index()
	{
		return view('content.home');

	}

	 public function get_users()
	{
		$users=User::select('id','name','email','phone_number','user_type')
		            ->latest() //3shan el posts tt3rd 7sab tare5 2nsha2ha
					->paginate(20); //de 3shan t2asm el data elly ha3rdha l pages ta2reban 
         return view('content.users',compact('users'));
		// return View::make("back/users")->with("allUsers", $users);

	}

	 public function deleteUser( $id)
		{
		$users=User::find($id);
		$users->delete();
        return redirect('/users');
		}

	 public function searchUser(Request $request) 
		{
			$searchTerm = $request->input('searchTerm');
			$users = User::search($searchTerm);
			return view('content.user_details', compact('users', 'searchTerm'));
		}


 
		public function visitor()
		{
			$posts=Post::all();
			$news=News::all();

		
		 return view('content.visitor',compact('posts','news'));
		}


		
	/*public function postApprove($id) 
	{
	
	//$posts=App\Put::find($id);
       $posts = Post::where('id', '=', $id)->first();
    
		if($posts)
		{
			$posts->state= true;
			//$posts->save();
            return redirect()->back()->with('info','The post was approved successfully');	
		}
    }
	  
		//$posts = Post::where('state', false)->get();

   */
   //////////////////////////////////////////////////////////////////////////////
   /* public function postApprove(Request $request)
	{
			$post=Post::find($request->post_id);
			$pststate=$request->state;
			if($pststate=='on')
			{
				$pststate=1;
			}
			else
			{
				$pststate=0;
			}
			$request->state=$pststate;
			$post->save();

	}*/
	/////////////////////////////////////////////////////////////////
   	/*public function postReject($id) {
    $posts = Post::where('id', '=', e($id))->first();
		if($posts)
		{
			$posts->state = 0;
			$posts->save();
			return view ('back.index');
		}
    }*/

}
