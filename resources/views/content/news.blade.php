
@section('content')


 <!--Posts-->
         <section class="item_posts">
            <div class="container ">
           

                
	            <h2>Add News </h2>
	            

						<form method="POST" action="/news/add" enctype="multipart/form-data">
						{{ csrf_field() }}
						@if(auth::check())
						<input type="hidden" name="Uid" value="{{ Auth::user()->id }}">
						@endif


							<div class="form-group">
							    <label for="title">Title</label>
							    <input type="text" name="title" id="title" class="form-control newstitle">
							 </div>

							  <div class="form-group">
								<label for="news_content">Content</label>
								<textarea name="news_content" class="form-control newscontent"></textarea>
							  </div>

							   <div class="form-group">
								<label for="N_url">image</label>
								<input type="file" name="N_url" id="N_url">

							  </div>

                              <div class="form-group">
							    <button type="submit" class="btn btn-primary">Add news</button>
							  </div>
						</form>
						


						<div style="color:red">
						@foreach($errors->all() as $error)
						{{$error}}<br>
						@endforeach
						</div>

 
                   <div class="row posts">
				     @foreach($news as $new)
				     
                     <div class="col-lg-4 col-sm-6 col-xs-12 its">
                        <div class="item_link"> <section class="items text-center">

                     @if($new->N_url)
                         <img src="/upload/{{ $new->N_url }}"
                     class="post_img"/>
                     @else
                       <img src="../../images/ima.png"
                     class="post_img"/>
                     
                     @endif

					     
						   <h2>{{$new->title}}</h2><hr>
                            <p>{{$new->news_content}}</p><hr>
                             <p>{{$new->created_at}}</p>
							
						 
						 <a href="{{action('NewsController@editnews',$new['id'])}}" class="btn btn-primary ">edit</a>
					     <a href="deleteNews/{{$new->id}}" class="btn btn-danger ">Delete </a>

                        </a>
                        </section>
                    </div>
                    </div>
                  @endforeach
                  </div>
                   
                                    <!-- de btrbot link el sofa7 elly 3amalnalha paginat -->
</div>
</section>
                
                   
                
            <!--End Posts-->


            


@stop