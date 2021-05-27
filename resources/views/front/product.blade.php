{{-- @extends('front.nav') --}}
<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active">Page 1</li>
      <li data-target="#demo" data-slide-to="1">Page2</li>
      <li data-target="#demo" data-slide-to="2">Page3</li>
    </ul>
  
    <!-- The slideshow -->
    <div class="carousel-inner">
      @foreach ($products as $item)
      <div class="carousel-item active"{{$item['id'==1?'active':'']}}>
        <img src="{{ asset('images/1.jpg') }}" alt="Los Angeles">
        <h3>{{$item['name']}}</h3>
      </div>  
      @endforeach
      
      {{-- <div class="carousel-item">
        <img src="chicago.jpg" alt="Chicago">
      </div>
      <div class="carousel-item">
        <img src="ny.jpg" alt="New York">
      </div> --}}
    </div>
  
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  
  </div>