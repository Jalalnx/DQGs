@extends('admin.layouts.app')

@section('styles')
<style>
.card{
    border-radius: 20px !important;
}

.container{
    text-align: justify !important;
}
</style>
@stop

@section('content')
<div class="container align-items-justify mb-auto" tyle="width:80%;">


    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('الاحصائيات ') }}</div>

                <div class="card-body  d-flex justify-content-between align-items-center py-3 my-4 ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card  shadow border-bottom" style="width: 26%;">

                    <div class="card-body">
                        <h5 class="card-title">{{('الامراض')}}</h5>
                        <p class="card-text badge badge-success justify-center ">@php echo App\Models\Diseas::get()->count(); @endphp</p>
                    </div>
                    </div>


                    <div class="card shadow  mb-3" style="width: 26%;">

                    <div class="card-body">
                        <h5 class="card-title">{{('الاسئله')}}</h5>
                        <p class="card-text badge badge-success justify-center ">@php echo App\Models\Question::get()->count(); @endphp</p>
                    </div>
                    </div>

                    <div class="card   shadow mb-3" style="width: 26%;">
                    <div class="card-body">
                        <h5 class="card-title">{{('مجموع الاختبارات')}}</h5>
                        <p class="card-text badge badge-success justify-center ">@php echo App\Models\Result::get()->count(); @endphp</p>
                    </div>
                    </div>





                </div>
            </div>



        </div>
    </div>



@endsection
