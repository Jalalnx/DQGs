@extends('welcome')
@section('content')

<section id="hero" class="d-flex align-items-center">
    <div class="container" style=" text-align: right;">
      <h1>مرحبا بك  </h1>
      <h2>تسجيل حساب دخول </h2>

    </div>
  </section>

  <!-- ======= Appointment Section ======= -->
  <section id="appointment" class="appointment section-bg" style=" margin-bottom: 200px; ">
    <div class="container">

      <form method="POST" action="{{route('attemptLogin')}}" class="php-email-form" >
        @csrf
        <div class="row  justify-content-center">

          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input style=" text-align: right;" type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="البريد الاكتروني"  required autocomplete="email" autofocus data-rule="email" data-msg="أدخل بريد صالح">
            <div class="validate"></div>
            @error('email')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>
        <div class="row  justify-content-center">
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input style=" text-align: right;" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="كلمة السر" required autocomplete="current-password">
            <div class="validate"></div>

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
          </div>
        </div>

        <div class="row justify-content-center " >
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary" >
                    {{ __('تسجيل دخول') }}
                </button>
            </div>
        </div>

        </div>

      </form>

    </div>
  </section>

@endsection
