@include('layout.header')

<div class="container-fluid">
<div class="row">
<div class="col-sm-12">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('assets/images/banner/1.jpg')}}" class="d-block w-80" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/images/banner/2.jpg')}}" class="d-block w-80" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/images/banner/3.jpg')}}" class="d-block w-80" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div>
</div>
