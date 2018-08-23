@extends ('Admin')


@section('content')


 <!--Posts-->
            <section class="item_posts">
            <div class="container ">
             <h2 class="text-center" > Hi,admin </h2>
                <div class="row posts">


				     @foreach($posts as $post)

					
                     <div class="col-lg-4 col-sm-6 col-xs-12 its">
                       <a class="item_link"> <section class="items text-center">
					      @if($post->url)
                             <img src="/upload/{{ $post->url }}"
                     class="thumbnail"
                     style="width:250px; height:250px;" />
                     @else
                     <img src="/images/ima.png"
                     class="thumbnail"
                     style="width:250px; height:250px;" />
                     
                     @endif

                                <hr>
                            <h3>{{$post->title}}</h3>
                            <p>{{$post->content}}</p><hr>
                            <p>{{$post->created_at}}</p><hr>
							
						  <a href="{!! route('apfun', $post->id) !!}" class="btn btn-primary">Approve</a>
				           <a href="{!! route('rejfun', $post->id) !!}" class="btn btn-danger">Reject </a>
                        </a>
                    </div>

                  @endforeach
                   
                    
                  {{$posts->links()}} <!-- de btrbot link el sofa7 elly 3amalnalha paginat -->
                

                </div>
            </div>
            </section>
            <!--End Posts-->


@stop
