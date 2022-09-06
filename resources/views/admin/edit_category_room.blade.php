@extends('admin_layout')
@section('admin_content')

<div clas="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">Update Category Room</header>
    
        <?php 
            $message = Session::get('message');
            if($message){
            echo '<span class="text-alert">',$message,'</span>';
            Session::put('message', null);
            }
        ?>
        <div class="panel-body">
            @foreach($edit_category_room as $key => $edit_value)
            <div class="position-center">
                <form role="form" action="{{URL::to('/update-category-room/'.$edit_value->category_id)}}" id="manage-category" method="post">
                {{csrf_field()}}
                    <div class="form-group">
						<label class="control-label">Category</label>
						<input type="text" value="{{$edit_value -> category_name}}" class="form-control" name="category_room_name">
					</div>							
							
					<div class="form-group">
						<label class="control-label">Caregory Description</label>
					    <textarea style="resize: none" row= "8" class="form-control" name="category_room_desc">{{$edit_value -> category_desc}}</textarea>
					</div>
                    <button type="submit" name="update_category_room" class="btn btn-info">Update Category Room</button>
                </form>
           </div>
           @endforeach
        </div>
        </section>
    </div>        
</div>
@endsection