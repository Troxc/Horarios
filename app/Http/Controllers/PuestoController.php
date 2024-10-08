<?php

namespace App\Http\Controllers;

use App\Models\Puesto;
use Illuminate\Http\Request;

class PuestoController extends Controller
{
    public $puestos;
    function __construct()
    {
        $this->puestos = Puesto::paginate(5);
    }

    public function index()
    {
       // $puestos = DB::table('puestos')->get();
       
        return view("puestos/index", ['puestos'=> $this->puestos]);
    }

    public function create()
    {
        //otra forma
        //$puestos = Puesto::get();
        return view('puestos/create', ['puestos'=> $this->puestos]);
    }

    public function store(Request $request)
    {
        
        Puesto::create($request->all());
        
        return redirect()->route("puestos.index");
    }

    public function show(Puesto $puesto)
    {
        return view('puestos/show', ['puestos'=> $this->puestos, "puesto"=>$puesto]);
    }

    public function edit(Puesto $puesto)
    {
        return view('puestos/edit', ['puestos'=> $this->puestos, "puesto"=>$puesto]);
    }

    public function update(Request $request, Puesto $puesto)
    {
        $puesto->update($request->all());
        return redirect()->route("puestos.index");
    }

    public function destroy(Puesto $puesto)
    {
        $puesto->delete();
        return redirect()->route("puestos.index");
    }
}
