@extends('layout')
@section('content')
<section class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-5">Reservation Form</h2>
                <form action="{{URL::to('/admin/booking_place')}}" method="post">
                    {{csrf_field()}}
                    @foreach($room_details as $key => $value)
                    <!--<div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Arrival Date</label>
                            <div style="position: relative;">
                            <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                            
                            <input type="text" class="form-control" id="arrival_date">
                            </div>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Departure Date</label>
                            <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>          
                            <input type="text" class="form-control" id="departure_date">
                        </div>
                    </div>-->
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="fullName">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                    </div>                    
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="room">Room</label>
                            <select name="room_number" class="form-control">
                                <option>{{$value->room_name}}</option>
                                
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="room">Room Id</label>
                            <select name="booking_room_id" class="form-control">
                                <option>{{$value->room_id}}</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                        <label for="room">Address</label>
                            <select name="room_address" class="form-control">
                                <option>{{$value->room_desc}}</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="message">Write a Note</label>
                            <textarea name="message" id="message" class="form-control" cols="30" rows="8"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="submit" value="Reserve Now" class="btn btn-primary">
                        </div>
                    </div>
                    @endforeach
                </form>
            </div>
            <div class="col-md-1"></div>
            @foreach($room_details as $key => $value)
            
            <div class="col-md-5">
                <h3 class="mb-5">Featured Room</h3>
                <form action="{{URL::to('/save-booking')}}" method="">
                {{csrf_field()}}
                <div class="media d-block room mb-0">
                    <figure>            
                        <img name="room_image" src="{{asset('public/upload/room/'.$value->room_image)}}" alt="" class="img-fluid">                       
                        <div class="overlap-text">
                        <span name="room_name"> {{$value -> room_name}}
                            <span class="ion-ios-star">
                                
                            </span>
                            <span class="ion-ios-star">
                                
                            </span>
                            <span class="ion-ios-star">
                                
                            </span>
                        </span>
                        </div>
                    
                    </figure>
                    <div class="medio-body">
                        <h3 class="mt-0">
                            <a href=""></a>
                        </h3>
                        <ul class="room-specs" >
                            <!--<input name="qty" type="number" value="1" min="1">-->
                            <input name="roomid_hidden" type="hidden" value="{{$value -> room_id}}" >
                            <li name="room_price">
                            {{number_format($value -> room_price)}} /đ
                            </li>
                            <li name="room_address">
                                <span class="ion-ios-crop">
                                    
                                </span>
                                {{$value -> room_desc}}
                                
                            </li>
                        </ul>
                        <p>dnasdbjsandashdjsn dasbdashdaskdhas dsahduas</p>
                        <!--<p>
                            
                            <button type="submit" class="btn btn-primary btn-sm">Book Now </button>
                        </p>-->
                    </div>
                </div> 
                </form>
            </div>
            
           @endforeach
        </div>

    </div>
</section>
<script>
	$('#manage-check').submit(function(e){
		e.preventDefault();
		start_load()
		$.ajax({
			url:'admin/ajax.php?action=save_book',
			method:'POST',
			data:$(this).serialize(),
			success:function(resp){
				if(resp >0){
					alert_toast("Data successfully saved",'success')
					setTimeout(function(){
					end_load()
					$('.modal').modal('hide')
					},1500)
				}
			}
		})
	})
</script>
@endsection