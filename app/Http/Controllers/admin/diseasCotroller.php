<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Diseas;
use App\Models\Question;


class diseasCotroller extends Controller
{
    //

    public function index()
    {
        return view ('admin.pages.diseas');
    }
    public function fecthdata(Request $request)
    {

    if ($request->ajax()) {
        $data = Diseas::latest()->get();

        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $html = '<div class = "d-flex  justify-center " > ';
                $html .= '<form method="POST" action="'.route('admin.diseas.movetoTrash',[$row->id]).'">
                '. csrf_field() .'
                '. method_field('DELETE') .'
                <div class="form-group">

                <button type="submit" class="btn btn-danger delete-diseas" >
                <i class="fa-regular fa-trash-can"></i>
                    </button>

                </div>
                </form>
                </div>
                '
                ;
                return $html;
            })
            ->editColumn('Question', function( $row) {

                $data = Question::where('diseas_id',$row->id)->latest()->count();

              if($data)
                  $html ='<div class="badge badge-success justify-center text-center">'.$data.'</div>';
                else
                $html ='<div class="badge badge-warning justify-center text-center" style="">'.$data.'</div>';

              return $html;
            })
            ->editColumn('description', function( $row) {


              $html='
               <tr>
              <td class="longTextCss"><abbr title="'.$row->description.'">'.$row->description.'</abbr></td>
              </tr> ';
                // $html =  '<abbr title="'.$row->description.'">'.$row->description.'</abbr>';

              return $html;
            })
            ->editColumn('Diagnosis', function( $row) {

                $html =  '<td class="longTextCss"><abbr title="'.$row->Diagnosis.'">'.$row->Diagnosis.'</abbr></td>';
              return $html;
            })
            ->rawColumns(['action','Question','description','Diagnosis'])
            ->make(true);
    }



}


public function destroy( $id)
{

    $trash = Diseas::find($id);
    $Question = Question::where('diseas_id',$id)->get();

    if ($Question != null) {

        foreach ($Question as $Que => $we) {
            $we->delete();
        }

    }
    $trash->delete();
    \Cache::flush();
    return redirect()->route('admin.admin.diseas')->with('success','تم مسح بيانات ');
}


public function store(Request $request)
    {
    //    dd($request);

      $Diseas =  Diseas::create($request->only( 'name','description','Diagnosis'));
     return back()->with('success', 'تم اضافة البيانات الجديده بنجاح');

    }
}
