<?php

namespace App\Http\Controllers;

use App\Variante;
use Illuminate\Http\Request;


class VariantesCovidController extends Controller
{
    public function index() {
        $variantes = Variante::all();
        $argumentos = array();
        $argumentos ['variantes'] = $variantes;

        return view('variantes.index', $argumentos);
    }

    public function create() {
        return view('variantes.create');
    }

    public function store(Request $request) {
        $nuevavarienate = new Variante();
        $nuevavarienate->lineage = $request->input('lineage');
        $nuevavarienate->common_countries = $request->input('common_countries');
        $nuevavarienate->earliest_date = $request->input('earliest_date');
        $nuevavarienate->designated_number = $request->input('designated_number');
        $nuevavarienate->assigned_number = $request->input('assigned_number');
        $nuevavarienate->description = $request->input('description');
        $nuevavarienate->who_name = $request->input('who_name');

        $nuevavarienate->save();

//despues de guardar que me mande a la lista de variantes
        return redirect()->route('variantes.index');

    }
}
