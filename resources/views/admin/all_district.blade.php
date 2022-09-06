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
									<th class="text-center">District Name</th>
									<th class="text-center">District Status</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($all_district as $key => $dist_pro)
								
								<tr>
									
									<td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></lable></td>		
									<td>{{$dist_pro->district_name}}</td>					
									<td class="text-center">
										<?php 
										    if($dist_pro->district_status == 0){
												?>
												<a href="{{URL::to('/admin/unactive-district/'.$dist_pro->district_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
												<?php 
											}else{
												?>
												<a  href="{{URL::to('/admin/active-district/'.$dist_pro->district_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
												<?php
											}
										?>
									
									</td>								
									<td class="text-center">
									    <a class="btn btn-sm btn-primary edit_cat" href="{{URL::to('/admin/edit-district/'.$dist_pro->district_id)}}">Edit</a>
										<a onclick="return confirm('Are You Sure To Delete?')" class="btn btn-sm btn-danger delete_cat" href="{{URL::to('/admin/delete-district/'.$dist_pro->district_id)}}">Delete</a>
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