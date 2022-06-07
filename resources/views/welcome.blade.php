<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

    <title>DQGs</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">DGQS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a  href="{{url(' ')}}" class="{{ Request::is('') ? ' active text-primary' : ' ' }}  nav-link  ">الرئيسيه  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-postcard-heart" viewBox="0 0 16 16">
            <path d="M8 4.5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7Zm3.5.878c1.482-1.42 4.795 1.392 0 4.622-4.795-3.23-1.482-6.043 0-4.622ZM2.5 5a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3Zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3Zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3Z"/>
            <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H2Z"/>
          </svg></a></li>
          <li><a href="{{url('user/Diagnosis')}}" class=" {{ Request::is('/user/Diagnosis') ? '  text-primary' : ' active' }} nav-link"> تحاليل   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-activity" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z"/>
          </svg> </a></li>
          <li><a class="nav-link " href="#departments">ألالعاب</a></li>


        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" style=" text-align: right;width:80%;">
      <h1>مرحبا بك  </h1>
      <h2>سوف تجد في موقعنا افضل الخيارات وكمية من التجارب المتتعه</h2>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container " style=" text-align: right;width:80%;">

        <div class="row">

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>المقالات المساعده </h4>
                    <p>مجموعة من المقالات التوعويه في خصوص اغلب الامراض</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>الالعاب التفاعليه</h4>
                    <p>خليك ومزيج بي الالعاب المخصصه لصغار السن </p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>الصور </h4>
                    <p>صور واختبارات تفاعيله مع عقول الاطفال </p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>



          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>لماذا عليك اختيارنا ؟</h3>
              <p>
           يتضمن الموقع مجموعه من الامراض المنتشره بين صغار السن ومخزون من الاسئله وخوارزميات تطابق احتمالية
           المرض بين صغار السن ,وخليط من الالعاب المحزفه ومقلله من خطر الاصابه
           مع فيدوهات وروابط بين لقنوات مفيده
              </p>
              <div class="text-center">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about" style=" text-align: right;;">
      <div class="container-fluid">

        <div class="row">


          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>أخطر الأمراض في العالم</h3>
            <p>هناك العديد من الأمراض القديم منها والجديد والتي تعدّ خطيرة جدًا وتسبب المضاعفات والخطر على حياة الإنسان، فما هي أخطر الأمراض في العالم؟
                هناك العديد من الأمراض المرتبط بعضها بخطر الوفاة وينتشر بعضها الآخر كالوباء يحصد أرواح الناس، فما هي أخطر الأمراض في العالم
            </p>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href=""> أمراض القلب</a></h4>
              <p class="description">يموت ملايين الأشخاص حول العالم جراء إصابتهم بأمراض القلب، ومن أشهر أمراض القلب هو مرض تصلب الشرايين الناتج عن إنغلاق الشرايين الرئيسة المغذية لأعضاء الإنسان خصوصًا تلك التي تقوم بتغذية القلب</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href=""> مرض الزهايمر</a></h4>
              <p class="description">يعدّ مرض الزهايمر من أشهر الأمثلة على الأمراض العقلية والذي يسبب فقدان الذاكرة وخلل في طريقة تفكير الإنسان، لا يوجد سبب واضح للإصابة بمرض الزهايمر ولكنه يصيب الأشخاص الكبار بشكل أكبر من غيرهم.

                لا يوجد علاج لمرض الزهايمر ولكن يوجد بعض أنواع العلاج التي من شأنها التحكم بتطور المرض وتحسين حياة الإنسان.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href=""> التهابات الجهاز التنفسي السفلي </a></h4>
              <p class="description">إن الأمرض المزمنة التي تصيب الجهاز التنفسي في الجزء السفلي غالبًا ما تؤثر على صحة الرئة، تتضمن التهابات الجهاز التنفسي السفلي: الانسداد الرئوي المزمن الذي ينتج من التدخين والعوامل البيئية المختلفة أو ارتفاع ضغط الشرايين الرئوي.</p>
            </div>

          </div>
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <a href=https://i.ytimg.com/vi/vp9exDjYYTg/hq720.jpg?sqp=-oaymwEcCOgCEMoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAfAWhIXGq4XrPduJ4SKC8DSpsbxA" class="glightbox play-btn mb-4"></a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row justify-content-between">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="@php echo App\Models\User::all()->count();@endphp" data-purecounter-duration="1" class="purecounter"></span>
              <p>أولياء الامور</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="@php echo App\Models\Diseas::all()->count();@endphp" data-purecounter-duration="1" class="purecounter"></span>
              <p>الامراض</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="@php echo App\Models\Question::all()->count();@endphp" data-purecounter-duration="1" class="purecounter"></span>
              <p>الاسئله </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->




    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>Departments</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Cardiology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Neurology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Hepatology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Pediatrics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Eye Care</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Cardiology</h3>
                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Et blanditiis nemo veritatis excepturi</h3>
                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                    <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                    <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                    <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                    <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                    <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->




    <section id="testimonials" class="testimonials" style=" text-align: right;;">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <h3>نزلات البرد</h3>

                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    غالبا تكون أعراض نزلة البرد هي العطس، والسعال، وسيلان الأنف، ارتفاع طفيف في درجة الحرارة، التهاب الحلق، ضعف الشهية، ويمكن مقاومتها من خلال استخدام المحلول الملحي المخصص للرضع مع ضمان تدفئة درجة حرارة الغرفة تدفئة مناسبة ومعتدلة.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">

                  <h3> الإنفلونزا</h3>

                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    إذا عانى طفلك من التهاب الحلق، وانسداد الأنف، والقيء، أو الإسهال، فهذا مؤشر على أنه مصاب بالإنفلونزا.

                    ويعتبر سعيد أن الحصول على المصل أفضل حل للوقاية من فيروس الإنفلونزا الموسمي قبل بداية الشتاء، موضحا أنه في حالة إصابة طفلك ستكون الأعراض خفيفة.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">

                  <h3>أمراض المعدة</h3>

                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    ويقول استشاري طب الأطفال وحديثي الولادة: "إذا أصيب طفلك بالقيء أو الإسهال فهذا يؤكد أنه يعاني من عدوى معوية قد تصيبه بالجفاف، لذا يجب إعطاؤه كمية كبيرة من السوائل والإسراع بالذهاب إلى الطبيب".
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">

                  <h3>التهاب الأذن</h3>

                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    من الأمراض الشائعة جدا لدى الأطفال في فصل الشتاء كما يوضح سعيد، هي التهابات الأذن، فإذا كان طفلك يصرخ بقوة ويعاني من عدم القدرة على النوم، ولاحظتِ خروج سائل من الأذن، لا تتردي في استشارة طبيب الأذن.

                    ونصح سعيد الأمهات بالحفاظ على صحة آذان أطفالهن من خلال تنظيف الأذن باستمرار ووضع الطفل مرتفع الرأس أثناء الرضاعة حتى لا ينزل اللبن ويخزن في الأذن.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3> أمراض الجهاز التنفسي </h3>

                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    الشخير وصوت الصفير والخنفرة أثناء النوم تؤشر على إصابة طفلك بأحد أمراض الجهاز التنفسي، لذلك عليك الانتباه جيدا، وعرضه على الطبيب
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row g-0">


          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('assets/img/gallery/gallery-4.jpg')}}" class="galelry-lightbox">
                <img src="{{asset('assets/img/gallery/gallery-4.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('assets/img/gallery/gallery-5.jpg')}}" class="galelry-lightbox">
                <img src="{{asset('assets/img/gallery/gallery-5.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('assets/img/gallery/gallery-6.jpg')}}" class="galelry-lightbox">
                <img src="{{asset('assets/img/gallery/gallery-6.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('assets/img/gallery/gallery-7.jpg')}}" class="galelry-lightbox">
                <img src="{{asset('assets/img/gallery/gallery-7.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>



        </div>

      </div>
    </section><!-- End Gallery Section -->




  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Medilab</span></strong>. All Rights Reserved
        </div>
        <div class="credits">

        </div>
      </div>

    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
