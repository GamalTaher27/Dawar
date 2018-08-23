@extends('master')

@section('content')

 <!-- Start Form -->
   
   <form method="POST" action="{{action('ProfileController@EditProfile',$user['id'])}}">
                            {{ csrf_field()}}
                            
               
                <div class="form-group ">
                   
                   <input type="text" class="form-control" name="name" value="{{$user->name}}" id="inputEmail4" placeholder="name">
                 </div>
                 
                 <div class="form-group ">
                   
                   <input type="email" class="form-control" name="email" value="{{$user->email}}" id="inputEmail4" placeholder="Email">
                 </div>
               
               <div class="form-group">
                   
                   <input type="text" name="phone" value="{{$user->phone_number}}" placeholder="Phone">
                 </div>
                        
               <button type="submit" class="btn btn-primary">update</button> 
                    
             </form>
                        </div>
              
           <!-- End Form -->

@stop