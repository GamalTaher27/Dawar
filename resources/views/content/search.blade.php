
@extends ('Master')


@section('content')
 

<!-- start cover-->
 <section class="coverpic">
    <div class="container">
        <h1 class="covertext text-center">HELP ME FINDING MY LOST ITEM</h1>
        <div class="row text-center">
            <div class="col-lg-6">
                <a class="btn cover-btn btn-lg btn-block" href="/lost">VIEW LOST ITEMS</a>
            </div>
            <div class="col-lg-6">
                <a class="btn cover-btn btn-lg btn-block" href="/found">VIEW FOUND ITEMS</a>
            </div>
        </div>
    </div>
 </section>
 <!-- End cover-->

<!--Posts-->
            <section class="item_posts">
            <div class="container ">


                <div class="row posts">
@if(isset($details))
 @foreach ($post as $p)
  @if($p->is_active === 0 )
     @if($p->state === 1 )
                    <div class="col-lg-4 col-sm-6 col-xs-12 its">
                        <div class="item_link"> <section class="items text-center">
                          @if($p->url)
                             <img src="/upload/{{$p->url}}" class="post_img">
                              @else
                     <img src="../../images/ima.png"
                     class="post_img"/>
                     
                     @endif
                            <h2>{{ $p->title }}</h2>
                            <p>{{ $p->updated_at }}</p>
                            <a href="{{action('PostController@show',$p->id)}}" class="btn btn-primary btn-lg">Show Details</a><br/>
                            
                          
                        </section>
                      </div>
                    </div>
                    @endif
                  @endif
                   @endforeach
                   @endif
                </div>

            </div>
            </section>
            <!--End Posts-->

@endsection
