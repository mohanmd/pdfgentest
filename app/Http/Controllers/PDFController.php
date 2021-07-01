<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use PDF;
use DB;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function exportPdf($id)
    {
        $data = DB::table('reports')->where('id',$id)->first(); 
        $pdf = PDF::loadView('user.pdf', ['$data'=>$data]);
        return $pdf->stream('userpdf.pdf');
        // return $pdf->download('userpdf.pdf');
    }
}