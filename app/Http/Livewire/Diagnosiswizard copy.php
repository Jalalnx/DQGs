<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Diseas;

class Diagnosiswizard extends Component
{

    public $SelectedAnswers;
    public $result ;
    public $currentStep =1;
    public  $Diseas;

    public $question,$Diseas_id;
    public $successMsg = '';
    public $data  ;

    public $yes =1.0 ,$no = 0.0,$maybe=0.5;


    public function render()
    {
    //    $Diseas= Diseas::all();

       return view('livewire.diagnosiswizard');
    //    return view('livewire.diagnosiswizard')->with('Diseas', $Diseas);
    }

      public function mount()
        {
            $this->Diseas = Diseas::all();
            $this->SelectedAnswers=[];
        }
    public function add($value)
    {
        $this->SelectedAnswers += $value;
    //   if(!$this->user) $this->user = User::findOrFail($this->user_id);
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

        print_r($this->SelectedAnswers);

        $this->currentStep = 3;
    }

    /**
     *   Get the Answer save it in array 
     * then save the array as $answer 
     * To Get the result of Diagnoise
     * 
     * */ 
    public function UpdatedSelectedAnswers($keys)
    {   
        $result  = $this->SelectedAnswers= $keys;

        dd($result );
    }

    /**
     * Write code on Method
     */
    public function submitForm()
    {
        // dd(1);

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
}
