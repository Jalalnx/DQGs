<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Games;
use DataTables;

class gamesController extends Controller {

    public function index() {
        return view ( 'admin.pages.games' );
    }

    public function store( Request $request ) {

        //  dd( $request );

        //uplode imge
        if ( $request->file( 'image' ) ) {
            $file = $request->file( 'image' );
            $filename = date( 'YmdHi' ).$file->getClientOriginalName();
            $file-> move( public_path( 'public/Image' ), $filename );
            $filepath = 'public/Image/'.$filename;
        //   dd($filepath);
            $Games =  Games::create(
                 $request->only( 'question' )+["admin_id" => \Auth::user()->id,"image" => $filepath,"data" =>($request->only( 'data' ))]  );
                //  unserialize($record->field_name);
            if($Games)
            toastr()->success('تم حفظ البيانتا بنجاح ');
            return back();;


        }

        toastr()->error('حطاء في البيانات المرفقه ');
        return back();;

    }

    public function getGames(Request $request) {

        $data = Games::all();

        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $html = '<div class = "d-flex  justify-center " > ';
                $html .= '<form method="POST" action="'.route('admin.games.destroy',[$row->id]).'">
                '. csrf_field() .'
                '. method_field('DELETE') .'
                <div class="form-group">

                <button type="submit" class="btn btn-danger delete-games" >
                <i class="fa-regular fa-trash-can"></i>
                    </button>

                </div>
                </form>
                </div>
                '
                ;
                return $html;
            })->rawColumns(['data'])
            ->addColumn('data', function($row){

               $arr= $row->data;
               $arr = json_decode(json_encode($arr),true);
            //    dd($arr);

                 $html ='<div class="badge badge-warning justify-center text-center" style="">'.sizeof($arr['data']).'</div>';

              return $html;
            })->rawColumns(['action','data'])
            ->make(true);
          }




        public function destroy( $id)
        {

            $trash = Games::find($id);
            $trash->delete();
            \Cache::flush();
            return redirect()->route('admin.admin.games')->with('success','تم مسح بيانات ');
        }
}
