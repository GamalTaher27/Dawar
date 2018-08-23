<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Rate;
use DB;

class NewsController extends Controller

{
	 public function indexNews()
    {
        
        $news= News::all();
        return view ('content.news',compact('news'));
    }


   public function add(Request $request)
	 {
	   /*  $this->validate(request(),[
		 	 'news_content'=>'required',
			 'image'=>'image|mimes:jpg,png,gif,jpeg|max:2048'
		 ]);*/

		$image_name=time().'.'.$request->N_url->getClientOriginalExtension();
		 $news = new News;
		 $news->news_content=request('news_content');
		 $news->title=request('title');
		 $news->N_url =$image_name;
		 $news->save();

		 $request->N_url->move(public_path('upload'),$image_name);

        return redirect('/news');
	 }


  public function editnews($id)
    {
       $news=News::find($id);
	

          return view ('content.editnews',compact('news'));
		 }



		  public function updatenews(Request $request,$id)
		{

		

        $news=News::find($id);

       $image_name=time().'.'.$request->N_url->getClientOriginalExtension();

        $news->title =$request->title;
        $news->news_content =$request->news_content;
        
        $news->users_id = $request->Uid;
        $news->N_url =$image_name;
        

        $news->save();
        /*  return redirect()->route('/posts');
            
            $post->update($request->all());*/

             $request->N_url->move(public_path('upload'),$image_name);
           return redirect('/news'); 
		}


		 public function deleteNews($id)
	{
        $new=News::find($id);
		if ($new != null)
		{
		$new->delete();
		}
		return redirect('news');
	}
    


	
}

