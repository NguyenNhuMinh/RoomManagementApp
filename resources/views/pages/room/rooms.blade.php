@extends('layout')
@section('content')
<section class="ftco-section bg-light ftco-no-pb">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Rooms</span>
            <h2 class="mb-4">Room Management Application</h2>
          </div>
        </div>  
    		<div class="row no-gutters">
                @foreach($all_room as $key => $rooms)
    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex">
                    <img style="height:360px" src="{{URL::to('public/upload/room/'.$rooms->room_image)}}" alt="">
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">{{$rooms->room_price}}</span> <span class="per">/ đ</span></p>
	    						<h3 class="mb-3"><a href="">{{$rooms->room_name}}</a></h3>
	    						<p class="pt-1"><a href="{{URL::to($rooms ->room_id)}}" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>
                @endforeach
    			
    		</div>
    	</div>
    </section>

@endsection