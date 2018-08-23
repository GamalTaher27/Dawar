
@extends ('Master')


@section('content')
 

<!-- start cover-->
 <section class="coverpic">
    <div class="container ">
        <h1 class="covertext col-lg-9"><span style=" color: #2E86C1;
    font-size: 50px;">Sometimes</span> things you've lost can be found again in unexpected places</h1>
        <div class="row text-center col-lg-6">
<br>
            <div class="col-lg-6">
                <a class="btn cover-btn btn-lg " href="/posts">VIEW ALL ITEMS</a>
            </div>
            <div class="col-lg-6">
                <a class="btn cover-btn btn-lg " href="/found">VIEW FOUND ITEMS</a>
            </div>
        </div>
    </div>
 </section>
 <!-- End cover-->

<!--Posts-->
            <section class="item_posts">
            <div class="container ">
           <div class="text-center">

            <button class="btn btn-primary covbtn">FILTER</button>
            <form action="{{URL::to('/search')}}" method="POST">
              {{csrf_field()}}
                <div class="box">
                    <div class="form-group">

    <label for="exampleFormControlSelect1">Area</label>
    <select class="form-control sel1" id="exampleFormControlSelect1" name="areasearch">
     <option>Cairo</option>
      <option>Alexandria</option>
      <option>Aswan</option>
      <option>Asyut</option>
      <option>Beheira</option>
      <option>Beni Suef</option>
      <option>Cairo</option>
      <option>Dakahlia</option>
      <option>Damietta</option>
      <option>Faiyum</option>
      <option>Gharbia</option>
      <option>Giza</option>
      <option>Ismailia</option>
      <option>Kafr El Sheikh</option>
      <option>Luxor</option>
      <option>Matruh</option>
      <option>Minya</option>
      <option>Monufia</option>
      <option>New Valley</option>
      <option>North sinai</option>
      <option>Port Said</option>
      <option>Qalyubia</option>
      <option>Qena</option>
      <option>Red Sea</option>
      <option>Sharqia</option>
      <option>Sohag</option>
      <option>El Tor</option>
      <option>Suez</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Category</label>
    <select class="form-control sel1" id="exampleFormControlSelect1" name="catsearch">
      @foreach($category as $cat)
      <option value="{{$cat->id}}">{{$cat->type}}</option>
      @endforeach   
    </select>
             <button class="btn btn-primary covbtn" href="/posts/search">SUBMIT</button>
                </div>
              </form>
               </div>


                <div class="row posts">

 @foreach ($posts as $post)
 @if($post->post_type === 0 )
  @if($post->is_active === 0 )
     @if($post->state === 1 )
     
                    <div class="col-lg-4 col-sm-6 col-xs-12 its">
                        <div class="item_link"> <section class="items text-center">
                          @if($post->url)
                             <img src="/upload/{{$post->url}}" class="post_img">
                              @else
                     <img src="../../images/ima.jpeg"
                     class="post_img"/>
                     
                     @endif
                            <h2>{{ $post->title }}</h2>
                            
                            <a href="{{action('PostController@show',$post->id)}}" class="btn btn-primary btn-lg">Show Details</a><br/>
                            
                          
                        </section>
                      </div>
                    </div>
                    @endif
                  @endif
                  @endif
                   @endforeach
                </div>

            </div>
            </section>
            <!--End Posts-->

@endsection
