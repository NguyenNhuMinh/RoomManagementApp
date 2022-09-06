@extends('admin_layout')
@section('admin_content')

<div class="container-fluid">

	<div class="col-lg-12">
		<div class="row">
			<!-- FORM Panel -->
			<div class="col-md-6">
                @foreach($edit_room as $key => $pro)
			<form role="form" action="{{URL::to('/update-room'.$pro->room_id)}}" id="manage-room" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
				<div class="card">
					<div class="card-header">
						    Update Room
				  	</div>
					  <?php 
                        $message = Session::get('message');
                        if($message){
                        echo '<span class="text-alert">',$message,'</span>';
                        Session::put('message', null);
                        }
                      ?>
        
					<div class="card-body">
							<input type="hidden" name="id">
							<div class="form-group">
								<label class="control-label">Room Name</label>
								<input type="text" class="form-control" name="room_name" value="{{$pro->room_name}}">
							</div>							
							<div class="form-group">
								<label class="control-label">Room Price</label>
								<input type="text" class="form-control" name="room_price" value="{{$pro->room_price}}">
							</div>
							<div class="form-group">
								<label class="control-label">Room Description</label>
								<textarea style="resize: none" row= "8" class="form-control" name="room_desc">{{$pro->room_desc}}</textarea>
							</div>
                            <div class="form-group">
								<label class="control-label">Room Content</label>
								<textarea style="resize: none" row= "8" class="form-control" name="room_content">{{$pro->room_content}}</textarea>
							</div>
                            <div class="form-group">
								<label class="control-label">Room Image</label>
								<input type="file" class="form-control" name="room_image">
                                <img src="{{URL::to('public/upload/room/'.$pro->room_image)}}" height="120" width="150">
							</div>
                            <div class="form-group">
								<label for="" class="control-label">Category Room</label>
								<select name="room_category" class="form-control input-sm m-bot15">
                                @foreach($cate_room as $key => $cate)
                                    @if($cate->category_id == $pro->category_id)
									<option selected value= "{{$cate->category_id}}">{{$cate->category_name}}</option>
									@else
                                    <option value= "{{$cate->category_id}}">{{$cate->category_name}}</option>
                                    @endif
                                @endforeach
								</select>
							</div>
                            <div class="form-group">
								<label for="" class="control-label">District</label>
								<select name="room_district" class="form-control input-sm m-bot15">
                                @foreach($district_room as $key => $dist)
                                    @if($dist->district_id == $pro->district_id)
									<option selected value= "{{$dist->district_id}}">{{$dist->district_name}}</option>
                                    @else	
                                    <option value= "{{$dist->district_id}}">{{$dist->district_name}}</option>
                                    @endif
                                @endforeach
								</select>
							</div>
							<div class="form-group">
								<label for="" class="control-label">Hide / Show</label>
								<select name="room_status" class="form-control input-sm m-bot15">
									<option value= "0">Hide</option>
									<option value= "1">Show</option>
								</select>
							</div>
					
					</div>
							
					<div class="card-footer">
						<div class="row">
							<div class="col-md-12">
								<button type ="submit" name="add_room" class="btn btn-sm btn-primary col-sm-3 offset-md-3"> Save</button>
								<button class="btn btn-sm btn-default col-sm-4" type="button" onclick="$('#manage-room').get(0).reset()"> Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</form>
            @endforeach
			</div>
			<!-- FORM Panel -->

			<!-- Table Panel -->
			
			<!-- Table Panel -->
		</div>
	</div>	


</div>
@endsection