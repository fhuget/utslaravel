<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\GigguideExport;
use Maatwebsite\Excel\Facades\Excel;

class GigguideController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_gigguide = \App\Gigguide::where('gig_artis','LIKE','%'.$request->cari.'%')->get();
        }else{
        	$data_gigguide = \App\Gigguide::paginate(5);
        }
        return view('gigguide.index',['data_gigguide' => $data_gigguide]);
    }

    public function export_excel()
    {
        return Excel::download(new GigguideExport, 'gigguide.xlsx');
    }

    public function create(Request $request)
    {
        \App\Gigguide::create($request->all());
        return redirect('\gigguide');
    }

    public function edit($id)
    {
        $gigguide = \App\Gigguide::find($id);
        return view('gigguide/edit',['gigguide' => $gigguide]);
    }

    public function update(Request $request,$id)
    {
        $gigguide = \App\Gigguide::find($id);
        $gigguide->update($request->all());
        return redirect('/gigguide');
    }

    public function delete($id)
    {
        $gigguide = \App\Gigguide::find($id);
        $gigguide->delete($gigguide);
        return redirect('/gigguide');
    }
}
