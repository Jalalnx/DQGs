@extends('welcome')
@section('content')

<section id="hero" class="d-flex align-items-center">
    <div class="container" style=" text-align: right;">
      <h1>مرحبا بك  </h1>
      <h2>تسجيل حساب جديد </h2>

    </div>
  </section>
  <!-- ======= Appointment Section ======= -->
  <section id="why-us" class="appointment section-bg" style=" margin-bottom: 200px; ">
    <div class="container">

      <form action="{{route('NewAcount')}}" method="POST" >
        @csrf

        <div class="row  justify-content-center">

            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input style=" text-align: right;" type="text" class="form-control @error('parent_name') is-invalid @enderror" name="parent_name" id="parent_name" placeholder="ولي الامر" >
              <div class="validate"></div>
              @error('parent_name')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="col-md-4 form-group mt-3 mt-md-0">
                <input style=" text-align: right;" type="text" class="form-control @error('child_name') is-invalid @enderror" name="child_name" id="child_name" placeholder=" أسم الطفل" >
                <div class="validate"></div>
                @error('child_name')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
                <input style=" text-align: right;" type="number" class="form-control @error('age') is-invalid @enderror" name="age" id="age" placeholder=" عمر الطفل" >
                <div class="validate"></div>
                @error('age')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>



        </div>


          <div class="row  justify-content-center">
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input style=" text-align: right;" type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address" placeholder=" عنوان السكن" >
              <div class="validate"></div>
              @error('address')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="col-md-4 form-group mt-3 mt-md-0">
                <input style=" text-align: right;" type="text" class="form-control @error('address') is-invalid @enderror" name="phone_number" id="phone_number" placeholder="  رقم الهاتف" >
                <div class="validate"></div>
                @error('phone_number')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">
                <input style=" text-align: right;" type="email" class="form-control " name="email" id="email" placeholder="  البريد الالكتروني " >
                <div class="validate"></div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="col-md-4 form-group mt-3 mt-md-0">

                    <input type="password" class="form-control" name="password" id="password" placeholder=" كلمة السر">
                    <label for="password">{{' كلمة السر'}}</label>
                
            </div>



            <div class="row mb-3 mt-3">

        <div class="col-md-6 offset-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('هل يتبع الي اي منظمه ؟') }}
                </label>
            </div>
        </div>
          </div>

          <div class="row mt-5"  style=" text-align: right;">

            <div class="">
                <button type="submit" class="btn btn-primary" >
                    {{ __('تسجيل حساب') }}
                </button>
            </div>
        </div>

    </form>


    </div>
</section>

@endsection
