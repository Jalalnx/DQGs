@extends('welcome')
@section('content')


<section id="hero" class="d-flex align-items-center">
    <div class="container" style=" text-align: right;">
      <h1>مرحبا بك  @if (Auth::check())   {{ \Auth::user()->parent_name }} @endif</h1>
      <h2> الفيديوهات ومقاطع التعليميه</h2>

    </div>
</section>

<section id="about" class="about" style=" text-align: right;;">
    <div class="container ">

        <?php
  $arr_dd = App\Models\videos::all();
  foreach($arr_dd as $key =>$value){

  ?>

    <div class="container p-5 mt-10 " style="  border-radius:20px;">
   <div class="row ">

        <div class="  card shadow  video-box  justify-content-center align-items-stretch position-relative" style=" width:100%; higth:100%;
          background: url({{asset($value->image_url)}}) center center no-repeat;">
          <a href="{{$value->videos_url}}" class="glightbox play-btn mb-4"></a>
        </div>
   </div>
   </div>

   <?php } ?>

    <div class="container p-5 mt-10 " style="  border-radius:20px;">
   <div class="row ">

        <div class="  card shadow  video-box  justify-content-center align-items-stretch position-relative" style=" width:100%; higth:100%;
          background: url({{asset('assets/img/343.png')}}) center center no-repeat;">
          <a href="https://youtu.be/adpqsHstWEc" class="glightbox play-btn mb-4"></a>
        </div>
   </div>
   </div>

    <div class="container p-5 mt-10 " style="  border-radius:20px;">
   <div class="row ">

        <div class="  card shadow  video-box  justify-content-center align-items-stretch position-relative" style=" width:100%; higth:100%;
          background: url({{asset('assets/img/345.png')}}) center center no-repeat;">
          <a href="https://youtu.be/ZKKjLAoh74A" class="glightbox play-btn mb-4"></a>
        </div>
   </div>
   </div>

   <div class="container p-5 mt-10 " style="  border-radius:20px;">
   <div class="row ">

        <div class="  card shadow  video-box  justify-content-center align-items-stretch position-relative" style=" width:100%; higth:100%;
          background: url({{asset('assets/img/348.png')}}) center center no-repeat;">
          <a href="https://youtu.be/pTF1oIXVsBA" class="glightbox play-btn mb-4"></a>
        </div>
   </div>
   </div>

   <div class="container p-5 mt-10 " style="  border-radius:20px;">
   <div class="row ">

        <div class="  card shadow  video-box  justify-content-center align-items-stretch position-relative" style=" width:100%; higth:100%;
          background: url({{asset('assets/img/349.png')}}) center center no-repeat;">
          <a href="https://youtu.be/wT4GY2kSXL4" class="glightbox play-btn mb-4"></a>
        </div>
   </div>
   </div>





   </div>
    </div>
  </section><!-- End About Section -->

@endsection
