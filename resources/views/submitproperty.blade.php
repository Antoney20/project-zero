
<!DOCTYPE html>
<html lang="en">

@auth
@include('layouts.errors')
<div id="page-wrapper">
<livewire:header/>
    <div class="row"> 
        <div class="full-row">
            <div class="container">
                    <div class="row">
						<div class="col-lg-12">
						<p class="text-white" >Welcome: {{ Auth::user()->name }}</p>
							<h2 class="text-secondary double-down-line text-center">Submit Property</h2>
                        </div>
					</div>
                    <div class="row p-5 bg-white">
						
					@if (Session::has('success'))
                       <div class="alert alert-success">
                             {{ Session::get('success') }}
                         </div>
                    @endif

                     @if (Session::has('error'))
                        <div class="alert alert-danger">
                        {{ Session::get('error') }}
                             </div>
                    @endif
			
                        <form  method="POST" action="{{ route('submitproperty') }}"enctype="multipart/form-data">
                        @csrf
								<div class="description">
									<h5 class="text-secondary">Basic Information</h5><hr>
									
										<div class="row">
											<div class="col-xl-12">
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Title</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="title" required placeholder="Enter Title">
														@error('title')
                                                         <span class="text-danger">{{ $message }}</span>
                                                        @enderror
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Specific Description</label>
													<div class="col-lg-9">
														<textarea class=" form-control" name="scontent" rows="1" cols="30"></textarea>
														@error('scontent')
                                                         <span class="text-danger">{{ $message }}</span>
                                                        @enderror
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Prop Content</label>
													<div class="col-lg-9">
														<h2>Give a detailed available information about your place</h2>
														<textarea class="tinymce form-control" name="pcontent" rows="10" cols="30"></textarea>
														@if ($errors->has('pcontent'))
                                                        <span class="text-danger">{{ $errors->first('pcontent') }}</span>
                                                        @endif
													</div>
												</div>
												
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Property Type</label>
													<div class="col-lg-9">
														<select class="form-control" required name="ptype">
															<option value="">Select Type</option>
															<option value="Hostel">Hostel</option>
															<option value="apartment">Apartment</option>
															<option value="flat">Flat</option>
															<option value="building">Building</option>
															<option value="house">House</option>
															<option value="villa">Villa</option>
															<option value="office">Office</option>
															
														</select>
														@error('ptype')
                                                         <span class="text-danger">{{ $message }}</span>
                                                        @enderror
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Selling Type</label>
													<div class="col-lg-9">
														<select class="form-control" required name="stype">
															<option value="">Select Status</option>
															<option value="rent">Rent</option>
															<option value="sale">Sale</option>
														</select>
														@if ($errors->has('stype'))
                                                        <span class="text-danger">{{ $errors->first('stype') }}</span>
                                                        @endif
													</div>
												</div>
											</div>   
										</div>
										<h5 class="text-secondary">Price & Location</h5><hr>
										<div class="row">
											<div class="col-xl-6">

												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Price</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="price" required placeholder="Enter Price">
														@error('price')
                                                         <span class="text-danger">{{ $message }}</span>
                                                        @enderror
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">City</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="city" required placeholder="Enter City">
														@error('city')
                                                         <span class="text-danger">{{ $message }}</span>
                                                        @enderror
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">State</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="state" required placeholder="Enter State">
														@error('state')
                                                         <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                 </div>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Total Rooms</label>
													<div class="col-lg-9">
													<input type="text" class="form-control" name="rsize" required placeholder="Number of rooms availabe ">
													@error('rsize')
                                                         <span class="text-danger">{{ $message }}</span>
                                                        @enderror
												</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Area Size</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="asize" required placeholder="Enter Area Size in metres">
														@error('asize')
                                                         <span class="text-danger">{{ $message }}</span>
                                                        @enderror
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Address</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="location" required placeholder="Enter Address">
														@error('location')
                                                         <span class="text-danger">{{ $message }}</span>
                                                        @enderror
													</div>
												</div>
												
											</div>
										</div>
									
												
										<h5 class="text-secondary">Upload some Images & Status</h5><hr>
										<div class="row">
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image1</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage1" type="file" required="">
														@error('aimage1')
                                                         <span class="text-danger">{{ $message }}</span>
                                                        @enderror
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 2</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage2" type="file" required="">
														@error('aimage2')
                                                         <span class="text-danger">{{ $message }}</span>
                                                        @enderror
													</div>
												</div>
										
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Status</label>
													<div class="col-lg-9">
														<select class="form-control"  required name="status">
															<option value="">Select Status</option>
															<option value="available">Available</option>
															<option value="sold out">Sold Out</option>
														</select>
														@error('status')
                                                         <span class="text-danger">{{ $message }}</span>
                                                        @enderror
													</div>
												</div>
					
											</div>
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 3</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage3" type="file" >
														@error('aimage3')
                                                         <span class="text-danger">{{ $message }}</span>
                                                        @enderror
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">image 4</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage4" type="file" >
														@error('aimage4')
                                                         <span class="text-danger">{{ $message }}</span>
                                                        @enderror
													</div>
												</div>
											
											</div>
										</div>

										<hr>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><b>Is Featured?</b></label>
													<div class="col-lg-9">
														<select class="form-control" required name="isFeatured">
															<option value="">Select...</option>
															<option value="0">No</option>
															<option value="1">Yes</option>
														</select>
														@error('isFeatured')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
													</div>
												</div>
											</div>
										</div>

										
											<input type="submit" value="Submit Property" class="btn btn-info" style="margin-left:200px; ">
										
								</div>
								</form>

                    </div>            
            </div>
        </div>
        
    
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<livewire:<footer/>
@else

<script>window.location.href = "{{ route('auth.login') }}";</script>
@endauth
    
