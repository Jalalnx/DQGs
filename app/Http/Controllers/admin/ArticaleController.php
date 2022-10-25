<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\articale;
use DataTables;

class ArticaleController extends Controller
{

    public function index() {
        return view ( 'admin.pages.articales' );
    }

    public function store( Request $request ) {

            $articale =  articale::create(
                 $request->only( 'title','content'));
                //  unserialize($record->field_name);
            if($articale)
            return redirect()->route('admin.admin.articales')->with('success','تم حفظ البيانتا بنجاح ');


    }

    public function articale(Request $request) {

        $data = articale::all();

        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                // <button type="submit" class="btn  data-mdb-whatever="'.[$row->content].'" btn-success delete-articale"  data-toggle="modal" data-target=".bd-example-modal-lg">
                // <i class="fa-solid fa-eye"></i>
                $html = '<div class = "d-flex  justify-content-center " >
                <div class = "form-group">

                    </button>
                    </div>
                ';
                $html .= '<form method="POST" action="'.route('admin.articales.destroy',[$row->id]).'">
                '. csrf_field() .'
                '. method_field('DELETE') .'
                <div class="form-group ">

                <button type="submit" class="btn btn-danger delete-articale" >
                <i class="fa-regular fa-trash-can"></i>
                    </button>

                </div>
                </form>


                </div>
                '
                ;
                return $html;
            })
            ->addColumn('content', function($row){

               $arr= explode(" ",$row->content,100);
            //    dd($arr);

                 $html ='<div class="badge badge-success justify-center text-center" style="">'.$arr[0].'

                 </div> ';


              return $html;
            })->rawColumns(['action','content'])
            ->make(true);

          }




        public function destroy( $id)
        {

            // dd($id);
            $trash = articale::find($id);
            $trash->delete();
            \Cache::flush();
            return redirect()->route('admin.admin.articales')->with('success','تم مسح بيانات ');
        }
    //
}
