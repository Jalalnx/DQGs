<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Diseas;
use App\Models\Question;

class Diagnosiswizard extends Component
{

    public $SelectedAnswers=[];
    public $currentStep =1;
    public  $Diseas;

    public $question,$Diseas_id;
    public $successMsg = '';
    public $data  ;

    public $resulte,$temp, $yes =1.0 ,$no = 0.0,$maybe=0.5;


    public function render()
    {
    //    $Diseas= Diseas::all();

       return view('livewire.diagnosiswizard');
    //    return view('livewire.diagnosiswizard')->with('Diseas', $Diseas);
    }

      public function mount()
        {
            $this->Diseas = Diseas::all();
        }

        public function add($i)
        {
            array_push($this->SelectedAnswers ,$i);
        }


    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'Diseas_id' => 'required|numeric',
        ]);

        // dd($this->Diseas_id);
        $this->currentStep = 2;
    }

    /**
     * Write code on Method
     */
    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'SelectedAnswers' => 'required',
        ]);

        // dd($this->SelectedAnswers);

        $this->calcate($this->SelectedAnswers);

        $this->currentStep = 3;
    }

    /**
     * Write code on Method
     */
    public function submitForm()
    {
        // Team::create([
        //     'name' => $this->name,
        //     'price' => $this->price,
        //     'detail' => $this->detail,
        //     'status' => $this->status,
        // ]);

        // $this->successMsg = 'Team successfully created.';

        // $this->clearForm();

        // $this->currentStep = 1;
    }

    /**
     * Write code on Method
     */
    public function back($step)
    {
        $this->currentStep = $step;
    }

    /**
     * Write code on Method
     */
    public function clearForm()
    {
    //     $this->name = '';
    //     $this->price = '';
    //     $this->detail = '';
    //     $this->status = 1;
    }

    public function calcate($dataset){
        foreach($dataset as $key =>$Value)
        $this->temp +=$Value;

        $meta_data = Question::where('diseas_id',$this->Diseas_id)->count();
       $this->resulte = ($this->temp/ $meta_data) * 100;


    }
}
