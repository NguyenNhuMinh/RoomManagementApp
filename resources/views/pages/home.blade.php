@extends('layout')
@section('content')
      	
    <section class="ftco-section bg-light ftco-room">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Room Management</span>
            <h2 class="mb-4">Room Management Application</h2>
          </div>
        </div>  
    		<div class="row no-gutters">
    			<div class="col-lg-6">
    				<div class="room-wrap">
    					<div class="img d-flex align-items-center" style="background: url({{asset('public/fontend/images/image_5.jpg')}});">
    						<div class="text text-center px-4 py-4">
    							<h2>Welcome to <a href="">Room</a> Management</h2>
    							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
    						</div>
    					</div>
    				</div>
    			</div>
				@foreach($all_room as $key => $room)
    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex">
    					<img style="height:360px" src="{{URL::to('public/upload/room/'.$room->room_image)}}" alt="">
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
								<p>{{$room->room_name}}</p>
    							<p class="mb-0"><span class="price mr-1">{{number_format($room->room_price)}}</span> <span class="per">/đ</span></p>
	    						<h3 class="mb-3"><a href="rooms.html"></a></h3>
	    						<p class="pt-1"><a href="{{URL::to($room->room_id)}}" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>
                 @endforeach
				 
    		</div>
    	</div>
    </section>


    

@endsection