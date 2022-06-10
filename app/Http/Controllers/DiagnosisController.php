<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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

        $emailcontent = array (
            'subject' => 'الدعم الفني',
            'emailmessage' => 'شكرا لك لتجربة خدمات الموقع وتجربة الاسئله والجلوس الاختبارات سوف نعمل علي تحسين الموقع'
            );
            Mail::send('email.email_template', $emailcontent, function($message)
            {
                // \Auth::user()->email
            $message->to("moogdaroat99@gmail.com",'Daroat From DQGs')
            ->subject('Thanks for Give me a try');
            });

            if (Mail::failures()) {

                toastr()->info(' مشكلة في ارسل الايميل ');

           }else{
                toastr()->info('Successfully send in your mail');
              }

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
