<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Post;
use App\Category; 
use App\Rate;
use App\User;
use DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $posts= Post::all();
        $category = Category::all();
        return view ('content.posts',compact('posts','category'));
    }

    public function lost()
    {
        
        $posts= Post::all();
        $category = Category::all();
        return view ('content.lost',compact('posts','category'));
    }

    public function found()
    {
        
        $posts= Post::all();
        $category = Category::all();
        return view ('content.found',compact('posts','category'));
    }


    public function EditProfile(Request $request,$id)
    {
        $post=Post::find($id);

        $cat= Category::all();
        
        $post->title =request('title');
        $post->content =request('content');
        $post->address =request('address');
        $post->area =request('area');
        $post->url =$image_name;
        $post->post_type =request('post_type');
        $post->user_id = request('user_id');


        

        $post->save();

     

         return redirect('/posts');

    }

    /**
     * Show the form for creating a new resource.
     *
     *   @\Illuminate\Http\Response
     */

      public function show($id)
    {
         $post = DB::table('posts')->find($id);
          return view ('content.post',compact('post'));
    }



     public function search(Request $request)
    {
         $category = Category::all();
         $input = Input::get('areasearch');
         $input2 = Input::get('catsearch');

         $post = Post::where('area', 'LIKE', '%' .$input. '%')
         ->Where('category_id', 'LIKE', '%' .$input2. '%') ->get();
         if (count($post) > 0) {
             return view('content.search',compact('post','category'))->withDetails($post)->withQuery($input);
         }
         return view('content.search')->withMessage('No Posts Found');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validate(request(),[

        
        'url'=>'image|mimes:jpg,jpeg,gif,png|max:2048'
            ]);


        $image_name=time().'.'.$request->url->getClientOriginalExtension();
        $post=new Post;
        $cat= Category::all();
        
        $post->title =request('title');
        $post->content =request('content');
        $post->address =request('address');
        $post->area =request('area');
        $post->url =$image_name;
        $post->post_type =request('post_type');
        $post->user_id = request('user_id');
        $post->user_name = request('user_name');
        $post->user_phone = request('user_phone');
        $post->user_email = request('user_email');

foreach ($cat as $category) {
    if ($request->cat == $category->type) {
            $post->category_id = $category->id;
        }
}
        

        $post->save();

         $request->url->move(public_path('upload'),$image_name);

         return redirect('/posts');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function stoore(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
    public function edit($id)
    {
       $post=Post::find($id);
    /*  if($post->state == null)
         {
          $post->state= 1 ;
          $post->save();*/

          return view ('content.edit',compact('post'));
         }
        
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
        {

        
        $post=Post::find($request->post_id);
        $cat= Category::all();


        $post->title =$request->title;
        $post->content =$request->content;
        $post->address =$request->address;      
        $post->area =$request->area;
        $post->post_type = $request->post_type;
        $post->category_id = $request->cat;
        $post->user_id = $request->user_id;

        foreach ($cat as $category) {
    if ($request->cat == $category->type) {
            $post->category_id = $category->id;
        }
    }

        $file = $request->file('url');

        $path='upload';

        $file->move($path,time()."-".$file->getClientOriginalName());
        $post->url=time()."-".$file->getClientOriginalName();

    
         $post->save();
        

             
             
           return back(); 
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
    public function destroy(Request $request)
    {
        $post=Post::find($request->del_post_id);
        $post->delete();
        return back();     }

     public function mark($id)
    {
        $post=Post::find($id);
       if($post->is_active == 0)
         {
         $post->is_active=1 ;
         $post->save();
         }
        return back(); 
    }

public function indexAdmin()
    {
        $posts=Post::select('id','title','content','created_at','url')
                    ->where('state',null)
                    ->latest() //3shan el posts tt3rd 7sab tare5 2nsha2ha
                    ->paginate(9); //de 3shan t2asm el data elly ha3rdha l pages ta2reban 
         return view('content.adminconfirm',compact('posts'));

    }
     public function approve( $id)
        {
        $post=Post::find($id);
        if($post->state == null)
         {
         $post->state=1 ;
         $post->save();
         }
         return back();
        }

     public function reject( $id)
        {
        $post=Post::find($id);
        if($post->state == null)
         {
         $post->state=0 ;
         $post->save();
         }
         return back();
        }


      public function rate(Request $request)
        {
        $rates=new Rate;
        $rates->grade =request('grade');
        $rates->user_id =request('us_id');
        $rates->save();
           return redirect('/posts'); 
        }



}

