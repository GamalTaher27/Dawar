
@extends ('Master')


@section('content')
 
<div class="container">
	<h1 class="message_header">Messages</h1>
	<br/>
    @foreach($messages as $value)
    
    	 

        @if($value->receiver_id==Auth::user()->id)
        <div class="row">
        <div class="col-xs-2 frame">
        	<img src="/images/user.png" style="height:100px;">
        </div>
        <a href="/message/{{$value->sender_id}}" class="message_link">
        <div class="col-xs-10 message_div">
            <h2 class="message_text">{{$value->message}}</h2>
        </div>
    </a>
</div>
        @else
        <div class="row">
        <div class="col-xs-2 frame">
        	<img src="/images/user.png" style="height:100px;">
        </div>
        <a href="/message/{{$value->receiver_id}}" class="message_link">
        <div class="col-xs-10 message_div">
            <h2 class="message_text">{{$value->message}}</h2> 
           </div>
           </a>
       </div>
        @endif  
    
    @endforeach

</div>
@endsection
