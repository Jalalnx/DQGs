<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Diseas;
use App\Models\Question;

class QuestionController extends Controller
{
    //
    public function index()
    {
        return view ('admin.pages.Question');
    }

    public function store(Request $request)
    {
    //    dd($request);

      $Diseas =  Question::create($request->only( 'Question','diseas_id'));
     return back()->with('success', 'تم اضافة البيانات الجديده بنجاح');

    }


    public function fecthdata(Request $request)
    {


    if ($request->ajax()) {
        $data = Question::with('Diseas')->latest()->get();

        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $html = '<div class = "d-flex  justify-center " > ';
                $html .= '<form method="POST" action="'.route('admin.Question.movetoTrash',[$row->id]).'">
                '. csrf_field() .'
                '. method_field('DELETE') .'
                <div class="form-group">

                <button type="submit" class="btn btn-danger delete-Question" >
                <i class="fa-regular fa-trash-can"></i>
                    </button>

                </div>
                </form>
                </div>
                '
                ;
                return $html;
            })->editColumn('diseas_id', function( $row) {

                // $Diseas =Diseas::find($row->diseas_id);
                $html ='<div class="badge badge-warning justify-center text-center" style="">'.$row->Diseas->name.'</div>';

              return $html;
            })->rawColumns(['action','diseas_id'])
            ->make(true);
          }

       }


public function destroy( $id)
{

    $trash = Question::find($id);
    $trash->delete();
    \Cache::flush();
    return redirect()->route('admin.admin.Question')->with('success','تم مسح بيانات ');
}
}
