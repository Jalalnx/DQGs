@extends('welcome')
@section('content')


<section id="hero" class="d-flex align-items-center">
    <div class="container" style=" text-align: right;">
      <h1>مرحبا بك  @if (Auth::check())   {{ \Auth::user()->parent_name }} @endif</h1>
      <h2>سوف تجد في موقعنا افضل الخيارات وكمية من التجارب المتتعه</h2>

    </div>
  </section><!-- End Hero -->
<!-- ======= Hero Section ======= -->


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
                    <p>خليط ومزيج بي الالعاب المخصصه لصغار السن </p>
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
            <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
                <a href=https://i.ytimg.com/vi/vp9exDjYYTg/hq720.jpg?sqp=-oaymwEcCOgCEMoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAfAWhIXGq4XrPduJ4SKC8DSpsbxA" class="glightbox play-btn mb-4"></a>
              </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>الامراض النفسية عند الاطفال</h3>
            <p>
                يمكن وصف المرض النفسي عند الأطفال بأنه تغيرات كبيرة في تصرفات، وسلوكيات، وطريقة تعامل الطفل مع الآخرين والعالم المحيط به. وتقول الدراسات أو واحدًا من كل أربعة أطفال أو مراهقين عرضة للإصابة والمرض النفسي.
                ومما يجعل هذه المشكلة أكثر صعوبة في الأطفال هو عجزهم عن التعبير عن أنفسهم بوضوح خاصةً الصغار منهم، وبالتالي يحتاج الأمر

                الكثير من الجهد للتعرف على المشكلة النفسية ورصد علاماتها حتى يعي الأبوان أبعاد المشكلة ويطلبوا المساعدة الطبي الطبية المتخصصة لطفلهم.
            </p>

            <div class="icon-box">
              <h4 class="title">  اضطراب الوسواس القهري</a></h4>
              <p class="description">حيث يشعر بعض الأطفال بالحاجة لتكرار بعض السلوكيات القهرية بدون إدراك للمشكلة أو سببها مثل ارتداء قطع معينة من الثياب أو تكرار تصرفات بعينها بدون توقف</p>
            </div>

            <div class="icon-box">
              <h4 class="title">  اضطراب العناد الشارد</a></h4>
              <p class="description"> ويُعرف أيضًا باسم اضطراب التحدي المعارض وهو الحالات التي يمر فيها الطفل بنوبات عناد وجدال وغضب بشكل متكرر ولا يمكن السيطرة عليه

            .</p>
            </div>

            <div class="icon-box">
              <h4 class="title">اضطرابات الأكل </a></h4>
              <p class="description">
                والتي تشيع في المراهقين وصغار السن وخاصةً في الآونة الأخيرة بسبب تأثير مواقع التواصل الاجتماعي ومعايير الجمال غير المنطقية التي نراها طوال اليوم
              </p>
                </div>
            <div class="icon-box">
              <h4 class="title">  مر ض التوحد </a></h4>
              <p class="description">
                بالرغم من أن مرض التوحد بين الأطفال ليس شائعًا إلى هذه الدرجة إلا أنه دائمًا ما يظهر على المصاب به من مرحلة الطفولة ويؤثر على حياته التالية بعد ذلك
            </p>
                </div>
            <div class="icon-box">
              <h4 class="title"> مرض الخوف النفسي عند الأطفال</a></h4>
              <p class="description">
                وهو ما يجمع بين الرهاب والفوبيا والقلق الاجتماعي والقلق العام ويصيب الأطفال من مختلف فئاتهم العمرية
                هذه الأمراض والاضطرابات السابقة كلها تم ذكرها على سبيل المثال لا الحصر، ما يعني أن الأطفال قد يصابون بالكثير من الأمراض النفسية والعقلية
            </p>
                </div>

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
              <span data-purecounter-start="0" data-purecounter-end="{{  App\Models\User::all()->count();}}" data-purecounter-duration="1" class="purecounter"></span>
              <p>أولياء الامور</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{  App\Models\Diseas::all()->count();}}" data-purecounter-duration="1" class="purecounter"></span>
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




  

    <section id="testimonials" class="testimonials" style=" text-align: right;;">
      <div class="container">
        <div class="section-title">
            <h2>علاج الامراض النفسية عند الاطفال</h2>
               <p>

                توجد العديد من وسائل وتقنيات العلاج المختلفة المستخدمة في علاج الامراض النفسية عند الاطفال، من أهمها:
            </p>
          </div>
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">


            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">

                  <h3> العلاج النفسي</h3>

                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>

                    والذي يشمل العلاج التخاطبي مع الطفل ومن أهم

                    أمثلته التطبيقية هو العلاج المعرفي السلوكي (CBT)، وفي حالة الأطفال دائمًا ما تشمل جلسات العلاج التخاطبي مع الأطباء والمختصين الأنشطة الممتعة والألعاب التي تجذب انتباه الطفل وتجعل علاجه أسهل، كما يساعد

                    المختصون الطفل أو المراهق في هذه الجلسات على تعلّم كيفية التحدث عن مشاكله ومشاعره والتعبير عن نفسه بطريقة واضحة ومفهومة.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">

                  <h3> العلاج الدوائي</h3>

                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>

                    في بعض الحالات يوصي الأطباء باستخدام الأدوية مع العلاج النفسي التخاطبي مثل مضادات الاكتئاب والقلق، ومضادات الذهان، وضابطات الحالة الميزاجية. سيوضح الطبيب للأسرة أثر هذه الأدوية، وأعراضها الجانبية، ومخاطرها ولا يجب إعطاء الطفل أية أدوية بدون استشارة الطبيب واتباع توجيهاته ونصائحه بدقة.


                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>   التحدث مع الطفل عن مرضه النفسي </h3>

                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>

                    للأسف يفتقر الكثير من الآباء إلى ثقافة التحدث مع الطفل والاستماع إليه بانتباه وتركيز، ومساعدة الطفل منذ الصغر

                    عن التعبير عن نفسه ومشاعره ومشاكله بوضوح.

                    يجب على الأبوين محاولة التحدث مع الطفل والاستماع له عند ملاحظة علامات أو تصرفات غريبة عليه مثل التي سبق ذكرها،

                    وبالطبع لا يُغني ذلك عن زيارة الطبيب وطلب مساعدة المختصين ليحصل الطفل على كل ما يحتاج إليه لتجاوز المشكلة التي يمر بها، أو احتواء المرض النفسي

                    من وقت مبكر ومنعه من التفاقم.
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
          <h2>مقتطفات</h2>
             <p>
                اضطرابات القلق لدى الأطفال هي مخاوف أو جزع أو قلق مستمر يعيق قدرتهم على المشاركة في اللعب أو المدرسة أو المواقف الاجتماعية النموذجية المناسبة للعمر. تشمل التشخيصات اضطرابات القلق الاجتماعي والقلق العام واضطراب الوسواس القهري. اضطراب نقص الانتباه مع فرط النشاط (ADHD).
             </p>
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
              <a href="{{asset('assets/img/gallery/gallery-6.webp')}}" class="galelry-lightbox">
                <img src="{{asset('assets/img/gallery/gallery-6.webp')}}" alt="" class="img-fluid">
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


@endsection
