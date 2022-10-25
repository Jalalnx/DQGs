@extends('welcome')
@section('content')

<section id="hero" class="d-flex align-items-center mb-5">
    <div class="container" style=" text-align: right;">
      <h1>المقالات </h1>


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



  @endsection
