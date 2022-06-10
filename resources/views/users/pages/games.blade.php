@extends('welcome')
@section('content')


<section id="hero" class="d-flex align-items-center">
    <div class="container" style=" text-align: right; ">
      <h1>مرحبا بك  @if (Auth::check())   {{ \Auth::user()->parent_name }} @endif</h1>
      <h2>قسم الالعاب التفاعليه</h2>

    </div>
  </section>


<section id="gallery" class="gallery">
    <div class="container">

      <div class="section-title">
        <h2> أختبارات الالوان</h2>

      </div>
    </div>

    <div class="container-fluid">
      <div class="row justify-content-between g-0">

        <div class="col-lg-3 card shadow col-md-4">
          <div class="gallery-item">
            <a href="{{asset('assets/img/games/55.jpeg')}}" class="galelry-lightbox">
              <img src="{{asset('assets/img/games/55.jpeg')}}" alt="" class="img-fluid">
            </a>
          </div>

          <div class="d-flex m-2  flex-row">
            <div class="form-check form-check-inline ">
            <input class="form-check-input radio" id="radio" type="radio" name="game1-img1" value="0" >
            <label class="form-check-label " for="game1-img1">اخضر</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input radio" id="radio" type="radio" name="game1-img1" value="1" >
            <label class="form-check-label" for="game1-img1">احمر</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input radio" id="radio" type="radio" name="game1-img1"value="1" >
            <label class="form-check-label" for="game1-img1">بنفسجي</label>
            </div>
            </div>
        </div>

        <div class="col-lg-3 card shadow  col-md-4">
          <div class="gallery-item">
            <a href="{{asset('assets/img/games/57.jpeg')}}" class="galelry-lightbox">
              <img src="{{asset('assets/img/games/57.jpeg')}}" alt="" class="img-fluid">
            </a>
          </div>

          <div class="d-flex m-2  flex-row">
            <div class="form-check form-check-inline ">
            <input class="form-check-input radio"  id="radio" type="radio" name="game1-img2" value="1" >
            <label class="form-check-label" for="game1-img2">كوبي</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input radio" id="radio" type="radio" name="game1-img2" value="0" >
            <label class="form-check-label" for="game1-img2">احمر</label>
            </div>
            <input class="form-check-input radio" id="radio" type="radio" name="game1-img2" value="1" >
            <label class="form-check-label" for="game1-img2">برتقالي</label>
            </div>
            </div>



        <div class="col-lg-3  card shadow col-md-4">
          <div class="gallery-item">
            <a href="{{asset('assets/img/games/8065.jpeg')}}" class="galelry-lightbox">
              <img src="{{asset('assets/img/games/8065.jpeg')}}" alt="" class="img-fluid">
            </a>
          </div>

          <div class="d-flex m-2  flex-row">
            <div class="form-check form-check-inline ">
            <input class="form-check-input radio"  id="radio" type="radio" name="game1-img3" value="0" >
            <label class="form-check-label" for="game1-img3">أصفر</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input radio"  id="radio" type="radio" name="game1-img3" value="1" >
            <label class="form-check-label" for="game1-img3">أبيض</label>
            </div>
            <input class="form-check-input radio" id="radio" type="radio" name="game1-img3" value="1" >
            <label class="form-check-label" for="game1-img3">احمر</label>
            </div>
            </div>
        </div>


      </div>

    </div>

  </section><!-- End Gallery Section -->



  <section id="gallery" class="gallery">
    <div class="container">

      <div class="section-title">
        <h2> أختبارات النباتات</h2>

      </div>
    </div>

    <div class="container-fluid">
      <div class="row justify-content-around g-0">


        <div class="col-lg-3 card shadow col-md-4">
          <div class="gallery-item">
            <a href="{{asset('assets/img/games/2022-06-06at8077.jpeg')}}" class="galelry-lightbox">
              <img src="{{asset('assets/img/games/2022-06-06at8077.jpeg')}}" alt="" class="img-fluid">
            </a>
          </div>

          <div class="d-flex m-5  flex-row">
            <div class="form-check form-check-inline ">
            <input class="form-check-input radio"  id="radio" type="radio" name="game2-img1" value="0" >
            <label class="form-check-label" for="game2-img1">صبار</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input radio"  id="radio" type="radio" name="game2-img1" value="1" >
            <label class="form-check-label" for="game2-img1">موز</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input radio" id="radio" type="radio" name="game2-img1"value="1" >
            <label class="form-check-label" for="game2-img1">تفاح</label>
            </div>
            </div>
        </div>

        <div class="col-lg-3 card shadow  col-md-4">
          <div class="gallery-item">
            <a href="{{asset('assets/img/games/2022-06-068.07.18AM.jpeg')}}" class="galelry-lightbox">
              <img src="{{asset('assets/img/games/2022-06-068.07.18AM.jpeg')}}" alt="" class="img-fluid">
            </a>
          </div>

          <div class="d-flex m-5  flex-row">
            <div class="form-check form-check-inline ">
            <input class="form-check-input radio" id="radio" type="radio" name="game2-img2" value="0" >
            <label class="form-check-label" for="game2-img2">شجر زينه</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input radio" id="radio" type="radio" name="game2-img2" value="1" >
            <label class="form-check-label" for="game2-img2">شجر ظل</label>
            </div>
            <input class="form-check-input radio" id="radio" type="radio" name="game2-img2" value="1" >
            <label class="form-check-label" for="game2-img2">شجر ثمار</label>
            </div>
            </div>



      </div>

    </div>
  </section><!-- End Gallery Section -->


  <section id="gallery" class="gallery">
    <div class="container">

      <div class="section-title">
        <h2> أختبارات الحيوانات</h2>

      </div>
    </div>

    <div class="container-fluid">
      <div class="row justify-content-between g-0">


        <div class="col-lg-3 card shadow col-md-4">
          <div class="gallery-item">
            <a href="{{asset('assets/img/games/2022-06-068.07.42AM.jpeg')}}" class="galelry-lightbox">
              <img src="{{asset('assets/img/games/2022-06-068.07.42AM.jpeg')}}" alt="" class="img-fluid">
            </a>
          </div>

          <div class="d-flex m-5  flex-row">
            <div class="form-check form-check-inline ">
            <input class="form-check-input radio" id="radio" type="radio" name="game3-img1" value="0" >
            <label class="form-check-label" for="game3-img1">فيل</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input radio"  id="radio" type="radio" name="game3-img1" value="1" >
            <label class="form-check-label" for="game3-img1">وحيد قرن</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input radio" id="radio"  type="radio" name="game3-img1"value="1" >
            <label class="form-check-label" for="game3-img1">قرد</label>
            </div>
            </div>
        </div>

        <div class="col-lg-3 card shadow  col-md-4">
          <div class="gallery-item">
            <a href="{{asset('assets/img/games/2022-06-08.07.43.jpeg')}}" class="galelry-lightbox">
              <img src="{{asset('assets/img/games/2022-06-08.07.43.jpeg')}}" alt="" class="img-fluid">
            </a>
          </div>

          <div class="d-flex m-5  flex-row">
            <div class="form-check form-check-inline ">
            <input class="form-check-input radio"  id="radio" type="radio" name="game3-img2" value="0" >
            <label class="form-check-label" for="game3-img2"> اسد</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input radio" id="radio" type="radio" name="game3-img2" value="1" >
            <label class="form-check-label" for="game3-img2"> فهد</label>
            </div>
            <input class="form-check-input radio" id="radio" type="radio" name="game3-img2" value="1" >
            <label class="form-check-label" for="game3-img2"> ثعلب</label>
            </div>
            </div>



        <div class="col-lg-3  card shadow col-md-4">
          <div class="gallery-item">
            <a href="{{asset('assets/img/games/2022-06-06.jpeg')}}" class="galelry-lightbox">
              <img src="{{asset('assets/img/games/2022-06-06.jpeg')}}" alt="" class="img-fluid">
            </a>
          </div>

          <div class="d-flex m-5  flex-row">
            <div class="form-check form-check-inline ">
            <input class="form-check-input radio" id="radio" type="radio" name="game3-img3" value="1" >
            <label class="form-check-label" for="game3-img3">جداده</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input radio" id="radio" type="radio" name="game3-img3" value="1" >
            <label class="form-check-label" for="game3-img3">صقر</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input radio" id="radio" type="radio" name="game3-img3"value="0" >
            <label class="form-check-label" for="game3-img3">عصفور</label>
            </div>
            </div>
        </div>


      </div>

    </div>
  </section><!-- End Gallery Section -->

  <section id="gallery" class="gallery">
    <div class="container">

      <div class="section-title">
        <h2> أختبارات الماكولات</h2>

      </div>
    </div>

    <div class="container-fluid">
      <div class="row justify-content-between g-0">


        <div class="col-lg-3 card shadow col-md-4">
          <div class="gallery-item">
            <a href="{{asset('assets/img/games/WhatsAp2022-06-068.09.32.jpeg')}}" class="galelry-lightbox">
              <img src="{{asset('assets/img/games/WhatsAp2022-06-068.09.32.jpeg')}}" alt="" class="img-fluid">
            </a>
          </div>

          <div class="d-flex m-5  flex-row">
            <div class="form-check form-check-inline ">
            <input class="form-check-input radio" type="radio" name="game4-img1" value="0" >
            <label class="form-check-label" for="game4-img1">كعكه</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input radio" type="radio" name="game4-img1" value="1" >
            <label class="form-check-label" for="game4-img1"> بسكويت</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input radio" type="radio" name="game4-img1"value="1" >
            <label class="form-check-label" for="game4-img1">مثلجات</label>
            </div>
            </div>
        </div>

        <div class="col-lg-3 card shadow  col-md-4">
          <div class="gallery-item">
            <a href="{{asset('assets/img/games/Image2022-06-08.09.30 AM.jpeg')}}" class="galelry-lightbox">
              <img src="{{asset('assets/img/games/Image2022-06-08.09.30 AM.jpeg')}}" alt="" class="img-fluid">
            </a>
          </div>

          <div class="d-flex m-5  flex-row">
            <div class="form-check form-check-inline ">
            <input class="form-check-input radio" type="radio" name="game4-img2" value="0" >
            <label class="form-check-label" for="game4-img2"> خضروات</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input radio" type="radio" name="game4-img2" value="1" >
            <label class="form-check-label" for="game4-img2"> فواكه</label>
            </div>
            <input class="form-check-input radio" type="radio" name="game4-img2" value="1" >
            <label class="form-check-label" for="game4-img2"> لحوم</label>
            </div>
            </div>



        <div class="col-lg-3  card shadow col-md-4">
          <div class="gallery-item">
            <a href="{{asset('assets/img/games/2022-06-06 at8.09.32.jpeg')}}" class="galelry-lightbox">
              <img src="{{asset('assets/img/games/2022-06-06 at8.09.32.jpeg')}}" alt="" class="img-fluid">
            </a>
          </div>

          <div class="d-flex m-5  flex-row">
            <div class="form-check form-check-inline ">
            <input class="form-check-input radio" type="radio" name="game4-img3" value="0" >
            <label class="form-check-label" for="game4-img3">فواكه</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input radio" type="radio" name="game4-img3" value="1" >
            <label class="form-check-label" for="game4-img3">بيض</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input radio" type="radio" name="game4-img3"value="1" >
            <label class="form-check-label" for="game4-img3">جبنه</label>
            </div>
            </div>
        </div>


      </div>

    </div>
  </section><!-- End Gallery Section -->


  <section id="gallery" class="gallery">
    <div class="container">

      <div class="section-title">
        <h2> أختبارات التمييز وفروقات</h2>
        <p>
          اجلس مع طفلك وحاول حل الاغاز الاتيه
         </p>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row justify-content-between g-0">


        <div class="col-lg-3 card shadow m-2 col-md-4">
          <div class="gallery-item">
            <a href="{{asset('assets/img/games/WhatsApIma.jpeg')}}" class="galelry-lightbox">
              <img src="{{asset('assets/img/games/WhatsApIma.jpeg')}}" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 card shadow m-2 col-md-4">
          <div class="gallery-item">
            <a href="{{asset('assets/img/games/WhatsApImage20.jpeg')}}" class="galelry-lightbox">
              <img src="{{asset('assets/img/games/WhatsApImage20.jpeg')}}" alt="" class="img-fluid">
            </a>
          </div>

            </div>

        <div class="col-lg-3  card shadow m-2 col-md-4">
          <div class="gallery-item">
            <a href="{{asset('assets/img/games/WAM(1).jpeg')}}" class="galelry-lightbox">
              <img src="{{asset('assets/img/games/WAM(1).jpeg')}}" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3  card shadow m-2 col-md-4">
          <div class="gallery-item">
            <a href="{{asset('assets/img/games/2022-06-06at8.09.56.jpeg')}}" class="galelry-lightbox">
              <img src="{{asset('assets/img/games/2022-06-06at8.09.56.jpeg')}}" alt="" class="img-fluid">
            </a>
          </div>

        </div>


      </div>

    </div>
  </section><!-- End Gallery Section -->


@endsection
