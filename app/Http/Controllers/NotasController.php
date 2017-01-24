<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nota;
use Illuminate\Support\Facades\Redirect;

class NotasController extends Controller
{
    public function index()
    {
        $notas = Nota::paginate();

        return view('notas/lista',compact('notas'));
    }

    public function crear()
    {
        return view('notas/crear');
    }

    public function ver($id)
    {
        $nota = Nota::find($id);

        return view('notas/ver',compact('nota'));
    }

    public function guardar(Request $request)
    {
        $this->validate($request,[
            'nota' => ['required','max:200']
        ]);

        $data = $request->all();

        Nota::create($data);

        return Redirect::to('notas');
    }
}
