@extends ('master')


@section('content')

<form method="POST" action="{{action('PostController@update',$post['id'])}}" enctype="multipart/form-data">


   {{ csrf_field() }}
    
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" value="{{$post->title}}"  id="title" class="form-control">
  </div>

 <div class="form-group">
    <label for="area">Area</label>
    <input type="text" name="area"  value="{{$post->area}}" id="area" class="form-control">
  </div>

<div class="form-group">
    <label for="address">Address</label>
    <input type="text" name="address" value="{{$post->address}}" id="address" class="form-control">
  </div>



  <div class="form-group">
    <label for="content">content</label>
   <textarea name="content"  id="content" class="content">{{$post->content}}</textarea>
  </div>

<img src="/upload/{{$post->url}}" class="thumbnsil" style="width:250px; height: 250px;"><hr>

<div class="form-group">
    <label for="url">Image</label>
    <input type="file"  name="edit_url" value="{{$post->url}}" id="url">
  </div>

  <div class="form-group">
  <button type="submit" class="btn btn-primary">update</button>
  </div>
</form>

     
@stop