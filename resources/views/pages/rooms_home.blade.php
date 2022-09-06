@extends('layout')
@section('content')


<section class="ftco-booking ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12 pr-1 aside-stretch">
    				<form action="#" class="booking-form">
	        		<div class="row">
	        			<div class="col-md d-flex py-md-4">
	        				<div class="form-group align-self-stretch d-flex align-items-end">
	        					<div class="wrap bg-white align-self-stretch py-3 px-4">
				    					<label for="#">Check-in Date</label>
				    					<input type="text" class="form-control checkin_date" placeholder="Check-in date">
			    					</div>
			    				</div>
	        			</div>
	        			<div class="col-md d-flex py-md-4">
	        				<div class="form-group align-self-stretch d-flex align-items-end">
	        					<div class="wrap bg-white align-self-stretch py-3 px-4">
				    					<label for="#">Check-out Date</label>
				    					<input type="text" class="form-control checkout_date" placeholder="Check-out date">
			    					</div>
			    				</div>
	        			</div>
	        			<div class="col-md d-flex py-md-4">
	        				<div class="form-group align-self-stretch d-flex align-items-end">
	        					<div class="wrap bg-white align-self-stretch py-3 px-4">
			      					<label for="#">Room Category</label>
			      					<div class="form-field">
									  
			        					<div class="select-wrap">
			                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
											
			                                <select name="" id="" class="form-control input-sm m-bot15">
											@foreach($category as $key => $cate)								                												
												<option value=""><a href="{{URL::to('/category-room/'.$cate->category_id)}}">{{$cate->category_name}}</a></option>									                              	                	                  		                			                     
											@endforeach
                                            </select>																				
                                        </div>										
				                    </div>
				                </div>
		                    </div>
	        			</div>
	        			<div class="col-md d-flex py-md-4">
	        				<div class="form-group align-self-stretch d-flex align-items-end">
	        					<div class="wrap bg-white align-self-stretch py-3 px-4">
			      					<label for="#">District</label>
			      					<div class="form-field">
			        					<div class="select-wrap">
			                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
											
			                                <select name="" id="" class="form-control">
											@foreach($district as $key => $dist)
			                    	            <option value=""><a href="{{URL::to('/district-room/'.$dist->district_id)}}">{{$dist->district_name}}</a></option>
											@endforeach
			                                </select>
											
			                            </div>
										
				                    </div>
				                </div>
		                    </div>
	        			</div>
	        			<div class="col-md d-flex">
	        				<div class="form-group d-flex align-self-stretch">
			              <a href="{{URL::to('/room-details')}}" class="btn btn-black py-5 py-md-3 px-4 align-self-stretch d-block"><span>Check Availability <small>Best Price Guaranteed!</small></span></a>
			            </div>
	        			</div>
	        		</div>
	        	</form>
	    		</div>
    		</div>
    	</div>
    </section>
		<section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
          	<div class="row">
          		<div class="col-md-12 ftco-animate">
              
          			<div class="single-slider owl-carousel">
                @foreach($all_room as $key => $room)
          				<div class="item">    
          					<div class="room-img">
                      <img style="height:450px;" src="{{URl::to('public/upload/room/'.$room -> room_image)}}">
                    </div>    
          				</div>
                  @endforeach
          				
          			</div>
                
          		</div>
          		<div class="col-md-12 room-single mt-4 mb-5 ftco-animate">
          			<h2 class="mb-4">2n1k Room" <span>- (1 Available rooms)</span></h2>
    						<p>Fully furnished, furniture, people just need to come and enjoy the facilities in a cool space</p>
    						<div class="d-md-flex mt-5 mb-5">
    							<ul class="list">
	    							<li><span>Max:</span> 6 Persons</li>
	    							<li><span>Size:</span> 80 m2</li>
	    						</ul>
	    						<ul class="list ml-md-5">
	    							<li><span>View:</span> Láng View</li>
	    							<li><span>Bed:</span> 2</li>
	    						</ul>
    						</div>
    						<p></p>
          		</div>
          	

          		<div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
          			<h4 class="mb-4">Review &amp; Ratings</h4>
          			<div class="row">
          				<div class="col-md-6">
          					<form method="post" class="star-rating">
										  <div class="form-check">
												<input type="checkbox" class="form-check-input" id="exampleCheck1">
												<label class="form-check-label" for="exampleCheck1">
													<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i> 100 Ratings</span></p>
												</label>
										  </div>
										  <div class="form-check">
									      <input type="checkbox" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									    	   <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i> 30 Ratings</span></p>
									      </label>
										  </div>
										  <div class="form-check">
									      <input type="checkbox" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 5 Ratings</span></p>
									     </label>
										  </div>
										  <div class="form-check">
										    <input type="checkbox" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
									      </label>
										  </div>
										  <div class="form-check">
									      <input type="checkbox" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
										    </label>
										  </div>
										</form>
          				</div>
          			</div>
          		</div>
          	</div>
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon ion-ios-search"></span>
                  <input type="text" class="form-control" placeholder="Search...">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Categories</h3>
                <li><a href="#">Phòng cao cấp <span>(12)</span></a></li>
                <li><a href="#">Phòng 2n1k <span>(22)</span></a></li>
                <li><a href="#">Phòng 1n1k <span>(37)</span></a></li>
                <li><a href="#">Phòng 30m2 <span>(42)</span></a></li>
                <li><a href="#">Phòng giá rẻ sinh viên <span>(14)</span></a></li>
                
              </div>
            </div>

            

            

            
          </div>
        </div>
      </div>
    </section>

@endsection