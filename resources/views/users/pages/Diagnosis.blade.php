@extends('welcome')
@section('content')

{{-- @livewire(App\Http\Livewire\Diagnosiswizard::class) --}}
<section id="hero" class="d-flex align-items-center">
    <div class="container" style=" text-align: right;">
      <h1>  الاسئله وتحاليل </h1>


    </div>
  </section>

  <?php
    $Diseas =App\Models\Diseas::all();
        foreach ($Diseas as $key =>$value){?>
 <div class="container card shadow p-5  " style=" text-align: right; ;width:90%; margin-top:50px !important; border-radius:20px;">


            <div class="icon-box">
                <h4 class="title"><a href=""> مرض {{$value->name}} </a></h4>
                <p class="description"> {{$value->description}}</p>

                @if (session($value->name))
                <div class="alert alert-success" role="alert">
                    {{ session($value->name) }}
                </div>
               @endif

                <form method="post" enctype="multipart/form-data" action="{{route('DiagnosisCal')}}" >
                    @csrf
                    <input class="d-none" type="text" name="name" value="{{$value->name}}" editable="false">
                    <input class="d-none" type="text" name="diseas_id" value="{{$value->id}}" >
                    <input class="d-none" type="text" name="Diagnosis" value="{{$value->Diagnosis}}" >
                <?php
                $data = App\Models\Question::where('diseas_id',$value->id)->get();
                foreach ($data as $key =>$value)
                echo '
                <div class="d-flex flex-column">

                    <div class="border-bottom mt-1 p-2 mb-2 "><h4 class="m-0  ">'.$value->Question.'</h4>
                    <div class="l form-check form-check-inline ">

                    <input class="form-check-input" type="radio" name="SelectedAnswers['.$key.']" value="0.5" >
                    <label class="form-check-label" for="SelectedAnswers['.$key.']">ربما</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="SelectedAnswers['.$key.']" value="0" >
                    <label class="form-check-label" for="electedAnswers['.$key.']">لا</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="SelectedAnswers['.$key.']"value="1" >
                    <label class="form-check-label" for="electedAnswers['.$key.']">نعم</label>
                    </div>
                    </div>
                    </div>
                ';
                ?>

                <div class="d-flex justify-content-between pb-2 align-items-right" >
                    <button class="btn btn-primary nextBtn btn-lg send mr-5 pull-right" id="stop" type="submit" >{{('النتيجه')}}</button>
                    </div>
                </form>
                </div>
            </div>


    </div>

    <?php }?>
@endsection

