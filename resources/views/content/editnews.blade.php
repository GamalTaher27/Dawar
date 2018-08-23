@extends ('Admin')


@section('content')
<div class="container">

<form method="POST" action="{{action('NewsController@updatenews',$news['id'])}}" enctype="multipart/form-data">


   {{ csrf_field() }}
    
    <img src="/upload/{{ $news->N_url }}"
                     class="thumbnail"
                     style="width:250px; height:250px;" />

  <div class="form-group">
    <label for="N_url">Image</label>
    <input type="file" name="N_url" id="N_url" >
  </div>

  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" value="{{$news->title}}"  id="title" class="form-control newstitle">
  </div>



  <div class="form-group">
    <label for="news_content">content</label><br/>
   <textarea name="news_content"  id="news_content" class=" form-control newscontent">{{$news->news_content}} </textarea>
  </div>

  <div class="form-group">
  <button type="submit" class="btn btn-primary">update</button>
  </div>
</form>
</div>
     
@stop