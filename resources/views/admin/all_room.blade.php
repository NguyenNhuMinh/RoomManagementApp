@extends('admin_layout')
@section('admin_content')

<div class="container-fluid">

	<div class="col-lg-12">
		<div class="row">
			<!-- Table Panel -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
					<?php 
                       $message = Session::get('message');
                       if($message){
                       echo '<span class="text-alert">',$message,'</span>';
                       Session::put('message', null);
                       }
                    ?>
						<table class="table  table-bordered table-hover">
							<thead class="thead-light">
								<tr>	
									<th style="width:50px;">
									    <label class="i-checks m-b-none">
											<input type="checkbox"><i></i>
										</label>
								    </th>								
									<th class="text-center">Room Name</th>
                                    <th class="text-center">Room Price</th>
                                    <th class="text-center">Room Image</th>
                                    <th class="text-center">Room Category</th>
                                    <th class="text-center">Room Address</th>
									<th class="text-center">Room Status</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($all_room as $key => $pro)
								
								<tr>
									
									<td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></lable></td>		
									<td>{{$pro->room_name}}</td>
                                    <td>{{$pro->room_price}}</td>					
                                    <td><img src="{{URL::to('public/upload/room/'.$pro->room_image)}}" height="120" width="150"></td>
                                    <td>{{$pro->category_name}}</td>
                                    <td>{{$pro->district_name}}</td>
									
									<td class="text-center">
										<?php 
										    if($pro->room_status == 0){
												?>
												<a href="{{URL::to('/admin/unactive-room/'.$pro->room_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
												<?php 
											}else{
												?>
												<a  href="{{URL::to('/admin/active-room/'.$pro->room_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
												<?php
											}
										?>
									
									</td>								
									<td class="text-center">
									    <a class="btn btn-sm btn-primary edit_room" href="{{URL::to('/admin/edit-room/'.$pro->room_id)}}">Edit</a>
										<a onclick="return confirm('Are You Sure To Delete?')" class="btn btn-sm btn-danger delete_room" href="{{URL::to('/admin/delete-room/'.$pro->room_id)}}">Delete</a>
									</td>
								</tr>
								
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	


</div>
@endsection