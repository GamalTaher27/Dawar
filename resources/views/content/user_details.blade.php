@extends('Admin')
@section('content')
   <!--Users-->
            <section class="body">
    
					<div class="container">
						@if(isset($details))
						
						<table class="table ">
							
								<tr>
								  <td><u><b>ID</td>
								<td><u><b>Name</td>
								<td><u><b>Email</td>
								<td><u><b>Phone Number</td>
								<td></td>
						
								</tr>
							
								
                   	@foreach($details as $user)
                    @if($user->user_type === 0)
					
						<tr>
							<td>{{ $user->id }}</td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->email }}</td>
							<td>{{ $user->phone_number }}</td>
							
							<td> <a href="deleteUser/{{ $user->id }} " class="btn btn-danger">Delete</a></td>

						</tr>
            @endif

					@endforeach
							
						</table>
						@else
						 <h2><center> user not found</h2>
						@endif
					</div>
            </section>
            <!--End Posts-->
            
      @endsection
            
           