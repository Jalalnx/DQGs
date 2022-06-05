@extends('welcome')
@section('content')

 <div class="container card shadow align-items-center " style=" text-align: right;width:80%;">
          @livewire(App\Http\Livewire\Diagnosiswizard::class)
    </div>

@endsection
