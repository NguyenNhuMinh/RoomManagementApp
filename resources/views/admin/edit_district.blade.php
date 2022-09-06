@extends('admin_layout')
@section('admin_content')

<div clas="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">Update District</header>
    
        <?php 
            $message = Session::get('message');
            if($message){
            echo '<span class="text-alert">',$message,'</span>';
            Session::put('message', null);
            }
        ?>
        <div class="panel-body">
            @foreach($edit_district as $key => $edit_value)
            <div class="position-center">
                <form role="form" action="{{URL::to('/update-district/'.$edit_value->district_id)}}" id="manage-district" method="post">
                {{csrf_field()}}
                    <div class="form-group">
						<label class="control-label">District Name</label>
						<input type="text" value="{{$edit_value -> district_name}}" class="form-control" name="district_name">
					</div>							
							
					<div class="form-group">
						<label class="control-label">District Description</label>
					    <textarea style="resize: none" row= "8" class="form-control" name="district_desc">{{$edit_value -> district_desc}}</textarea>
					</div>
                    <button type="submit" name="update_district" class="btn btn-info">Update </button>
                </form>
           </div>
           @endforeach
        </div>
        </section>
    </div>        
</div>
@endsection