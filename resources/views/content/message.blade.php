
@extends ('Master')


@section('content')

    <div class="row conversation_content">


<!-- el gded -->
<div class="col-xs-4 messages_border">
    

    <h1 class="message_header">Messages</h1>
    <br/>
    @foreach($messages as $value)
    
         

        @if($value->receiver_id==Auth::user()->id)
        <div class="row">
        <div class="col-xs-4 frame">
            <img src="/images/user.png" style="height:100px;">
        </div>
        <a href="/message/{{$value->sender_id}}" class="message_link">
        <div class="col-xs-7 message_div">
            <h2 class="message_text">{{$value->message}}</h2>
        </div>
    </a>
</div>
        @else
        <div class="row">
        <div class="col-xs-4 frame">
            <img src="/images/user.png" style="height:100px;">
        </div>
        <a href="/message/{{$value->receiver_id}}" class="message_link">
        <div class="col-xs-7 message_div">
            <h2 class="message_text">{{$value->message}}</h2> 
           </div>
           </a>
       </div>
        @endif  
    
    @endforeach


</div>

<!-- end of gded -->



        <div class="col-xs-8">
    
 <div class="panel-body">
    <h1 class="conv">Conversation</h1>
       <div class="row">
         
          @foreach($message as $value)
            @if($value->sender_id==Auth::user()->id)
            <div class="form-group width ">
                <span class="fa fa-lg fa-user pb-chat-fa-user" style="padding: 15px; margin: 10px;"></span><span class="color2">{{$value->message}}</span><span class="label label-default pb-chat-labels"></span>
            </div>
          <hr>
            @else
            <div class="form-group pull-right pb-chat-labels-right width">
                <span class="label pb-chat-labels"><span class="color">{{$value->message}}</span></span><span class="fa fa-lg fa-user pb-chat-fa-user" style="padding: 15px; margin: 10px;"></span>
            </div>
            <div class="clearfix"></div>
            <hr>
            @endif
        @endforeach
       </div>


<div class="panel-footer">
        <div class="row">
            <div class="col-xs-2"></div>
            <div class="col-xs-6">
               <form method="POST" action="/message/send">
                {{csrf_field()}}
                 <input type="hidden" name="reciever_id" value="{{$id}}">
                <textarea name="newMessage" class="form-control pb-chat-textarea" placeholder="Type your message here..."></textarea>
                
            </div>
            
            <div class="col-xs-4 pb-btn-circle-div">
                <button type="submit" class="btn btn-primary btn-circle pb-chat-btn-circle">Send</button>
            </div>
          </form>
        </div>
        </div>

</div>



    </div>
    






        </div>



@endsection
