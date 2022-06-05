

@extends('welcome')
@section('style')
<style>

</style>
@stop
@section('content')
    <!-- Contact Start -->
    <div class="container-fluid bg-light overflow-hidden px-lg-0" >
        <div class="container contact px-lg-0">

                <div class="col-lg-6 contact-text  wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <form
                         style="
                                width:92%;
                                align-content: center !important;
                                border-radius: 11px !important;
                                margin-right: 40px !important;
                                align-content: baseline !important;">
                            <div class="row g-3 d-flex flex-row">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="parentname" placeholder="Your Name">
                                        <label for="parentname">{{'أسم ولي الامر'}}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="childname" placeholder="Your Email">
                                        <label for="childname">{{'أسم الطفل'}}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="name"  id='chiledage' placeholder="حتي عمر سنتين">
                                        <label for="chiledage">{{' العمر'}}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="address" placeholder="Your Email">
                                        <label for="address">{{' العنوان'}}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="phone" placeholder="Your Email">
                                        <label for="phone">{{' الرقم'}}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">{{' البريد الالكتروني'}}</label>
                                    </div>
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

                                <div class="col-12">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">{{('حفظ')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                    </div>
                </div>
        </div>
    </div>

    <!-- Contact End -->

    @push('script')

    @endpush
@endsection
