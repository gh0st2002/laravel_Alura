<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Facade\Ignition\QueryRecorder\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function series()
    {
        $serie = Serie::query()->orderBy('created_at')->get();
        
        return view('series.series')->with('series', $serie);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nomeSerie = $request->input('nome');
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();

        

        return redirect('/series');
    }

    public function destroy($id) {
        Serie::find($id)->delete();
        return redirect()->back();
    }

    public function destroyAll($id) {
        Serie::find($id)->delete();
        
        
    }
}
