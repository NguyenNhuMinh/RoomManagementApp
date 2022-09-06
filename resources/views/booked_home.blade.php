@extends('layout')
@section('content')
<section class="site-section">
    <div class="container">
        
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-5">Reservation Form</h2>
                <form action="" method="post">
                    
                    
                    <div class="row">
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
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="room">Room</label>
                            <select name="room" class="form-control">
                                <option>201</option>
                                <option>302</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="room">Catagories</label>
                            <select name="room" class="form-control">
                                <option>1n1k</option>
                                <option>2n1k</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control">
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
                    
                </form>
            </div>
            <div class="col-md-1"></div>
            
            <div class="col-md-5">
                <h3 class="mb-5">Featured Room</h3>
               
                <div class="media d-block room mb-0">
                    <figure>
                        
                        <img src="{{('public/fontend/images/room-4.jpg')}}" alt="" class="img-fluid">
                        <div class="overlap-text">
                        <span> Featured Room
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
                        <ul class="room-specs">
                            <li>
                            
                            </li>
                            <li>
                                <span class="ion-ios-crop">
                                    
                                </span>
                                30 m
                                <sup>2</sup>
                            </li>
                        </ul>
                        <p>dnasdbjsandashdjsn dasbdashdaskdhas dsahduas</p>
                        <p>
                            <a href="" class="btn btn-primary btn-sm">Book Now</a>
                        </p>
                    </div>
                </div>
                
            </div>
           
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