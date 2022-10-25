<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Result;
use DataTables;

class ResultController extends Controller
{
    //
    public function index()
    {
        return view ('admin.pages.Result');
    }


    public function Result_Ftech(Request $request)
    {

    if ($request->ajax()) {
        $data = Result::with('user','Diseas')->latest()->get();

        return Datatables::of($data)
            ->addIndexColumn()
            ->editColumn('name', function( $row) {


                $html ='<div class=" justify-center text-center" style="">'.$row->Diseas->name.'</div>';

              return $html;
            })
            ->editColumn('child_name', function( $row) {

                $html =  '<td class="longTextCss"><abbr title="'.$row->user->child_name.'">'.$row->user->child_name.'</abbr></td>';
              return $html;
            })
            ->editColumn('age', function( $row) {

                $html =  '<td class="longTextCss"><abbr title="'.$row->user->age.'">'.$row->user->age.'</abbr></td>';
              return $html;
            })

            ->editColumn('parent_name', function( $row) {

                $html =  '<td class="longTextCss"><abbr title="'.$row->user->parent_name.'">'.$row->user->parent_names.'</abbr></td>';
              return $html;
            })
            ->editColumn('email', function( $row) {

                $html =  '<td class="longTextCss"><abbr title="'.$row->user->email.'">'.$row->user->email.'</abbr></td>';
              return $html;
            })
            ->editColumn('possibilityOfInjury', function( $row) {

              switch($row->possibilityOfInjury){
                case 1:
                $html ='<div class="badge badge-success justify-center text-center">غير مصاب</div>';
                break;
                case 0:
                $html ='<div class="badge badge-warning justify-center text-center" style="">مصاب</div>';
                 break;

              }

              return $html;
            })
            ->rawColumns(['action','name','child_name','age','parent_name','email','possibilityOfInjury'])
            ->make(true);
    }



}


}
