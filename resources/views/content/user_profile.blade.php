@extends ('ProfilePage')


@section('content')
<div class="container">
<div class="main_profile">
   <div class="row">
     <div class="col-md-12 text-center">
       <img src="/images/unnamed.png" class="thmbnail" style="width: 250px; height: 250px;">
         <h1 class="user_class">{{$user->name}}<h1>
          <a class="btn update_btn btn-lg profilebut" data-toggle="modal" data-target="#profileModal">Update Profile</a>
     </div>
   </div>
 </div>
 </div>

@foreach($posts as $post)
@if($post->user_id===Auth::user()->id && $post->state === 1)


 <!--Start posts view-->
 <div class="container">
     <div class="post_box">
    <div class="row">
        
            <div class="col-md-4">
                <img src="/upload/{{$post->url}}" class="post_img">
            </div>
            <div class="col-md-4 text-center">
               @if($post->post_type===0)
                    <h1 class="post_head"> Lost Item</p>
                    @else
                    <h1 class="post_head"> Found Item</p>
                    @endif
                <hr>
                    <h2 class="title"> {{$post->title}}</p></li>
                    <h3 class="content" style="text-align: left;"> {{$post->content}}</p></li>

                   <hr>
                    <ul class="list-unstyled">
                    <li class="area_class"><h3 class="content">{{$post->address}}</h3></li>
                    <li class="area_class"><h3> ,{{$post->area}}</h3></li>
                    </ul>

               <p>{{$post->updated_at}}</p>
            </div>
            <div class="col-md-2">
                
                    
                    <div class="buttons text-center">
<a class="btn btn-lg delbut delete_post" data-toggle="modal" data-target="#delModal" 
del_post_id="{{$post->id}}">Delete</a><br>
                            @if($post->is_active === 0)
                    <a class="btn update_btn update_post btn-lg updbut" data-toggle="modal" data-target="#updateModal" post_id="{{$post->id}}">Update</a>
                    <a href="{{action('PostController@mark',$post->id)}}" class="btn update_btn btn-lg markbut">Mark as found</a>
                    @endif
                  </div>
            </div>
        </div>
    
    
    </div>
</div>
<br/>
</div>

@endif
@endforeach



<!-- Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Profile</h4>
      </div>
      <div class="modal-body">

        <!-- Start Form -->
   
   <form method="POST" action="/profile/{{$user->id}}/EditProfile">
                            {{ csrf_field()}}
                            
               
                <div class="form-group ">
                   <label for="Name">Name</label>
                   <input type="text" class="form-control" name="name" value="{{$user->name}}" id="inputEmail4" placeholder="name">
                 </div>
                 
                 <div class="form-group ">
                   <label for="Email">Email</label>
                   <input type="email" class="form-control" name="email" value="{{$user->email}}" id="inputEmail4" placeholder="Email">
                 </div>
               
               <div class="form-group">
                   <label for="phone">Phone</label><br>
                   <input type="text" name="phone" value="{{$user->phone_number}}" placeholder="Phone">
                 </div>

                        <button class="btn btn-primary">Update</button>
                    
             </form>
                        </div>
                    </div>
              
           <!-- End Form -->
    </div>
  </div>
</div>
            </div>
        </div>
    </section>
</div>   


<!-- Modal -->
<div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-danger">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
      </div>
      
      <div class="modal-body">
        
        <h3>Are you sure you want to delete this?</h3>
        </div>

        
   <div class="modal-footer">
    
<form method="POST" action="/posts/destroy" enctype="multipart/form-data">
      {{csrf_field()}}
         <input type="hidden" id="delId" name="del_post_id"">
           <button type="submit" class="btn btn-danger">Delete</button>
           <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>

      </form>
</div>

    </div>        
    </div>
  </div>



<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Item</h4>
      </div>
      <div class="modal-body">

        <!-- Start Form -->
   
   <form method="POST" action="{{action('PostController@update')}}" enctype="multipart/form-data">
   {{ csrf_field() }}
   <input type="hidden" id="myId" name="post_id">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control" required>
  </div>

 <div class="form-group">
    <label for="area">Area</label>
    <select class="form-control" name="area">
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
    <label for="area">Category</label>
    <select class="form-control" name="cat">
      <option>Laptop</option>
      <option>Vichels</option>
      <option>Mobile Phones</option>
      <option>Mobile Accessories</option>
      <option>Cameras</option>
      <option>Chlothes - Accessories</option>
      <option>Jewelry</option>
      <option>Watches</option>
      <option>Animals</option>
      <option>Kids & Babies</option>
      <option>Books</option>
      <option>Keys</option>
      <option>Bags & Wallets</option>
      <option>Others..</option>

    </select>
  </div>

<div class="form-group">
    <label for="address">Address</label>
    <input type="text" name="address" id="address" class="form-control" required>
  </div>

<div class="form-group">
  <div class="row">
    <div class="col-sm-6">
    <span>I lost an item  </span><input type="radio" name="post_type" value="0" id="post_type" required >
  </div>
   <div class="col-sm-6">
    <span>I found an item  </span><input type="radio" name="post_type" value="1" id="post_type" required>
  </div>
    </div>
  </div>

  <div class="form-group">
    <label for="content">content</label>
   <textarea name="content" id="content" class="form-control content" required></textarea>
  </div>

@if(auth::check())
  <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
@endif



<div class="form-group">
    <label for="url">Image</label>
    <input type="file" name="url" id="url" required="">
  </div>

<hr>
  <div class="form-group">
  <button type="submit" class="btn btn-primary btn-lg">Update</button>
  </div>
  
  <div>
   @foreach($errors->all as $error)
  {{$error}}<br>
   @endforeach 

  </div>  
</form>
        </div>
    </div>
              
           <!-- End Form -->
    </div>
  </div>


@stop