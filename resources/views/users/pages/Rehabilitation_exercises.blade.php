@extends('welcome')
@section('content')

<section id="hero" class="d-flex align-items-center mb-5">
    <div class="container" style=" text-align: right;">
      <h1>التدريبات التأهليه </h1>


    </div>
  </section>


  <?php
  $arr_dd = App\Models\articale::all();
  foreach($arr_dd as $key =>$value){

    $array_of_strings = explode(".",$value->content);//100 represents the length of the chunk

  ?>

    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments mt-5 ">
        <div class="container">
            <div class="section-title">
                <h2> المقالات </h2>

              </div>
            </div>
          <div class="section-title ">
            <h2> {{$value->title}}</h2>
            <p>
                 {{$array_of_strings[0]}}

            </p>
          </div>

          <div class="row gy-4" style=" text-align: right;">

            <div class="col-lg-10">
                <details>
                    <summary>متابعة القراء</summary>
                    <p>
                     <?php
                       echo $value->content;
                     ?>
                    </p>
                    </details>
            </div>
        </div>
      </section><!-- End Departments Section -->

<?php } ?>




@if (App\Models\Games::all())

<section id="gallery" class="gallery">
  <div class="container">

    <div class="section-title">
      <h2> الالعاب </h2>

    </div>
  </div>

  <div class="container-fluid">
    <div class="row justify-content-between g-0">
      <?php
      $arr_dd = App\Models\Games::all();
      foreach($arr_dd as $key =>$value){
      ?>

      <div class="col-lg-3 card shadow col-md-4">
        <div class="gallery-item">
          <a href="{{asset($value->image)}}" class="galelry-lightbox">
            <img src="{{asset($value->image)}}" alt="" class="img-fluid">
          </a>
        </div>

        <div class="d-flex m-2  flex-row">

          <?php
          //   dd($value->data['data']);
          foreach($value->data['data'] as $value){
              echo '
              <div class="form-check form-check-inline ">
          <input class="form-check-input radio" id="radio" type="radio" name="game1-img1" value="'.$value['value'].'" >
          <label class="form-check-label " for="game1-img1">'.$value['option'].'</label>
          </div>
          ';

          }
          unset($value);
          ?>

          </div>
      </div>

      @php
  }
  @endphp
      </div>
  </div>
  </div>

</section><!-- End Gallery Section -->
@else
<div class="p-3 text-center">
  <p>ليس هنالك العاب حتي الان.</p>
</div>
@endif

  @endsection
