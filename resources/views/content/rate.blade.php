@extends('master')

@section('content')

<form method="POST" action="/{{$user->id}}/rate">
  {{ csrf_field() }}
                 <div class="form-check form-check-inline" >
      <input class="form-check-input" type="radio" name="grade" id="inlineRadio1" value="1">
      <label class="form-check-label" for="inlineRadio1">1</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="grade" id="inlineRadio2" value="2">
      <label class="form-check-label" for="inlineRadio2">2</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="grade" id="inlineRadio3" value="3">
      <label class="form-check-label" for="inlineRadio3">3</label>
      @if(auth::check())
       <input type="hidden" name="us_id"  value="{{Auth::user()->id}}">
       @endif
    </div>
         <button type="submit" class="btn btn-primary">Submit</button>
       </from>

         @stop