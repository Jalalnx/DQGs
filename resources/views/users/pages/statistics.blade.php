@extends('welcome')
@section('style')
<style>
    .container-xxl {
        text-align: right;
    }
    .card{
            border-radius: 20px !important;

    }

    </style>
@endsection
@section('content')

<!-- Feature Start -->
    <div class="container-xxl  shadow card mt-5  " style="text-align: right;width:90%;">
        <div class="container " style=" text-align: right;width:90%;">
            <div class="row  justify-content-between" style="text-align: right;width:90%;">
                <div class="col-md-6  shadow card col-lg-3 wow fadeIn align-items-center  pt-2 pb-2" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-users text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">@php echo App\Models\User::all()->count();@endphp</h1>
                    </div>
                    <h5 class="mb-3">  أولياء الامور</h5>
                    <span>مجموعة اولياء الامور واطفال الذين خضعو لتشخيص الامراض</span>
                </div>
                <div class="col-md-6  shadow card col-lg-3 wow fadeIn align-items-center pt-2 pb-2" data-wow-delay="0.3s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">@php echo App\Models\Diseas::all()->count();@endphp</h1>
                    </div>
                    <h5 class="mb-3"> الامراض </h5>
                    <span>الامراض المتاحه </span>
                </div>
                <div class="col-md-6 col-lg-3  shadow card jusify-content-center wow fadeIn align-items-center pt-2 pb-2" data-wow-delay="0.5s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">@php echo App\Models\Question::all()->count();@endphp</h1>
                    </div>
                    <h5 class="mb-3"> الاسئله</h5>
                    <span>مجموعه الاسئله المتوفره ويمكن الخضوع لها حسب المرض وعمل تشخيص علي اساسها</span>
                </div>

        </div>
    </div>
    <!-- Feature Start -->
    @endsection
