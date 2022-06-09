<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Question;
use App\Models\Result;

class DiagnosisController extends Controller
{
    //

    public $resulte,$temp, $SelectedAnswers;



    public function index(){
        return view('users.pages.Diagnosis');
    }


    public function DiagnosisCal(Request $request){

       $this->resulte = $this->calcate($request->SelectedAnswers,$request->diseas_id);



     if($this->resulte > $request->Diagnosis)
     {

       toastr()->error('طفلك مصاب  ');
     $Result =  Result::create(
       ["user_id" => \Auth::user()->id]+
         $request->only("diseas_id")+[
        "percentage" =>$this->resulte,
        "possibilityOfInjury" =>0
         ]);
     return back()->with($request->name, '   % مصاب    '.$this->resulte);
     }else{
        toastr()->info(' طفلك غير مصاب ');

        $Result =  Result::create(
            ["user_id" => \Auth::user()->id]+
            $request->only("diseas_id")+[
            "percentage" =>$this->resulte,
            'possibilityOfInjury' =>1
            ]);
     return back()->with($request->name, '    %  غير مصاب   '.$this->resulte);
     }


    }

    public function calcate($dataset ,$id){
        //   dd($dataset);
        // dd($id);
        foreach($dataset as $key =>$Value)
        $this->temp +=$Value;

        $meta_data = Question::where('diseas_id',$id)->count();
      return  $this->resulte =(($this->temp/ $meta_data) * 100);


    }

}
