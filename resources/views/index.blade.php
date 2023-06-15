
<title>Spyder</title>

<body>



<div id="page-wrapper">
    <div class="row col-sm-12"> 
        <!--	Header start  -->
        <livewire:header />
        <div class="container">
        <div class="container">
  <div class="row">
    <div class="col-md-8">
      <!-- Banner content -->
      <div class="card mb-4">
        <div class="card-body">
          <h5 class="card-title">Apartments</h5>
          <p class="card-text">Browse our available apartments.
          {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
          <div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}</div>
          </p>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-body">
          <h5 class="card-title">For Sale</h5>
          <p class="card-text">Check out properties available for sale.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4">
        <div class="card-body">
          <h5 class="card-title">One Bedroom</h5>
          <p class="card-text">Explore our one-bedroom properties.</p>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-body">
          <h5 class="card-title">Two Bedroom</h5>
          <p class="card-text">Discover our two-bedroom properties.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="full-row bg-gray">
<div class="container">
    
  <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4">
  @foreach ($properties as $item)
  <div class="col-md-6 col-lg-3 mb-4">
  <div class="card h-100 overflow-hidden" >
   
        <div class="card-body">
        <h5 class="card-title">{{ $item->title }}</h5>
        <div class="card-info">
            <img src="admin/property/{{ $item->pimage1}}" class="card-img-top w-80 mb-4" alt="Property Image" style="max-height:300px;">
        </div>
        </div>
        <div class="card-footer" style="max-height:100px;">
            <div class="p-1">
                <span class="location text-capitalize"><i class="fas fa-map-marker-alt text-success"></i>: {{ $item->city }} <i style="float: right; font-size:8px;">By: {{ $item->uid }}</i></span>
            </div>
            <p class="card-text">ksh: {{ $item->price }} <i style="float: right;">For: {{ $item->stype}}</i></p>
        </div>
    </div>
</div>
@endforeach

@if ($properties->isEmpty())
    <p>No properties found.</p>
@endif
          </div>
        </div>
    </div>
		
        <!--	Footer   start-->
        <livewire:footer />
	
        
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-success text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a>  
    </div>
</div>
<!-- Wrapper End --> 


</html>