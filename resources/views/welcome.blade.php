
@extends('layouts.layoutLanding')

@section('styles')
<style type="text/css">
  .firstPart{
    width: 100%;
    height: 400px;
    
    float: center;


  }
  .itemSlider{
   padding: 5%;
   height: 400px;
   width: 100%;
     background-size: cover;
      position: relative;    /* para poder posicionar el texto de forma absoluta */
  display: inline-block; 
  }

  .itemTitle{
  position: absolute;    /* posición absolute con respecto al padre */
  bottom: 3%;
  right: 1%;
  font-size: 30px;             /* posicionada en la esquina inferior derecha */
  }
</style>
@endsection
@section('content')
<div class="slider firstPart" >
  <div class="border  itemSlider">
    <img src="{{asset('img/slider/tablonpng.png')}}">
    <div class="itemTitle">
      <button class="btn btn-primary btn-lg">Arma tu Paquete !</button>
    </div>
  </div>
  <div class="itemSlider border">
    <img src="{{asset('img/slider/tablonpng.png')}}">
  </div>
  <div class="itemSlider border">
    <img src="{{asset('img/slider/tablonpng.png')}}">
  </div>
</div>


@endsection

@section('scripts')
<script type="text/javascript">
  $(document).ready(function(){
  $('.slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  centerMode: true,
  focusOnSelect: true,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows:true,
  infinite:true
});
});
</script>
@endsection