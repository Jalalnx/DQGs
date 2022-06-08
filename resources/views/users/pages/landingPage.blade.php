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




    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>مرض اضطراب طيف التوحد</h2>
          <p>

            اضطراب طيف التوحد عبارة عن حالة ترتبط بنمو الدماغ وتؤثر على كيفية تمييز الشخص للآخرين والتعامل معهم على المستوى الاجتماعي، مما يتسبب في حدوث مشكلات في التفاعل والتواصل الاجتماعي. كما يتضمن الاضطراب أنماط محدودة ومتكررة من السلوك. يُشير مصطلح "الطيف" في عبارة اضطراب طيف التوحد إلى مجموعة كبيرة من الأعراض ومستويات الشدة.
يتضمن اضطراب طيف التوحد حالات كانت تعتبر منفصلة في السابق — التوحد، ومتلازمة أسبرجر، واضطراب التحطم الطفولي وأحد الأشكال غير المحددة للاضطراب النمائي الشامل. لا زال بعض الأفراد يستخدمون مصطلح "متلازمة أسبرجر"، والتي يعتقد بوجه عام أنها تقع على الطرف المعتدل من اضطراب طيف التوحد.
يبدأ اضطراب طيف التوحد في مرحلة الطفولة المبكرة ويتسبب في نهاية المطاف في حدوث مشكلات على مستوى الأداء الاجتماعي — على الصعيد الاجتماعي، في المدرسة والعمل، على سبيل المثال. غالبًا ما تظهر أعراض التوحد على الأطفال في غضون السنة الأولى. يحدث النمو بصورة طبيعية على ما يبدو بالنسبة لعدد قليل من الأطفال في السنة الأولى، ثم يمرون بفترة من الارتداد بين الشهرين الثامن عشر والرابع والعشرين من العمر عندما تظهر عليهم أعراض التوحد.

في حين لا يوجد علاج لاضطراب طيف التوحد، إلا أن العلاج المكثف المبكر قد يؤدي إلى إحداث فارق كبير في حياة العديد من الأطفال.

          </p>
        </div>

        <div class="row gy-4" style=" text-align: right;">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">الأعراض</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">التواصل والتفاعل الاجتماعي</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">أنماط السلوك</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">متى تزور الطبيب</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">المضاعفات</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-6">عوامل الخطر</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-7">
                    علاجات تركز على مساعدة طفلك
                    </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-8">
                    بعض لأسئلة التالية التي يتم تطبيقها بالبرمجة
                    </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>الأعراض</h3>
                    <p class="fst-italic">تظهر بعض علامات اضطراب طيف التوحد على الأطفال في مرحلة الطفولة المبكرة، مثل قلة الاتصال بالعين أو عدم الاستجابة لاسمهم أو عدم الاكتراث لمقدمي الرعاية. قد ينمو أطفال آخرون بشكل طبيعي خلال الأشهر أو السنوات القليلة الأولى من عمرهم، لكنهم يصبحون فجأة انطوائيين أو عدوانين أو يفقدون المهارات اللغوية التي قد اكتسبوها بالفعل. عادة ما تظهر العلامات عند عمر عامين.</p>
                    <p>من المرجح أن يكون لكل طفل يعاني من اضطراب طيف التوحد نمطًا فريدًا من السلوك ومستوى الخطورة — من الأداء المنخفض إلى الأداء العالي.

                        يعاني بعض الأطفال الذين يعانون اضطراب طيف التوحد صعوبة في التعلم، وبعضهم لديه علامات أقل من الذكاء المعتاد. يتراوح معدل ذكاء الأطفال الآخرون الذين يعانون هذا الاضطراب من طبيعي إلى مرتفع — حيث إنهم يتعلمون بسرعة، إلا أن لديهم مشكلة في التواصل وتطبيق ما يعرفونه في الحياة اليومية والتكيف مع المواقف الاجتماعية.

                        يمكن في بعض الأحيان أن تكون الشدة صعبة التحديد، بسبب المزيج الفريد للشعور بالأعراض في كل طفل. حيث إنها تعتمد بشكل عام على مستوى حالات الضعف وكيفية تأثيرها على قدرة القيام بالوظائف.

                        ترد أدناه بعض العلامات الشائعة التي يُظهرها الأشخاص الذين يعانون اضطراب طيف التوحد
                        </p>
                  </div>

                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>التواصل والتفاعل الاجتماعي </h3>
                    <p class="fst-italic">
                        قد يعاني طفل أو شخص بالغ مصاب باضطراب طيف التوحد من مشاكل في التفاعل الاجتماعي ومهارات التواصل، بما في ذلك أي من العلامات التالية:

                        عدم استجابة الطفل عند مناداته باسمه أو يبدو كأنه لا يسمعك في بعض الأوقات
                        يرفض العناق والإمساك به، ويبدو أنه يفضل اللعب بمفرده؛ أي ينسحب إلى عالمه الخاص
                        ضعف التواصل البصري، وغياب تعبيرات الوجه
                        عدم الكلام أو التأخر في الكلام، أو قد يفقد الطفل قدرته السابقة على التلفظ بالكلمات والجمل
                        عدم القدرة على بدء محادثة أو الاستمرار فيها أو قد يبدأ المحادثة للإفصاح عن طلباته أو
                        تسمية الأشياء فحسب
                    </p>
                    <p>
                    يتكلم بنبرة أو إيقاع غير طبيعي؛ وقد يستخدم صوتًا رتيبًا أو يتكلم مثل الإنسان الآلي
                    يكرر الكلمات أو العبارات الحرفية، ولكن لا يفهم كيفية استخدامها
                    يبدو ألا يفهم الأسئلة أو التوجيهات البسيطة
                    لا يعبر عن عواطفه أو مشاعره، ويبدو غير مدرك لمشاعر الآخرين
                    لا يشير إلى الأشياء أو يجلبها لمشاركة اهتماماته
                    يتفاعل اجتماعيًا على نحو غير ملائم بأن يكون متبلدًا أو عدائيًا أو مخرّبًا
                    لديه صعوبة في التعرف على الإشارات غير اللفظية، مثل تفسير تعبيرات الوجه الأخرى للأشخاص أو وضع الجسم أو لهجة الصوت

                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>أنماط السلوك</h3>
                    <p class="fst-italic">قد يعاني طفل أو شخص بالغ مصاب باضطراب طيف التوحد من مشاكل في الأنماط السلوكية المحدودة والمتكررة أو الاهتمام أو الأنشطة، بما في ذلك أي من العلامات التالية:

                    </p>
                    <p>
                يقوم الطفل بحركات متكررة، مثل التأرجح أو الدوران أو رفرفة اليدين
                قد يقوم بأنشطة من الممكن أن تسبب له الأذى، مثل العض أو ضرب الرأس
                يضع إجراءات أو طقوسًا معينة، وينزعج عندما يطرأ عليها أدنى تغيير
                يعاني من مشكلات في التناسق أو لديه أنماط حركية غريبة، مثل حركات غير متزنة أو السير على أصابع القدمين، ولديه لغة جسد غريبة أو متصلبة أو مبالغ فيها
                قد ينبهر من تفاصيل شيء ما، مثل العجلات التي تدور في السيارة اللعبة، ولكن لا يدرك الصورة المجملة لهذا الشيء أو وظيفته
                قد يكون حساسًا بشكل غير عادي تجاه الضوء والصوت واللمس، وعلى الرغم من ذلك لا يبالي للألم أو الحرارة
                لا تشغله ألعاب التقليد أو اللعب التخيلي
                قد ينبهر بجسم أو نشاط ما بحماسة أو تركيز غير طبيعيين
                قد تكون لديه تفضيلات معينة من الأطعمة، مثل تناول القليل من الأطعمة فحسب أو رفض تناول الأطعمة ذات ملمس معين
                عندما يكبر الأطفال المصابون باضطراب طيف التوحد، تتحسن حالتهم ويصبحون أكثر اجتماعية ويظهرون سلوكًا اضطرابيًا أقل. يمكن لبعض المصابين الذين يعانون أعراض أقل شدة أن يعيشوا حياة طبيعية أو شبه طبيعية. ومع ذلك، يستمر البعض في مواجهة صعوبة في المهارات اللغوية أو الاجتماعية، ويمكن أن تزداد المشاكل السلوكية والانفعالية سوءًا في فترة المراهقة.

                 </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>متى تزور الطبيب</h3>
                    <p class="fst-italic">ينمو الأطفال بوتيرة خاصة بهم، ولا يتبع العديد منهم المواعيد الدقيقة المذكورة في بعض كتب الأبوة والأمومة. ولكن عادةً ما يظهر على الأطفال المصابين باضطراب طيف التوحد بعض علامات تأخر النمو قبل بلوغ الثانية من العمر.

                        في حالة الشعور بقلق حيال نمو الطفل أو الاشتباه في إمكانية إصابة الطفل باضطراب طيف التوحد، يرجى الإعراب عن مخاوفك للطبيب. كما أن الأعراض المرتبطة بالاضطراب قد تكون مرتبطةكذلك باضطرابات النمو الأخرى.
                        </p>
                    <p>
                    غالبًا ما تظهر علامات اضطراب طيف التوحد مبكرًا في مرحلة النمو عندما يكون هناك تأخر واضح في مهارات اللغة والتفاعلات الاجتماعية. ربما يوصي الطبيب بإجراء اختبارات النمو لتحديد ما إذا كان الطفل يعاني تأخرًا في المهارات الإدراكية والاجتماعية ومهارات اللغة أم لا، إذا كان الطفل:

                    لا يستجيب بابتسامة أو بتعبير عن السعادة ببلوغه الشهر السادس
                    لا يقلد الأصوات أو تعبيرات الوجه ببلوغه الشهر التاسع
                    لا يتلعثم بالكلام أو يصدر صوتًا ببلوغه الشهر الثاني عشر
                    لا يومئ بحركات — مثل الإشارة أو التلويح باليد — ببلوغه الشهر الرابع عشر
                    لا ينطق كلمات متفرقة ببلوغه الشهر السادس عشر
                    لا يلعب ألعاب "التخيل" أو التظاهر ببلوغه الشهر الثامن عشر
                    لا ينطق عبارات تتألف من كلمتين ببلوغه الشهر الرابع والعشرين
                    يفقد مهارات اللغة أو المهارات الاجتماعية في أي عمر.

                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="tab-5">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>المضاعفات</h3>
                    <p class="fst-italic">يمكن أن تؤدي المشكلات المتعلقة بالتفاعل الاجتماعية والتواصل والسلوك إلى ما يلي:.</p>
                    <p>
                    مشاكل بالمدرسة وذات صلة بالتعلم الناجح
                    مشاكل وظيفية
                    عدم القدرة على العيش باستقلالية
                    العزل الاجتماعي
                    الضغط النفسي داخل الأسرة
                    الوقوع ضحية والتعرض للتنمر

                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="tab-6">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>عوامل الخطر</h3>
                    <p class="fst-italic">وتشمل عوامل خطر خلل القراءة:

                        تاريخ عائلي لخلل القراءة أو صعوبات التعلم الأخرى
                        الولادة المبكرة أو انخفاض الوزن عند الولادة
                        التعرض أثناء الحمل إلى النيكوتين أو المخدرات أو الكحول أو العدوى التي قد تغير نمو الدماغ في الجنين
                        الاختلافات الفردية في أجزاء من المخ التي تمكنّهم من القراءة
                        المضاعفات
                    </p>
                    <p>

                مشكلات التعلم. نظرًا لأن القراءة تمثل مهارة أساسية لمعظم المواد الدراسية الأخرى، يكون الطفل الذي يعاني خلل القراءة في وضع غير مناسب في معظم الصفوف الدراسية، وربما يواجه صعوبة في مواكبة أقرانه.
                المشكلات الاجتماعية. قد يؤدي عدم علاج خلل القراءة إلى انخفاض تقدير الذات ومشاكل السلوك والقلق والعدوانية والانسحاب من محيط الأصدقاء والآباء والمعلمين.
                مشكلات البالغين. إن عدم القدرة على القراءة والفهم يمكن أن يمنع الطفل من إبراز قدراته مع مراحل النمو. ويمكن أن يكون لذلك عواقب تعليمية واجتماعية واقتصادية طويلة الأمد.
                يكون الأطفال الذين يعانون خلل القراءة أكثر عرضة لخطر الإصابة باضطراب نقص الانتباه مع فرط النشاط (ADHD)، والعكس. يمكن أن يسبب اضطراب نقص الانتباه مع فرط النشاط صعوبة في مواصلة الانتباه، فضلاً عن فرط الحركة والسلوك المتهور، مما قد يجعل خلل القراءة أكثر صعوبة في العلاج.

                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="tab-7">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>
                        علاجات تركز على مساعدة طفلك
                        </h3>
                    <p class="fst-italic">تعلم التعرف على أصغر الأصوات التي تُشكل الكلمات (الصوتيات) واستخدامها
                        فهم أن الحروف وسلاسل الحروف تمثل هذه الأصوات والكلمات (السمعيات)
                        فهم ما يقرأه

                    </p>
                    <p>
                        القراءة بصوت عالٍ لتعزز دقة القراءة، والسرعة، والتعبير (الطلاقة)
                        بناء المفردات من الكلمات المعترف بها والمفهومة
                        إن كان الأمر متاحًا، يمكن أن تكون جلسات التدريس مع أخصائي القراءة مفيدة للعديد من الأطفال المصابين بعسر القراءة. إذا كان طفلك يعاني من حالة شديدة من عجز القراءة، فقد تكون هناك حاجة إلى تكرار الدروس أكثر، وقد يكون التقدم أبطأ.


                    </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="tab-8">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>بعض لأسئلة التالية التي يتم تطبيقها بالبرمجة
                        </h3>
                    <p class="fst-italic">متى لاحظت أول مرة طفلك يعاني مشاكل في القراءة؟ هل أشار مدرس انتباهك لهذا الأمر؟  </p>
                    <p> كيف هو أداء طفلك على المستوى الأكاديمي في الفصل الدراسي؟</p>
                    <p>كيف هو أداء طفلك على المستوى الأكاديمي في الفصل الدراسي؟</p>
                    <p> متى بدأ طفلك بالكلام أول مرة؟</p>
                    <p>هل جربت خوض أي إجراءات تدخلية لتحسين القراءة؟ إذا كان الأمر كذلك، فأي منهم؟</p>
                    <p>هل لاحظت أي مشكلات سلوكية أو صعوبات اجتماعية شككت في ارتباطها بمشكلة طفلك في القراءة؟</p>
                    <p>هل يعانى طفلك أي مشاكل في الرؤية؟</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
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
