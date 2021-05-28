
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Product</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ URL::asset('/css/login.css') }}" />
</head>
<body>
  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0"></li>
    </ul>
  
    <!-- The slideshow -->
    <div class="carousel-inner">
      @foreach ($products as $item)
      <div class="carousel-item active"{{$item['id']}}>
        <img src="{{ asset('images')}}/{{ $item->gallery}}" alt="Los Angeles">
        {{-- <h5 class="text-primary">{{$item['description']}}</h5> --}}
      </div>  
      @endforeach
      <div class="carousel-item">
        <img src="{{ asset('images')}}/{{ $item->gallery}}" alt="Chicago">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images')}}/{{ $item->gallery}}" alt="New York">
      </div>
    </div>
  
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  <div class="trending-wrapper">
    <h3>trending products</h3>
    @foreach ($products as $item)
    <div class="carousel-item active"{{$item['id']}}>
      <img src="{{ asset('images')}}/{{ $item->gallery}}" class="img1" alt="Los Angeles">
      {{-- <h5 class="text-primary">{{$item['name']}}</h5> --}}
    </div> 
    @endforeach
  </div>
  <style>
    .img1{
      height: 100px;
    }
    .trending-wrapper{
      float: left;
    }

  </style>
</body>
</html>
