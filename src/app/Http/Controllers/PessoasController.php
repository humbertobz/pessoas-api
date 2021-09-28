<?php

namespace App\Http\Controllers;

use App\Models\Pessoas;
use Illuminate\Http\Request;

class PessoasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        return response()->json(Pessoas::all());
    }

    public function show($id)
    {
        return response()->json(Pessoas::find($id));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required|unique:pessoas',
            'sexo' => 'required',
            'peso' => 'required',
            'altura' => 'required',
            'imc' => 'required'
        ]);

        $pessoa = Pessoas::create($request->all());

        return response()->json($pessoa, 201);
    }

    public function update($id, Request $request)
    {
        $pessoa = Pessoas::findOrFail($id);
        $pessoa->update($request->all());

        return response()->json($pessoa, 200);
    }

    public function delete($id)
    {
        Pessoas::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
