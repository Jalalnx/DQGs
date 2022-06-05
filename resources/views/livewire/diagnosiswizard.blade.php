@section('style')
<style>
    .display-none {
        display: none;
    }
    .multi-wizard-step p {
        margin-top: 12px;
    }
    .stepwizard-row {
        display: table-row;
    }
    .stepwizard {
        display: table;
        position: relative;
        width: 100%;
    }
    .multi-wizard-step button[disabled] {
        filter: alpha(opacity=100) !important;
        opacity: 1 !important;
    }
    .stepwizard-row:before {
        top: 14px;
        bottom: 0;
        content: " ";
        width: 100%;
        height: 1px;
        z-order: 0;
        position: absolute;
        background-color: #fefefe;
    }
    .multi-wizard-step {

    }
    .card{
            border-radius: 20px !important;

    }

    </style>
@endsection
<div>
        <div class="container ">

            <div class="step step4 multi-wizard-step" >
                <div class="text">النتيجه</div>
                <div class="circ ">
                <div class="half"></div>
                <div class="inner    {{ $currentStep !=3? 'btn-default' : 'selected shadow' }}"></div>
                </div>
            </div>
            <div class="step step2  multi-wizard-step">
                <div class="text">الاسئله</div>
                <div class="circ">
                <div class="half"></div>
                <div class="inner {{ $currentStep != 2? 'btn-default' : 'selected shadow' }}">
                </div>
                </div>
            </div>
            <div class="step multi-wizard-step">
                <div class="text">المرض</div>
                <div class="circ">
                <div class="half"></div>
                <div class="inner {{ $currentStep != 1? 'btn-default' : 'selected shadow' }}"></div>
                </div>
            </div>

        </div>
<div class="container">

    @error('Diseas_id') <span class="error">{{ $message }}</span> @enderror
</div>


    <div class="row setup-content  {{ $currentStep != 1 ? 'display-none' : ' ' }}" id="step-1">
            <div class="col-md-12 mt-5">
            <select wire:model="Diseas_id" name="Diseas_id" class="form-select" aria-label="Default select example" id="Diseas_id"  required>
            <option selected>أختيار المرض</option>
            <?php
            $Diseas =App\Models\Diseas::all();
                foreach ($Diseas as $key =>$value)
                echo '<option  value="'.$value->id.'"> '.$value->name.' </option>';
            ?>
            </select>
                <button
                class="btn btn-primary mt-5 mb-5 nextBtn btn-lg pull-right"
                wire:click="firstStepSubmit"
                    type="button">
                    {{('التالي')}}</button>
            </div>
        </div>


            <div class="row setup-content {{ $currentStep != 2 ? 'display-none' : '' }}" id="step-2">

                <div class="col">
                <?php
                $data = App\Models\Question::where('diseas_id',$this->Diseas_id)->get();
                foreach ($data as $key =>$value)
                echo '
                <div class="  card  shadow  border-bottom mt-1 p-2 mb-5 "><h4 class="m-0  ">'.$value->Question.'</h4>
                <div class="d-flex  flex-row">
                    <div class="form-check form-check-inline ">
                    <input class="form-check-input" type="radio" name="SelectedAnswers.['.$value->id.']"
                    wire:click="add('.$this->maybe.')"  value="'.$this->maybe.'" >
                    <label class="form-check-label" for="SelectedAnswers['.$key.']">ربما</label>
                    </div>

                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="SelectedAnswers.['.$value->id.']"
                    wire:click="add('.$this->no.')"  value="'.$this->no.'" >
                    <label class="form-check-label" for="SelectedAnswers">لا</label>
                    </div>

                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="SelectedAnswers.['.$value->id.']"
                    wire:click="add('.$this->yes.')"   value="'.$this->yes.'" >
                    <label class="form-check-label" for="SelectedAnswers">نعم</label>
                    </div>

                    </div>
                    </div>
                ';
                ?>


                    <div class="d-flex justify-content-between pb-5" >

                    <button class="btn btn-primary <<<<<<< HEAD
=======

>>>>>>> 14d3868202644e5e0f200e950a9e8a5da5fb8015
nextBtn btn-lg mr-5 pull-right" type="button"
                        wire:click="secondStepSubmit">{{('التالي ')}}</button>
                    <button class="btn btn-danger  ml-5 nextBtn btn-lg pull-right" type="button" wire:click="back(1)" >{{('رجوع')}}</button>
                    </div>

            </div>
            </div>

        <div class="row setup-content {{ $currentStep != 3 ? 'display-none' : '' }}" id="step-3">
            <div class="col-md-12">
                <h3> Step 3</h3>
                <table class="table">
                    {{-- <tr>
                        <td>Team Name:</td>
                        <td><strong>{{$name}}</strong></td>
                    </tr>
                    <tr>
                        <td>Team Price:</td>
                        <td><strong>{{$price}}</strong></td>
                    </tr>
                    <tr>
                        <td>Team status:</td>
                        <td><strong>{{$status ? 'Active' : 'DeActive'}}</strong></td>
                    </tr>
                    <tr>
                        <td>Team Detail:</td>
                        <td><strong>{{$detail}}</strong></td>
                    </tr> --}}
                </table>
                <div class="d-flex flex-row  mt-5 align-items-between">
                <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Finish!</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>
                </div>
            </div>
        </div>

</div>

