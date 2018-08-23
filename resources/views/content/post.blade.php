@extends ('detailsPage')


@section('content')


 <div class="container">
     <div class="details_div text-center">
        <div class="post_content">
        <div class="details_header" >
                @if($post->post_type===0)
                    <h1 class="Post_head" style="font-weight: bold; color: #FFF;"> Lost Item</h1>
                    @else
                    <h1 class="Post_head" style="font-weight: bold; color: #FFF;"> Lost Item</h1>
                    @endif
        </div>
        <hr>
        <div class="details_img">
            <img src="/upload/{{$post->url}}">
        </div>
        <hr>
        <div class="post_details">
            <h1 class="title">{{$post->title}}</h1>
            <h3 class="content">{{$post->content}}</h3>
            <ul class="list-unstyled">
            <li><h3 class="content">{{$post->address}}</h3></li>
            <li><h3> ,{{$post->area}}</h3></li>
            </ul>
            <p>{{$post->updated_at}}</p>
        </div>
        <hr>
        <div class="user_details">
            <h2>Posted By : </h2>
            <h3>{{$post->user_name}}</h3>
            <h3>Email: {{$post->user_email}}</h3>
            <h3>Phone Number: {{$post->user_phone}}</h3>
        </div>
        <hr>
        <div class="details_footer">
    <a href="/message/{{$post->user_id}}" class="btn update_btn btn-lg contactbut">Contact</a>    </div>
    </div>
    </div>

</div>
<br/>

@stop