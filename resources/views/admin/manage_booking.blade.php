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
						<table class="table table-bordered table-hover">
							<thead>
								<tr>	
									<th style="width:20px;">
									    <label class="i-checks m-b-none">
											<input type="checkbox"><i></i>
										</label>
								    </th>								
									<th class="text-center">Customer Name</th>
									<th class="text-center">Customer Phone</th>
									<th class="text-center">Booking Room Number</th>
									<th class="text-center">Booking Room Image</th>
									<th class="text-center">Room Address</th>
									<th class="text-center">Booking Status</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								
							@foreach($all_booking_order as $key => $order)
								<tr>
									
									<td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></lable></td>		
									<td class="text-center">{{$order->customer_name}}</td>	
									<td class="text-center">{{$order->customer_phone}}</td>
									<td class="text-center">{{$order->room_name}}</td>	
									<td><img src="{{URL::to('public/upload/room/'.$order->room_image)}}" height="120" width="150"></td>
									<td class="text-center" >{{$order->room_desc}}</td>			
									<td class="text-center">
									<!--{{$order->booking_status}}-->
									
									<?php 
										    if($order->booking_status == 'Đang xử lý'){
												?>
												<a href="{{URL::to('/admin/unactive-booking/'.$order->booking_id)}}"><span class="fas fa-check-circle"></span></a>
												<?php 
											}else{
												?>
												<a  href="{{URL::to('/admin/active-booking/'.$order->booking_id)}}"><span class="fas fa-times-circle"></span></a>
												<?php
											}
										?>
									</td>								
									<td class="text-center">
									    <!--<a class="btn btn-sm btn-primary edit_cat" href="">Edit</a>
										<a onclick="return confirm('Are You Sure To Delete?')" class="btn btn-sm btn-danger delete_cat" href="{{URL::to('/admin/delete-category-room/'.$order->customer_id)}}">Delete</a>-->
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