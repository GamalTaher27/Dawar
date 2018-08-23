@extends ('Admin')


@section('content')
    <!-- ***********start navbar ***********-->
  
   <!--Users-->
            <section class="users">
            <div class="container ">
                <div class="row oneuser">
					<div class="search-container">
						<form action="/search" method="POST" role="search">
							{{ csrf_field() }}
							<div class="input-group">
								<input type="text" class="form-control" name="q" placeholder="Search users"> <span class="input-group-btn">
									<button type="submit" class="btn btn-default">
										<span class="glyphicon glyphicon-search"></span>
									</button>
								</span>
							</div>
						</form>
				  </div>
				  <br> <br> <br>  <br>
                                
			   <table  class="table" id="t1" style="width:100%">

					<tr>
						<td><u><b>ID</td>
						<td><u><b>Name</td>
						<td><u><b>Email</td>
						<td><u><b>Phone Number</td>
						<td></td>

					</tr>
					
                   	@foreach($users as $usr)
					
					@if($usr->user_type === 0)
						<tr>
							<td>{{ $usr->id }}</td>
							<td>{{ $usr->name }}</td>
							<td>{{ $usr->email }}</td>
							<td>{{ $usr->phone_number }}</td>

							

							<td> <a href="deleteUser/{{ $usr->id }} " class="btn btn-danger">Delete</a></td>

						</tr>
						@endif

					@endforeach

				</table>
                        {{$users->links()}} <!-- de btrbot link el sofa7 elly 3amalnalha paginat -->
                   
                </div>
            </div>
            </section>
            <!--End Posts-->
            
      
            
 @endsection()