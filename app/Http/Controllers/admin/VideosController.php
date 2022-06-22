<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\videos;
use DataTables;
class VideosController extends Controller
{
    public function index() {
        return view ( 'admin.pages.videos' );
    }

    public function store( Request $request ) {

        //  dd( $request );

        //uplode imge
        if ( $request->file( 'image_url' ) ) {
            $file = $request->file( 'image_url' );
            $filename = date( 'YmdHi' ).$file->getClientOriginalName();
            $file-> move( public_path( 'public/Image' ), $filename );
            $filepath = 'public/Image/'.$filename;
        //   dd($filepath);
            $videos =  videos::create($request->only( 'videos_url' )+["image_url" => $filepath]  );
                //  unserialize($record->field_name);
            if($videos)
            toastr()->success('تم حفظ البيانتا بنجاح ');
            return back();;


        }

        toastr()->error('حطاء في البيانات المرفقه ');
        return back();;

    }

    public function getvideos(Request $request) {

        $data = videos::all();

        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $html = '<div class = "d-flex  justify-center " > ';
                $html .= '<form method="POST" action="'.route('admin.videos.destroy',[$row->id]).'">
                '. csrf_field() .'
                '. method_field('DELETE') .'
                <div class="form-group">

                <button type="submit" class="btn btn-danger delete-videos" >
                <i class="fa-regular fa-trash-can"></i>
                    </button>

                </div>
                </form>
                </div>
                '
                ;
                return $html;
            })->rawColumns(['action'])
            ->make(true);
          }




        public function destroy( $id)
        {

            $trash = videos::find($id);
            $trash->delete();
            \Cache::flush();
            return redirect()->route('admin.admin.videos')->with('success','تم مسح بيانات ');
        }
}
