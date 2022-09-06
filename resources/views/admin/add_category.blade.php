@extends('admin_layout')
@section('admin_content')

<div class="container-fluid">

	<div class="col-lg-12">
		<div class="row">
			<!-- FORM Panel -->
			<div class="col-md-6">
			<form role="form" action="{{URL::to('/admin/save-category-room')}}" id="manage-category" method="post">
			{{csrf_field()}}
				<div class="card">
					<div class="card-header">
						    Add Category Room
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
								<label class="control-label">Category</label>
								<input type="text" class="form-control" name="category_room_name">
							</div>							
							
							<div class="form-group">
								<label class="control-label">Caregory Description</label>
								<textarea style="resize: none" row= "8" class="form-control" name="category_room_desc"></textarea>
							</div>
							<div class="form-group">
								<label for="" class="control-label">Hide / Show</label>
								<select name="category_room_status" class="form-control input-sm m-bot15">
									<option value= "0">Show</option>
									<option value= "1">Hide</option>
								</select>
							</div>
					
					</div>
							
					<div class="card-footer">
						<div class="row">
							<div class="col-md-12">
								<button type ="submit" name="add_category" class="btn btn-sm btn-primary col-sm-3 offset-md-3"> Save</button>
								<button class="btn btn-sm btn-default col-sm-4" type="button" onclick="$('#manage-category').get(0).reset()"> Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			</div>
			<!-- FORM Panel -->

			<!-- Table Panel -->
			
			<!-- Table Panel -->
		</div>
	</div>	


</div>
@endsection